<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsFeedAndReportClient;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;

class MwsFeedAndReportClientPack extends MwsFeedAndReportClient {
    use SignsRequestArray;

    // Product And Inventory feeds
    const FEED_TYPE_PAI_IMAGES                          = '_POST_PRODUCT_IMAGE_DATA_';
    const FEED_TYPE_PAI_INVENTORY                       = '_POST_INVENTORY_AVAILABILITY_DATA_';
    const FEED_TYPE_PAI_OVERRIDES                       = '_POST_PRODUCT_OVERRIDES_DATA_';
    const FEED_TYPE_PAI_PRICING                         = '_POST_PRODUCT_PRICING_DATA_';
    const FEED_TYPE_PAI_PRODUCT                         = '_POST_PRODUCT_DATA_';
    const FEED_TYPE_PAI_RELATIONSHIPS                   = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    const FEED_TYPE_PAI_FLAT_BOOK_LOADER                = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_MUSIC_LOADER               = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_INVENTORY_LOADER           = '_POST_FLAT_FILE_INVLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_LISTINGS                   = '_POST_FLAT_FILE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_PRICE_AND_QUANTITY         = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    const FEED_TYPE_PAI_ACES_AUTOMOTIVE                 = '_POST_STD_ACES_DATA_';
    const FEED_TYPE_PAI_UIEE_BOOKS                      = '_POST_UIEE_BOOKLOADER_DATA_';

    const FEED_TYPE_ORDER_ACKNOWLEDGEMENT               = '_POST_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_ADJUSTMENT                    = '_POST_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FULFILLMENT                   = '_POST_ORDER_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_INVOICE_CONFIRM_CHINA         = '_POST_INVOICE_CONFIRMATION_DATA_';
    const FEED_TYPE_ORDER_SOURCING_ON_DEMAND            = '_POST_EXPECTED_SHIP_DATE_SOD_';
    const FEED_TYPE_ORDER_FLAT_ACKNOWLEDGEMENT          = '_POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_ADJUSTMENT               = '_POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_FULFILLMENT              = '_POST_FLAT_FILE_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_INVOICE_CONFIRM_CHINA    = '_POST_FLAT_FILE_INVOICE_CONFIRMATION_DATA_';
    const FEED_TYPE_ORDER_FLAT_SOURCING_ON_DEMAND       = '_POST_EXPECTED_SHIP_DATE_SOD_FLAT_FILE_';

    const FEED_TYPE_FBA_FULFILLMENT_ORDER               = '_POST_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FULFILLMENT_CANCEL              = '_POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_INBOUND_CARTON                  = '_POST_FBA_INBOUND_CARTON_CONTENTS_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_ORDER          = '_POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_CANCEL         = '_POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_REMOVAL_CREATE             = '_POST_FLAT_FILE_FBA_CREATE_REMOVAL_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_CREATE        = '_POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_UPDATE        = '_POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN_';

    const FEED_TYPE_BUSINESS_PRODUCT_DOCUMENTS          = '_POST_ENHANCED_CONTENT_DATA_';
    const FEED_TYPE_EASY_SHIP_DOCUMENTS                 = '_POST_EASYSHIP_DOCUMENTS_';

