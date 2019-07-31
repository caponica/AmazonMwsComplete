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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_GetFulfillmentOrderResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>FulfillmentOrder: FBAOutboundServiceMWS_Model_FulfillmentOrder</li>
 * <li>FulfillmentOrderItem: FBAOutboundServiceMWS_Model_FulfillmentOrderItemList</li>
 * <li>FulfillmentShipment: FBAOutboundServiceMWS_Model_FulfillmentShipmentList</li>
 * <li>ReturnItemList: FBAOutboundServiceMWS_Model_ReturnItemList</li>
 * <li>ReturnAuthorizationList: FBAOutboundServiceMWS_Model_ReturnAuthorizationList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_GetFulfillmentOrderResult extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FulfillmentOrder' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentOrder'),
    'FulfillmentOrderItem' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentOrderItemList'),
    'FulfillmentShipment' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentShipmentList'),
    'ReturnItemList' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ReturnItemList'),
    'ReturnAuthorizationList' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ReturnAuthorizationList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentOrder property.
     *
     * @return FulfillmentOrder FulfillmentOrder.
     */
    public function getFulfillmentOrder()
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrder property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentOrder fulfillmentOrder
     * @return this instance
     */
    public function setFulfillmentOrder($value)
    {
        $this->_fields['FulfillmentOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrder is set.
     *
     * @return true if FulfillmentOrder is set.
     */
    public function isSetFulfillmentOrder()
    {
                return !is_null($this->_fields['FulfillmentOrder']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentOrder, return this.
     *
     * @param fulfillmentOrder
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentOrder($value)
    {
        $this->setFulfillmentOrder($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentOrderItem property.
     *
     * @return FulfillmentOrderItemList FulfillmentOrderItem.
     */
    public function getFulfillmentOrderItem()
    {
        return $this->_fields['FulfillmentOrderItem']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrderItem property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentOrderItemList fulfillmentOrderItem
     * @return this instance
     */
    public function setFulfillmentOrderItem($value)
    {
        $this->_fields['FulfillmentOrderItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrderItem is set.
     *
     * @return true if FulfillmentOrderItem is set.
     */
    public function isSetFulfillmentOrderItem()
    {
                return !is_null($this->_fields['FulfillmentOrderItem']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentOrderItem, return this.
     *
     * @param fulfillmentOrderItem
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentOrderItem($value)
    {
        $this->setFulfillmentOrderItem($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipment property.
     *
     * @return FulfillmentShipmentList FulfillmentShipment.
     */
    public function getFulfillmentShipment()
    {
        return $this->_fields['FulfillmentShipment']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipment property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentShipmentList fulfillmentShipment
     * @return this instance
     */
    public function setFulfillmentShipment($value)
    {
        $this->_fields['FulfillmentShipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipment is set.
     *
     * @return true if FulfillmentShipment is set.
     */
    public function isSetFulfillmentShipment()
    {
                return !is_null($this->_fields['FulfillmentShipment']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentShipment, return this.
     *
     * @param fulfillmentShipment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentShipment($value)
    {
        $this->setFulfillmentShipment($value);
        return $this;
    }

    /**
     * Get the value of the ReturnItemList property.
     *
     * @return ReturnItemList ReturnItemList.
     */
    public function getReturnItemList()
    {
        return $this->_fields['ReturnItemList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnItemList property.
     *
     * @param FBAOutboundServiceMWS_Model_ReturnItemList returnItemList
     * @return this instance
     */
    public function setReturnItemList($value)
    {
        $this->_fields['ReturnItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnItemList is set.
     *
     * @return true if ReturnItemList is set.
     */
    public function isSetReturnItemList()
    {
                return !is_null($this->_fields['ReturnItemList']['FieldValue']);
            }

    /**
     * Set the value of ReturnItemList, return this.
     *
     * @param returnItemList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnItemList($value)
    {
        $this->setReturnItemList($value);
        return $this;
    }

    /**
     * Get the value of the ReturnAuthorizationList property.
     *
     * @return ReturnAuthorizationList ReturnAuthorizationList.
     */
    public function getReturnAuthorizationList()
    {
        return $this->_fields['ReturnAuthorizationList']['FieldValue'];
    }

    /**
     * Set the value of the ReturnAuthorizationList property.
     *
     * @param FBAOutboundServiceMWS_Model_ReturnAuthorizationList returnAuthorizationList
     * @return this instance
     */
    public function setReturnAuthorizationList($value)
    {
        $this->_fields['ReturnAuthorizationList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnAuthorizationList is set.
     *
     * @return true if ReturnAuthorizationList is set.
     */
    public function isSetReturnAuthorizationList()
    {
                return !is_null($this->_fields['ReturnAuthorizationList']['FieldValue']);
            }

    /**
     * Set the value of ReturnAuthorizationList, return this.
     *
     * @param returnAuthorizationList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnAuthorizationList($value)
    {
        $this->setReturnAuthorizationList($value);
        return $this;
    }

}
