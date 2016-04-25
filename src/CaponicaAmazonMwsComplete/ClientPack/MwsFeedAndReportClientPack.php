<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsFeedAndReportClient;

class MwsFeedAndReportClientPack extends MwsFeedAndReportClient {
    // Product And Inventory feeds
    const FEED_TYPE_PAI_IMAGES                  = '_POST_PRODUCT_IMAGE_DATA_';
    const FEED_TYPE_PAI_INVENTORY               = '_POST_INVENTORY_AVAILABILITY_DATA_';
    const FEED_TYPE_PAI_OVERRIDES               = '_POST_PRODUCT_OVERRIDES_DATA_';
    const FEED_TYPE_PAI_PRICING                 = '_POST_PRODUCT_PRICING_DATA_';
    const FEED_TYPE_PAI_PRODUCT                 = '_POST_PRODUCT_DATA_';
    const FEED_TYPE_PAI_RELATIONSHIPS           = '_POST_PRODUCT_RELATIONSHIP_DATA_';
    const FEED_TYPE_PAI_FLAT_BOOK_LOADER        = '_POST_FLAT_FILE_BOOKLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_MUSIC_LOADER       = '_POST_FLAT_FILE_CONVERGENCE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_INVENTORY_LOADER   = '_POST_FLAT_FILE_INVLOADER_DATA_';
    const FEED_TYPE_PAI_FLAT_LISTINGS           = '_POST_FLAT_FILE_LISTINGS_DATA_';
    const FEED_TYPE_PAI_FLAT_PRICE_AND_QUANTITY = '_POST_FLAT_FILE_PRICEANDQUANTITYONLY_UPDATE_DATA_';
    const FEED_TYPE_PAI_ACES_AUTOMOTIVE         = '_POST_STD_ACES_DATA_';
    const FEED_TYPE_PAI_UIEE_BOOKS              = '_POST_UIEE_BOOKLOADER_DATA_';

    const FEED_TYPE_ORDER_ACKNOWLEDGEMENT       = '_POST_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_ADJUSTMENT            = '_POST_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FULFILLMENT           = '_POST_ORDER_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_INVOICE_CONFIRM_CHINA = '_POST_INVOICE_CONFIRMATION_DATA_';
    const FEED_TYPE_ORDER_FLAT_ACKNOWLEDGEMENT  = '_POST_FLAT_FILE_ORDER_ACKNOWLEDGEMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_ADJUSTMENT       = '_POST_FLAT_FILE_PAYMENT_ADJUSTMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_FULFILLMENT      = '_POST_FLAT_FILE_FULFILLMENT_DATA_';
    const FEED_TYPE_ORDER_FLAT_INVOICE_CONFIRM_CHINA = '_POST_FLAT_FILE_INVOICE_CONFIRMATION_DATA_';

    const FEED_TYPE_FBA_FULFILLMENT_ORDER       = '_POST_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FULFILLMENT_CANCEL      = '_POST_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_INBOUND_CARTON          = '_POST_FBA_INBOUND_CARTON_CONTENTS_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_ORDER  = '_POST_FLAT_FILE_FULFILLMENT_ORDER_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_FULFILLMENT_CANCEL = '_POST_FLAT_FILE_FULFILLMENT_ORDER_CANCELLATION_REQUEST_DATA_';
    const FEED_TYPE_FBA_FLAT_REMOVAL_CREATE     = '_POST_FLAT_FILE_FBA_CREATE_REMOVAL_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_CREATE = '_POST_FLAT_FILE_FBA_CREATE_INBOUND_PLAN_';
    const FEED_TYPE_FBA_FLAT_INBOUND_PLAN_UPDATE = '_POST_FLAT_FILE_FBA_UPDATE_INBOUND_PLAN_';

    const PARAM_FEED_CONTENT                    = 'FeedContent';
    const PARAM_FEED_CONTENT_MD5                = 'ContentMd5';
    const PARAM_FEED_PROCESSING_STATUS_LIST     = 'FeedProcessingStatusList';
    const PARAM_FEED_SUBMISSION_ID              = 'FeedSubmissionId';
    const PARAM_FEED_SUBMISSION_ID_LIST         = 'FeedSubmissionIdList';
    const PARAM_FEED_TYPE                       = 'FeedType';
    const PARAM_FEED_TYPE_LIST                  = 'FeedTypeList';
    const PARAM_MARKETPLACE_ID_LIST             = 'MarketplaceIdList';
    const PARAM_MAX_COUNT                       = 'MaxCount';
    const PARAM_MERCHANT                        = 'Merchant';
    const PARAM_NEXT_TOKEN                      = 'NextToken';
    const PARAM_PURGE_AND_REPLACE               = 'PurgeAndReplace';
    const PARAM_SUBMITTED_DATE_FROM             = 'SubmittedFromDate';
    const PARAM_SUBMITTED_DATE_TO               = 'SubmittedToDate';

    const PROCESSING_STATUS_AWAIT_ASYNCH_REPLY  = '_AWAITING_ASYNCHRONOUS_REPLY_';  // The request is being processed, but is waiting for external information before it can complete.
    const PROCESSING_STATUS_CANCELLED           = '_CANCELLED_'; 	                // The request has been aborted due to a fatal error.
    const PROCESSING_STATUS_DONE                = '_DONE_'; 	                    // The request has been processed. You can call the GetFeedSubmissionResult operation to receive a processing report that describes which records in the feed were successful and which records generated errors.
    const PROCESSING_STATUS_IN_PROGRESS         = '_IN_PROGRESS_'; 	                // The request is being processed.
    const PROCESSING_STATUS_IN_SAFETY_NET       = '_IN_SAFETY_NET_';                // The request is being processed, but the system has determined that there is a potential error with the feed (for example, the request will remove all inventory from a seller's account.) An Amazon seller support associate will contact the seller to confirm whether the feed should be processed.
    const PROCESSING_STATUS_SUBMITTED           = '_SUBMITTED_'; 	                // The request has been received, but has not yet started processing.
    const PROCESSING_STATUS_UNCONFIRMED         = '_UNCONFIRMED_'; 	                // The request is pending.

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
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];

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
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];
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
        $requestArray = [ self::PARAM_MERCHANT => $this->sellerId ];
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
        return $this->getFeedSubmissionListByNextToken([
            self::PARAM_NEXT_TOKEN          => $nextToken,
            self::PARAM_MERCHANT            => $this->sellerId,
        ]);
    }
    public function callGetFeedSubmissionResult($feedSubmissionId) {
        return $this->getFeedSubmissionResult([
            self::PARAM_FEED_SUBMISSION_ID  => $feedSubmissionId,
            self::PARAM_MERCHANT            => $this->sellerId,
        ]);
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
            self::PARAM_MERCHANT            => $this->sellerId,
            // self::PARAM_PURGE_AND_REPLACE   => $purge, // This is ignored for safety (uses the MWS API default of false)
        ];
        return $this->submitFeed($parameters);
    }
}
