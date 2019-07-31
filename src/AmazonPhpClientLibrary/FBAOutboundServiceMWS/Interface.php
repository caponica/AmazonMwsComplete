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

interface  FBAOutboundServiceMWS_Interface
{

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
    public function cancelFulfillmentOrder($request);


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
    public function createFulfillmentOrder($request);


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
    public function createFulfillmentReturn($request);


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
    public function getFulfillmentOrder($request);


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
    public function getFulfillmentPreview($request);


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
    public function getPackageTrackingDetails($request);


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
    public function getServiceStatus($request);


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
    public function listAllFulfillmentOrders($request);


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
    public function listAllFulfillmentOrdersByNextToken($request);


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
    public function listReturnReasonCodes($request);


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
    public function updateFulfillmentOrder($request);

}