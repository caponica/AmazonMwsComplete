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
 * MWSEasyShipSectionService_Model_GetScheduledPackageResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ScheduledPackage: MWSEasyShipSectionService_Model_Package</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_GetScheduledPackageResult extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ScheduledPackage' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_Package'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackage property.
     *
     * @return Package ScheduledPackage.
     */
    public function getScheduledPackage()
    {
        return $this->_fields['ScheduledPackage']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackage property.
     *
     * @param MWSEasyShipSectionService_Model_Package scheduledPackage
     * @return this instance
     */
    public function setScheduledPackage($value)
    {
        $this->_fields['ScheduledPackage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ScheduledPackage is set.
     *
     * @return true if ScheduledPackage is set.
     */
    public function isSetScheduledPackage()
    {
                return !is_null($this->_fields['ScheduledPackage']['FieldValue']);
            }

    /**
     * Set the value of ScheduledPackage, return this.
     *
     * @param scheduledPackage
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withScheduledPackage($value)
    {
        $this->setScheduledPackage($value);
        return $this;
    }

}
