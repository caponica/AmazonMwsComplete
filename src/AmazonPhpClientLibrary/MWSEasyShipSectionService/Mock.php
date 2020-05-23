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
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

/**
 *  @see MWSEasyShipSectionService_Interface
 */
require_once (dirname(__FILE__) . '/Interface.php'); 

class MWSEasyShipSectionService_Mock implements MWSEasyShipSectionService_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Create Scheduled Package
     * This operation schedules the order for pickup and returns scheduled package details.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_CreateScheduledPackage request or MWSEasyShipSectionService_Model_CreateScheduledPackage object itself
     * @see MWSEasyShipSectionService_Model_CreateScheduledPackage
     * @return MWSEasyShipSectionService_Model_CreateScheduledPackageResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function createScheduledPackage($request)
    {
        require_once (dirname(__FILE__) . '/Model/CreateScheduledPackageResponse.php');
        return MWSEasyShipSectionService_Model_CreateScheduledPackageResponse::fromXML($this->_invoke('CreateScheduledPackage'));
    }

    /**
     * Get Scheduled Package
     * This operation returns the scheduled package details of an already scheduled order.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_GetScheduledPackage request or MWSEasyShipSectionService_Model_GetScheduledPackage object itself
     * @see MWSEasyShipSectionService_Model_GetScheduledPackage
     * @return MWSEasyShipSectionService_Model_GetScheduledPackageResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function getScheduledPackage($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetScheduledPackageResponse.php');
        return MWSEasyShipSectionService_Model_GetScheduledPackageResponse::fromXML($this->_invoke('GetScheduledPackage'));
    }

    /**
     * List Pickup Slots
     * This operation returns a list of available PickupSlots.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_ListPickupSlots request or MWSEasyShipSectionService_Model_ListPickupSlots object itself
     * @see MWSEasyShipSectionService_Model_ListPickupSlots
     * @return MWSEasyShipSectionService_Model_ListPickupSlotsResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function listPickupSlots($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListPickupSlotsResponse.php');
        return MWSEasyShipSectionService_Model_ListPickupSlotsResponse::fromXML($this->_invoke('ListPickupSlots'));
    }

    /**
     * Update Scheduled Packages
     * This operation updates the schedule pickup slot of a scheduled order and returns updated scheduled package
     *         details.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_UpdateScheduledPackages request or MWSEasyShipSectionService_Model_UpdateScheduledPackages object itself
     * @see MWSEasyShipSectionService_Model_UpdateScheduledPackages
     * @return MWSEasyShipSectionService_Model_UpdateScheduledPackagesResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function updateScheduledPackages($request)
    {
        require_once (dirname(__FILE__) . '/Model/UpdateScheduledPackagesResponse.php');
        return MWSEasyShipSectionService_Model_UpdateScheduledPackagesResponse::fromXML($this->_invoke('UpdateScheduledPackages'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_GetServiceStatus request or MWSEasyShipSectionService_Model_GetServiceStatus object itself
     * @see MWSEasyShipSectionService_Model_GetServiceStatus
     * @return MWSEasyShipSectionService_Model_GetServiceStatusResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MWSEasyShipSectionService_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
