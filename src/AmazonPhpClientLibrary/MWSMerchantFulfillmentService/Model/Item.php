<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
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
 * <li>ItemLevelSellerInputsList: array</li>
 * <li>ItemWeight: MWSMerchantFulfillmentService_Model_Weight</li>
 * <li>ItemDescription: string</li>
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
    'ItemLevelSellerInputsList' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_AdditionalSellerInputs'), 'ListMemberName' => 'member'),
    'ItemWeight' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Weight'),
    'ItemDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
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

    /**
     * Get the value of the ItemLevelSellerInputsList property.
     *
     * @return List<AdditionalSellerInputs> ItemLevelSellerInputsList.
     */
    public function getItemLevelSellerInputsList()
    {
        if ($this->_fields['ItemLevelSellerInputsList']['FieldValue'] == null)
        {
            $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = array();
        }
        return $this->_fields['ItemLevelSellerInputsList']['FieldValue'];
    }

    /**
     * Set the value of the ItemLevelSellerInputsList property.
     *
     * @param array itemLevelSellerInputsList
     * @return this instance
     */
    public function setItemLevelSellerInputsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemLevelSellerInputsList.
     */
    public function unsetItemLevelSellerInputsList()
    {
        $this->_fields['ItemLevelSellerInputsList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemLevelSellerInputsList is set.
     *
     * @return true if ItemLevelSellerInputsList is set.
     */
    public function isSetItemLevelSellerInputsList()
    {
                return !empty($this->_fields['ItemLevelSellerInputsList']['FieldValue']);
            }

    /**
     * Add values for ItemLevelSellerInputsList, return this.
     *
     * @param itemLevelSellerInputsList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemLevelSellerInputsList()
    {
        foreach (func_get_args() as $ItemLevelSellerInputsList)
        {
            $this->_fields['ItemLevelSellerInputsList']['FieldValue'][] = $ItemLevelSellerInputsList;
        }
        return $this;
    }

    /**
     * Get the value of the ItemWeight property.
     *
     * @return Weight ItemWeight.
     */
    public function getItemWeight()
    {
        return $this->_fields['ItemWeight']['FieldValue'];
    }

    /**
     * Set the value of the ItemWeight property.
     *
     * @param MWSMerchantFulfillmentService_Model_Weight itemWeight
     * @return this instance
     */
    public function setItemWeight($value)
    {
        $this->_fields['ItemWeight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemWeight is set.
     *
     * @return true if ItemWeight is set.
     */
    public function isSetItemWeight()
    {
                return !is_null($this->_fields['ItemWeight']['FieldValue']);
            }

    /**
     * Set the value of ItemWeight, return this.
     *
     * @param itemWeight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemWeight($value)
    {
        $this->setItemWeight($value);
        return $this;
    }

    /**
     * Get the value of the ItemDescription property.
     *
     * @return String ItemDescription.
     */
    public function getItemDescription()
    {
        return $this->_fields['ItemDescription']['FieldValue'];
    }

    /**
     * Set the value of the ItemDescription property.
     *
     * @param string itemDescription
     * @return this instance
     */
    public function setItemDescription($value)
    {
        $this->_fields['ItemDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemDescription is set.
     *
     * @return true if ItemDescription is set.
     */
    public function isSetItemDescription()
    {
                return !is_null($this->_fields['ItemDescription']['FieldValue']);
            }

    /**
     * Set the value of ItemDescription, return this.
     *
     * @param itemDescription
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemDescription($value)
    {
        $this->setItemDescription($value);
        return $this;
    }

}
