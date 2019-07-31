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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 *  @see MWSMerchantFulfillmentService_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class MWSMerchantFulfillmentService_Mock implements MWSMerchantFulfillmentService_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_CancelShipment request or MWSMerchantFulfillmentService_Model_CancelShipment object itself
     * @see MWSMerchantFulfillmentService_Model_CancelShipment
     * @return MWSMerchantFulfillmentService_Model_CancelShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function cancelShipment($request)
    {
        require_once (dirname(__FILE__) . '/Model/CancelShipmentResponse.php');
        return MWSMerchantFulfillmentService_Model_CancelShipmentResponse::fromXML($this->_invoke('CancelShipment'));
    }

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_CreateShipment request or MWSMerchantFulfillmentService_Model_CreateShipment object itself
     * @see MWSMerchantFulfillmentService_Model_CreateShipment
     * @return MWSMerchantFulfillmentService_Model_CreateShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function createShipment($request)
    {
        require_once (dirname(__FILE__) . '/Model/CreateShipmentResponse.php');
        return MWSMerchantFulfillmentService_Model_CreateShipmentResponse::fromXML($this->_invoke('CreateShipment'));
    }

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetEligibleShippingServices request or MWSMerchantFulfillmentService_Model_GetEligibleShippingServices object itself
     * @see MWSMerchantFulfillmentService_Model_GetEligibleShippingServices
     * @return MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getEligibleShippingServices($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetEligibleShippingServicesResponse.php');
        return MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesResponse::fromXML($this->_invoke('GetEligibleShippingServices'));
    }

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetShipment request or MWSMerchantFulfillmentService_Model_GetShipment object itself
     * @see MWSMerchantFulfillmentService_Model_GetShipment
     * @return MWSMerchantFulfillmentService_Model_GetShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getShipment($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetShipmentResponse.php');
        return MWSMerchantFulfillmentService_Model_GetShipmentResponse::fromXML($this->_invoke('GetShipment'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSMerchantFulfillmentService_Model_GetServiceStatus request or MWSMerchantFulfillmentService_Model_GetServiceStatus object itself
     * @see MWSMerchantFulfillmentService_Model_GetServiceStatus
     * @return MWSMerchantFulfillmentService_Model_GetServiceStatusResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MWSMerchantFulfillmentService_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
