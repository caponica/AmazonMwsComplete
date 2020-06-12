<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\AmazonClient\MwsSellerClient;
use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestLogCollection;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;
use Psr\Log\LoggerInterface;

class MwsSellersClientPack extends MwsSellerClient implements ThrottleAwareClientPackInterface {
    use SignsRequestArray, ProvidesServiceUrlSuffix { SignsRequestArray::signArray as baseSignArray; }

    const SERVICE_NAME = 'Sellers';

    const PARAM_MARKETPLACE_ID                  = 'MarketplaceId';
    const PARAM_MWS_AUTH_TOKEN                  = 'MWSAuthToken';
    const PARAM_SELLER_ID                       = 'SellerId';

    const METHOD_GET_COMPETITIVE_PRICING_FOR_ASIN   = 'getCompetitivePricingForASIN';
    const METHOD_GET_LOWEST_OFFER_LISTINGS_FOR_ASIN = 'getLowestOfferListingsForASIN';
    const METHOD_LIST_MATCHING_PRODUCTS             = 'listMatchingProducts';
    const METHOD_GET_MATCHING_PRODUCTS              = 'getMatchingProduct';
    const METHOD_GET_MATCHING_PRODUCTS_FOR_ID       = 'getMatchingProductForId';
    const METHOD_GET_MY_FEES_ESTIMATE               = 'getMyFeesEstimate';
    const METHOD_LIST_MARKETPLACE_PARTICIPATIONS    = 'listMarketplaceParticipations';

    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;
    /** @var string $authToken          MWSAuthToken, only needed when working with (3rd party) client accounts which provide an Auth Token */
    protected $authToken = null;
    /** @var LoggerInterface */
    protected $logger;
    /** @var string */
    protected $currencyCode;

    public function __construct(MwsClientPoolConfig $poolConfig, LoggerInterface $logger = null) {
        $this->marketplaceId    = $poolConfig->getMarketplaceId();
        $this->sellerId         = $poolConfig->getSellerId();
        $this->authToken        = $poolConfig->getAuthToken();
        $this->currencyCode     = $poolConfig->getCurrencyCode();
        $this->logger           = $logger;

        $this->initThrottleManager();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForProduct($this->getServiceUrlSuffix())
        );
    }

    // 'Sign' the request by adding SellerId and MWSAuthToken (if used)
    private function signArray($requestArray = []) {
        $requestArray[self::PARAM_MARKETPLACE_ID] = $this->marketplaceId;

        return $this->baseSignArray($requestArray);
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    /**
     * @return \MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse
     * @throws \Exception
     */
    public function callListMarketplaceParticipations() {
        $options = $this->signArray();
        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_MARKETPLACE_PARTICIPATIONS, $options);
    }

    // ###################################################
    // # ThrottleAwareClientPackInterface implementation #
    // ###################################################
    private $throttleManager;

    public function initThrottleManager() {
        $this->throttleManager = new ThrottledRequestManager(
            [
                self::METHOD_GET_COMPETITIVE_PRICING_FOR_ASIN   => [20, 10, ThrottledRequestLogCollection::RESTORE_BASIS_WEIGHT],
                self::METHOD_GET_LOWEST_OFFER_LISTINGS_FOR_ASIN => [20, 10, ThrottledRequestLogCollection::RESTORE_BASIS_WEIGHT],
                self::METHOD_GET_MATCHING_PRODUCTS              => [20, 2,  ThrottledRequestLogCollection::RESTORE_BASIS_WEIGHT],
                self::METHOD_GET_MATCHING_PRODUCTS_FOR_ID       => [20, 5,  ThrottledRequestLogCollection::RESTORE_BASIS_WEIGHT],
                self::METHOD_LIST_MATCHING_PRODUCTS             => [20, 0.2],
                self::METHOD_GET_MY_FEES_ESTIMATE               => [20, 10, ThrottledRequestLogCollection::RESTORE_BASIS_WEIGHT],
            ]
        );
    }

    public function getThrottleManager() {
        return $this->throttleManager;
    }
}