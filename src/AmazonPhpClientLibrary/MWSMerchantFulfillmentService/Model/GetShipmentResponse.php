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
 * MWSMerchantFulfillmentService_Model_GetShipmentResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetShipmentResult: MWSMerchantFulfillmentService_Model_GetShipmentResult</li>
 * <li>ResponseMetadata: MWSMerchantFulfillmentService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetShipmentResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetShipmentResult' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_GetShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetShipmentResult property.
     *
     * @return GetShipmentResult GetShipmentResult.
     */
    public function getGetShipmentResult()
    {
        return $this->_fields['GetShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the GetShipmentResult property.
     *
     * @param MWSMerchantFulfillmentService_Model_GetShipmentResult getShipmentResult
     * @return this instance
     */
    public function setGetShipmentResult($value)
    {
        $this->_fields['GetShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetShipmentResult is set.
     *
     * @return true if GetShipmentResult is set.
     */
    public function isSetGetShipmentResult()
    {
                return !is_null($this->_fields['GetShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of GetShipmentResult, return this.
     *
     * @param getShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetShipmentResult($value)
    {
        $this->setGetShipmentResult($value);
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
     * Construct MWSMerchantFulfillmentService_Model_GetShipmentResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSMerchantFulfillmentService_Model_GetShipmentResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetShipmentResponse']");
        if ($response->length == 1) {
            return new MWSMerchantFulfillmentService_Model_GetShipmentResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSMerchantFulfillmentService_Model_GetShipmentResponse from provided XML. 
                                  Make sure that GetShipmentResponse is a root element");
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
        $xml .= "<GetShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetShipmentResponse>";
        return $xml;
    }

}
