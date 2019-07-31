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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

interface  FBAInboundServiceMWS_Interface
{

    /**
     * Confirm Preorder
     * Given a shipment id. and date as input, this API confirms a shipment as a
     * pre-order.
     * This date must be the same as the NeedByDate (NBD) that is returned in the
     * GetPreorderInfo API. Any other date will result in an appropriate error code.
     * All items in the shipment with a release date on or after the
     * ConfirmedFulfillableDate ( also returned by the GetPreorderInfo  API) would
     * be pre-orderable on the website and would be fulfilled without promise breaks,
     * if the NBD is met.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ConfirmPreorder request or FBAInboundServiceMWS_Model_ConfirmPreorder object itself
     * @see FBAInboundServiceMWS_Model_ConfirmPreorderRequest
     * @return FBAInboundServiceMWS_Model_ConfirmPreorderResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function confirmPreorder($request);


    /**
     * Confirm Transport Request
     * Confirms the estimate returned by the EstimateTransportRequest operation.
     *     Once this operation has been called successfully, the seller agrees to allow Amazon to charge
     *     their account the amount returned in the estimate.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ConfirmTransportRequest request or FBAInboundServiceMWS_Model_ConfirmTransportRequest object itself
     * @see FBAInboundServiceMWS_Model_ConfirmTransportInputRequest
     * @return FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function confirmTransportRequest($request);


    /**
     * Create Inbound Shipment
     * Creates an inbound shipment. It may include up to 200 items. 
     * The initial status of a shipment will be set to 'Working'.
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     * More items may be added using the Update call.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_CreateInboundShipment request or FBAInboundServiceMWS_Model_CreateInboundShipment object itself
     * @see FBAInboundServiceMWS_Model_CreateInboundShipmentRequest
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function createInboundShipment($request);


    /**
     * Create Inbound Shipment Plan
     * Plans inbound shipments for a set of items.  Registers identifiers if needed,
     * and assigns ShipmentIds for planned shipments.
     * When all the items are not all in the same category (e.g. some sortable, some 
     * non-sortable) it may be necessary to create multiple shipments (one for each 
     * of the shipment groups returned).
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_CreateInboundShipmentPlan request or FBAInboundServiceMWS_Model_CreateInboundShipmentPlan object itself
     * @see FBAInboundServiceMWS_Model_CreateInboundShipmentPlanRequest
     * @return FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function createInboundShipmentPlan($request);


    /**
     * Estimate Transport Request
     * Initiates the process for requesting an estimated shipping cost based-on the shipment
     *     for which the request is being made, whether or not the carrier shipment is partnered/non-partnered
     *     and the carrier type.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_EstimateTransportRequest request or FBAInboundServiceMWS_Model_EstimateTransportRequest object itself
     * @see FBAInboundServiceMWS_Model_EstimateTransportInputRequest
     * @return FBAInboundServiceMWS_Model_EstimateTransportRequestResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function estimateTransportRequest($request);


    /**
     * Get Bill Of Lading
     * Retrieves the PDF-formatted BOL data for a partnered LTL shipment.
     *     This PDF data will be ZIP'd and then it will be encoded as a Base64 string, and a
     *     MD5 hash is included with the response to validate the BOL data which will be encoded as Base64.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetBillOfLading request or FBAInboundServiceMWS_Model_GetBillOfLading object itself
     * @see FBAInboundServiceMWS_Model_GetBillOfLadingRequest
     * @return FBAInboundServiceMWS_Model_GetBillOfLadingResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getBillOfLading($request);


    /**
     * Get Inbound Guidance For ASIN
     * Given a list of ASINs and shipToCountryCode, this API returns Inbound
     *      guidance to ASINs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetInboundGuidanceForASIN request or FBAInboundServiceMWS_Model_GetInboundGuidanceForASIN object itself
     * @see FBAInboundServiceMWS_Model_GetInboundGuidanceForASINRequest
     * @return FBAInboundServiceMWS_Model_GetInboundGuidanceForASINResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getInboundGuidanceForASIN($request);


    /**
     * Get Inbound Guidance For SKU
     * Given a list of SKUs and shipToCountryCode, this API returns Inbound
     *      guidance to SKUs in request with optional reason code if applicable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetInboundGuidanceForSKU request or FBAInboundServiceMWS_Model_GetInboundGuidanceForSKU object itself
     * @see FBAInboundServiceMWS_Model_GetInboundGuidanceForSKURequest
     * @return FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getInboundGuidanceForSKU($request);


    /**
     * Get Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing 
     *     Amazon-partnered carriers. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *     
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPackageLabels request or FBAInboundServiceMWS_Model_GetPackageLabels object itself
     * @see FBAInboundServiceMWS_Model_GetPackageLabelsRequest
     * @return FBAInboundServiceMWS_Model_GetPackageLabelsResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getPackageLabels($request);


    /**
     * Get Pallet Labels
     * Retrieves the PDF-formatted pallet label data for the pallets in an LTL shipment. These labels
     *     include relevant data for shipments being sent to Amazon Fulfillment Centers. The PDF data will be 
     *     ZIP'd and then it will be encoded as a Base64 string, and MD5 hash is included with the response to 
     *     validate the label data which will be encoded as Base64. The language of the address and FC prep 
     *     instructions sections of the labels are determined by the marketplace in which the request is being 
     *     made and the marketplace of the destination FC, respectively.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPalletLabels request or FBAInboundServiceMWS_Model_GetPalletLabels object itself
     * @see FBAInboundServiceMWS_Model_GetPalletLabelsRequest
     * @return FBAInboundServiceMWS_Model_GetPalletLabelsResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getPalletLabels($request);


    /**
     * Get Preorder Info
     * Given a shipment id. as input, based on the release date of the items in the
     * shipment, this API returns the suggested need By Date that the shipment items
     * must reach Amazon FC to successfully fulfill Pre-Orders without any promise
     * breaks.
     * This API also returns the confirmed Fullfillable date. All items in the
     * shipment that have a release date on or after this date would have the
     * pre-order buy box show up on the detail page if this shipment is marked as a
     * pre-orderable.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPreorderInfo request or FBAInboundServiceMWS_Model_GetPreorderInfo object itself
     * @see FBAInboundServiceMWS_Model_GetPreorderInfoRequest
     * @return FBAInboundServiceMWS_Model_GetPreorderInfoResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getPreorderInfo($request);


    /**
     * Get Prep Instructions For ASIN
     * Returns the required prep that must be performed for a set of items, identified
     * by ASINs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPrepInstructionsForASIN request or FBAInboundServiceMWS_Model_GetPrepInstructionsForASIN object itself
     * @see FBAInboundServiceMWS_Model_GetPrepInstructionsForASINRequest
     * @return FBAInboundServiceMWS_Model_GetPrepInstructionsForASINResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getPrepInstructionsForASIN($request);


    /**
     * Get Prep Instructions For SKU
     * Returns the required prep that must be performed for a set of items, identified
     * by SellerSKUs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetPrepInstructionsForSKU request or FBAInboundServiceMWS_Model_GetPrepInstructionsForSKU object itself
     * @see FBAInboundServiceMWS_Model_GetPrepInstructionsForSKURequest
     * @return FBAInboundServiceMWS_Model_GetPrepInstructionsForSKUResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getPrepInstructionsForSKU($request);


    /**
     * Get Service Status
     * Gets the status of the service.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetServiceStatus request or FBAInboundServiceMWS_Model_GetServiceStatus object itself
     * @see FBAInboundServiceMWS_Model_GetServiceStatusRequest
     * @return FBAInboundServiceMWS_Model_GetServiceStatusResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getServiceStatus($request);


    /**
     * Get Transport Content
     * A read-only operation which sellers use to retrieve the current
     *     details about the transportation of an inbound shipment, including status of the
     *     partnered carrier workflow and status of individual packages when they arrive at our FCs.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetTransportContent request or FBAInboundServiceMWS_Model_GetTransportContent object itself
     * @see FBAInboundServiceMWS_Model_GetTransportContentRequest
     * @return FBAInboundServiceMWS_Model_GetTransportContentResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getTransportContent($request);


    /**
     * Get Unique Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing 
     *     Amazon-partnered carriers. Each label contains a unique package identifier that represents the mapping between
     *     physical and virtual packages. This API requires that Carton Information has been provided for all packages in the
     *     shipment. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *     
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_GetUniquePackageLabels request or FBAInboundServiceMWS_Model_GetUniquePackageLabels object itself
     * @see FBAInboundServiceMWS_Model_GetUniquePackageLabelsRequest
     * @return FBAInboundServiceMWS_Model_GetUniquePackageLabelsResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function getUniquePackageLabels($request);


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
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentItems request or FBAInboundServiceMWS_Model_ListInboundShipmentItems object itself
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentItemsRequest
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentItemsResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function listInboundShipmentItems($request);


    /**
     * List Inbound Shipment Items By Next Token
     * Gets the next set of inbound shipment items with the NextToken 
     * which can be used to iterate through the remaining inbound shipment 
     * items. If a NextToken is not returned, it indicates the end-of-data. 
     * You must first call ListInboundShipmentItems to get a 'NextToken'.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextToken request or FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextToken object itself
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenRequest
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentItemsByNextTokenResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function listInboundShipmentItemsByNextToken($request);


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
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipments request or FBAInboundServiceMWS_Model_ListInboundShipments object itself
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentsRequest
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function listInboundShipments($request);


    /**
     * List Inbound Shipments By Next Token
     * Gets the next set of inbound shipments created by a Seller with the 
     * NextToken which can be used to iterate through the remaining inbound 
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_ListInboundShipmentsByNextToken request or FBAInboundServiceMWS_Model_ListInboundShipmentsByNextToken object itself
     * @see FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenRequest
     * @return FBAInboundServiceMWS_Model_ListInboundShipmentsByNextTokenResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function listInboundShipmentsByNextToken($request);


    /**
     * Put Transport Content
     * A write operation which sellers use to provide transportation details regarding
     *     how an inbound shipment will arrive at Amazon's Fulfillment Centers.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_PutTransportContent request or FBAInboundServiceMWS_Model_PutTransportContent object itself
     * @see FBAInboundServiceMWS_Model_PutTransportContentRequest
     * @return FBAInboundServiceMWS_Model_PutTransportContentResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function putTransportContent($request);


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
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_UpdateInboundShipment request or FBAInboundServiceMWS_Model_UpdateInboundShipment object itself
     * @see FBAInboundServiceMWS_Model_UpdateInboundShipmentRequest
     * @return FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function updateInboundShipment($request);


    /**
     * Void Transport Request
     * Voids a previously-confirmed transport request. It only succeeds for requests
     *     made by the VoidDeadline provided in the PartneredEstimate component of the
     *     response of the GetTransportContent operation for a shipment. Currently this
     *     deadline is 24 hours after confirming a transport request for a partnered small parcel
     *     request and 1 hour after confirming a transport request for a partnered LTL/TL
     *     request, though this is subject to change at any time without notice.
     *
     * @param mixed $request array of parameters for FBAInboundServiceMWS_Model_VoidTransportRequest request or FBAInboundServiceMWS_Model_VoidTransportRequest object itself
     * @see FBAInboundServiceMWS_Model_VoidTransportInputRequest
     * @return FBAInboundServiceMWS_Model_VoidTransportRequestResponse
     *
     * @throws FBAInboundServiceMWS_Exception
     */
    public function voidTransportRequest($request);

}