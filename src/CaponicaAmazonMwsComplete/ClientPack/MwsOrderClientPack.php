<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\AmazonClient\MwsOrderClient;
use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;

class MwsOrderClientPack extends MwsOrderClient implements ThrottleAwareClientPackInterface {
    use SignsRequestArray, ProvidesServiceUrlSuffix;

    const SERVICE_NAME = 'Orders';

    const PARAM_AMAZON_ORDER_IDS                = 'AmazonOrderId';
    const PARAM_CREATED_AFTER                   = 'CreatedAfter';
    const PARAM_CREATED_BEFORE                  = 'CreatedBefore';
    const PARAM_LAST_UPDATED_AFTER              = 'LastUpdatedAfter';
    const PARAM_LAST_UPDATED_BEFORE             = 'LastUpdatedBefore';
    const PARAM_MARKETPLACE_ID                  = 'MarketplaceId';
    const PARAM_MARKETPLACE_ID_LIST             = 'MarketplaceId.Id.1';
    const PARAM_MWS_AUTH_TOKEN                  = 'MWSAuthToken';
    const PARAM_MERCHANT                        = 'SellerId';
    const PARAM_SELLER_ID                       = 'SellerId';   // Alias for PARAM_MERCHANT
    const PARAM_NEXT_TOKEN                      = 'NextToken';
    const PARAM_ORDER_STATUS_LIST               = 'OrderStatus';

    const STATUS_PENDING_AVAILABILITY           = 'PendingAvailability';
    const STATUS_PENDING                        = 'Pending';
    const STATUS_UNSHIPPED                      = 'Unshipped';
    const STATUS_PARTIALLY_SHIPPED              = 'PartiallyShipped';
    const STATUS_SHIPPED                        = 'Shipped';
    const STATUS_INVOICE_UNCONFIRMED            = 'InvoiceUnconfirmed';
    const STATUS_CANCELED                       = 'Canceled';
    const STATUS_UNFULFILLABLE                  = 'Unfulfillable';

    const METHOD_GET_ORDER                      = 'getOrder';
    const METHOD_LIST_ORDERS                    = 'listOrders';
    const METHOD_LIST_ORDERS_BY_NEXT_TOKEN      = 'listOrdersByNextToken';
    const METHOD_LIST_ORDER_ITEMS               = 'listOrderItems';
    const METHOD_LIST_ORDER_ITEMS_BY_NEXT_TOKEN = 'listOrderItemsByNextToken';

    const OPTION_MARKETPLACE_ONLY_AMAZON        = 'AMZ';
    const OPTION_MARKETPLACE_ONLY_NON_AMAZON    = 'MCF';
    const OPTION_MARKETPLACE_ALL                = 'ALL';

    /** @var string $marketplaceId              The MWS MarketplaceID string used in API connections (for Amazon orders) */
    protected $marketplaceId;
    /** @var string $nonAmazonMarketplaceId     The MWS MarketplaceID string used in API connections (for MCF orders) */
    protected $nonAmazonMarketplaceId;
    /** @var string $sellerId                   The MWS SellerID string used in API connections */
    protected $sellerId;
    /** @var string $authToken          MWSAuthToken, only needed when working with (3rd party) client accounts which provide an Auth Token */
    protected $authToken = null;

