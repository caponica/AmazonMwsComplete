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

    public function callListOrdersRequest($createdAfter) {

        return $this->listOrders([
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_ID => $this->sellerId,
            self::PARAM_MERCHANT  => $this->sellerId,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
            self::PARAM_CREATED_AFTER => $createdAfter
        ]);
    }
}