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
 * MWSEasyShipSectionService_Model_UpdateScheduledPackagesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ScheduledPackageList: array</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_UpdateScheduledPackagesResult extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ScheduledPackageList' => array('FieldValue' => array(), 'FieldType' => array('MWSEasyShipSectionService_Model_Package'), 'ListMemberName' => 'Package'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ScheduledPackageList property.
     *
     * @return List<Package> ScheduledPackageList.
     */
    public function getScheduledPackageList()
    {
        if ($this->_fields['ScheduledPackageList']['FieldValue'] == null)
        {
            $this->_fields['ScheduledPackageList']['FieldValue'] = array();
        }
        return $this->_fields['ScheduledPackageList']['FieldValue'];
    }

    /**
     * Set the value of the ScheduledPackageList property.
     *
     * @param array scheduledPackageList
     * @return this instance
     */
    public function setScheduledPackageList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ScheduledPackageList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ScheduledPackageList.
     */
    public function unsetScheduledPackageList()
    {
        $this->_fields['ScheduledPackageList']['FieldValue'] = array();
    }

    /**
     * Check to see if ScheduledPackageList is set.
     *
     * @return true if ScheduledPackageList is set.
     */
    public function isSetScheduledPackageList()
    {
                return !empty($this->_fields['ScheduledPackageList']['FieldValue']);
            }

    /**
     * Add values for ScheduledPackageList, return this.
     *
     * @param scheduledPackageList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withScheduledPackageList()
    {
        foreach (func_get_args() as $ScheduledPackageList)
        {
            $this->_fields['ScheduledPackageList']['FieldValue'][] = $ScheduledPackageList;
        }
        return $this;
    }

}
