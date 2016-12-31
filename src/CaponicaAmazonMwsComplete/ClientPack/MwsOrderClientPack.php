<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsOrderClient;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;

class MwsOrderClientPack extends MwsOrderClient implements ThrottleAwareClientPackInterface {
    const PARAM_CREATED_AFTER               = 'CreatedAfter';
    const PARAM_CREATED_BEFORE              = 'CreatedBefore';
    const PARAM_MARKETPLACE_ID              = 'MarketplaceId';
    const PARAM_MARKETPLACE_ID_LIST         = 'MarketplaceId.Id.1';
    const PARAM_MERCHANT                    = 'SellerId';
    const PARAM_NEXT_TOKEN                  = 'NextToken';

    const METHOD_LIST_ORDERS                = 'listOrders';
    const METHOD_LIST_ORDERS_BY_NEXT_TOKEN  = 'listOrdersByNextToken';

    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;

    public function __construct(MwsClientPoolConfig $poolConfig) {
        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();

        $this->initThrottleManager();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix())
        );
    }

    private function getServiceUrlSuffix() {
        return '/Orders/' . self::SERVICE_VERSION;
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callListOrdersByCreateDate(\DateTime $dateFrom, \DateTime $dateTo) {
        $requestArray = [
            self::PARAM_MERCHANT            => $this->sellerId,
            self::PARAM_MARKETPLACE_ID      => $this->marketplaceId,
            self::PARAM_CREATED_AFTER       => $dateFrom->format('c'),
            self::PARAM_CREATED_BEFORE      => $dateTo->format('c'),
        ];

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS, $requestArray);
    }
    public function callListOrdersByNextToken($nextToken) {
        $requestArray = [
            self::PARAM_MERCHANT            => $this->sellerId,
            self::PARAM_MARKETPLACE_ID      => $this->marketplaceId,
            self::PARAM_NEXT_TOKEN          => $nextToken,
        ];

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_ORDERS_BY_NEXT_TOKEN, $requestArray);
    }

    // ###################################################
    // # ThrottleAwareClientPackInterface implementation #
    // ###################################################
    private $throttleManager;

    public function initThrottleManager() {
        $this->throttleManager = new ThrottledRequestManager(
            [
                self::METHOD_LIST_ORDERS                => [6, 0.015],
                self::METHOD_LIST_ORDERS_BY_NEXT_TOKEN  => [null, null, null, self::METHOD_LIST_ORDERS],
            ]
        );
    }

    public function getThrottleManager() {
        return $this->throttleManager;
    }
}
