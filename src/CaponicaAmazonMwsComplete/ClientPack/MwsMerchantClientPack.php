<?php
namespace CaponicaAmazonMwsComplete\ClientPack;
use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsMerchantFulfillmentClient;
class MwsMerchantClientPack extends MwsMerchantFulfillmentClient {
    const PARAM_SELLER_ID = 'SellerId';
    const PARAM_SHIPPING_SERVICE_ID = 'ShippingServiceId';
    const PARAM_SHIPPING_SERVICE_OFFER_ID = 'ShippingServiceOfferId';
    const PARAM_SHIPMENT_REQUEST_DETAILS = 'ShipmentRequestDetails';
    const PARAM_AMAZON_ORDER_ID = 'AmazonOrderId';
    const PARAM_MUST_ARRIVE_BY_DATE = 'MustArriveByDate';
    const PARAM_PACKAGE_DIMENSIONS = 'PackageDimensions';
    const PARAM_PACKAGE_DIMENSIONS_LENGTH = 'Length';
    const PARAM_PACKAGE_DIMENSIONS_WIDTH = 'Width';
    const PARAM_PACKAGE_DIMENSIONS_HEIGHT = 'Height';
    const PARAM_PACKAGE_DIMENSIONS_UNIT = 'Unit';
    const PARAM_WEIGHT = 'Weight';
    const PARAM_WEIGHT_VALUE = 'Value';
    const PARAM_WEIGHT_UNIT = 'Unit';
    const PARAM_SHIP_DATE = 'ShipDate';
    const PARAM_SHIP_FROM_ADDRESS = 'ShipFromAddress';
    const PARAM_SHIP_FROM_ADDRESS_NAME = 'Name';
    const PARAM_SHIP_FROM_ADDRESS_ADDRESS_LINE_1 = 'AddressLine1';
    const PARAM_SHIP_FROM_ADDRESS_CITY = 'City';
    const PARAM_SHIP_FROM_ADDRESS_STATEORPROVINCECODE = 'StateOrProvinceCode';
    const PARAM_SHIP_FROM_ADDRESS_POSTALCODE = 'PostalCode';
    const PARAM_SHIP_FROM_ADDRESS_COUNTRYCODE = 'CountryCode';
    const PARAM_SHIP_FROM_ADDRESS_EMAIL = 'Email';
    const PARAM_SHIP_FROM_ADDRESS_PHONE = 'Phone';
    const PARAM_SHIPPING_SERVICE_OPTIONS = 'ShippingServiceOptions';
    const PARAM_SHIPPING_SERVICE_OPTIONS_DELIVERY_EXPERIENCE = 'DeliveryExperience';
    const PARAM_SHIPPING_SERVICE_OPTIONS_CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE = 'DeclaredValue';
    const PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_CURRENCY_CODE = 'CurrencyCode';
    const PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_AMOUNT = 'Amount';
    const PARAM_SHIPPING_SERVICE_OPTIONS_LABEL_FORMAT = 'LabelFormat';
    const PARAM_ITEM_LIST = 'ItemList';
    const PARAM_ITEM_LIST_ITEM = 'Item';
    const PARAM_ITEM_LIST_ITEM_ORDER_ITEM_ID = 'OrderItemId';
    const PARAM_ITEM_LIST_ITEM_QUANTITY = 'Quantity';
    const PARAM_SHIPMENT_ID = 'ShipmentId';
    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;
    public function __construct(MwsClientPoolConfig $poolConfig) {
        //function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();
        // dump($poolConfig->getConfigForOrder($this->getServiceUrlSuffix()));
        // exit;
        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForOrder($this->getServiceUrlSuffix())
        );
    }
    private function getServiceUrlSuffix() {
        return '/MerchantFulfillment';
    }
    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################    
    public function callGetEligibleShippingServices($amazonOrderId, $mustArriveByDate, $dimensionsLength, $dimensionsWidth, $dimensionsHeight, $dimensionsUnit='inches', $weightValue, $weightUnit = 'ounces', $shipDate, $senderName, $senderAddress1, $senderCity, $senderState, $senderPostalCode, $senderCountryCode, $senderEmail, $senderPhone, $deliveryExperience = 'DeliveryConfirmationWithoutSignature', $carrierWillPickUp = false, $currencyCode, $declaredValue=0, $items=[]) {
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_LENGTH] = $dimensionsLength;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_WIDTH] = $dimensionsWidth;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_HEIGHT] = $dimensionsHeight;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_UNIT] = $dimensionsUnit;
        $weight[self::PARAM_WEIGHT_VALUE] = $weightValue;
        $weight[self::PARAM_WEIGHT_UNIT] = $weightUnit;
        $shipFromAddress = [
            self::PARAM_SHIP_FROM_ADDRESS_NAME => $senderName,
            self::PARAM_SHIP_FROM_ADDRESS_ADDRESS_LINE_1 => $senderAddress1,
            self::PARAM_SHIP_FROM_ADDRESS_CITY => $senderCity,
            self::PARAM_SHIP_FROM_ADDRESS_STATEORPROVINCECODE => $senderState,
            self::PARAM_SHIP_FROM_ADDRESS_POSTALCODE => $senderPostalCode,
            self::PARAM_SHIP_FROM_ADDRESS_COUNTRYCODE => $senderCountryCode,
            self::PARAM_SHIP_FROM_ADDRESS_EMAIL => $senderEmail,
            self::PARAM_SHIP_FROM_ADDRESS_PHONE => $senderPhone
        ];
        $shippingServiceOptions = [
            self::PARAM_SHIPPING_SERVICE_OPTIONS_DELIVERY_EXPERIENCE => $deliveryExperience,
            self::PARAM_SHIPPING_SERVICE_OPTIONS_CARRIER_WILL_PICK_UP => $carrierWillPickUp,
            self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE => [
                self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_CURRENCY_CODE => $currencyCode,
                self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_AMOUNT => $declaredValue
            ]
        ];
        foreach ($items as $item) {
            $itemList[] =
                [
                    self::PARAM_ITEM_LIST_ITEM_ORDER_ITEM_ID => $item['OrderItemId'],
                    self::PARAM_ITEM_LIST_ITEM_QUANTITY => $item['Quantity']
                ];
        }
        $parameters[self::PARAM_AMAZON_ORDER_ID] = $amazonOrderId;
        $parameters[self::PARAM_MUST_ARRIVE_BY_DATE] = $mustArriveByDate;
        $parameters[self::PARAM_PACKAGE_DIMENSIONS] = $dimensions;
        $parameters[self::PARAM_WEIGHT] = $weight;
        $parameters[self::PARAM_SHIP_DATE] = $shipDate;
        $parameters[self::PARAM_SHIP_FROM_ADDRESS] = $shipFromAddress;
        $parameters[self::PARAM_SHIPPING_SERVICE_OPTIONS] = $shippingServiceOptions;
        $parameters['ItemList'] = $itemList;
        return $this->getEligibleShippingServices([self::PARAM_SELLER_ID=> $this->sellerId,  'ShipmentRequestDetails' => $parameters]);
    }
    public function callCreateShipment($amazonOrderId, $mustArriveByDate, $dimensionsLength, $dimensionsWidth, $dimensionsHeight, $dimensionsUnit='inches', $weightValue, $weightUnit = 'ounces', $shipDate, $senderName, $senderAddress1, $senderCity, $senderState, $senderPostalCode, $senderCountryCode, $senderEmail, $senderPhone, $deliveryExperience = 'DeliveryConfirmationWithoutSignature', $carrierWillPickUp = false, $currencyCode, $declaredValue=0, $items=[], $shippingServiceId, $shippingServiceOfferId) {
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_LENGTH] = $dimensionsLength;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_WIDTH] = $dimensionsWidth;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_HEIGHT] = $dimensionsHeight;
        $dimensions[self::PARAM_PACKAGE_DIMENSIONS_UNIT] = $dimensionsUnit;
        $weight[self::PARAM_WEIGHT_VALUE] = $weightValue;
        $weight[self::PARAM_WEIGHT_UNIT] = $weightUnit;
        $shipFromAddress = [
            self::PARAM_SHIP_FROM_ADDRESS_NAME => $senderName,
            self::PARAM_SHIP_FROM_ADDRESS_ADDRESS_LINE_1 => $senderAddress1,
            self::PARAM_SHIP_FROM_ADDRESS_CITY => $senderCity,
            self::PARAM_SHIP_FROM_ADDRESS_STATEORPROVINCECODE => $senderState,
            self::PARAM_SHIP_FROM_ADDRESS_POSTALCODE => $senderPostalCode,
            self::PARAM_SHIP_FROM_ADDRESS_COUNTRYCODE => $senderCountryCode,
            self::PARAM_SHIP_FROM_ADDRESS_EMAIL => $senderEmail,
            self::PARAM_SHIP_FROM_ADDRESS_PHONE => $senderPhone
        ];
        $shippingServiceOptions = [
            self::PARAM_SHIPPING_SERVICE_OPTIONS_DELIVERY_EXPERIENCE => $deliveryExperience,
            self::PARAM_SHIPPING_SERVICE_OPTIONS_CARRIER_WILL_PICK_UP => $carrierWillPickUp,
            self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE => [
                self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_CURRENCY_CODE => $currencyCode,
                self::PARAM_SHIPPING_SERVICE_OPTIONS_DECLARED_VALUE_AMOUNT => $declaredValue
            ],
            self::PARAM_SHIPPING_SERVICE_OPTIONS_LABEL_FORMAT => 'PDF'
        ];
        foreach ($items as $item) {
            $itemList[] =
                [
                    self::PARAM_ITEM_LIST_ITEM_ORDER_ITEM_ID => $item['OrderItemId'],
                    self::PARAM_ITEM_LIST_ITEM_QUANTITY => $item['Quantity']
                ];
        }
        $parameters[self::PARAM_AMAZON_ORDER_ID] = $amazonOrderId;
        $parameters[self::PARAM_MUST_ARRIVE_BY_DATE] = $mustArriveByDate;
        $parameters[self::PARAM_PACKAGE_DIMENSIONS] = $dimensions;
        $parameters[self::PARAM_WEIGHT] = $weight;
        $parameters[self::PARAM_SHIP_DATE] = $shipDate;
        $parameters[self::PARAM_SHIP_FROM_ADDRESS] = $shipFromAddress;
        $parameters[self::PARAM_SHIPPING_SERVICE_OPTIONS] = $shippingServiceOptions;
        $parameters['ItemList'] = $itemList;
        return $this->createShipment([
            self::PARAM_SELLER_ID=> $this->sellerId,  
            self::PARAM_SHIPMENT_REQUEST_DETAILS => $parameters,
            self::PARAM_SHIPPING_SERVICE_ID => $shippingServiceId,
            self::PARAM_SHIPPING_SERVICE_OFFER_ID => $shippingServiceOfferId,
        ]);
    }
    public function callGetShipment($shipmentId) {
        return $this->getShipment([
            self::PARAM_SELLER_ID=> $this->sellerId,  
            self::PARAM_SHIPMENT_ID => $shipmentId
        ]);
    }
} 