    public function __construct(MwsClientPoolConfig $poolConfig) {
        $this->marketplaceId            = $poolConfig->getMarketplaceId();
        $this->nonAmazonMarketplaceId   = $poolConfig->getNonAmazonMarketplaceId();
        $this->sellerId                 = $poolConfig->getSellerId();
        $this->authToken                = $poolConfig->getAuthToken();

        $this->initThrottleManager();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix())
        );
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callGetOrder($amazonOrderIds) {
        if (is_string($amazonOrderIds)) {
            $amazonOrderIds = explode(',', $amazonOrderIds);
        }

        $requestArray = [
            self::PARAM_AMAZON_ORDER_IDS    => $amazonOrderIds,
        ];

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_ORDER, $requestArray);
    }
    public function callListOrdersByCreateDate(\DateTime $dateFrom, \DateTime $dateTo, $orderStatusArray = [], $marketplaceOption = null) {
        $requestArray = [
            self::PARAM_MARKETPLACE_ID      => $this->convertMarketplaceOptionIntoArray($marketplaceOption),
            self::PARAM_CREATED_AFTER       => $dateFrom->format('c'),
            self::PARAM_CREATED_BEFORE      => $dateTo->format('c'),
        ];

        if (!empty($orderStatusArray)) {
            $requestArray[self::PARAM_ORDER_STATUS_LIST] = $orderStatusArray;
        }

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS, $requestArray);
    }
    public function callListOrdersByLastUpdatedDate(\DateTime $dateSince, $orderStatusArray = [], $marketplaceOption = null) {
        $requestArray = [
            self::PARAM_MARKETPLACE_ID      => $this->convertMarketplaceOptionIntoArray($marketplaceOption),
            self::PARAM_LAST_UPDATED_AFTER  => $dateSince->format('c'),
        ];

        if (!empty($orderStatusArray)) {
            $requestArray[self::PARAM_ORDER_STATUS_LIST] = $orderStatusArray;
        }

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS, $requestArray);
    }
    public function callListOrdersByLastUpdatedDateRange(\DateTime $dateSince, \DateTime $dateUntil, $orderStatusArray = [], $marketplaceOption = null) {
        $requestArray = [
            self::PARAM_MARKETPLACE_ID      => $this->convertMarketplaceOptionIntoArray($marketplaceOption),
            self::PARAM_LAST_UPDATED_AFTER  => $dateSince->format('c'),
            self::PARAM_LAST_UPDATED_BEFORE => $dateUntil->format('c'),
        ];

        if (!empty($orderStatusArray)) {
            $requestArray[self::PARAM_ORDER_STATUS_LIST] = $orderStatusArray;
        }

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS, $requestArray);
    }
    public function callListOrdersByNextToken($nextToken) {
        $requestArray = [
            self::PARAM_NEXT_TOKEN          => $nextToken,
        ];

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS_BY_NEXT_TOKEN, $requestArray);
    }

    public function callListOrderItems($amazonOrderId)
    {
        $requestArray = [self::PARAM_AMAZON_ORDER_IDS => $amazonOrderId];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDER_ITEMS, $requestArray);
    }

    public function callListOrderItemsByNextToken($nextToken)
    {
        $requestArray = [self::PARAM_NEXT_TOKEN => $nextToken];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDER_ITEMS_BY_NEXT_TOKEN, $requestArray);
    }

    private function convertMarketplaceOptionIntoArray($marketplaceOption) {
        if (empty($marketplaceOption) || self::OPTION_MARKETPLACE_ONLY_AMAZON === $marketplaceOption) {
            return $this->marketplaceId;
        }
        if (self::OPTION_MARKETPLACE_ONLY_NON_AMAZON === $marketplaceOption) {
            return $this->nonAmazonMarketplaceId;
        }
        if (self::OPTION_MARKETPLACE_ALL === $marketplaceOption) {
            return [ $this->marketplaceId, $this->nonAmazonMarketplaceId ];
        }
        throw new \InvalidArgumentException('Unknown MarketplaceOption: ' . $marketplaceOption);
    }

    // ###################################################
    // # ThrottleAwareClientPackInterface implementation #
    // ###################################################
    private $throttleManager;

    public function initThrottleManager() {
        $this->throttleManager = new ThrottledRequestManager(
            [
                self::METHOD_GET_ORDER                      => [6, 0.015],
                self::METHOD_LIST_ORDERS                    => [6, 0.015],
                self::METHOD_LIST_ORDERS_BY_NEXT_TOKEN      => [null, null, null, self::METHOD_LIST_ORDERS],
                self::METHOD_LIST_ORDER_ITEMS               => [30, 0.5],
                self::METHOD_LIST_ORDER_ITEMS_BY_NEXT_TOKEN => [30, 0.5],
            ]
        );
    }

    public function getThrottleManager() {
        return $this->throttleManager;
    }
}
