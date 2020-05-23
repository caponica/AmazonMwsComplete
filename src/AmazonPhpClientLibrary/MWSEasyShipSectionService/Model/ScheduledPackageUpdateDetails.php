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
 *  @see MWSEasyShipSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSEasyShipSectionService_Model_ScheduledPackageUpdateDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>ScheduledPackageId: MWSEasyShipSectionService_Model_ScheduledPackageId</li>
 * <li>PackagePickupSlot: MWSEasyShipSectionService_Model_PickupSlot</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_ScheduledPackageUpdateDetails extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ScheduledPackageId' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ScheduledPackageId'),
    'PackagePickupSlot' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_PickupSlot'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackageId property.
     *
     * @return ScheduledPackageId ScheduledPackageId.
     */
    public function getScheduledPackageId()
    {
        return $this->_fields['ScheduledPackageId']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageId property.
     *
     * @param MWSEasyShipSectionService_Model_ScheduledPackageId scheduledPackageId
     * @return this instance
     */
    public function setScheduledPackageId($value)
    {
        $this->_fields['ScheduledPackageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ScheduledPackageId is set.
     *
     * @return true if ScheduledPackageId is set.
     */
    public function isSetScheduledPackageId()
    {
                return !is_null($this->_fields['ScheduledPackageId']['FieldValue']);
            }

    /**
     * Set the value of ScheduledPackageId, return this.
     *
     * @param scheduledPackageId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withScheduledPackageId($value)
    {
        $this->setScheduledPackageId($value);
        return $this;
    }

    /**
     * Get the value of the PackagePickupSlot property.
     *
     * @return PickupSlot PackagePickupSlot.
     */
    public function getPackagePickupSlot()
    {
        return $this->_fields['PackagePickupSlot']['FieldValue'];
    }

    /**
     * Set the value of the PackagePickupSlot property.
     *
     * @param MWSEasyShipSectionService_Model_PickupSlot packagePickupSlot
     * @return this instance
     */
    public function setPackagePickupSlot($value)
    {
        $this->_fields['PackagePickupSlot']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackagePickupSlot is set.
     *
     * @return true if PackagePickupSlot is set.
     */
    public function isSetPackagePickupSlot()
    {
                return !is_null($this->_fields['PackagePickupSlot']['FieldValue']);
            }

    /**
     * Set the value of PackagePickupSlot, return this.
     *
     * @param packagePickupSlot
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackagePickupSlot($value)
    {
        $this->setPackagePickupSlot($value);
        return $this;
    }

}
