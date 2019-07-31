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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_ShipmentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MarketplaceName: string</li>
 * <li>OrderChargeList: array</li>
 * <li>OrderChargeAdjustmentList: array</li>
 * <li>ShipmentFeeList: array</li>
 * <li>ShipmentFeeAdjustmentList: array</li>
 * <li>OrderFeeList: array</li>
 * <li>OrderFeeAdjustmentList: array</li>
 * <li>DirectPaymentList: array</li>
 * <li>PostedDate: string</li>
 * <li>ShipmentItemList: array</li>
 * <li>ShipmentItemAdjustmentList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ShipmentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderChargeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
    'OrderChargeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
    'ShipmentFeeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'ShipmentFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'OrderFeeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'OrderFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'DirectPaymentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_DirectPayment'), 'ListMemberName' => 'DirectPayment'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipmentItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentItem'), 'ListMemberName' => 'ShipmentItem'),
    'ShipmentItemAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ShipmentItem'), 'ListMemberName' => 'ShipmentItem'),
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
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return this instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
                return !is_null($this->_fields['SellerOrderId']['FieldValue']);
            }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceName property.
     *
     * @return String MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set.
     */
    public function isSetMarketplaceName()
    {
                return !is_null($this->_fields['MarketplaceName']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);
        return $this;
    }

    /**
     * Get the value of the OrderChargeList property.
     *
     * @return List<ChargeComponent> OrderChargeList.
     */
    public function getOrderChargeList()
    {
        if ($this->_fields['OrderChargeList']['FieldValue'] == null)
        {
            $this->_fields['OrderChargeList']['FieldValue'] = array();
        }
        return $this->_fields['OrderChargeList']['FieldValue'];
    }

    /**
     * Set the value of the OrderChargeList property.
     *
     * @param array orderChargeList
     * @return this instance
     */
    public function setOrderChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderChargeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderChargeList.
     */
    public function unsetOrderChargeList()
    {
        $this->_fields['OrderChargeList']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderChargeList is set.
     *
     * @return true if OrderChargeList is set.
     */
    public function isSetOrderChargeList()
    {
                return !empty($this->_fields['OrderChargeList']['FieldValue']);
            }

    /**
     * Add values for OrderChargeList, return this.
     *
     * @param orderChargeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderChargeList()
    {
        foreach (func_get_args() as $OrderChargeList)
        {
            $this->_fields['OrderChargeList']['FieldValue'][] = $OrderChargeList;
        }
        return $this;
    }

    /**
     * Get the value of the OrderChargeAdjustmentList property.
     *
     * @return List<ChargeComponent> OrderChargeAdjustmentList.
     */
    public function getOrderChargeAdjustmentList()
    {
        if ($this->_fields['OrderChargeAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['OrderChargeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the OrderChargeAdjustmentList property.
     *
     * @param array orderChargeAdjustmentList
     * @return this instance
     */
    public function setOrderChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderChargeAdjustmentList.
     */
    public function unsetOrderChargeAdjustmentList()
    {
        $this->_fields['OrderChargeAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderChargeAdjustmentList is set.
     *
     * @return true if OrderChargeAdjustmentList is set.
     */
    public function isSetOrderChargeAdjustmentList()
    {
                return !empty($this->_fields['OrderChargeAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for OrderChargeAdjustmentList, return this.
     *
     * @param orderChargeAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderChargeAdjustmentList()
    {
        foreach (func_get_args() as $OrderChargeAdjustmentList)
        {
            $this->_fields['OrderChargeAdjustmentList']['FieldValue'][] = $OrderChargeAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the ShipmentFeeList property.
     *
     * @return List<FeeComponent> ShipmentFeeList.
     */
    public function getShipmentFeeList()
    {
        if ($this->_fields['ShipmentFeeList']['FieldValue'] == null)
        {
            $this->_fields['ShipmentFeeList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentFeeList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentFeeList property.
     *
     * @param array shipmentFeeList
     * @return this instance
     */
    public function setShipmentFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentFeeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentFeeList.
     */
    public function unsetShipmentFeeList()
    {
        $this->_fields['ShipmentFeeList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentFeeList is set.
     *
     * @return true if ShipmentFeeList is set.
     */
    public function isSetShipmentFeeList()
    {
                return !empty($this->_fields['ShipmentFeeList']['FieldValue']);
            }

    /**
     * Add values for ShipmentFeeList, return this.
     *
     * @param shipmentFeeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentFeeList()
    {
        foreach (func_get_args() as $ShipmentFeeList)
        {
            $this->_fields['ShipmentFeeList']['FieldValue'][] = $ShipmentFeeList;
        }
        return $this;
    }

    /**
     * Get the value of the ShipmentFeeAdjustmentList property.
     *
     * @return List<FeeComponent> ShipmentFeeAdjustmentList.
     */
    public function getShipmentFeeAdjustmentList()
    {
        if ($this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentFeeAdjustmentList property.
     *
     * @param array shipmentFeeAdjustmentList
     * @return this instance
     */
    public function setShipmentFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentFeeAdjustmentList.
     */
    public function unsetShipmentFeeAdjustmentList()
    {
        $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentFeeAdjustmentList is set.
     *
     * @return true if ShipmentFeeAdjustmentList is set.
     */
    public function isSetShipmentFeeAdjustmentList()
    {
                return !empty($this->_fields['ShipmentFeeAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for ShipmentFeeAdjustmentList, return this.
     *
     * @param shipmentFeeAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentFeeAdjustmentList()
    {
        foreach (func_get_args() as $ShipmentFeeAdjustmentList)
        {
            $this->_fields['ShipmentFeeAdjustmentList']['FieldValue'][] = $ShipmentFeeAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the OrderFeeList property.
     *
     * @return List<FeeComponent> OrderFeeList.
     */
    public function getOrderFeeList()
    {
        if ($this->_fields['OrderFeeList']['FieldValue'] == null)
        {
            $this->_fields['OrderFeeList']['FieldValue'] = array();
        }
        return $this->_fields['OrderFeeList']['FieldValue'];
    }

    /**
     * Set the value of the OrderFeeList property.
     *
     * @param array orderFeeList
     * @return this instance
     */
    public function setOrderFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderFeeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderFeeList.
     */
    public function unsetOrderFeeList()
    {
        $this->_fields['OrderFeeList']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderFeeList is set.
     *
     * @return true if OrderFeeList is set.
     */
    public function isSetOrderFeeList()
    {
                return !empty($this->_fields['OrderFeeList']['FieldValue']);
            }

    /**
     * Add values for OrderFeeList, return this.
     *
     * @param orderFeeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderFeeList()
    {
        foreach (func_get_args() as $OrderFeeList)
        {
            $this->_fields['OrderFeeList']['FieldValue'][] = $OrderFeeList;
        }
        return $this;
    }

    /**
     * Get the value of the OrderFeeAdjustmentList property.
     *
     * @return List<FeeComponent> OrderFeeAdjustmentList.
     */
    public function getOrderFeeAdjustmentList()
    {
        if ($this->_fields['OrderFeeAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['OrderFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the OrderFeeAdjustmentList property.
     *
     * @param array orderFeeAdjustmentList
     * @return this instance
     */
    public function setOrderFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderFeeAdjustmentList.
     */
    public function unsetOrderFeeAdjustmentList()
    {
        $this->_fields['OrderFeeAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderFeeAdjustmentList is set.
     *
     * @return true if OrderFeeAdjustmentList is set.
     */
    public function isSetOrderFeeAdjustmentList()
    {
                return !empty($this->_fields['OrderFeeAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for OrderFeeAdjustmentList, return this.
     *
     * @param orderFeeAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOrderFeeAdjustmentList()
    {
        foreach (func_get_args() as $OrderFeeAdjustmentList)
        {
            $this->_fields['OrderFeeAdjustmentList']['FieldValue'][] = $OrderFeeAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the DirectPaymentList property.
     *
     * @return List<DirectPayment> DirectPaymentList.
     */
    public function getDirectPaymentList()
    {
        if ($this->_fields['DirectPaymentList']['FieldValue'] == null)
        {
            $this->_fields['DirectPaymentList']['FieldValue'] = array();
        }
        return $this->_fields['DirectPaymentList']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentList property.
     *
     * @param array directPaymentList
     * @return this instance
     */
    public function setDirectPaymentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['DirectPaymentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear DirectPaymentList.
     */
    public function unsetDirectPaymentList()
    {
        $this->_fields['DirectPaymentList']['FieldValue'] = array();
    }

    /**
     * Check to see if DirectPaymentList is set.
     *
     * @return true if DirectPaymentList is set.
     */
    public function isSetDirectPaymentList()
    {
                return !empty($this->_fields['DirectPaymentList']['FieldValue']);
            }

    /**
     * Add values for DirectPaymentList, return this.
     *
     * @param directPaymentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withDirectPaymentList()
    {
        foreach (func_get_args() as $DirectPaymentList)
        {
            $this->_fields['DirectPaymentList']['FieldValue'][] = $DirectPaymentList;
        }
        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
                return !is_null($this->_fields['PostedDate']['FieldValue']);
            }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentItemList property.
     *
     * @return List<ShipmentItem> ShipmentItemList.
     */
    public function getShipmentItemList()
    {
        if ($this->_fields['ShipmentItemList']['FieldValue'] == null)
        {
            $this->_fields['ShipmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentItemList property.
     *
     * @param array shipmentItemList
     * @return this instance
     */
    public function setShipmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentItemList.
     */
    public function unsetShipmentItemList()
    {
        $this->_fields['ShipmentItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentItemList is set.
     *
     * @return true if ShipmentItemList is set.
     */
    public function isSetShipmentItemList()
    {
                return !empty($this->_fields['ShipmentItemList']['FieldValue']);
            }

    /**
     * Add values for ShipmentItemList, return this.
     *
     * @param shipmentItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentItemList()
    {
        foreach (func_get_args() as $ShipmentItemList)
        {
            $this->_fields['ShipmentItemList']['FieldValue'][] = $ShipmentItemList;
        }
        return $this;
    }

    /**
     * Get the value of the ShipmentItemAdjustmentList property.
     *
     * @return List<ShipmentItem> ShipmentItemAdjustmentList.
     */
    public function getShipmentItemAdjustmentList()
    {
        if ($this->_fields['ShipmentItemAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentItemAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentItemAdjustmentList property.
     *
     * @param array shipmentItemAdjustmentList
     * @return this instance
     */
    public function setShipmentItemAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentItemAdjustmentList.
     */
    public function unsetShipmentItemAdjustmentList()
    {
        $this->_fields['ShipmentItemAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentItemAdjustmentList is set.
     *
     * @return true if ShipmentItemAdjustmentList is set.
     */
    public function isSetShipmentItemAdjustmentList()
    {
                return !empty($this->_fields['ShipmentItemAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for ShipmentItemAdjustmentList, return this.
     *
     * @param shipmentItemAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentItemAdjustmentList()
    {
        foreach (func_get_args() as $ShipmentItemAdjustmentList)
        {
            $this->_fields['ShipmentItemAdjustmentList']['FieldValue'][] = $ShipmentItemAdjustmentList;
        }
        return $this;
    }

}
