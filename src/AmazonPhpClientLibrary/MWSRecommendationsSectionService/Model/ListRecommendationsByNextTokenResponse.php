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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

/**
 *  @see MWSRecommendationsSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListRecommendationsByNextTokenResult: MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResult</li>
 * <li>ResponseMetadata: MWSRecommendationsSectionService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSRecommendationsSectionService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListRecommendationsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListRecommendationsByNextTokenResult property.
     *
     * @return ListRecommendationsByNextTokenResult ListRecommendationsByNextTokenResult.
     */
    public function getListRecommendationsByNextTokenResult()
    {
        return $this->_fields['ListRecommendationsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListRecommendationsByNextTokenResult property.
     *
     * @param MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResult listRecommendationsByNextTokenResult
     * @return this instance
     */
    public function setListRecommendationsByNextTokenResult($value)
    {
        $this->_fields['ListRecommendationsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListRecommendationsByNextTokenResult is set.
     *
     * @return true if ListRecommendationsByNextTokenResult is set.
     */
    public function isSetListRecommendationsByNextTokenResult()
    {
                return !is_null($this->_fields['ListRecommendationsByNextTokenResult']['FieldValue']);
            }

    /**
     * Set the value of ListRecommendationsByNextTokenResult, return this.
     *
     * @param listRecommendationsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListRecommendationsByNextTokenResult($value)
    {
        $this->setListRecommendationsByNextTokenResult($value);
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
     * @param MWSRecommendationsSectionService_Model_ResponseMetadata responseMetadata
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
     * @param MWSRecommendationsSectionService_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRecommendationsByNextTokenResponse']");
        if ($response->length == 1) {
            return new MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSRecommendationsSectionService_Model_ListRecommendationsByNextTokenResponse from provided XML. 
                                  Make sure that ListRecommendationsByNextTokenResponse is a root element");
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
        $xml .= "<ListRecommendationsByNextTokenResponse xmlns=\"https://mws.amazonservices.com/Recommendations/2013-04-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRecommendationsByNextTokenResponse>";
        return $xml;
    }

}
