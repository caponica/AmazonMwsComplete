<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\AmazonClient\FbaInboundClient;
use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\Concerns\ProvidesServiceUrlSuffix;
use CaponicaAmazonMwsComplete\Concerns\SignsRequestArray;
use CaponicaAmazonMwsComplete\Domain\Inbound\Address;
use CaponicaAmazonMwsComplete\Domain\Inbound\AsinList;
use CaponicaAmazonMwsComplete\Domain\Inbound\InboundShipmentHeader;
use CaponicaAmazonMwsComplete\Domain\Inbound\InboundShipmentItemList;
use CaponicaAmazonMwsComplete\Domain\Inbound\InboundShipmentPlanRequestItemList;
use CaponicaAmazonMwsComplete\Domain\Inbound\SellerSkuList;
use CaponicaAmazonMwsComplete\Domain\Inbound\TransportDetailInput;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottledRequestManager;
use CaponicaAmazonMwsComplete\Service\LoggerService;
use DateTime;
use Exception;
use FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse;
use FBAInboundServiceMWS_Model_CreateInboundShipmentResponse;
use FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResponse;
use FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResponse;
use FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenResponse;
use FBAInboundServiceMWS_Model_ListInboundShipmentsResponse;
use FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse;
use Psr\Log\LoggerInterface;

class FbaInboundClientPack extends FbaInboundClient implements ThrottleAwareClientPackInterface
{
    use SignsRequestArray, ProvidesServiceUrlSuffix;

    const SERVICE_NAME = 'FulfillmentInboundShipment';

    const PARAM_MARKETPLACE_ID = 'MarketplaceId';
    const PARAM_MERCHANT = 'SellerId';
    const PARAM_SELLER_ID = 'SellerId';   // Alias for PARAM_MERCHANT
    const PARAM_MWS_AUTH_TOKEN = 'MWSAuthToken';
    const PARAM_SHIP_FROM_ADDRESS = 'ShipFromAddress';
    const PARAM_SHIP_TO_COUNTRY_CODE = 'ShipToCountryCode';
    const PARAM_SHIP_TO_COUNTRY_SUBDIVISION_CODE = 'ShipToCountrySubdivisionCode';
    const PARAM_LABEL_PREP_PREFERENCE = 'LabelPrepPreference';
    const PARAM_INBOUND_SHIPMENT_PLAN_REQUEST_ITEMS = 'InboundShipmentPlanRequestItems';
    const PARAM_SHIPMENT_ID = 'ShipmentId';
    const PARAM_SHIPMENT_ID_LIST = 'ShipmentIdList';
    const PARAM_SHIPMENT_STATUS_LIST = 'ShipmentStatusList';
    const PARAM_INBOUND_SHIPMENT_HEADER = 'InboundShipmentHeader';
    const PARAM_INBOUND_SHIPMENT_ITEMS = 'InboundShipmentItems';
    const PARAM_LAST_UPDATED_AFTER = 'LastUpdatedAfter';
    const PARAM_LAST_UPDATED_BEFORE = 'LastUpdatedBefore';
    const PARAM_SELLER_SKU_LIST = 'SellerSKUList';
    const PARAM_ASIN_LIST = 'ASINList';
    const PARAM_NEXT_TOKEN = 'NextToken';
    const PARAM_IS_PARTNERED = 'IsPartnered';
    const PARAM_SHIPMENT_TYPE = 'ShipmentType';
    const PARAM_TRANSPORT_DETAILS = 'TransportDetails';

    const METHOD_CREATE_INBOUND_SHIPMENT_PLAN = 'createInboundShipmentPlan';
    const METHOD_CREATE_INBOUND_SHIPMENT = 'createInboundShipment';
    const METHOD_UPDATE_INBOUND_SHIPMENT = 'updateInboundShipment';
    const METHOD_LIST_INBOUND_SHIPMENTS = 'listInboundShipments';
    const METHOD_LIST_INBOUND_SHIPMENTS_BY_NEXT_TOKEN = 'listInboundShipmentsByNextToken';
    const METHOD_LIST_INBOUND_SHIPMENT_ITEMS = 'listInboundShipmentItems';
    const METHOD_LIST_INBOUND_SHIPMENT_ITEMS_BY_NEXT_TOKEN = 'listInboundShipmentItemsByNextToken';
    const METHOD_GET_INBOUND_GUIDANCE_FOR_SKU = 'getInboundGuidanceForSKU';
    const METHOD_GET_INBOUND_GUIDANCE_FOR_ASIN = 'getInboundGuidanceForASIN';
    const METHOD_PUT_TRANSPORT_CONTENT = 'putTransportContent';
    const METHOD_GET_TRANSPORT_CONTENT = 'getTransportContent';

