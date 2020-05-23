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
 * MWSEasyShipSectionService_Model_CreateScheduledPackageResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreateScheduledPackageResult: MWSEasyShipSectionService_Model_CreateScheduledPackageResult</li>
 * <li>ResponseMetadata: MWSEasyShipSectionService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSEasyShipSectionService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSEasyShipSectionService_Model_CreateScheduledPackageResponse extends MWSEasyShipSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CreateScheduledPackageResult' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_CreateScheduledPackageResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSEasyShipSectionService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CreateScheduledPackageResult property.
     *
     * @return CreateScheduledPackageResult CreateScheduledPackageResult.
     */
    public function getCreateScheduledPackageResult()
    {
        return $this->_fields['CreateScheduledPackageResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateScheduledPackageResult property.
     *
     * @param MWSEasyShipSectionService_Model_CreateScheduledPackageResult createScheduledPackageResult
     * @return this instance
     */
    public function setCreateScheduledPackageResult($value)
    {
        $this->_fields['CreateScheduledPackageResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateScheduledPackageResult is set.
     *
     * @return true if CreateScheduledPackageResult is set.
     */
    public function isSetCreateScheduledPackageResult()
    {
                return !is_null($this->_fields['CreateScheduledPackageResult']['FieldValue']);
            }

    /**
     * Set the value of CreateScheduledPackageResult, return this.
     *
     * @param createScheduledPackageResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateScheduledPackageResult($value)
    {
        $this->setCreateScheduledPackageResult($value);
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
     * Construct MWSEasyShipSectionService_Model_CreateScheduledPackageResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSEasyShipSectionService_Model_CreateScheduledPackageResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateScheduledPackageResponse']");
        if ($response->length == 1) {
            return new MWSEasyShipSectionService_Model_CreateScheduledPackageResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSEasyShipSectionService_Model_CreateScheduledPackageResponse from provided XML. 
                                  Make sure that CreateScheduledPackageResponse is a root element");
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
        $xml .= "<CreateScheduledPackageResponse xmlns=\"https://mws.amazonservices.com/EasyShip/2018-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateScheduledPackageResponse>";
        return $xml;
    }

}
