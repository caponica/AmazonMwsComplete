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
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_Item
 * 
 * Properties:
 * <ul>
 * 
 * <li>OrderItemId: string</li>
 * <li>Quantity: int</li>
 * <li>transparencyCodeList: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_Item extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'transparencyCodeList' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'member'),
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
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
                return !is_null($this->_fields['Quantity']['FieldValue']);
            }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the transparencyCodeList property.
     *
     * @return List<String> transparencyCodeList.
     */
    public function gettransparencyCodeList()
    {
        if ($this->_fields['transparencyCodeList']['FieldValue'] == null)
        {
            $this->_fields['transparencyCodeList']['FieldValue'] = array();
        }
        return $this->_fields['transparencyCodeList']['FieldValue'];
    }

    /**
     * Set the value of the transparencyCodeList property.
     *
     * @param array transparencyCodeList
     * @return this instance
     */
    public function settransparencyCodeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['transparencyCodeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear transparencyCodeList.
     */
    public function unsettransparencyCodeList()
    {
        $this->_fields['transparencyCodeList']['FieldValue'] = array();
    }

    /**
     * Check to see if transparencyCodeList is set.
     *
     * @return true if transparencyCodeList is set.
     */
    public function isSettransparencyCodeList()
    {
                return !empty($this->_fields['transparencyCodeList']['FieldValue']);
            }

    /**
     * Add values for transparencyCodeList, return this.
     *
     * @param transparencyCodeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withtransparencyCodeList()
    {
        foreach (func_get_args() as $transparencyCodeList)
        {
            $this->_fields['transparencyCodeList']['FieldValue'][] = $transparencyCodeList;
        }
        return $this;
    }

}
