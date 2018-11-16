<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\FbaInventoryClient;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;

class FbaInventoryClientPack extends FbaInventoryClient implements ThrottleAwareClientPackInterface
{
    use SignsRequestArray, ProvidesServiceUrlSuffix;

    const SERVICE_NAME = 'FulfillmentInventory';

    const PARAM_MARKETPLACE_ID                          = 'MarketplaceId';
    const PARAM_MERCHANT                                = 'SellerId';
    const PARAM_SELLER_ID                               = 'SellerId';   // Alias for PARAM_MERCHANT
    const PARAM_MWS_AUTH_TOKEN                          = 'MWSAuthToken';
    const PARAM_NEXT_TOKEN              = 'NextToken';
    const PARAM_SELLER_SKUS             = 'SellerSkus';
    const PARAM_QUERY_START_DATE_TIME   = 'QueryStartDateTime';
    const PARAM_RESPONSE_GROUP          = 'ResponseGroup';

    const METHOD_LIST_INVENTORY_SUPPLY                  = 'listInventorySupply';
    const METHOD_LIST_INVENTORY_SUPPLY_BY_NEXT_TOKEN    = 'listInventorySupplyByNextToken';

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
    /**
     * @param $sellerSkus
     * @return \FBAInventoryServiceMWS_Model_ListInventorySupplyResponse
     * @throws \Exception
     */
    public function callListInventorySupply($sellerSkus) {
        $requestArray = [
            self::PARAM_SELLER_SKUS     => ['member' => $sellerSkus],
        ];

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INVENTORY_SUPPLY, $requestArray);
    }

    /**
     * @param $nextToken
     *
     * @return mixed
     * @throws \Exception
     */
    public function callListInventorySupplyByNextToken($nextToken) {
        $requestArray = [
            self::PARAM_NEXT_TOKEN          => $nextToken,
        ];

        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INVENTORY_SUPPLY_BY_NEXT_TOKEN, $requestArray);
    }


    // ###################################################
    // # ThrottleAwareClientPackInterface implementation #
    // ###################################################
    private $throttleManager;

    public function initThrottleManager() {
        $this->throttleManager = new ThrottledRequestManager(
            [
                self::METHOD_LIST_INVENTORY_SUPPLY                  => [30, 0.015],
                self::METHOD_LIST_INVENTORY_SUPPLY_BY_NEXT_TOKEN    => [null, null, null, self::METHOD_LIST_INVENTORY_SUPPLY],
            ]
        );
    }

    public function getThrottleManager() {
        return $this->throttleManager;
    }

    /**
     * Request any FBA function
     * @param string $method
     * @param array $requestArray
     * @return mixed
     * @throws \Exception
     */
    public function callRawRequest($method, $requestArray)
    {
        $requestArray = $this->signArray($requestArray);
        return CaponicaClientPack::throttledCall($this, $method, $requestArray);
    }
}