    // Report type enumeration, see http://docs.developer.amazonservices.com/en_UK/reports/Reports_ReportType.html
    // An effort has been made to group these by category (prefix) and make the constant names meaningful
    // Listing Reports
    const REPORT_LISTING_INVENTORY                      = '_GET_FLAT_FILE_OPEN_LISTINGS_DATA_';
    const REPORT_LISTING_ALL_LISTINGS                   = '_GET_MERCHANT_LISTINGS_ALL_DATA_';
    const REPORT_LISTING_ACTIVE_LISTINGS                = '_GET_MERCHANT_LISTINGS_DATA_';
    const REPORT_LISTING_INACTIVE_LISTINGS              = '_GET_MERCHANT_LISTINGS_INACTIVE_DATA_';
    const REPORT_LISTING_OPEN_LISTINGS                  = '_GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT_';
    const REPORT_LISTING_OPEN_LISTINGS_LITE             = '_GET_MERCHANT_LISTINGS_DATA_LITE_';
    const REPORT_LISTING_OPEN_LISTINGS_LITER            = '_GET_MERCHANT_LISTINGS_DATA_LITER_';
    const REPORT_LISTING_CANCELED_LISTINGS              = '_GET_MERCHANT_CANCELLED_LISTINGS_DATA_';
    const REPORT_LISTING_SOLD_LISTINGS                  = '_GET_CONVERGED_FLAT_FILE_SOLD_LISTINGS_DATA_';
    const REPORT_LISTING_QUALITY_AND_SUPPRESSED         = '_GET_MERCHANT_LISTINGS_DEFECT_DATA_';
    const REPORT_LISTING_PAN_EU_OFFER_STATUS            = '_GET_PAN_EU_OFFER_STATUS_';
    const REPORT_LISTING_MFN_PAN_EU_OFFER_ELIGIBILITY   = '_GET_MFN_PAN_EU_OFFER_STATUS_';
    const REPORT_LISTING_GEO_OPPORTUNITIES              = '_GET_FLAT_FILE_GEO_OPPORTUNITIES_';
    // Order Reports
    const REPORT_ORDERS_UNSHIPPED                       = '_GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_';
    const REPORT_ORDERS_SCHEDULED_XML                   = '_GET_ORDERS_DATA_';
    const REPORT_ORDERS_FLAT_FILE                       = '_GET_FLAT_FILE_ORDERS_DATA_';
    const REPORT_ORDERS_CONVERGED_FLAT_FILE             = '_GET_CONVERGED_FLAT_FILE_ORDER_REPORT_DATA_';
    // Order Tracking Reports
    const REPORT_TRACKING_BY_LAST_UPDATE_FLAT_FILE      = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_TRACKING_BY_ORDER_DATE_FLAT_FILE       = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_TRACKING_ARCHIVED_ORDERS               = '_GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_TRACKING_BY_LAST_UPDATE_XML            = '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_TRACKING_BY_ORDER_DATE_XML             = '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    // Pending Order Reports
    const REPORT_PENDING_ORDERS_FLAT_FILE               = '_GET_FLAT_FILE_PENDING_ORDERS_DATA_';
    const REPORT_PENDING_ORDERS_XML                     = '_GET_PENDING_ORDERS_DATA_';
    const REPORT_PENDING_ORDERS_CONVERGED_FLAT_FILE     = '_GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA_';
    // Returns Reports
    const REPORT_RETURNS_BY_RETURN_DATE                 = '_GET_XML_RETURNS_DATA_BY_RETURN_DATE_';
    const REPORT_RETURNS_MFN_PRIME                      = '_GET_XML_MFN_PRIME_RETURNS_REPORT_';
    const REPORT_RETURNS_MFN_RETURN_ELIGIBILITY         = '_GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT_';
    const REPORT_RETURNS_FLAT_BY_RETURN_DATE            = '_GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE_';
    const REPORT_RETURNS_FLAT_MFN_PRIME                 = '_GET_CSV_MFN_PRIME_RETURNS_REPORT_';
    const REPORT_RETURNS_FLAT_MFN_RETURN_ELIGIBILITY    = '_GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT_';
    // Performance Reports
    const REPORT_PERFORMANCE_FEEDBACK_FLAT_FILE         = '_GET_SELLER_FEEDBACK_DATA_';
    const REPORT_PERFORMANCE_CUSTOMER_METRICS_XML       = '_GET_V1_SELLER_PERFORMANCE_REPORT_';
    // Settlement Reports
    const REPORT_SETTLEMENT_FLAT_FILE                   = '_GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_';
    const REPORT_SETTLEMENT_XML                         = '_GET_V2_SETTLEMENT_REPORT_DATA_XML_';
    const REPORT_SETTLEMENT_FLAT_FILE_V2                = '_GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2_';
    // Sales Tax and VAT Reports
    const REPORT_SALES_TAX                              = '_GET_FLAT_FILE_SALES_TAX_DATA_';
    const REPORT_VAT_CALCULATION                        = '_SC_VAT_TAX_REPORT_';
    const REPORT_VAT_TRANSACTIONS                       = '_GET_VAT_TRANSACTION_DATA_';
    // Browse Tree Reports
    const REPORT_BROWSE_TREE                            = '_GET_XML_BROWSE_TREE_DATA_';
    // Fulfillment By Amazon (FBA) Reports
    // FBA Sales Reports
    const REPORT_FBA_SALES_AMAZON_FULFILLED_SHIPMENTS   = '_GET_AMAZON_FULFILLED_SHIPMENTS_DATA_';
    const REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_FLAT_FILE = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_FBA_SALES_ALL_BY_ORDER_DATE_FLAT_FILE  = '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_XML       = '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_';
    const REPORT_FBA_SALES_ALL_BY_ORDER_DATE_XML        = '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_';
    const REPORT_FBA_SALES_CUSTOMER_SHIPMENT            = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA_';
    const REPORT_FBA_SALES_PROMOTIONS                   = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA_';
    const REPORT_FBA_SALES_CUSTOMER_TAXES               = '_GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA_';
    // FBA Inventory Reports
    const REPORT_FBA_INVENTORY_AFN                      = '_GET_AFN_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_AFN_BY_COUNTRY           = '_GET_AFN_INVENTORY_DATA_BY_COUNTRY_';
    const REPORT_FBA_INVENTORY_HISTORY_DAILY            = '_GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_HISTORY_MONTHLY          = '_GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_RECEIVED                 = '_GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA_';
    const REPORT_FBA_INVENTORY_RESERVED                 = '_GET_RESERVED_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_EVENT_DETAIL             = '_GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA_';
    const REPORT_FBA_INVENTORY_ADJUSTMENTS              = '_GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA_';
    const REPORT_FBA_INVENTORY_HEALTH                   = '_GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA_';
    const REPORT_FBA_INVENTORY_MANAGE_ACTIVE            = '_GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_MANAGE_ALL               = '_GET_FBA_MYI_ALL_INVENTORY_DATA_';
    const REPORT_FBA_INVENTORY_RESTOCK_RECOMMENDATIONS  = '_GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT_';
    const REPORT_FBA_INVENTORY_CROSS_BORDER_MOVEMENT    = '_GET_FBA_FULFILLMENT_CROSS_BORDER_INVENTORY_MOVEMENT_DATA_';
    const REPORT_FBA_INVENTORY_INBOUND_PERFORMANCE      = '_GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA_';
    const REPORT_FBA_INVENTORY_STRANDED                 = '_GET_STRANDED_INVENTORY_UI_DATA_';
    const REPORT_FBA_INVENTORY_BULK_FIX_STRANDED        = '_GET_STRANDED_INVENTORY_LOADER_DATA_';
    const REPORT_FBA_INVENTORY_AGE                      = '_GET_FBA_INVENTORY_AGED_DATA_';
    const REPORT_FBA_INVENTORY_EXCESS                   = '_GET_EXCESS_INVENTORY_DATA_';
    const REPORT_FBA_STORAGE_FEE_CHARGES                = '_GET_FBA_STORAGE_FEE_CHARGES_DATA_';
    // FBA Payments Reports
    const REPORT_FBA_PAYMENTS_FEE_PREVIEW               = '_GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA_';
    const REPORT_FBA_PAYMENTS_REIMBURSEMENTS            = '_GET_FBA_REIMBURSEMENTS_DATA_';
    // FBA Customer Concessions Reports
    const REPORT_FBA_CONCESSION_RETURNS                 = '_GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA_';
    const REPORT_FBA_CONCESSION_REPLACEMENTS            = '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA_';
    // FBA Removals Reports
    const REPORT_FBA_REMOVAL_RECOMMENDED                = '_GET_FBA_RECOMMENDED_REMOVAL_DATA_';
    const REPORT_FBA_REMOVAL_ORDER_DETAIL               = '_GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA_';
    const REPORT_FBA_REMOVAL_SHIPMENT_DETAIL            = '_GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA_';
    const REPORT_EASY_SHIP_DOCUMENTS                    = '_GET_EASYSHIP_DOCUMENTS_';