    /**
     * The MWS MarketplaceID string used in API connections.
     *
     * @var string
     */
    protected $marketplaceId;

    /**
     * The MWS SellerID string used in API connections.
     *
     * @var string
     */
    protected $sellerId;

    /**
     * MWSAuthToken, only needed when working with (3rd party) client accounts which provide an Auth Token.
     *
     * @var string
     */
    protected $authToken = null;

    /**
     * @var ThrottledRequestManager
     */
    private $throttleManager;

    /** @var LoggerInterface */
    protected $logger;

    public function __construct(MwsClientPoolConfig $poolConfig, LoggerInterface $logger = null)
    {
        $this->marketplaceId = $poolConfig->getMarketplaceId();
        $this->sellerId      = $poolConfig->getSellerId();
        $this->authToken     = $poolConfig->getAuthToken();
        $this->logger        = $logger;

        $this->initThrottleManager();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix())
        );
    }

    /**
     * Initialize the throttle manager with method throttle properties.
     */
    public function initThrottleManager()
    {
        $this->throttleManager = new ThrottledRequestManager([
            self::METHOD_CREATE_INBOUND_SHIPMENT_PLAN              => [30, 2],
            self::METHOD_CREATE_INBOUND_SHIPMENT                   => [30, 2],
            self::METHOD_UPDATE_INBOUND_SHIPMENT                   => [30, 2],
            self::METHOD_LIST_INBOUND_SHIPMENTS                    => [30, 2],
            self::METHOD_LIST_INBOUND_SHIPMENTS_BY_NEXT_TOKEN      => [null, null, null, self::METHOD_LIST_INBOUND_SHIPMENTS],
            self::METHOD_LIST_INBOUND_SHIPMENT_ITEMS               => [30, 2],
            self::METHOD_LIST_INBOUND_SHIPMENT_ITEMS_BY_NEXT_TOKEN => [null, null, null, self::METHOD_LIST_INBOUND_SHIPMENT_ITEMS],
            self::METHOD_GET_INBOUND_GUIDANCE_FOR_SKU              => [200, 200],
            self::METHOD_GET_INBOUND_GUIDANCE_FOR_ASIN             => [200, 200],
            self::METHOD_PUT_TRANSPORT_CONTENT                     => [30, 2],
            self::METHOD_GET_TRANSPORT_CONTENT                     => [30, 2],
        ]);
    }

    /**
     * @return ThrottledRequestManager
     */
    public function getThrottleManager()
    {
        return $this->throttleManager;
    }

    /**
     * Create Inbound Shipment Plan
     * Plans inbound shipments for a set of items.  Registers identifiers if needed,
     * and assigns ShipmentIds for planned shipments.
     * When all the items are not all in the same category (e.g. some sortable, some
     * non-sortable) it may be necessary to create multiple shipments (one for each
     * of the shipment groups returned).
     *
     * @param Address                            $shipFromAddress
     * @param string                             $shipToCountryCode
     * @param InboundShipmentPlanRequestItemList $itemList
     * @param string|null                        $shipToCountrySubdivisionCode
     * @param string|null                        $labelPrepPreference
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse
     */
    public function callCreateInboundShipmentPlan(Address $shipFromAddress,
        $shipToCountryCode,
        InboundShipmentPlanRequestItemList $itemList,
        $shipToCountrySubdivisionCode = null,
        $labelPrepPreference = null)
    {
        $requestArray = [
            self::PARAM_SHIP_FROM_ADDRESS                   => $shipFromAddress->toArray(),
            self::PARAM_SHIP_TO_COUNTRY_CODE                => $shipToCountryCode,
            self::PARAM_INBOUND_SHIPMENT_PLAN_REQUEST_ITEMS => ['member' => $itemList->toArray()],
        ];

        if ( ! empty($shipToCountrySubdivisionCode)) {
            $requestArray[self::PARAM_SHIP_TO_COUNTRY_SUBDIVISION_CODE] = $shipToCountrySubdivisionCode;
        }

        if ( ! empty($labelPrepPreference)) {
            $requestArray[self::PARAM_LABEL_PREP_PREFERENCE] = $labelPrepPreference;
        }

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_CREATE_INBOUND_SHIPMENT_PLAN, $requestArray);
    }

    /**
     * Create Inbound Shipment
     * Creates an inbound shipment. It may include up to 200 items.
     * The initial status of a shipment will be set to 'Working'.
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     * More items may be added using the Update call.
     *
     * @param string                  $shipmentId
     * @param InboundShipmentHeader   $inboundShipmentHeader
     * @param InboundShipmentItemList $inboundShipmentItems
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentResponse
     */
    public function callCreateInboundShipment($shipmentId,
        InboundShipmentHeader $inboundShipmentHeader,
        InboundShipmentItemList $inboundShipmentItems)
    {
        $requestArray = [
            self::PARAM_SHIPMENT_ID             => $shipmentId,
            self::PARAM_INBOUND_SHIPMENT_HEADER => $inboundShipmentHeader->toArray(),
            self::PARAM_INBOUND_SHIPMENT_ITEMS  => ['member' => $inboundShipmentItems->toArray()],
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_CREATE_INBOUND_SHIPMENT, $requestArray);
    }

    /**
     * Update Inbound Shipment
     * Updates an pre-existing inbound shipment specified by the
     * ShipmentId. It may include up to 200 items.
     * If InboundShipmentHeader is set. it replaces the header information
     * for the given shipment.
     * If InboundShipmentItems is set. it adds, replaces and removes
     * the line time to inbound shipment.
     * For non-existing item, it will add the item for new line item;
     * For existing line items, it will replace the QuantityShipped for the item.
     * For QuantityShipped = 0, it indicates the item should be removed from the shipment
     *
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     *
     * @param string                  $shipmentId
     * @param InboundShipmentHeader   $inboundShipmentHeader
     * @param InboundShipmentItemList $inboundShipmentItems
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse
     */
    public function callUpdateInboundShipment($shipmentId,
        InboundShipmentHeader $inboundShipmentHeader,
        InboundShipmentItemList $inboundShipmentItems)
    {
        $requestArray = [
            self::PARAM_SHIPMENT_ID             => $shipmentId,
            self::PARAM_INBOUND_SHIPMENT_HEADER => $inboundShipmentHeader->toArray(),
            self::PARAM_INBOUND_SHIPMENT_ITEMS  => ['member' => $inboundShipmentItems->toArray()],
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_UPDATE_INBOUND_SHIPMENT, $requestArray);
    }

    /**
     * List Inbound Shipments
     * Get the first set of inbound shipments created by a Seller according to
     * the specified shipment status or the specified shipment Id. A NextToken
     * is also returned to further iterate through the Seller's remaining
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     * At least one of ShipmentStatusList and ShipmentIdList must be passed in.
     * if both are passed in, then only shipments that match the specified
     * shipment Id and specified shipment status will be returned.
     * the LastUpdatedBefore and LastUpdatedAfter are optional, they are used
     * to filter results based on last update time of the shipment.
     *
     * @param string[]      $shipmentIdList
     * @param string[]      $shipmentStatusList
     * @param DateTime|null $lastUpdatedAfter
     * @param DateTime|null $lastUpdatedBefore
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsResponse
     */
    public function callListInboundShipments($shipmentIdList = [],
        $shipmentStatusList = [],
        DateTime $lastUpdatedAfter = null,
        DateTime $lastUpdatedBefore = null)
    {
        $requestArray = [];

        if ( ! empty($shipmentIdList)) {
            $requestArray[self::PARAM_SHIPMENT_ID_LIST] = ['member' => $shipmentIdList];
        }

        if ( ! empty($shipmentStatusList)) {
            $requestArray[self::PARAM_SHIPMENT_STATUS_LIST] = ['member' => $shipmentStatusList];
        }

        if ( ! empty($lastUpdatedAfter)) {
            $requestArray[self::PARAM_LAST_UPDATED_AFTER] = $lastUpdatedAfter;
        }

        if ( ! empty($lastUpdatedBefore)) {
            $requestArray[self::PARAM_LAST_UPDATED_BEFORE] = $lastUpdatedBefore;
        }

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INBOUND_SHIPMENTS, $requestArray);
    }

    /**
     * List Inbound Shipments By Next Token
     * Gets the next set of inbound shipments created by a Seller with the
     * NextToken which can be used to iterate through the remaining inbound
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param $nextToken
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenResponse
     */
    public function callListInboundShipmentsByNextToken($nextToken)
    {
        $requestArray = [
            self::PARAM_NEXT_TOKEN => $nextToken,
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INBOUND_SHIPMENTS_BY_NEXT_TOKEN, $requestArray);
    }

    /**
     * List Inbound Shipment Items
     * Gets the first set of inbound shipment items for the given ShipmentId or
     * all inbound shipment items updated between the given date range.
     * A NextToken is also returned to further iterate through the Seller's
     * remaining inbound shipment items. To get the next set of inbound
     * shipment items, you must call ListInboundShipmentItemsByNextToken and
     * pass in the 'NextToken' this call returned. If a NextToken is not
     * returned, it indicates the end-of-data. Use LastUpdatedBefore
     * and LastUpdatedAfter to filter results based on last updated time.
     * Either the ShipmentId or a pair of LastUpdatedBefore and LastUpdatedAfter
     * must be passed in. if ShipmentId is set, the LastUpdatedBefore and
     * LastUpdatedAfter will be ignored.
     *
     * @param string|null   $shipmentId
     * @param DateTime|null $lastUpdatedAfter
     * @param DateTime|null $lastUpdatedBefore
     *
     * @throws Exception
     *
     * @return \FBAInboundServiceMWS_Model_ListInboundShipmentItemsResponse
     */
    public function callListInboundShipmentItems($shipmentId = null,
        DateTime $lastUpdatedAfter = null,
        DateTime $lastUpdatedBefore = null)
    {
        $requestArray = [];

        if ( ! empty($shipmentId)) {
            $requestArray[self::PARAM_SHIPMENT_ID] = $shipmentId;
        }

        if ( ! empty($lastUpdatedAfter)) {
            $requestArray[self::PARAM_LAST_UPDATED_AFTER] = $lastUpdatedAfter;
        }

        if ( ! empty($lastUpdatedBefore)) {
            $requestArray[self::PARAM_LAST_UPDATED_BEFORE] = $lastUpdatedBefore;
        }

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INBOUND_SHIPMENT_ITEMS, $requestArray);
    }

    /**
     * List Inbound Shipment Items By Next Token
     * Gets the next set of inbound shipment items with the NextToken
     * which can be used to iterate through the remaining inbound shipment
     * items. If a NextToken is not returned, it indicates the end-of-data.
     * You must first call ListInboundShipmentItems to get a 'NextToken'.
     *
     * @param $nextToken
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResponse
     */
    public function callListInboundShipmentItemsByNextToken($nextToken)
    {
        $requestArray = [
            self::PARAM_NEXT_TOKEN => $nextToken,
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_LIST_INBOUND_SHIPMENT_ITEMS_BY_NEXT_TOKEN, $requestArray);
    }

    /**
     * @param SellerSkuList $skuList
     *
     * @throws Exception
     *
     * @return FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResponse
     */
    public function callGetInboundGuidanceForSKU(SellerSkuList $skuList)
    {
        $requestArray = [
            self::PARAM_SELLER_SKU_LIST => ['Id' => $skuList->toArray()],
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_INBOUND_GUIDANCE_FOR_SKU, $requestArray);
    }

    /**
     * @param AsinList $asinList
     *
     * @throws Exception
     *
     * @return \FBAInboundServiceMWS_Model_GetInboundGuidanceForASINResponse
     */
    public function callGetInboundGuidanceForASIN(AsinList $asinList)
    {
        $requestArray = [
            self::PARAM_ASIN_LIST => ['Id' => $asinList->toArray()],
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_INBOUND_GUIDANCE_FOR_ASIN, $requestArray);
    }

    /**
     * @param string               $shipmentId
     * @param bool                 $isPartnered
     * @param string               $shipmentType
     * @param TransportDetailInput $transportDetailInput
     *
     * @throws Exception
     *
     * @return \FBAInboundServiceMWS_Model_PutTransportContentResponse
     */
    public function callPutTransportContent($shipmentId, $isPartnered, $shipmentType, TransportDetailInput $transportDetailInput)
    {
        $requestArray = [
            self::PARAM_SHIPMENT_ID       => $shipmentId,
            self::PARAM_IS_PARTNERED      => $isPartnered,
            self::PARAM_SHIPMENT_TYPE     => $shipmentType,
            self::PARAM_TRANSPORT_DETAILS => $transportDetailInput->toArray(),
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_PUT_TRANSPORT_CONTENT, $requestArray);
    }

    /**
     * @param string $shipmentId
     *
     * @throws Exception
     *
     * @return \FBAInboundServiceMWS_Model_GetTransportContentResponse
     */
    public function callGetTransportContent($shipmentId)
    {
        $requestArray = [
            self::PARAM_SHIPMENT_ID       => $shipmentId
        ];

        $requestArray = $this->signArray($requestArray);

        return CaponicaClientPack::throttledCall($this, self::METHOD_GET_TRANSPORT_CONTENT, $requestArray);
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    protected function logMessage($message, $level, $context = [])
    {
        if ($this->logger) {
            // Use the internal logger for logging.
            $this->logger->log($level, $message, $context);
        } else {
            LoggerService::logMessage($message, $level, $context);
        }
    }
}
