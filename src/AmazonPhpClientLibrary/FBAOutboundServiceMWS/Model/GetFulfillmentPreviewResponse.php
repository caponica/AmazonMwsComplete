<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * Library Version: 2016-02-01
 * Generated: Fri Jan 08 13:26:48 PST 2016
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetFulfillmentPreviewResult: FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResult</li>
 * <li>ResponseMetadata: FBAOutboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAOutboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetFulfillmentPreviewResult' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetFulfillmentPreviewResult property.
     *
     * @return GetFulfillmentPreviewResult GetFulfillmentPreviewResult.
     */
    public function getGetFulfillmentPreviewResult()
    {
        return $this->_fields['GetFulfillmentPreviewResult']['FieldValue'];
    }

    /**
     * Set the value of the GetFulfillmentPreviewResult property.
     *
     * @param FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResult getFulfillmentPreviewResult
     * @return this instance
     */
    public function setGetFulfillmentPreviewResult($value)
    {
        $this->_fields['GetFulfillmentPreviewResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetFulfillmentPreviewResult is set.
     *
     * @return true if GetFulfillmentPreviewResult is set.
     */
    public function isSetGetFulfillmentPreviewResult()
    {
                return !is_null($this->_fields['GetFulfillmentPreviewResult']['FieldValue']);
            }

    /**
     * Set the value of GetFulfillmentPreviewResult, return this.
     *
     * @param getFulfillmentPreviewResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetFulfillmentPreviewResult($value)
    {
        $this->setGetFulfillmentPreviewResult($value);
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
     * @param FBAOutboundServiceMWS_Model_ResponseMetadata responseMetadata
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
     * @param FBAOutboundServiceMWS_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetFulfillmentPreviewResponse']");
        if ($response->length == 1) {
            return new FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct FBAOutboundServiceMWS_Model_GetFulfillmentPreviewResponse from provided XML. 
                                  Make sure that GetFulfillmentPreviewResponse is a root element");
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
        $xml .= "<GetFulfillmentPreviewResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentPreviewResponse>";
        return $xml;
    }

}