    const PARAM_FEED_CONTENT                            = 'FeedContent';
    const PARAM_FEED_CONTENT_MD5                        = 'ContentMd5';
    const PARAM_END_DATE                                = 'EndDate';
    const PARAM_FEED_PROCESSING_STATUS_LIST             = 'FeedProcessingStatusList';
    const PARAM_FEED_SUBMISSION_ID                      = 'FeedSubmissionId';
    const PARAM_FEED_SUBMISSION_ID_LIST                 = 'FeedSubmissionIdList';
    const PARAM_FEED_SUBMISSION_RESULT                  = 'FeedSubmissionResult';
    const PARAM_FEED_TYPE                               = 'FeedType';
    const PARAM_FEED_TYPE_LIST                          = 'FeedTypeList';
    const PARAM_MARKETPLACE                             = 'Marketplace';
    const PARAM_MARKETPLACE_ID_LIST                     = 'MarketplaceIdList';
    const PARAM_MAX_COUNT                               = 'MaxCount';
    const PARAM_MERCHANT                                = 'Merchant';
    const PARAM_SELLER_ID                               = 'Merchant';   // Alias for PARAM_MERCHANT
    const PARAM_MWS_AUTH_TOKEN                          = 'MWSAuthToken';
    const PARAM_NEXT_TOKEN                              = 'NextToken';
    const PARAM_PURGE_AND_REPLACE                       = 'PurgeAndReplace';
    const PARAM_REPORT                                  = 'Report';
    const PARAM_REPORT_OPTIONS                          = 'ReportOptions';
    const PARAM_REPORT_PROCESSING_STATUS_LIST           = 'ReportProcessingStatusList';
    const PARAM_REPORT_REQUEST_ID_LIST                  = 'ReportRequestIdList';
    const PARAM_REPORT_ID                               = 'ReportId';
    const PARAM_REPORT_TYPE                             = 'ReportType';
    const PARAM_REPORT_TYPE_LIST                        = 'ReportTypeList';
    const PARAM_REQUESTED_FROM_DATE                     = 'RequestedFromDate';
    const PARAM_REQUESTED_TO_DATE                       = 'RequestedToDate';
    const PARAM_START_DATE                              = 'StartDate';
    const PARAM_SUBMITTED_DATE_FROM                     = 'SubmittedFromDate';
    const PARAM_SUBMITTED_DATE_TO                       = 'SubmittedToDate';

