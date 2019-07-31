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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListFinancialEventGroupsByNextTokenResult: MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResult</li>
 * <li>ResponseMetadata: MWSFinancesService_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MWSFinancesService_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListFinancialEventGroupsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventGroupsByNextTokenResult property.
     *
     * @return ListFinancialEventGroupsByNextTokenResult ListFinancialEventGroupsByNextTokenResult.
     */
    public function getListFinancialEventGroupsByNextTokenResult()
    {
        return $this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventGroupsByNextTokenResult property.
     *
     * @param MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResult listFinancialEventGroupsByNextTokenResult
     * @return this instance
     */
    public function setListFinancialEventGroupsByNextTokenResult($value)
    {
        $this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListFinancialEventGroupsByNextTokenResult is set.
     *
     * @return true if ListFinancialEventGroupsByNextTokenResult is set.
     */
    public function isSetListFinancialEventGroupsByNextTokenResult()
    {
                return !is_null($this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue']);
            }

    /**
     * Set the value of ListFinancialEventGroupsByNextTokenResult, return this.
     *
     * @param listFinancialEventGroupsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListFinancialEventGroupsByNextTokenResult($value)
    {
        $this->setListFinancialEventGroupsByNextTokenResult($value);
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
     * @param MWSFinancesService_Model_ResponseMetadata responseMetadata
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
     * @param MWSFinancesService_Model_ResponseHeaderMetadata responseHeaderMetadata
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
     * Construct MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse from XML string
     * 
     * @param $xml
     *        XML string to construct from
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventGroupsByNextTokenResponse']");
        if ($response->length == 1) {
            return new MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse from provided XML. 
                                  Make sure that ListFinancialEventGroupsByNextTokenResponse is a root element");
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
        $xml .= "<ListFinancialEventGroupsByNextTokenResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventGroupsByNextTokenResponse>";
        return $xml;
    }

}
