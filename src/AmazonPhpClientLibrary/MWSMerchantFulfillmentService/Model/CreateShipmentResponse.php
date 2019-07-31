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
 * MWSMerchantFulfillmentService_Model_CreateShipmentResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreateShipmentResult: MWSMerchantFulfillmentService_Model_CreateShipmentResult</li>
 * <li>ResponseMetadata: MWSMerchantFulfillmentService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_CreateShipmentResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CreateShipmentResult' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CreateShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CreateShipmentResult property.
     *
     * @return CreateShipmentResult CreateShipmentResult.
     */
    public function getCreateShipmentResult()
    {
        return $this->_fields['CreateShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateShipmentResult property.
     *
     * @param MWSMerchantFulfillmentService_Model_CreateShipmentResult createShipmentResult
     * @return this instance
     */
    public function setCreateShipmentResult($value)
    {
        $this->_fields['CreateShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateShipmentResult is set.
     *
     * @return true if CreateShipmentResult is set.
     */
    public function isSetCreateShipmentResult()
    {
                return !is_null($this->_fields['CreateShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of CreateShipmentResult, return this.
     *
     * @param createShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateShipmentResult($value)
    {
        $this->setCreateShipmentResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSMerchantFulfillmentService_Model_ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct MWSMerchantFulfillmentService_Model_CreateShipmentResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSMerchantFulfillmentService_Model_CreateShipmentResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateShipmentResponse']");
        if ($response->length == 1) {
            return new MWSMerchantFulfillmentService_Model_CreateShipmentResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSMerchantFulfillmentService_Model_CreateShipmentResponse from provided XML. 
                                  Make sure that CreateShipmentResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<CreateShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateShipmentResponse>";
        return $xml;
    }

}
