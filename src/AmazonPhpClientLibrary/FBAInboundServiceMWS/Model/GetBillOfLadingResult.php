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
 * FBAInboundServiceMWS_Model_GetBillOfLadingResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransportDocument: FBAInboundServiceMWS_Model_TransportDocument</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GetBillOfLadingResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TransportDocument' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_TransportDocument'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TransportDocument property.
     *
     * @return TransportDocument TransportDocument.
     */
    public function getTransportDocument()
    {
        return $this->_fields['TransportDocument']['FieldValue'];
    }

    /**
     * Set the value of the TransportDocument property.
     *
     * @param FBAInboundServiceMWS_Model_TransportDocument transportDocument
     * @return this instance
     */
    public function setTransportDocument($value)
    {
        $this->_fields['TransportDocument']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportDocument is set.
     *
     * @return true if TransportDocument is set.
     */
    public function isSetTransportDocument()
    {
                return !is_null($this->_fields['TransportDocument']['FieldValue']);
            }

    /**
     * Set the value of TransportDocument, return this.
     *
     * @param transportDocument
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportDocument($value)
    {
        $this->setTransportDocument($value);
        return $this;
    }

}