    const PROCESSING_STATUS_SUBMITTED                   = '_SUBMITTED_'; 	                // The request has been received, but has not yet started processing.
    const PROCESSING_STATUS_UNCONFIRMED                 = '_UNCONFIRMED_'; 	                // The request is pending.
    const PROCESSING_STATUS_IN_PROGRESS                 = '_IN_PROGRESS_'; 	                // The request is being processed.
    const PROCESSING_STATUS_IN_SAFETY_NET               = '_IN_SAFETY_NET_';                // The request is being processed, but the system has determined that there is a potential error with the feed (for example, the request will remove all inventory from a seller's account.) An Amazon seller support associate will contact the seller to confirm whether the feed should be processed.
    const PROCESSING_STATUS_AWAIT_ASYNCH_REPLY          = '_AWAITING_ASYNCHRONOUS_REPLY_';  // The request is being processed, but is waiting for external information before it can complete.
    const PROCESSING_STATUS_CANCELLED                   = '_CANCELLED_'; 	                // The request has been aborted due to a fatal error.
    const PROCESSING_STATUS_DONE_NO_DATA                = '_DONE_NO_DATA_'; 	            // (Reports only) The request has been processed.
    const PROCESSING_STATUS_DONE                        = '_DONE_'; 	                    // The request has been processed.
    // Once you have PROCESSING_STATUS_DONE:
    // For feeds you can now call the GetFeedSubmissionResult operation to receive a processing report that describes which records in the feed were successful and which records generated errors.
    // For reports you can now call GetReport to retrieve the actual report data.

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
            $poolConfig->getConfigForFeedAndReport($this->getServiceUrlSuffix()),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion()
        );
    }

    private function getServiceUrlSuffix() {
        return '/';
    }

    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callCancelFeedSubmissions($submissionIds = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = $this->signArray();

        if (!empty($submissionIds)) {
            $requestArray[self::PARAM_FEED_SUBMISSION_ID_LIST] = [ 'Id' => $submissionIds];
        } else {
            if (!empty($feedTypes)) {
                $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
            }
            if (!empty($dateFrom)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
            }
            if (!empty($dateTo)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
            }
        }
        return $this->cancelFeedSubmissions($requestArray);
    }
    public function callGetFeedSubmissionCount($statusCodes = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = $this->signArray();

        if (!empty($statusCodes)) {
            $requestArray[self::PARAM_FEED_PROCESSING_STATUS_LIST] = [ 'Status' => $statusCodes ];
        }
        if (!empty($feedTypes)) {
            $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
        }
        if (!empty($dateFrom)) {
            $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
        }
        if (!empty($dateTo)) {
            $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
        }
        return $this->getFeedSubmissionCount($requestArray);
    }
    public function callGetFeedSubmissionList($submissionIds = null, $maxCount = null, $statusCodes = null, $feedTypes = null, $dateFrom = null, $dateTo = null) {
        $requestArray = $this->signArray();

        if (!empty($submissionIds)) {
            $requestArray[self::PARAM_FEED_SUBMISSION_ID_LIST] = [ 'Id' => $submissionIds];
        } else {
            if (!empty($maxCount)) {
                $requestArray[self::PARAM_MAX_COUNT] = $maxCount;
            }
            if (!empty($statusCodes)) {
                $requestArray[self::PARAM_FEED_PROCESSING_STATUS_LIST] = [ 'Status' => $statusCodes ];
            }
            if (!empty($feedTypes)) {
                $requestArray[self::PARAM_FEED_TYPE_LIST] = [ 'Type' => $feedTypes];
            }
            if (!empty($dateFrom)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_FROM] = ($dateFrom instanceof \DateTime ? $dateFrom->format(\DateTime::ISO8601) : $dateFrom);
            }
            if (!empty($dateTo)) {
                $requestArray[self::PARAM_SUBMITTED_DATE_TO] = ($dateTo instanceof \DateTime ? $dateTo->format(\DateTime::ISO8601) : $dateTo);
            }
        }
        return $this->getFeedSubmissionList($requestArray);
    }
    public function callGetFeedSubmissionListByNextToken($nextToken) {
        $requestArray = $this->signArray([
            self::PARAM_NEXT_TOKEN          => $nextToken,
        ]);

        return $this->getFeedSubmissionListByNextToken($requestArray);
    }
    /**
     * @param string $feedSubmissionId      The feedSubmissionId to get a processing report for
     * @param resource $filename            A file handle (resource) where the report will be written to
     * @return \MarketplaceWebService_Model_GetFeedSubmissionResultResponse
     */
    public function callGetFeedSubmissionResult($feedSubmissionId, $filename) {
        $requestArray = $this->signArray([
            self::PARAM_FEED_SUBMISSION_ID      => $feedSubmissionId,
            self::PARAM_FEED_SUBMISSION_RESULT  => $filename,
        ]);
        return $this->getFeedSubmissionResult($requestArray);
    }

    /**
     * @param string $feedType              One of the FEED_TYPE_XYZ values
     * @param resource $feedContent         A file handle (resource) pointing to the feed content
     * @return \MarketplaceWebService_Model_SubmitFeedResponse
     */
    public function callSubmitFeed($feedType, $feedContent) {
        $contentHash = base64_encode(md5(stream_get_contents($feedContent), true));
        rewind($feedContent);

        $parameters = [
            self::PARAM_FEED_CONTENT        => $feedContent,
            self::PARAM_FEED_CONTENT_MD5    => $contentHash,
            self::PARAM_FEED_TYPE           => $feedType,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
            // self::PARAM_PURGE_AND_REPLACE   => $purge, // This is ignored for safety (uses the MWS API default of false)
        ];
        $parameters = $this->signArray($parameters);
        return $this->submitFeed($parameters);
    }

    /**
     * @param string $reportType            A valid ReportType, see the REPORT_XYZ class constants
     * @param \DateTime $startDate          (optional) The start of a date range used for selecting the data to report
     * @param \DateTime $endDate            (optional) The end of a date range used for selecting the data to report
     * @todo - add reportOptions
     * @return \MarketplaceWebService_Model_RequestReportResponse
     */
    public function callRequestReport($reportType, $startDate=null, $endDate=null) {
        $parameters = [
            self::PARAM_MARKETPLACE         => $this->marketplaceId,
            self::PARAM_REPORT_TYPE         => $reportType,
            self::PARAM_MARKETPLACE_ID_LIST => array('Id' => $this->marketplaceId),
        ];
        if (!empty($startDate)) {
            $parameters[self::PARAM_START_DATE] = $startDate;
        }
        if (!empty($endDate)) {
            $parameters[self::PARAM_END_DATE] = $endDate;
        }
        $parameters = $this->signArray($parameters);
        return $this->requestReport($parameters);
    }

    /**
     * @param string|array $reportRequestIds        (optional) One or more ReportRequestIds, as returned by requestReport()
     * @param array $reportTypes                    (optional) An array of ReportTypes to fetch
     * @param array $reportProcessingStatuses       (optional) An array of ReportStatuses to fetch
     * @param \DateTime $requestedFromDate          (optional) The start of a date range used for selecting the data to report
     * @param \DateTime $requestedToDate            (optional) The end of a date range used for selecting the data to report
     * @param int $maxCount                         (optional) The max number of report requests to return
     * @return \MarketplaceWebService_Model_GetReportRequestListResponse
     */
    public function callGetReportRequestList($reportRequestIds=null, $reportTypes=[], $reportProcessingStatuses=[], $requestedFromDate=null, $requestedToDate=null, $maxCount=10) {
        $parameters = $this->signArray([
            self::PARAM_MARKETPLACE             => $this->marketplaceId,
        ]);
        if (!empty($reportRequestIds)) {
            $parameters[self::PARAM_REPORT_REQUEST_ID_LIST] = ['Id' => $reportRequestIds];
        }
        if (!empty($reportTypes)) {
            $parameters[self::PARAM_REPORT_TYPE_LIST] = ['Type' => $reportTypes];
        }
        if (!empty($reportProcessingStatuses)) {
            $parameters[self::PARAM_REPORT_PROCESSING_STATUS_LIST] = ['Status' => $reportProcessingStatuses];
        }
        if (!empty($requestedFromDate)) {
            $parameters[self::PARAM_REQUESTED_FROM_DATE] = $requestedFromDate;
        }
        if (!empty($requestedToDate)) {
            $parameters[self::PARAM_REQUESTED_TO_DATE] = $requestedToDate;
        }
        if (!empty($maxCount)) {
            if ($maxCount > 100) {
                $maxCount = 100;
            } elseif ($maxCount < 1) {
                $maxCount = 1;
            }
            $parameters[self::PARAM_MAX_COUNT] = $maxCount;
        }
        return $this->getReportRequestList($parameters);
    }

    /**
     * @param string $reportId              The GeneratedReportId to download, as returned by getReportRequestList()
     * @param resource $filename            A file handle (resource) where the report will be written to
     * @return \MarketplaceWebService_Model_GetReportResponse
     */
    public function callGetReport($reportId, $filename) {
        $requestArray = $this->signArray([
            self::PARAM_REPORT_ID               => $reportId,
            self::PARAM_REPORT                  => $filename,
        ]);
        return $this->getReport($requestArray);
    }
}
