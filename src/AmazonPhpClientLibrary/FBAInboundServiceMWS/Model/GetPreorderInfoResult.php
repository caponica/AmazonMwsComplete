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

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_GetPreorderInfoResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentContainsPreorderableItems: bool</li>
 * <li>ShipmentConfirmedForPreorder: bool</li>
 * <li>NeedByDate: string</li>
 * <li>ConfirmedFulfillableDate: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GetPreorderInfoResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ShipmentContainsPreorderableItems' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'ShipmentConfirmedForPreorder' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'NeedByDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ConfirmedFulfillableDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of ShipmentContainsPreorderableItems.
     *
     * @return true if ShipmentContainsPreorderableItems is set to true.
     */
    public function isShipmentContainsPreorderableItems()
    {
        return !is_null($this->_fields['ShipmentContainsPreorderableItems']['FieldValue']) && $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }

    /**
     * Get the value of the ShipmentContainsPreorderableItems property.
     *
     * @return Boolean ShipmentContainsPreorderableItems.
     */
    public function getShipmentContainsPreorderableItems()
    {
        return $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentContainsPreorderableItems property.
     *
     * @param bool shipmentContainsPreorderableItems
     * @return this instance
     */
    public function setShipmentContainsPreorderableItems($value)
    {
        $this->_fields['ShipmentContainsPreorderableItems']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentContainsPreorderableItems is set.
     *
     * @return true if ShipmentContainsPreorderableItems is set.
     */
    public function isSetShipmentContainsPreorderableItems()
    {
                return !is_null($this->_fields['ShipmentContainsPreorderableItems']['FieldValue']);
            }

    /**
     * Set the value of ShipmentContainsPreorderableItems, return this.
     *
     * @param shipmentContainsPreorderableItems
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentContainsPreorderableItems($value)
    {
        $this->setShipmentContainsPreorderableItems($value);
        return $this;
    }

    /**
     * Check the value of ShipmentConfirmedForPreorder.
     *
     * @return true if ShipmentConfirmedForPreorder is set to true.
     */
    public function isShipmentConfirmedForPreorder()
    {
        return !is_null($this->_fields['ShipmentConfirmedForPreorder']['FieldValue']) && $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }

    /**
     * Get the value of the ShipmentConfirmedForPreorder property.
     *
     * @return Boolean ShipmentConfirmedForPreorder.
     */
    public function getShipmentConfirmedForPreorder()
    {
        return $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentConfirmedForPreorder property.
     *
     * @param bool shipmentConfirmedForPreorder
     * @return this instance
     */
    public function setShipmentConfirmedForPreorder($value)
    {
        $this->_fields['ShipmentConfirmedForPreorder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentConfirmedForPreorder is set.
     *
     * @return true if ShipmentConfirmedForPreorder is set.
     */
    public function isSetShipmentConfirmedForPreorder()
    {
                return !is_null($this->_fields['ShipmentConfirmedForPreorder']['FieldValue']);
            }

    /**
     * Set the value of ShipmentConfirmedForPreorder, return this.
     *
     * @param shipmentConfirmedForPreorder
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentConfirmedForPreorder($value)
    {
        $this->setShipmentConfirmedForPreorder($value);
        return $this;
    }

    /**
     * Get the value of the NeedByDate property.
     *
     * @return String NeedByDate.
     */
    public function getNeedByDate()
    {
        return $this->_fields['NeedByDate']['FieldValue'];
    }

    /**
     * Set the value of the NeedByDate property.
     *
     * @param string needByDate
     * @return this instance
     */
    public function setNeedByDate($value)
    {
        $this->_fields['NeedByDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NeedByDate is set.
     *
     * @return true if NeedByDate is set.
     */
    public function isSetNeedByDate()
    {
                return !is_null($this->_fields['NeedByDate']['FieldValue']);
            }

    /**
     * Set the value of NeedByDate, return this.
     *
     * @param needByDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNeedByDate($value)
    {
        $this->setNeedByDate($value);
        return $this;
    }

    /**
     * Get the value of the ConfirmedFulfillableDate property.
     *
     * @return String ConfirmedFulfillableDate.
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->_fields['ConfirmedFulfillableDate']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmedFulfillableDate property.
     *
     * @param string confirmedFulfillableDate
     * @return this instance
     */
    public function setConfirmedFulfillableDate($value)
    {
        $this->_fields['ConfirmedFulfillableDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmedFulfillableDate is set.
     *
     * @return true if ConfirmedFulfillableDate is set.
     */
    public function isSetConfirmedFulfillableDate()
    {
                return !is_null($this->_fields['ConfirmedFulfillableDate']['FieldValue']);
            }

    /**
     * Set the value of ConfirmedFulfillableDate, return this.
     *
     * @param confirmedFulfillableDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConfirmedFulfillableDate($value)
    {
        $this->setConfirmedFulfillableDate($value);
        return $this;
    }

}
