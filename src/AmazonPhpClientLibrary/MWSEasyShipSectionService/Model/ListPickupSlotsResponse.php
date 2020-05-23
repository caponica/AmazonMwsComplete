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
 * @package  MWS Easy Ship Section Service
 * @version  2018-09-01
 * Library Version: 2018-09-01
 * Generated: Thu Sep 27 07:44:07 PDT 2018
 */

/**
 *  @see MWSEasyShipSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSEasyShipSectionService_Model_ListPickupSlotsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListPickupSlotsResult: MWSEasyShipSectionService_Model_ListPickupSlotsResult</li>
 * <li>ResponseMetadata: MWSEasyShipSectionService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSEasyShipSectionService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_ListPickupSlotsResponse extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListPickupSlotsResult' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ListPickupSlotsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListPickupSlotsResult property.
     *
     * @return ListPickupSlotsResult ListPickupSlotsResult.
     */
    public function getListPickupSlotsResult()
    {
        return $this->_fields['ListPickupSlotsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListPickupSlotsResult property.
     *
     * @param MWSEasyShipSectionService_Model_ListPickupSlotsResult listPickupSlotsResult
     * @return this instance
     */
    public function setListPickupSlotsResult($value)
    {
        $this->_fields['ListPickupSlotsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListPickupSlotsResult is set.
     *
     * @return true if ListPickupSlotsResult is set.
     */
    public function isSetListPickupSlotsResult()
    {
                return !is_null($this->_fields['ListPickupSlotsResult']['FieldValue']);
            }

    /**
     * Set the value of ListPickupSlotsResult, return this.
     *
     * @param listPickupSlotsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListPickupSlotsResult($value)
    {
        $this->setListPickupSlotsResult($value);
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
     * @param MWSEasyShipSectionService_Model_ResponseMetadata responseMetadata
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
     * @param MWSEasyShipSectionService_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSEasyShipSectionService_Model_ListPickupSlotsResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSEasyShipSectionService_Model_ListPickupSlotsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListPickupSlotsResponse']");
        if ($response->length == 1) {
            return new MWSEasyShipSectionService_Model_ListPickupSlotsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSEasyShipSectionService_Model_ListPickupSlotsResponse from provided XML. 
                                  Make sure that ListPickupSlotsResponse is a root element");
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
        $xml .= "<ListPickupSlotsResponse xmlns=\"https://mws.amazonservices.com/EasyShip/2018-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListPickupSlotsResponse>";
        return $xml;
    }

}
