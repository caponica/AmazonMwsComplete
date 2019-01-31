<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\FbaOutboundClient;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;
use CaponicaAmazonMwsComplete\Domain\Outbound\Address;
use CaponicaAmazonMwsComplete\Domain\Outbound\CreateFulfillmentOrderItem;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;

class FbaOutboundClientPack extends FbaOutboundClient implements ThrottleAwareClientPackInterface {
    use SignsRequestArray, ProvidesServiceUrlSuffix;

    const SERVICE_NAME = 'FulfillmentOutboundShipment';

    const PARAM_MARKETPLACE_ID                          = 'MarketplaceId';
    const PARAM_MERCHANT                                = 'SellerId';
    const PARAM_SELLER_ID                               = 'SellerId';   // Alias for PARAM_MERCHANT
    const PARAM_ITEMS                                   = 'Items';
    const PARAM_INCLUDE_COD_PREVIEW                     = 'IncludeCODFulfillmentPreview';
    const PARAM_INCLUDE_SCHEDULED_PREVIEW               = 'IncludeDeliveryWindows';
    const PARAM_DESTINATION_ADDRESS                     = 'DestinationAddress';
    const PARAM_DISPLAYABLE_ORDER_COMMENT               = 'DisplayableOrderComment';
    const PARAM_DISPLAYABLE_ORDER_DATETIME              = 'DisplayableOrderDateTime';
    const PARAM_DISPLAYABLE_ORDER_ID                    = 'DisplayableOrderId';
    const PARAM_MWS_AUTH_TOKEN                          = 'MWSAuthToken';
    const PARAM_NOTIFICATION_EMAIL_LIST                 = 'NotificationEmailList';
    const PARAM_SHIPPING_SPEED_CATEGORIES               = 'ShippingSpeedCategories';
    const PARAM_SHIPPING_SPEED_CATEGORY                 = 'ShippingSpeedCategory';
    const PARAM_SELLER_ORDER_ID                         = 'SellerFulfillmentOrderId';

    const SHIPPING_SPEED_STANDARD                       = 'Standard';
    const SHIPPING_SPEED_EXPEDITED                      = 'Expedited';
    const SHIPPING_SPEED_PRIORITY                       = 'Priority';
    const SHIPPING_SPEED_SCHEDULED                      = 'ScheduledDelivery';

    const METHOD_CREATE_ORDER               = 'createFulfillmentOrder';
    const METHOD_GET_FULFILLMENT_ORDER      = 'getFulfillmentOrder';
    const METHOD_GET_FULFILLMENT_PREVIEW    = 'getFulfillmentPreview';

    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;
    /** @var string $authToken          MWSAuthToken, only needed when working with (3rd party) client accounts which provide an Auth Token */
    protected $authToken = null;

    public function __construct(MwsClientPoolConfig $poolConfig) {
        $this->marketplaceId    = $poolConfig->getMarketplaceId();
        $this->sellerId         = $poolConfig->getSellerId();
        $this->authToken        = $poolConfig->getAuthToken();

        $this->initThrottleManager();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix()),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion()
        );
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callGetFulfillmentOrder($sellerFulfillmentOrderId) {
        $requestArray = [
            self::PARAM_SELLER_ORDER_ID     => $sellerFulfillmentOrderId,
        ];

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_FULFILLMENT_ORDER, $requestArray);
    }

    /**
     * @param string $sellerOrderId
     * @param string $displayableOrderId
     * @param \DateTime $displayableOrderDatetime
     * @param string $displayableOrderComment
     * @param string $shippingSpeed
     * @param Address $destinationAddress
     * @param CreateFulfillmentOrderItem[] $items
     * @param null $notificationEmails
     * @return mixed
     */
    public function callCreateFulfillmentOrder($sellerOrderId, $displayableOrderId
        , \DateTime $displayableOrderDatetime, $displayableOrderComment, $shippingSpeed
        , Address $destinationAddress, $items, $notificationEmails=null
    ) {
        $requestArray = [
            self::PARAM_MARKETPLACE_ID              => $this->marketplaceId,
            self::PARAM_SELLER_ORDER_ID             => $sellerOrderId,
            self::PARAM_DISPLAYABLE_ORDER_ID        => $displayableOrderId,
            self::PARAM_DISPLAYABLE_ORDER_DATETIME  => $displayableOrderDatetime->format('c'),
            self::PARAM_DISPLAYABLE_ORDER_COMMENT   => $displayableOrderComment,
            self::PARAM_SHIPPING_SPEED_CATEGORY     => $shippingSpeed,
            self::PARAM_DESTINATION_ADDRESS         => $destinationAddress->getArray(),
        ];

        $itemList = [];
        foreach ($items as $item) {
            $itemList[] = $item->getArray();
        }
        $itemListWithMemberKey = ['member'];
        $itemListWithMemberKey['member'] = $itemList;
        $requestArray[self::PARAM_ITEMS] = $itemListWithMemberKey;

        if (!empty($notificationEmails)) {
            $notificationEmailList = [];
            if (is_array($notificationEmails)) {
                foreach ($notificationEmails as $notificationEmail) {
                    $notificationEmailList[] = $notificationEmail;
                }
            } else {
                $notificationEmailList = explode(';',$notificationEmails);
            }
            $notificationEmailListWithMemberKey = ['member'];
            $notificationEmailListWithMemberKey['member'] = $notificationEmailList;
            $requestArray[self::PARAM_NOTIFICATION_EMAIL_LIST] = $notificationEmailListWithMemberKey;
        }

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_CREATE_ORDER, $requestArray);
    }

    /**
     * @param Address $destinationAddress
     * @param CreateFulfillmentOrderItem[] $items
     * @param string $shippingSpeeds
     * @param boolean $includeCOD
     * @param boolean $includeScheduledDelivery
     * @return mixed
     */
    public function callGetFulfillmentPreview(Address $destinationAddress, $items
        , $shippingSpeeds=null, $includeCOD=null, $includeScheduledDelivery=null
    ) {
        $requestArray = [
            self::PARAM_MARKETPLACE_ID              => $this->marketplaceId,
            self::PARAM_DESTINATION_ADDRESS         => $destinationAddress->getArray(),
        ];

        $itemList = [];
        foreach ($items as $item) {
            $itemList[] = $item->getArray();
        }
        $itemListWithMemberKey = ['member'];
        $itemListWithMemberKey['member'] = $itemList;
        $requestArray[self::PARAM_ITEMS] = $itemListWithMemberKey;

        if (!empty($shippingSpeeds)) {
            $requestArray[self::PARAM_SHIPPING_SPEED_CATEGORIES] = $shippingSpeeds;
        }
        if (isset($includeCOD)) {
            $requestArray[self::PARAM_INCLUDE_COD_PREVIEW] = $includeCOD;
        }
        if (isset($includeScheduledDelivery)) {
            $requestArray[self::PARAM_INCLUDE_SCHEDULED_PREVIEW] = $includeScheduledDelivery;
        }

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_FULFILLMENT_PREVIEW, $requestArray);
    }

    // ###################################################
    // # ThrottleAwareClientPackInterface implementation #
    // ###################################################
    private $throttleManager;

    public function initThrottleManager() {
        $this->throttleManager = new ThrottledRequestManager(
            [
                self::METHOD_CREATE_ORDER               => [30, 2],
                self::METHOD_GET_FULFILLMENT_ORDER      => [30, 2],
                self::METHOD_GET_FULFILLMENT_PREVIEW    => [30, 2],
            ]
        );
    }

    public function getThrottleManager() {
        return $this->throttleManager;
    }
}
