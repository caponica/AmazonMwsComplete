<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:38 GMT 2015
 */

/**
 *  @see MWSCartService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCartService_Model_ListCartsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListCartsResult: MWSCartService_Model_ListCartsResult</li>
 * <li>ResponseMetadata: MWSCartService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSCartService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSCartService_Model_ListCartsResponse extends MWSCartService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListCartsResult' => array('FieldValue' => null, 'FieldType' => 'MWSCartService_Model_ListCartsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCartService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSCartService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListCartsResult property.
     *
     * @return ListCartsResult ListCartsResult.
     */
    public function getListCartsResult()
    {
        return $this->_fields['ListCartsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListCartsResult property.
     *
     * @param MWSCartService_Model_ListCartsResult listCartsResult
     * @return this instance
     */
    public function setListCartsResult($value)
    {
        $this->_fields['ListCartsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListCartsResult is set.
     *
     * @return true if ListCartsResult is set.
     */
    public function isSetListCartsResult()
    {
                return !is_null($this->_fields['ListCartsResult']['FieldValue']);
            }

    /**
     * Set the value of ListCartsResult, return this.
     *
     * @param listCartsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListCartsResult($value)
    {
        $this->setListCartsResult($value);
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
     * @param MWSCartService_Model_ResponseMetadata responseMetadata
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
     * @param MWSCartService_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSCartService_Model_ListCartsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSCartService_Model_ListCartsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListCartsResponse']");
        if ($response->length == 1) {
            return new MWSCartService_Model_ListCartsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSCartService_Model_ListCartsResponse from provided XML. 
                                  Make sure that ListCartsResponse is a root element");
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
        $xml .= "<ListCartsResponse xmlns=\"http://mws.amazonservices.com/schema/CartInformation/2014-03-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListCartsResponse>";
        return $xml;
    }

}
