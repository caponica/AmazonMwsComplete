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

interface  MWSEasyShipSectionService_Interface
{

    /**
     * Create Scheduled Package
     * This operation schedules the order for pickup and returns scheduled package details.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_CreateScheduledPackage request or MWSEasyShipSectionService_Model_CreateScheduledPackage object itself
     * @see MWSEasyShipSectionService_Model_CreateScheduledPackageRequest
     * @return MWSEasyShipSectionService_Model_CreateScheduledPackageResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function createScheduledPackage($request);


    /**
     * Get Scheduled Package
     * This operation returns the scheduled package details of an already scheduled order.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_GetScheduledPackage request or MWSEasyShipSectionService_Model_GetScheduledPackage object itself
     * @see MWSEasyShipSectionService_Model_GetScheduledPackageRequest
     * @return MWSEasyShipSectionService_Model_GetScheduledPackageResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function getScheduledPackage($request);


    /**
     * List Pickup Slots
     * This operation returns a list of available PickupSlots.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_ListPickupSlots request or MWSEasyShipSectionService_Model_ListPickupSlots object itself
     * @see MWSEasyShipSectionService_Model_ListPickupSlotsRequest
     * @return MWSEasyShipSectionService_Model_ListPickupSlotsResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function listPickupSlots($request);


    /**
     * Update Scheduled Packages
     * This operation updates the schedule pickup slot of a scheduled order and returns updated scheduled package
     *         details.
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_UpdateScheduledPackages request or MWSEasyShipSectionService_Model_UpdateScheduledPackages object itself
     * @see MWSEasyShipSectionService_Model_UpdateScheduledPackagesRequest
     * @return MWSEasyShipSectionService_Model_UpdateScheduledPackagesResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function updateScheduledPackages($request);


    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSEasyShipSectionService_Model_GetServiceStatus request or MWSEasyShipSectionService_Model_GetServiceStatus object itself
     * @see MWSEasyShipSectionService_Model_GetServiceStatusRequest
     * @return MWSEasyShipSectionService_Model_GetServiceStatusResponse
     *
     * @throws MWSEasyShipSectionService_Exception
     */
    public function getServiceStatus($request);

}