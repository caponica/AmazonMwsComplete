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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_TransportContent
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransportHeader: FBAInboundServiceMWS_Model_TransportHeader</li>
 * <li>TransportDetails: FBAInboundServiceMWS_Model_TransportDetailOutput</li>
 * <li>TransportResult: FBAInboundServiceMWS_Model_TransportResult</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_TransportContent extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TransportHeader' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_TransportHeader'),
    'TransportDetails' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_TransportDetailOutput'),
    'TransportResult' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_TransportResult'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TransportHeader property.
     *
     * @return TransportHeader TransportHeader.
     */
    public function getTransportHeader()
    {
        return $this->_fields['TransportHeader']['FieldValue'];
    }

    /**
     * Set the value of the TransportHeader property.
     *
     * @param FBAInboundServiceMWS_Model_TransportHeader transportHeader
     * @return this instance
     */
    public function setTransportHeader($value)
    {
        $this->_fields['TransportHeader']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportHeader is set.
     *
     * @return true if TransportHeader is set.
     */
    public function isSetTransportHeader()
    {
                return !is_null($this->_fields['TransportHeader']['FieldValue']);
            }

    /**
     * Set the value of TransportHeader, return this.
     *
     * @param transportHeader
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportHeader($value)
    {
        $this->setTransportHeader($value);
        return $this;
    }

    /**
     * Get the value of the TransportDetails property.
     *
     * @return TransportDetailOutput TransportDetails.
     */
    public function getTransportDetails()
    {
        return $this->_fields['TransportDetails']['FieldValue'];
    }

    /**
     * Set the value of the TransportDetails property.
     *
     * @param FBAInboundServiceMWS_Model_TransportDetailOutput transportDetails
     * @return this instance
     */
    public function setTransportDetails($value)
    {
        $this->_fields['TransportDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportDetails is set.
     *
     * @return true if TransportDetails is set.
     */
    public function isSetTransportDetails()
    {
                return !is_null($this->_fields['TransportDetails']['FieldValue']);
            }

    /**
     * Set the value of TransportDetails, return this.
     *
     * @param transportDetails
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportDetails($value)
    {
        $this->setTransportDetails($value);
        return $this;
    }

    /**
     * Get the value of the TransportResult property.
     *
     * @return TransportResult TransportResult.
     */
    public function getTransportResult()
    {
        return $this->_fields['TransportResult']['FieldValue'];
    }

    /**
     * Set the value of the TransportResult property.
     *
     * @param FBAInboundServiceMWS_Model_TransportResult transportResult
     * @return this instance
     */
    public function setTransportResult($value)
    {
        $this->_fields['TransportResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportResult is set.
     *
     * @return true if TransportResult is set.
     */
    public function isSetTransportResult()
    {
                return !is_null($this->_fields['TransportResult']['FieldValue']);
            }

    /**
     * Set the value of TransportResult, return this.
     *
     * @param transportResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportResult($value)
    {
        $this->setTransportResult($value);
        return $this;
    }

}
