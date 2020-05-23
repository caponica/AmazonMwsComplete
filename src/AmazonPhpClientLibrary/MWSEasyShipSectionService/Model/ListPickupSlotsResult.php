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
 * MWSEasyShipSectionService_Model_ListPickupSlotsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonOrderId: string</li>
 * <li>PickupSlotList: array</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_ListPickupSlotsResult extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PickupSlotList' => array('FieldValue' => array(), 'FieldType' => array('MWSEasyShipSectionService_Model_PickupSlot'), 'ListMemberName' => 'PickupSlot'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the PickupSlotList property.
     *
     * @return List<PickupSlot> PickupSlotList.
     */
    public function getPickupSlotList()
    {
        if ($this->_fields['PickupSlotList']['FieldValue'] == null)
        {
            $this->_fields['PickupSlotList']['FieldValue'] = array();
        }
        return $this->_fields['PickupSlotList']['FieldValue'];
    }

    /**
     * Set the value of the PickupSlotList property.
     *
     * @param array pickupSlotList
     * @return this instance
     */
    public function setPickupSlotList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PickupSlotList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PickupSlotList.
     */
    public function unsetPickupSlotList()
    {
        $this->_fields['PickupSlotList']['FieldValue'] = array();
    }

    /**
     * Check to see if PickupSlotList is set.
     *
     * @return true if PickupSlotList is set.
     */
    public function isSetPickupSlotList()
    {
                return !empty($this->_fields['PickupSlotList']['FieldValue']);
            }

    /**
     * Add values for PickupSlotList, return this.
     *
     * @param pickupSlotList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPickupSlotList()
    {
        foreach (func_get_args() as $PickupSlotList)
        {
            $this->_fields['PickupSlotList']['FieldValue'][] = $PickupSlotList;
        }
        return $this;
    }

}
