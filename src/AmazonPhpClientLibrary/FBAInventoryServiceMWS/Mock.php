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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Tue Sep 11 14:38:40 PDT 2018
 */

/**
 *  @see FBAInventoryServiceMWS_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class FBAInventoryServiceMWS_Mock implements FBAInventoryServiceMWS_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Service Status
     * Gets the status of the service.
     *     Status is one of GREEN, RED representing:
     *     GREEN: The service section is operating normally.
     *     RED: The service section disruption.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_GetServiceStatus request or FBAInventoryServiceMWS_Model_GetServiceStatus object itself
     * @see FBAInventoryServiceMWS_Model_GetServiceStatus
     * @return FBAInventoryServiceMWS_Model_GetServiceStatusResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return FBAInventoryServiceMWS_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Inventory Supply
     * Get information about the supply of seller-owned inventory in
     *     Amazon's fulfillment network. "Supply" is inventory that is available
     *     for fulfilling (a.k.a. Multi-Channel Fulfillment) orders. In general
     *     this includes all sellable inventory that has been received by Amazon,
     *     that is not reserved for existing orders or for internal FC processes,
     *     and also inventory expected to be received from inbound shipments.
     * 
     *     This operation provides 2 typical usages by setting different 
     *     ListInventorySupplyRequest value:
     *     
     *     1. Set value to SellerSkus and not set value to QueryStartDateTime, 
     *     this operation will return all sellable inventory that has been received 
     *     by Amazon's fulfillment network for these SellerSkus.
     * 
     *     2. Not set value to SellerSkus and set value to QueryStartDateTime,
     *     This operation will return information about the supply of all seller-owned
     *     inventory in Amazon's fulfillment network, for inventory items that may have had
     *     recent changes in inventory levels. It provides the most efficient mechanism 
     *     for clients to maintain local copies of inventory supply data.
     * 
     *     Only 1 of these 2 parameters (SellerSkus and QueryStartDateTime) can be set value for 1 request.
     *     If both with values or neither with values, an exception will be thrown.
     * 
     *     This operation is used with ListInventorySupplyByNextToken
     *     to paginate over the resultset. Begin pagination by invoking the
     *     ListInventorySupply operation, and retrieve the first set of
     *     results. If more results are available,continuing iteratively requesting further 
     *     pages results by invoking the ListInventorySupplyByNextToken operation (each time 
     *     passing in the NextToken value from the previous result), until the returned NextToken
     *     is null, indicating no further results are available.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupply request or FBAInventoryServiceMWS_Model_ListInventorySupply object itself
     * @see FBAInventoryServiceMWS_Model_ListInventorySupply
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function listInventorySupply($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListInventorySupplyResponse.php');
        return FBAInventoryServiceMWS_Model_ListInventorySupplyResponse::fromXML($this->_invoke('ListInventorySupply'));
    }

    /**
     * List Inventory Supply By Next Token
     * Continues pagination over a resultset of inventory data for inventory
     *     items.
     *     
     *     This operation is used in conjunction with ListUpdatedInventorySupply.
     *     Please refer to documentation for that operation for further details.
     *
     * @param mixed $request array of parameters for FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken request or FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken object itself
     * @see FBAInventoryServiceMWS_Model_ListInventorySupplyByNextToken
     * @return FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse
     *
     * @throws FBAInventoryServiceMWS_Exception
     */
    public function listInventorySupplyByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListInventorySupplyByNextTokenResponse.php');
        return FBAInventoryServiceMWS_Model_ListInventorySupplyByNextTokenResponse::fromXML($this->_invoke('ListInventorySupplyByNextToken'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
