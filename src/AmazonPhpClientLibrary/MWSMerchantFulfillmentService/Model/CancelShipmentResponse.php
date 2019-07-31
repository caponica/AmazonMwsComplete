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
 * MWSMerchantFulfillmentService_Model_CancelShipmentResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CancelShipmentResult: MWSMerchantFulfillmentService_Model_CancelShipmentResult</li>
 * <li>ResponseMetadata: MWSMerchantFulfillmentService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_CancelShipmentResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CancelShipmentResult' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CancelShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CancelShipmentResult property.
     *
     * @return CancelShipmentResult CancelShipmentResult.
     */
    public function getCancelShipmentResult()
    {
        return $this->_fields['CancelShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the CancelShipmentResult property.
     *
     * @param MWSMerchantFulfillmentService_Model_CancelShipmentResult cancelShipmentResult
     * @return this instance
     */
    public function setCancelShipmentResult($value)
    {
        $this->_fields['CancelShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CancelShipmentResult is set.
     *
     * @return true if CancelShipmentResult is set.
     */
    public function isSetCancelShipmentResult()
    {
                return !is_null($this->_fields['CancelShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of CancelShipmentResult, return this.
     *
     * @param cancelShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCancelShipmentResult($value)
    {
        $this->setCancelShipmentResult($value);
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
     * Construct MWSMerchantFulfillmentService_Model_CancelShipmentResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSMerchantFulfillmentService_Model_CancelShipmentResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CancelShipmentResponse']");
        if ($response->length == 1) {
            return new MWSMerchantFulfillmentService_Model_CancelShipmentResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSMerchantFulfillmentService_Model_CancelShipmentResponse from provided XML. 
                                  Make sure that CancelShipmentResponse is a root element");
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
        $xml .= "<CancelShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelShipmentResponse>";
        return $xml;
    }

}
