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
 * MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetAdditionalSellerInputsResult: MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResult</li>
 * <li>ResponseMetadata: MWSMerchantFulfillmentService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetAdditionalSellerInputsResult' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetAdditionalSellerInputsResult property.
     *
     * @return GetAdditionalSellerInputsResult GetAdditionalSellerInputsResult.
     */
    public function getGetAdditionalSellerInputsResult()
    {
        return $this->_fields['GetAdditionalSellerInputsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetAdditionalSellerInputsResult property.
     *
     * @param MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResult getAdditionalSellerInputsResult
     * @return this instance
     */
    public function setGetAdditionalSellerInputsResult($value)
    {
        $this->_fields['GetAdditionalSellerInputsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetAdditionalSellerInputsResult is set.
     *
     * @return true if GetAdditionalSellerInputsResult is set.
     */
    public function isSetGetAdditionalSellerInputsResult()
    {
                return !is_null($this->_fields['GetAdditionalSellerInputsResult']['FieldValue']);
            }

    /**
     * Set the value of GetAdditionalSellerInputsResult, return this.
     *
     * @param getAdditionalSellerInputsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetAdditionalSellerInputsResult($value)
    {
        $this->setGetAdditionalSellerInputsResult($value);
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
     * Construct MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetAdditionalSellerInputsResponse']");
        if ($response->length == 1) {
            return new MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResponse from provided XML. 
                                  Make sure that GetAdditionalSellerInputsResponse is a root element");
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
        $xml .= "<GetAdditionalSellerInputsResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetAdditionalSellerInputsResponse>";
        return $xml;
    }

}
