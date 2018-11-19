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
 * FBAOutboundServiceMWS_Model_ReturnAuthorization
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReturnAuthorizationId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>ReturnToAddress: FBAOutboundServiceMWS_Model_Address</li>
 * <li>AmazonRmaId: string</li>
 * <li>RmaPageURL: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_ReturnAuthorization extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ReturnAuthorizationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReturnToAddress' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_Address'),
    'AmazonRmaId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RmaPageURL' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
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

    /**
     * Get the value of the ReturnToAddress property.
     *
     * @return Address ReturnToAddress.
     */
    public function getReturnToAddress()
    {
        return $this->_fields['ReturnToAddress']['FieldValue'];
    }

    /**
     * Set the value of the ReturnToAddress property.
     *
     * @param FBAOutboundServiceMWS_Model_Address returnToAddress
     * @return this instance
     */
    public function setReturnToAddress($value)
    {
        $this->_fields['ReturnToAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReturnToAddress is set.
     *
     * @return true if ReturnToAddress is set.
     */
    public function isSetReturnToAddress()
    {
                return !is_null($this->_fields['ReturnToAddress']['FieldValue']);
            }

    /**
     * Set the value of ReturnToAddress, return this.
     *
     * @param returnToAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReturnToAddress($value)
    {
        $this->setReturnToAddress($value);
        return $this;
    }

    /**
     * Get the value of the AmazonRmaId property.
     *
     * @return String AmazonRmaId.
     */
    public function getAmazonRmaId()
    {
        return $this->_fields['AmazonRmaId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonRmaId property.
     *
     * @param string amazonRmaId
     * @return this instance
     */
    public function setAmazonRmaId($value)
    {
        $this->_fields['AmazonRmaId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonRmaId is set.
     *
     * @return true if AmazonRmaId is set.
     */
    public function isSetAmazonRmaId()
    {
                return !is_null($this->_fields['AmazonRmaId']['FieldValue']);
            }

    /**
     * Set the value of AmazonRmaId, return this.
     *
     * @param amazonRmaId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonRmaId($value)
    {
        $this->setAmazonRmaId($value);
        return $this;
    }

    /**
     * Get the value of the RmaPageURL property.
     *
     * @return String RmaPageURL.
     */
    public function getRmaPageURL()
    {
        return $this->_fields['RmaPageURL']['FieldValue'];
    }

    /**
     * Set the value of the RmaPageURL property.
     *
     * @param string rmaPageURL
     * @return this instance
     */
    public function setRmaPageURL($value)
    {
        $this->_fields['RmaPageURL']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RmaPageURL is set.
     *
     * @return true if RmaPageURL is set.
     */
    public function isSetRmaPageURL()
    {
                return !is_null($this->_fields['RmaPageURL']['FieldValue']);
            }

    /**
     * Set the value of RmaPageURL, return this.
     *
     * @param rmaPageURL
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRmaPageURL($value)
    {
        $this->setRmaPageURL($value);
        return $this;
    }

}
