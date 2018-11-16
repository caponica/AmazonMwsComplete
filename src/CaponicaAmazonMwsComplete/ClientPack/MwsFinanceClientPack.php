<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\AmazonClient\MwsFinanceClient;
use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;

class MwsFinanceClientPack extends MwsFinanceClient {
    use SignsRequestArray, ProvidesServiceUrlSuffix;

    const SERVICE_NAME = 'Finances';

    const PARAM_AMAZON_ORDER_ID                     = 'AmazonOrderId';
    const PARAM_FINANCIAL_EVENT_GROUP_ID            = 'FinancialEventGroupId';
    const PARAM_FINANCIAL_EVENT_GROUP_STARTED_AFTER = 'FinancialEventGroupStartedAfter';
    const PARAM_FINANCIAL_EVENT_GROUP_STARTED_BEFORE= 'FinancialEventGroupStartedBefore';
    const PARAM_MAX_RESULTS_PER_PAGE                = 'MaxResultsPerPage';
    const PARAM_MWS_AUTH_TOKEN                      = 'MWSAuthToken';
    const PARAM_NEXT_TOKEN                          = 'NextToken';
    const PARAM_POSTED_BEFORE                       = 'PostedBefore';
    const PARAM_POSTED_AFTER                        = 'PostedAfter';
    const PARAM_SELLER_ID                           = 'SellerId';

    const STATUS_GREEN                          = 'GREEN';      // The service is operating normally.
    const STATUS_GREEN_I                        = 'GREEN_I';    // The service is operating normally. Additional information is provided.
    const STATUS_YELLOW                         = 'YELLOW';     // The service is experiencing higher than normal error rates or is operating with degraded performance. Additional information may be provided.
    const STATUS_RED                            = 'RED';        // The service is unavailable or experiencing extremely high error rates. Additional information may be provided.

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

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForFinance($this->getServiceUrlSuffix())
        );
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callGetServiceStatus() {
        $requestArray = $this->signArray();
        return $this->getServiceStatus($requestArray);
    }

    /**
     * @param string|\DateTime $startDate
     * @param string|\DateTime $endDate
     * @param int $maxPerPage
     * @return \MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function callListFinancialEventGroups($startDate, $endDate=null, $maxPerPage=null) {
        if ($startDate instanceof \DateTime) {
            $startDate = $startDate->format('c');
        }
        if ($endDate instanceof \DateTime) {
            $endDate = $endDate->format('c');
        }
        $requestArray = [
            self::PARAM_FINANCIAL_EVENT_GROUP_STARTED_AFTER => $startDate,
        ];
        if (!empty($endDate)) {
            $requestArray[self::PARAM_FINANCIAL_EVENT_GROUP_STARTED_BEFORE] = $endDate;
        }
        if (!empty($maxPerPage)) {
            $requestArray[self::PARAM_MAX_RESULTS_PER_PAGE] = $maxPerPage;
        }

        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEventGroups($requestArray);
    }

    /**
     * @param string $nextToken
     * @return \MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse
     */
    public function callListFinancialEventGroupsByNextToken($nextToken) {
        $requestArray = [
            self::PARAM_NEXT_TOKEN => $nextToken,
        ];
        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEventGroupsByNextToken($requestArray);
    }

    /**
     * @param string $orderId
     * @param int $maxPerPage
     * @return \MWSFinancesService_Model_ListFinancialEventsResponse
     */
    public function callListFinancialEventsFilteredByOrderId($orderId, $maxPerPage=null) {
        $requestArray = [
            self::PARAM_AMAZON_ORDER_ID => $orderId,
        ];
        if (!empty($maxPerPage)) {
            $requestArray[self::PARAM_MAX_RESULTS_PER_PAGE] = $maxPerPage;
        }
        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEvents($requestArray);
    }
    /**
     * @param string $financialEventGroup
     * @param int $maxPerPage
     * @return \MWSFinancesService_Model_ListFinancialEventsResponse
     */
    public function callListFinancialEventsFilteredByEventGroup($financialEventGroup, $maxPerPage=null) {
        $requestArray = [
            self::PARAM_FINANCIAL_EVENT_GROUP_ID => $financialEventGroup,
        ];
        if (!empty($maxPerPage)) {
            $requestArray[self::PARAM_MAX_RESULTS_PER_PAGE] = $maxPerPage;
        }
        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEvents($requestArray);
    }
    /**
     * @param string|\DateTime $startDate
     * @param string|\DateTime $endDate
     * @param int $maxPerPage
     * @return \MWSFinancesService_Model_ListFinancialEventsResponse
     * @return \MWSFinancesService_Model_ListFinancialEventsResponse
     */
    public function callListFinancialEventsFilteredByDate($startDate, $endDate=null, $maxPerPage=null) {
        if ($startDate instanceof \DateTime) {
            $startDate = $startDate->format('c');
        }
        if ($endDate instanceof \DateTime) {
            $endDate = $endDate->format('c');
        }
        $requestArray = [
            self::PARAM_POSTED_AFTER => $startDate,
        ];
        if (!empty($endDate)) {
            $requestArray[self::PARAM_POSTED_BEFORE] = $endDate;
        }
        if (!empty($maxPerPage)) {
            $requestArray[self::PARAM_MAX_RESULTS_PER_PAGE] = $maxPerPage;
        }
        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEvents($requestArray);
    }

    /**
     * @param string $nextToken
     * @return \MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse
     */
    public function callListFinancialEventsByNextToken($nextToken) {
        $requestArray = [
            self::PARAM_NEXT_TOKEN => $nextToken,
        ];
        $requestArray = $this->signArray($requestArray);
        return $this->listFinancialEventsByNextToken($requestArray);
    }
}
