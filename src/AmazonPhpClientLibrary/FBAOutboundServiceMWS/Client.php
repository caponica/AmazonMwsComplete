<?php
/*******************************************************************************
 * Copyright 2009-2018 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

/**
 *  @see FBAOutboundServiceMWS_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php');

/**
 * FBAOutboundServiceMWS_Client is an implementation of FBAOutboundServiceMWS
 *
 */
class FBAOutboundServiceMWS_Client implements FBAOutboundServiceMWS_Interface
{

    const SERVICE_VERSION = '2010-10-01';
    const MWS_CLIENT_VERSION = '2016-01-01';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => null,
                               'UserAgent' => 'FBAOutboundServiceMWS PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'ProxyUsername' => null,
                               'ProxyPassword' => null,
                               'MaxErrorRetry' => 3,
                               'Headers' => array()
                               );


    /**
     * Cancel Fulfillment Order
     * Request for Amazon to no longer attempt to fulfill an existing
     *   fulfillment order. Amazon will attempt to stop fulfillment of all
     *   items that haven't already shipped, but cannot guarantee success.
     *   Note: Items that have already shipped cannot be cancelled.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_CancelFulfillmentOrder request or FBAOutboundServiceMWS_Model_CancelFulfillmentOrder object itself
     * @see FBAOutboundServiceMWS_Model_CancelFulfillmentOrderRequest
     * @return FBAOutboundServiceMWS_Model_CancelFulfillmentOrderResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function cancelFulfillmentOrder($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_CancelFulfillmentOrderRequest)) {
            require_once (dirname(__FILE__) . '/Model/CancelFulfillmentOrderRequest.php');
            $request = new FBAOutboundServiceMWS_Model_CancelFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/CancelFulfillmentOrderResponse.php');
        $response = FBAOutboundServiceMWS_Model_CancelFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert CancelFulfillmentOrderRequest to name value pairs
     */
    private function _convertCancelFulfillmentOrder($request) {

        $parameters = array();
        $parameters['Action'] = 'CancelFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }

        return $parameters;
    }


    /**
     * Create Fulfillment Order
     * The SellerFulfillmentOrderId must be unique for all fulfillment
     *   orders created by the seller. If your system already has a
     *   unique order identifier, then that may be a good value to put in
     *   this field.
     * 
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     * 
     * 
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *   
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     * 
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     * 
     * 
     *   DestinationAddress is the address the items will be shipped to.
     * 
     *   FulfillmentPolicy indicates how unfulfillable items should be 
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *   
     *   FulfillmentMethod indicates the intended recipient channel for the 
     *   order whether it be a consumer order or inventory return.
     *   default is Consumer.
     *   The available methods to fulfill a given order:
     *    * Consumer indicates a customer order, this is the default.
     *    * Removal indicates that the inventory should be returned to the
     *      specified destination address.
     *   
     *   
     *   NotificationEmailList can be used to provide a list of e-mail 
     *   addresses to receive ship-complete e-mail notifications. These 
     *   e-mails are customer-facing e-mails sent by FBA on behalf of 
     *   the seller.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_CreateFulfillmentOrder request or FBAOutboundServiceMWS_Model_CreateFulfillmentOrder object itself
     * @see FBAOutboundServiceMWS_Model_CreateFulfillmentOrderRequest
     * @return FBAOutboundServiceMWS_Model_CreateFulfillmentOrderResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function createFulfillmentOrder($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_CreateFulfillmentOrderRequest)) {
            require_once (dirname(__FILE__) . '/Model/CreateFulfillmentOrderRequest.php');
            $request = new FBAOutboundServiceMWS_Model_CreateFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/CreateFulfillmentOrderResponse.php');
        $response = FBAOutboundServiceMWS_Model_CreateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert CreateFulfillmentOrderRequest to name value pairs
     */
    private function _convertCreateFulfillmentOrder($request) {

        $parameters = array();
        $parameters['Action'] = 'CreateFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetDisplayableOrderId()) {
            $parameters['DisplayableOrderId'] =  $request->getDisplayableOrderId();
        }
        if ($request->isSetDisplayableOrderDateTime()) {
            $parameters['DisplayableOrderDateTime'] =  $request->getDisplayableOrderDateTime();
        }
        if ($request->isSetDisplayableOrderComment()) {
            $parameters['DisplayableOrderComment'] =  $request->getDisplayableOrderComment();
        }
        if ($request->isSetShippingSpeedCategory()) {
            $parameters['ShippingSpeedCategory'] =  $request->getShippingSpeedCategory();
        }
        if ($request->isSetDeliveryWindow()) {
            $DeliveryWindowCreateFulfillmentOrderRequest = $request->getDeliveryWindow();
            foreach  ($DeliveryWindowCreateFulfillmentOrderRequest->getStartDateTime() as $StartDateTimeDeliveryWindowIndex => $StartDateTimeDeliveryWindow) {
                $parameters['DeliveryWindow' . '.' . 'StartDateTime' . '.'  . ($StartDateTimeDeliveryWindowIndex + 1)] =  $StartDateTimeDeliveryWindow;
            }
        }
        if ($request->isSetDestinationAddress()) {
            $DestinationAddressCreateFulfillmentOrderRequest = $request->getDestinationAddress();
            foreach  ($DestinationAddressCreateFulfillmentOrderRequest->getName() as $NameDestinationAddressIndex => $NameDestinationAddress) {
                $parameters['DestinationAddress' . '.' . 'Name' . '.'  . ($NameDestinationAddressIndex + 1)] =  $NameDestinationAddress;
            }
        }
        if ($request->isSetFulfillmentAction()) {
            $parameters['FulfillmentAction'] =  $request->getFulfillmentAction();
        }
        if ($request->isSetFulfillmentPolicy()) {
            $parameters['FulfillmentPolicy'] =  $request->getFulfillmentPolicy();
        }
        if ($request->isSetFulfillmentMethod()) {
            $parameters['FulfillmentMethod'] =  $request->getFulfillmentMethod();
        }
        if ($request->isSetCODSettings()) {
            $CODSettingsCreateFulfillmentOrderRequest = $request->getCODSettings();
            foreach  ($CODSettingsCreateFulfillmentOrderRequest->getIsCODRequired() as $IsCODRequiredCODSettingsIndex => $IsCODRequiredCODSettings) {
                $parameters['CODSettings' . '.' . 'IsCODRequired' . '.'  . ($IsCODRequiredCODSettingsIndex + 1)] =  $IsCODRequiredCODSettings;
            }
        }
        if ($request->isSetShipFromCountryCode()) {
            $parameters['ShipFromCountryCode'] =  $request->getShipFromCountryCode();
        }
        if ($request->isSetNotificationEmailList()) {
            $NotificationEmailListCreateFulfillmentOrderRequest = $request->getNotificationEmailList();
            foreach  ($NotificationEmailListCreateFulfillmentOrderRequest->getmember() as $memberNotificationEmailListIndex => $memberNotificationEmailList) {
                $parameters['NotificationEmailList' . '.' . 'member' . '.'  . ($memberNotificationEmailListIndex + 1)] =  $memberNotificationEmailList;
            }
        }
        if ($request->isSetItems()) {
            $ItemsCreateFulfillmentOrderRequest = $request->getItems();
            foreach  ($ItemsCreateFulfillmentOrderRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }

        return $parameters;
    }


    /**
     * Create Fulfillment Return
     * Requests a return of one or more items that were 
     *   originally fulfilled by SI. The client must look at
     *   the item/authorization list details in the response
     *   to determine what was accepted. All accepted returned 
     *   items will be returned as a list in ReturnItemList. 
     *   All non-returnable items are return as a list in InvalidReturnItemList. 
     *   Both lists will always be returned as part of the response. If all 
     *   items are accepted for return InvalidReturnItemList will be empty. If all 
     *   the items are invalid for a return, ReturnItemList will be empty. 
     *   If all the items are invalid for a return, ReturnItemList will be empty.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_CreateFulfillmentReturn request or FBAOutboundServiceMWS_Model_CreateFulfillmentReturn object itself
     * @see FBAOutboundServiceMWS_Model_CreateFulfillmentReturnRequest
     * @return FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function createFulfillmentReturn($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_CreateFulfillmentReturnRequest)) {
            require_once (dirname(__FILE__) . '/Model/CreateFulfillmentReturnRequest.php');
            $request = new FBAOutboundServiceMWS_Model_CreateFulfillmentReturnRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateFulfillmentReturn';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/CreateFulfillmentReturnResponse.php');
        $response = FBAOutboundServiceMWS_Model_CreateFulfillmentReturnResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert CreateFulfillmentReturnRequest to name value pairs
     */
    private function _convertCreateFulfillmentReturn($request) {

        $parameters = array();
        $parameters['Action'] = 'CreateFulfillmentReturn';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetItems()) {
            $ItemsCreateFulfillmentReturnRequest = $request->getItems();
            foreach  ($ItemsCreateFulfillmentReturnRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }

        return $parameters;
    }


    /**
     * Get Fulfillment Order
     * Get detailed information about a FulfillmentOrder.  This includes the
     *   original fulfillment order request, the status of the order and its
     *   items in Amazon's fulfillment network, and the shipments that have been
     *   generated to fulfill the order.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_GetFulfillmentOrder request or FBAOutboundServiceMWS_Model_GetFulfillmentOrder object itself
     * @see FBAOutboundServiceMWS_Model_GetFulfillmentOrderRequest
     * @return FBAOutboundServiceMWS_Model_GetFulfillmentOrderResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function getFulfillmentOrder($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_GetFulfillmentOrderRequest)) {
            require_once (dirname(__FILE__) . '/Model/GetFulfillmentOrderRequest.php');
            $request = new FBAOutboundServiceMWS_Model_GetFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetFulfillmentOrderResponse.php');
        $response = FBAOutboundServiceMWS_Model_GetFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetFulfillmentOrderRequest to name value pairs
     */
    private function _convertGetFulfillmentOrder($request) {

        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }

        return $parameters;
    }


    /**
     * Get Fulfillment Preview
     * Get estimated shipping dates and fees for all 
     *   available shipping speed given a set of seller SKUs and quantities      
     * 
     *   If "ShippingSpeedCategories" are inputed, only previews for those options will be returned. 
     *   
     *   If "ShippingSpeedCategories" are not inputed, then previews for all available options 
     *   are returned.
     * 
     *   The service will return the fulfillment estimates for a set of Seller 
     *   SKUs and quantities.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_GetFulfillmentPreview request or FBAOutboundServiceMWS_Model_GetFulfillmentPreview object itself
     * @see FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest
     * @return FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function getFulfillmentPreview($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest)) {
            require_once (dirname(__FILE__) . '/Model/GetFulfillmentPreviewRequest.php');
            $request = new FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetFulfillmentPreview';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetFulfillmentPreviewResponse.php');
        $response = FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetFulfillmentPreviewRequest to name value pairs
     */
    private function _convertGetFulfillmentPreview($request) {

        $parameters = array();
        $parameters['Action'] = 'GetFulfillmentPreview';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetAddress()) {
            $AddressGetFulfillmentPreviewRequest = $request->getAddress();
            foreach  ($AddressGetFulfillmentPreviewRequest->getName() as $NameAddressIndex => $NameAddress) {
                $parameters['Address' . '.' . 'Name' . '.'  . ($NameAddressIndex + 1)] =  $NameAddress;
            }
        }
        if ($request->isSetItems()) {
            $ItemsGetFulfillmentPreviewRequest = $request->getItems();
            foreach  ($ItemsGetFulfillmentPreviewRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }
        if ($request->isSetShippingSpeedCategories()) {
            $ShippingSpeedCategoriesGetFulfillmentPreviewRequest = $request->getShippingSpeedCategories();
            foreach  ($ShippingSpeedCategoriesGetFulfillmentPreviewRequest->getmember() as $memberShippingSpeedCategoriesIndex => $memberShippingSpeedCategories) {
                $parameters['ShippingSpeedCategories' . '.' . 'member' . '.'  . ($memberShippingSpeedCategoriesIndex + 1)] =  $memberShippingSpeedCategories;
            }
        }
        if ($request->isSetIncludeCODFulfillmentPreview()) {
            $parameters['IncludeCODFulfillmentPreview'] =  $request->getIncludeCODFulfillmentPreview() ? "true" : "false";
        }
        if ($request->isSetIncludeDeliveryWindows()) {
            $parameters['IncludeDeliveryWindows'] =  $request->getIncludeDeliveryWindows() ? "true" : "false";
        }

        return $parameters;
    }


    /**
     * Get Package Tracking Details
     * Gets the tracking details for a shipment package.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_GetPackageTrackingDetails request or FBAOutboundServiceMWS_Model_GetPackageTrackingDetails object itself
     * @see FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsRequest
     * @return FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function getPackageTrackingDetails($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsRequest)) {
            require_once (dirname(__FILE__) . '/Model/GetPackageTrackingDetailsRequest.php');
            $request = new FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageTrackingDetails';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetPackageTrackingDetailsResponse.php');
        $response = FBAOutboundServiceMWS_Model_GetPackageTrackingDetailsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetPackageTrackingDetailsRequest to name value pairs
     */
    private function _convertGetPackageTrackingDetails($request) {

        $parameters = array();
        $parameters['Action'] = 'GetPackageTrackingDetails';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetPackageNumber()) {
            $parameters['PackageNumber'] =  $request->getPackageNumber();
        }

        return $parameters;
    }


    /**
     * Get Service Status
     * Request to poll the system for availability.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_GetServiceStatus request or FBAOutboundServiceMWS_Model_GetServiceStatus object itself
     * @see FBAOutboundServiceMWS_Model_GetServiceStatusRequest
     * @return FBAOutboundServiceMWS_Model_GetServiceStatusResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_GetServiceStatusRequest)) {
            require_once (dirname(__FILE__) . '/Model/GetServiceStatusRequest.php');
            $request = new FBAOutboundServiceMWS_Model_GetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        $response = FBAOutboundServiceMWS_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request) {

        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }

        return $parameters;
    }


    /**
     * List All Fulfillment Orders
     * Gets the first set of fulfillment orders that are currently being
     *   fulfilled or that were being fulfilled at some time in the past
     *   (as specified by the query parameters). Also returns a NextToken
     *   which can be used iterate through the remaining fulfillment orders
     *   (via the ListAllFulfillmentOrdersByNextToken operation).
     * 
     *   If a NextToken is not returned, it indicates the end-of-data.
     *   
     *   If the QueryStartDateTime is set, the results will include all orders
     *   currently being fulfilled, and all orders that were being fulfilled
     *   since that date and time.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_ListAllFulfillmentOrders request or FBAOutboundServiceMWS_Model_ListAllFulfillmentOrders object itself
     * @see FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest
     * @return FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function listAllFulfillmentOrders($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest)) {
            require_once (dirname(__FILE__) . '/Model/ListAllFulfillmentOrdersRequest.php');
            $request = new FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/ListAllFulfillmentOrdersResponse.php');
        $response = FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListAllFulfillmentOrdersRequest to name value pairs
     */
    private function _convertListAllFulfillmentOrders($request) {

        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrders';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetQueryStartDateTime()) {
            $parameters['QueryStartDateTime'] =  $request->getQueryStartDateTime();
        }
        if ($request->isSetFulfillmentMethod()) {
            $FulfillmentMethodListAllFulfillmentOrdersRequest = $request->getFulfillmentMethod();
            foreach  ($FulfillmentMethodListAllFulfillmentOrdersRequest->getmember() as $memberFulfillmentMethodIndex => $memberFulfillmentMethod) {
                $parameters['FulfillmentMethod' . '.' . 'member' . '.'  . ($memberFulfillmentMethodIndex + 1)] =  $memberFulfillmentMethod;
            }
        }

        return $parameters;
    }


    /**
     * List All Fulfillment Orders By Next Token
     * Gets the next set of fulfillment orders that are currently being
     *   being fulfilled or that were being fulfilled at some time in the
     *   past.
     * 
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextToken request or FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextToken object itself
     * @see FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenRequest
     * @return FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function listAllFulfillmentOrdersByNextToken($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenRequest)) {
            require_once (dirname(__FILE__) . '/Model/ListAllFulfillmentOrdersByNextTokenRequest.php');
            $request = new FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/ListAllFulfillmentOrdersByNextTokenResponse.php');
        $response = FBAOutboundServiceMWS_Model_ListAllFulfillmentOrdersByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListAllFulfillmentOrdersByNextTokenRequest to name value pairs
     */
    private function _convertListAllFulfillmentOrdersByNextToken($request) {

        $parameters = array();
        $parameters['Action'] = 'ListAllFulfillmentOrdersByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }


    /**
     * List Return Reason Codes
     * This operation will result in a list of eligible return reasons for
     *   a given SKU and original ordering country. The eligible return reasons 
     *   may vary from country to country.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_ListReturnReasonCodes request or FBAOutboundServiceMWS_Model_ListReturnReasonCodes object itself
     * @see FBAOutboundServiceMWS_Model_ListReturnReasonCodesRequest
     * @return FBAOutboundServiceMWS_Model_ListReturnReasonCodesResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function listReturnReasonCodes($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_ListReturnReasonCodesRequest)) {
            require_once (dirname(__FILE__) . '/Model/ListReturnReasonCodesRequest.php');
            $request = new FBAOutboundServiceMWS_Model_ListReturnReasonCodesRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListReturnReasonCodes';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/ListReturnReasonCodesResponse.php');
        $response = FBAOutboundServiceMWS_Model_ListReturnReasonCodesResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListReturnReasonCodesRequest to name value pairs
     */
    private function _convertListReturnReasonCodes($request) {

        $parameters = array();
        $parameters['Action'] = 'ListReturnReasonCodes';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] =  $request->getSellerSKU();
        }
        if ($request->isSetLanguage()) {
            $parameters['Language'] =  $request->getLanguage();
        }

        return $parameters;
    }


    /**
     * Update Fulfillment Order
     * The SellerFulfillmentOrderId must be the order ID of the original
     *     order that needs to be updated.
     * 
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     * 
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *   
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     * 
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     * 
     * 
     *   DestinationAddress is the address the items will be shipped to.
     *   
     *   FulfillmentAction indicates whether an order will be held or shipped. 
     *   Default is Hold. 
     *   * Hold if the order needs to be held but does not need to be shipped. 
     *   * Ship if the order is to be fulfilled and shipped out to the customer
     *   immediately. 
     * 
     *   FulfillmentPolicy indicates how unfulfillable items should be 
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *   
     *   NotificationEmailList can be used to provide a list of e-mail 
     *   addresses to receive ship-complete e-mail notifications. These 
     *   e-mails are customer-facing e-mails sent by FBA on behalf of 
     *   the seller.
     *
     * @param mixed $request array of parameters for FBAOutboundServiceMWS_Model_UpdateFulfillmentOrder request or FBAOutboundServiceMWS_Model_UpdateFulfillmentOrder object itself
     * @see FBAOutboundServiceMWS_Model_UpdateFulfillmentOrderRequest
     * @return FBAOutboundServiceMWS_Model_UpdateFulfillmentOrderResponse
     *
     * @throws FBAOutboundServiceMWS_Exception
     */
    public function updateFulfillmentOrder($request)
    {
        if (!($request instanceof FBAOutboundServiceMWS_Model_UpdateFulfillmentOrderRequest)) {
            require_once (dirname(__FILE__) . '/Model/UpdateFulfillmentOrderRequest.php');
            $request = new FBAOutboundServiceMWS_Model_UpdateFulfillmentOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateFulfillmentOrder';
        $httpResponse = $this->_invoke($parameters);

        require_once (dirname(__FILE__) . '/Model/UpdateFulfillmentOrderResponse.php');
        $response = FBAOutboundServiceMWS_Model_UpdateFulfillmentOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert UpdateFulfillmentOrderRequest to name value pairs
     */
    private function _convertUpdateFulfillmentOrder($request) {

        $parameters = array();
        $parameters['Action'] = 'UpdateFulfillmentOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerFulfillmentOrderId()) {
            $parameters['SellerFulfillmentOrderId'] =  $request->getSellerFulfillmentOrderId();
        }
        if ($request->isSetDisplayableOrderId()) {
            $parameters['DisplayableOrderId'] =  $request->getDisplayableOrderId();
        }
        if ($request->isSetDisplayableOrderDateTime()) {
            $parameters['DisplayableOrderDateTime'] =  $request->getDisplayableOrderDateTime();
        }
        if ($request->isSetDisplayableOrderComment()) {
            $parameters['DisplayableOrderComment'] =  $request->getDisplayableOrderComment();
        }
        if ($request->isSetShippingSpeedCategory()) {
            $parameters['ShippingSpeedCategory'] =  $request->getShippingSpeedCategory();
        }
        if ($request->isSetDestinationAddress()) {
            $DestinationAddressUpdateFulfillmentOrderRequest = $request->getDestinationAddress();
            foreach  ($DestinationAddressUpdateFulfillmentOrderRequest->getName() as $NameDestinationAddressIndex => $NameDestinationAddress) {
                $parameters['DestinationAddress' . '.' . 'Name' . '.'  . ($NameDestinationAddressIndex + 1)] =  $NameDestinationAddress;
            }
        }
        if ($request->isSetFulfillmentAction()) {
            $parameters['FulfillmentAction'] =  $request->getFulfillmentAction();
        }
        if ($request->isSetFulfillmentPolicy()) {
            $parameters['FulfillmentPolicy'] =  $request->getFulfillmentPolicy();
        }
        if ($request->isSetFulfillmentMethod()) {
            $parameters['FulfillmentMethod'] =  $request->getFulfillmentMethod();
        }
        if ($request->isSetShipFromCountryCode()) {
            $parameters['ShipFromCountryCode'] =  $request->getShipFromCountryCode();
        }
        if ($request->isSetNotificationEmailList()) {
            $NotificationEmailListUpdateFulfillmentOrderRequest = $request->getNotificationEmailList();
            foreach  ($NotificationEmailListUpdateFulfillmentOrderRequest->getmember() as $memberNotificationEmailListIndex => $memberNotificationEmailList) {
                $parameters['NotificationEmailList' . '.' . 'member' . '.'  . ($memberNotificationEmailListIndex + 1)] =  $memberNotificationEmailList;
            }
        }
        if ($request->isSetItems()) {
            $ItemsUpdateFulfillmentOrderRequest = $request->getItems();
            foreach  ($ItemsUpdateFulfillmentOrderRequest->getmember() as $memberItemsIndex => $memberItems) {
                $parameters['Items' . '.' . 'member' . '.'  . ($memberItemsIndex + 1)] =  $memberItems;
            }
        }

        return $parameters;
    }



    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct(
    $awsAccessKeyId, $awsSecretAccessKey, $config, $applicationName, $applicationVersion, $attributes = null)
    {
        if (PHP_VERSION_ID < 50600) {
            iconv_set_encoding('output_encoding', 'UTF-8');
            iconv_set_encoding('input_encoding', 'UTF-8');
            iconv_set_encoding('internal_encoding', 'UTF-8');
        } else {
            ini_set('default_charset', 'UTF-8');
        }

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
        $this->setUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    public function setUserAgentHeader(
        $applicationName,
        $applicationVersion,
        $attributes = null) {

        if (is_null($attributes)) {
            $attributes = array ();
        }

        $this->_config['UserAgent'] = 
            $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null) {
        if (is_null($applicationName) || $applicationName === "") {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent = 
            $this->quoteApplicationName($applicationName)
            . '/'
            . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for $key cannot be null or empty.");
            }

            $userAgent .= '; '
                . $this->quoteAttributeName($key)
                . '='
                . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

   /**
    * Collapse multiple whitespace characters into a single ' ' character.
    * @param $s
    * @return string
    */
   private function collapseWhitespace($s) {
       return preg_replace('/ {2,}|\s/', ' ', $s);
   }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\//', '\\/', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s) {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);

        return $quotedString;
    }


    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                require_once (dirname(__FILE__) . '/Exception.php');
                throw new FBAOutboundServiceMWS_Exception(
                    array ('ErrorCode' => 'InvalidServiceURL',
                           'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status = $response['Status'];
                if ($status == 200) {
                    return array('ResponseBody' => $response['ResponseBody'],
                      'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'],
                    $status, $response['ResponseHeaderMetadata']);
            }
        } catch (FBAOutboundServiceMWS_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            require_once (dirname(__FILE__) . '/Exception.php');
            throw new FBAOutboundServiceMWS_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if ($xmlBody !== false) {  // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }

        require_once (dirname(__FILE__) . '/Exception.php');
        return new FBAOutboundServiceMWS_Exception($exProps);
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
                $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach($allHeaders as $name => $val) {
            $str = $name . ": ";
            if(isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1)
        {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }
        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null)
        {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = "";
        $response = curl_exec($ch);

        if($response === false) {
            require_once (dirname(__FILE__) . '/Exception.php');
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            curl_close($ch);
            throw new FBAOutboundServiceMWS_Exception($exProps);
        }

        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }
    
    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in 
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     */
    private function _extractHeadersAndBody($response){
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; 
                $count < count($responseComponents) && $body == null; 
                $count++) {
            
            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);
            
            if($responseStatus != null && 
                    $this->_httpHeadersHaveContent($headers)){
                
                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }
        
        //If the body is null here then we were unable to parse the response and will throw an exception
        if($body == null){
            require_once (dirname(__FILE__) . '/Exception.php');
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new FBAOutboundServiceMWS_Exception($exProps);
        }

        return array(
                'Status' => $responseStatus, 
                'ResponseBody' => $body, 
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }
    
    /**
     * parse the status line of a header string for the proper format and
     * return the status code
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     */
    private function _extractHttpStatusCode($headers){
    	$statusCode = null; 
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
        	//The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2]; 
        }
        return $statusCode;
    }
    
    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header
     */
    private function _httpHeadersHaveContent($headers){
        return (1 === preg_match("/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|$)/", $headers) ||
                1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|$)/i", $headers));
    }
    
    /**
    *  extract a ResponseHeaderMetadata object from the raw headers
    */
    private function _extractResponseHeaderMetadata($rawHeaders){
        $inputHeaders = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers = array();
        $headers['x-mws-request-id'] = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp'] = null;
        $headers['x-mws-quota-max'] = null;
        $headers['x-mws-quota-remaining'] = null;
        $headers['x-mws-quota-resetsOn'] = null;

        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode (': ', $currentHeader);
            if (isset($keyValue[1])) {
                list ($key, $value) = $keyValue;
                if (isset($headers[$key]) && $headers[$key]!==null) {
                    $headers[$key] = $headers[$key] . "," . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }
 
        require_once(dirname(__FILE__) . '/Model/ResponseHeaderMetadata.php');
        return new FBAOutboundServiceMWS_Model_ResponseHeaderMetadata(
          $headers['x-mws-request-id'],
          $headers['x-mws-response-context'],
          $headers['x-mws-timestamp'],
          $headers['x-mws-quota-max'],
          $headers['x-mws-quota-remaining'],
          $headers['x-mws-quota-resetsOn']);
    }

    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     * @param $ch curl handle
     */
    protected function setSSLCurlOptions($ch) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    }

    /**
     * Exponential sleep on failed request
     *
     * @param retries current retry
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000);
            usleep($delay);
            return true;
        } 
        return false;
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (2 == $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
        return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }

    /**
     * Formats date as ISO 8601 timestamp
     */
    private function getFormattedTimestamp($dateTime)
    {
        return $dateTime->format(DATE_ISO8601);
    }

}
