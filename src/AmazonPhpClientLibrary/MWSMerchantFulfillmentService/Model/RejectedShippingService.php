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
 * MWSMerchantFulfillmentService_Model_RejectedShippingService
 * 
 * Properties:
 * <ul>
 * 
 * <li>CarrierName: string</li>
 * <li>ShippingServiceName: string</li>
 * <li>ShippingServiceId: string</li>
 * <li>RejectionReasonCode: string</li>
 * <li>RejectionReasonMessage: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_RejectedShippingService extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingServiceName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingServiceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RejectionReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RejectionReasonMessage' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
                return !is_null($this->_fields['CarrierName']['FieldValue']);
            }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceName property.
     *
     * @return String ShippingServiceName.
     */
    public function getShippingServiceName()
    {
        return $this->_fields['ShippingServiceName']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceName property.
     *
     * @param string shippingServiceName
     * @return this instance
     */
    public function setShippingServiceName($value)
    {
        $this->_fields['ShippingServiceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceName is set.
     *
     * @return true if ShippingServiceName is set.
     */
    public function isSetShippingServiceName()
    {
                return !is_null($this->_fields['ShippingServiceName']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceName, return this.
     *
     * @param shippingServiceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceName($value)
    {
        $this->setShippingServiceName($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
                return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);
        return $this;
    }

    /**
     * Get the value of the RejectionReasonCode property.
     *
     * @return String RejectionReasonCode.
     */
    public function getRejectionReasonCode()
    {
        return $this->_fields['RejectionReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the RejectionReasonCode property.
     *
     * @param string rejectionReasonCode
     * @return this instance
     */
    public function setRejectionReasonCode($value)
    {
        $this->_fields['RejectionReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RejectionReasonCode is set.
     *
     * @return true if RejectionReasonCode is set.
     */
    public function isSetRejectionReasonCode()
    {
                return !is_null($this->_fields['RejectionReasonCode']['FieldValue']);
            }

    /**
     * Set the value of RejectionReasonCode, return this.
     *
     * @param rejectionReasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRejectionReasonCode($value)
    {
        $this->setRejectionReasonCode($value);
        return $this;
    }

    /**
     * Get the value of the RejectionReasonMessage property.
     *
     * @return String RejectionReasonMessage.
     */
    public function getRejectionReasonMessage()
    {
        return $this->_fields['RejectionReasonMessage']['FieldValue'];
    }

    /**
     * Set the value of the RejectionReasonMessage property.
     *
     * @param string rejectionReasonMessage
     * @return this instance
     */
    public function setRejectionReasonMessage($value)
    {
        $this->_fields['RejectionReasonMessage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RejectionReasonMessage is set.
     *
     * @return true if RejectionReasonMessage is set.
     */
    public function isSetRejectionReasonMessage()
    {
                return !is_null($this->_fields['RejectionReasonMessage']['FieldValue']);
            }

    /**
     * Set the value of RejectionReasonMessage, return this.
     *
     * @param rejectionReasonMessage
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRejectionReasonMessage($value)
    {
        $this->setRejectionReasonMessage($value);
        return $this;
    }

}
