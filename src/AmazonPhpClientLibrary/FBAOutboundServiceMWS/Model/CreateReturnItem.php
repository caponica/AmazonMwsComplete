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
 * FBAOutboundServiceMWS_Model_CreateReturnItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerReturnItemId: string</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>AmazonShipmentId: string</li>
 * <li>ReturnReasonCode: string</li>
 * <li>ReturnComment: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_CreateReturnItem extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerReturnItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnComment' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerReturnItemId property.
     *
     * @return String SellerReturnItemId.
     */
    public function getSellerReturnItemId()
    {
        return $this->_fields['SellerReturnItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerReturnItemId property.
     *
     * @param string sellerReturnItemId
     * @return this instance
     */
    public function setSellerReturnItemId($value)
    {
        $this->_fields['SellerReturnItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerReturnItemId is set.
     *
     * @return true if SellerReturnItemId is set.
     */
    public function isSetSellerReturnItemId()
    {
                return !is_null($this->_fields['SellerReturnItemId']['FieldValue']);
            }

    /**
     * Set the value of SellerReturnItemId, return this.
     *
     * @param sellerReturnItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerReturnItemId($value)
    {
        $this->setSellerReturnItemId($value);
        return $this;
    }

    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return String SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set.
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
                return !is_null($this->_fields['SellerFulfillmentOrderItemId']['FieldValue']);
            }

    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return String AmazonShipmentId.
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @return this instance
     */
    public function setAmazonShipmentId($value)
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonShipmentId is set.
     *
     * @return true if AmazonShipmentId is set.
     */
    public function isSetAmazonShipmentId()
    {
                return !is_null($this->_fields['AmazonShipmentId']['FieldValue']);
            }

    /**
     * Set the value of AmazonShipmentId, return this.
     *
     * @param amazonShipmentId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonShipmentId($value)
    {
        $this->setAmazonShipmentId($value);
        return $this;
    }

    /**
     * Get the value of the ReturnReasonCode property.
     *
     * @return String ReturnReasonCode.
     */
    public function getReturnReasonCode()
    {
        return $this->_fields['ReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the ReturnReasonCode property.
     *
     * @param string returnReasonCode
     * @return this instance
     */
    public function setReturnReasonCode($value)
    {
        $this->_fields['ReturnReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnReasonCode is set.
     *
     * @return true if ReturnReasonCode is set.
     */
    public function isSetReturnReasonCode()
    {
                return !is_null($this->_fields['ReturnReasonCode']['FieldValue']);
            }

    /**
     * Set the value of ReturnReasonCode, return this.
     *
     * @param returnReasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnReasonCode($value)
    {
        $this->setReturnReasonCode($value);
        return $this;
    }

    /**
     * Get the value of the ReturnComment property.
     *
     * @return String ReturnComment.
     */
    public function getReturnComment()
    {
        return $this->_fields['ReturnComment']['FieldValue'];
    }

    /**
     * Set the value of the ReturnComment property.
     *
     * @param string returnComment
     * @return this instance
     */
    public function setReturnComment($value)
    {
        $this->_fields['ReturnComment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnComment is set.
     *
     * @return true if ReturnComment is set.
     */
    public function isSetReturnComment()
    {
                return !is_null($this->_fields['ReturnComment']['FieldValue']);
            }

    /**
     * Set the value of ReturnComment, return this.
     *
     * @param returnComment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnComment($value)
    {
        $this->setReturnComment($value);
        return $this;
    }

}
