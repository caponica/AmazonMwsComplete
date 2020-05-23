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
 * MWSEasyShipSectionService_Model_Item
 * 
 * Properties:
 * <ul>
 * 
 * <li>OrderItemId: string</li>
 * <li>OrderItemSerialNumberList: array</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_Item extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderItemSerialNumberList' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'member'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the OrderItemId property.
     *
     * @return String OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return this instance
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
                return !is_null($this->_fields['OrderItemId']['FieldValue']);
            }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the OrderItemSerialNumberList property.
     *
     * @return List<String> OrderItemSerialNumberList.
     */
    public function getOrderItemSerialNumberList()
    {
        if ($this->_fields['OrderItemSerialNumberList']['FieldValue'] == null)
        {
            $this->_fields['OrderItemSerialNumberList']['FieldValue'] = array();
        }
        return $this->_fields['OrderItemSerialNumberList']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemSerialNumberList property.
     *
     * @param array orderItemSerialNumberList
     * @return this instance
     */
    public function setOrderItemSerialNumberList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderItemSerialNumberList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderItemSerialNumberList.
     */
    public function unsetOrderItemSerialNumberList()
    {
        $this->_fields['OrderItemSerialNumberList']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderItemSerialNumberList is set.
     *
     * @return true if OrderItemSerialNumberList is set.
     */
    public function isSetOrderItemSerialNumberList()
    {
                return !empty($this->_fields['OrderItemSerialNumberList']['FieldValue']);
            }

    /**
     * Add values for OrderItemSerialNumberList, return this.
     *
     * @param orderItemSerialNumberList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderItemSerialNumberList()
    {
        foreach (func_get_args() as $OrderItemSerialNumberList)
        {
            $this->_fields['OrderItemSerialNumberList']['FieldValue'][] = $OrderItemSerialNumberList;
        }
        return $this;
    }

}
