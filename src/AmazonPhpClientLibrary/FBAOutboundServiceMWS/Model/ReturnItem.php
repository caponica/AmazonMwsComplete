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
 * FBAOutboundServiceMWS_Model_ReturnItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerReturnItemId: string</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>AmazonShipmentId: string</li>
 * <li>SellerReturnReasonCode: string</li>
 * <li>ReturnComment: string</li>
 * <li>AmazonReturnReasonCode: string</li>
 * <li>Status: string</li>
 * <li>StatusChangedDate: string</li>
 * <li>ReturnAuthorizationId: string</li>
 * <li>ReturnReceivedCondition: string</li>
 * <li>FulfillmentCenterId: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_ReturnItem extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerReturnItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerFulfillmentOrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerReturnReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnComment' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AmazonReturnReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StatusChangedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnAuthorizationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnReceivedCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the SellerReturnReasonCode property.
     *
     * @return String SellerReturnReasonCode.
     */
    public function getSellerReturnReasonCode()
    {
        return $this->_fields['SellerReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the SellerReturnReasonCode property.
     *
     * @param string sellerReturnReasonCode
     * @return this instance
     */
    public function setSellerReturnReasonCode($value)
    {
        $this->_fields['SellerReturnReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerReturnReasonCode is set.
     *
     * @return true if SellerReturnReasonCode is set.
     */
    public function isSetSellerReturnReasonCode()
    {
                return !is_null($this->_fields['SellerReturnReasonCode']['FieldValue']);
            }

    /**
     * Set the value of SellerReturnReasonCode, return this.
     *
     * @param sellerReturnReasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerReturnReasonCode($value)
    {
        $this->setSellerReturnReasonCode($value);
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

    /**
     * Get the value of the AmazonReturnReasonCode property.
     *
     * @return String AmazonReturnReasonCode.
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->_fields['AmazonReturnReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the AmazonReturnReasonCode property.
     *
     * @param string amazonReturnReasonCode
     * @return this instance
     */
    public function setAmazonReturnReasonCode($value)
    {
        $this->_fields['AmazonReturnReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonReturnReasonCode is set.
     *
     * @return true if AmazonReturnReasonCode is set.
     */
    public function isSetAmazonReturnReasonCode()
    {
                return !is_null($this->_fields['AmazonReturnReasonCode']['FieldValue']);
            }

    /**
     * Set the value of AmazonReturnReasonCode, return this.
     *
     * @param amazonReturnReasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonReturnReasonCode($value)
    {
        $this->setAmazonReturnReasonCode($value);
        return $this;
    }

    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
                return !is_null($this->_fields['Status']['FieldValue']);
            }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the StatusChangedDate property.
     *
     * @return XMLGregorianCalendar StatusChangedDate.
     */
    public function getStatusChangedDate()
    {
        return $this->_fields['StatusChangedDate']['FieldValue'];
    }

    /**
     * Set the value of the StatusChangedDate property.
     *
     * @param string statusChangedDate
     * @return this instance
     */
    public function setStatusChangedDate($value)
    {
        $this->_fields['StatusChangedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StatusChangedDate is set.
     *
     * @return true if StatusChangedDate is set.
     */
    public function isSetStatusChangedDate()
    {
                return !is_null($this->_fields['StatusChangedDate']['FieldValue']);
            }

    /**
     * Set the value of StatusChangedDate, return this.
     *
     * @param statusChangedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStatusChangedDate($value)
    {
        $this->setStatusChangedDate($value);
        return $this;
    }

    /**
     * Get the value of the ReturnAuthorizationId property.
     *
     * @return String ReturnAuthorizationId.
     */
    public function getReturnAuthorizationId()
    {
        return $this->_fields['ReturnAuthorizationId']['FieldValue'];
    }

    /**
     * Set the value of the ReturnAuthorizationId property.
     *
     * @param string returnAuthorizationId
     * @return this instance
     */
    public function setReturnAuthorizationId($value)
    {
        $this->_fields['ReturnAuthorizationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnAuthorizationId is set.
     *
     * @return true if ReturnAuthorizationId is set.
     */
    public function isSetReturnAuthorizationId()
    {
                return !is_null($this->_fields['ReturnAuthorizationId']['FieldValue']);
            }

    /**
     * Set the value of ReturnAuthorizationId, return this.
     *
     * @param returnAuthorizationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnAuthorizationId($value)
    {
        $this->setReturnAuthorizationId($value);
        return $this;
    }

    /**
     * Get the value of the ReturnReceivedCondition property.
     *
     * @return String ReturnReceivedCondition.
     */
    public function getReturnReceivedCondition()
    {
        return $this->_fields['ReturnReceivedCondition']['FieldValue'];
    }

    /**
     * Set the value of the ReturnReceivedCondition property.
     *
     * @param string returnReceivedCondition
     * @return this instance
     */
    public function setReturnReceivedCondition($value)
    {
        $this->_fields['ReturnReceivedCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnReceivedCondition is set.
     *
     * @return true if ReturnReceivedCondition is set.
     */
    public function isSetReturnReceivedCondition()
    {
                return !is_null($this->_fields['ReturnReceivedCondition']['FieldValue']);
            }

    /**
     * Set the value of ReturnReceivedCondition, return this.
     *
     * @param returnReceivedCondition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnReceivedCondition($value)
    {
        $this->setReturnReceivedCondition($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return String FulfillmentCenterId.
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @return this instance
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set.
     */
    public function isSetFulfillmentCenterId()
    {
                return !is_null($this->_fields['FulfillmentCenterId']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param fulfillmentCenterId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);
        return $this;
    }

}
