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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceSellers_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListMarketplaceParticipationsResult: MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceSellers_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceSellers_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse extends MarketplaceWebServiceSellers_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListMarketplaceParticipationsResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceSellers_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceSellers_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListMarketplaceParticipationsResult property.
     *
     * @return ListMarketplaceParticipationsResult ListMarketplaceParticipationsResult.
     */
    public function getListMarketplaceParticipationsResult()
    {
        return $this->_fields['ListMarketplaceParticipationsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListMarketplaceParticipationsResult property.
     *
     * @param MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResult listMarketplaceParticipationsResult
     * @return this instance
     */
    public function setListMarketplaceParticipationsResult($value)
    {
        $this->_fields['ListMarketplaceParticipationsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListMarketplaceParticipationsResult is set.
     *
     * @return true if ListMarketplaceParticipationsResult is set.
     */
    public function isSetListMarketplaceParticipationsResult()
    {
                return !is_null($this->_fields['ListMarketplaceParticipationsResult']['FieldValue']);
            }

    /**
     * Set the value of ListMarketplaceParticipationsResult, return this.
     *
     * @param listMarketplaceParticipationsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListMarketplaceParticipationsResult($value)
    {
        $this->setListMarketplaceParticipationsResult($value);
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
     * @param MarketplaceWebServiceSellers_Model_ResponseMetadata responseMetadata
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
     * @param MarketplaceWebServiceSellers_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMarketplaceParticipationsResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceSellers_Model_ListMarketplaceParticipationsResponse from provided XML. 
                                  Make sure that ListMarketplaceParticipationsResponse is a root element");
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
        $xml .= "<ListMarketplaceParticipationsResponse xmlns=\"https://mws.amazonservices.com/Sellers/2011-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMarketplaceParticipationsResponse>";
        return $xml;
    }

}
