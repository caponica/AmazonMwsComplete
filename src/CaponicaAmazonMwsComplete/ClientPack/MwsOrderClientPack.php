<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsOrderClient;


class MwsOrderClientPack extends MwsOrderClient {
    const PARAM_MERCHANT                            = 'Merchant';
    const PARAM_SELLER_ID                           = 'SellerId';
    const PARAM_MARKETPLACE_ID_LIST                 = 'MarketplaceIdList';
    const PARAM_MARKETPLACE_ID                      = 'MarketplaceId';
    const PARAM_CREATED_AFTER                       = 'CreatedAfter';
    const PARAM_CREATED_BEFORE                      = 'CreatedBefore';
    const PARAM_REPORT_REQUEST_ID_LIST              = 'ReportRequestIdList';
    const PARAM_ORDER_STATUS_LIST                   = 'OrderStatus';
    const PARAM_AMAZON_ORDER_ID                     = 'AmazonOrderId';
    const STATUS_PENDING                            = 'Pending';
    const STATUS_UNSHIPPED                          = 'Unshipped';
    const STATUS_PARTIALLY_SHIPPED                  = 'PartiallyShipped';
    const STATUS_SHIPPED                            = 'Shipped';
    const STATUS_CANCELED                           = 'Canceled';
    const STATUS_UNFULFILLABLE                      = 'Unfulfillable';
    const STATUS_PENDING_AVAILABILITY               = 'PendingAvailability';



    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;

    public function __construct(MwsClientPoolConfig $poolConfig) {

        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix())
        );
    }

    private function getServiceUrlSuffix() {
        return '/Orders/';
    }
    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################    

    public function callListOrdersRequest($createdAfter, $orderStatus) {

        return $this->listOrders([
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_ID => $this->sellerId,
            self::PARAM_MERCHANT  => $this->sellerId,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
            self::PARAM_CREATED_AFTER => $createdAfter,
            self::PARAM_ORDER_STATUS_LIST => $orderStatus
        ]);
    }
    public function calllistOrderItems($amazonOrderId)
    {
        return $this->listOrderItems([
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_ID => $this->sellerId,
            self::PARAM_MERCHANT  => $this->sellerId,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
            self::PARAM_AMAZON_ORDER_ID => $amazonOrderId
        ]);
    }
}