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
 * FBAInboundServiceMWS_Model_PrepDetailsList
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepDetails: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_PrepDetailsList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PrepDetails' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_PrepDetails')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PrepDetails property.
     *
     * @return List<PrepDetails> PrepDetails.
     */
    public function getPrepDetails()
    {
        if ($this->_fields['PrepDetails']['FieldValue'] == null)
        {
            $this->_fields['PrepDetails']['FieldValue'] = array();
        }
        return $this->_fields['PrepDetails']['FieldValue'];
    }

    /**
     * Set the value of the PrepDetails property.
     *
     * @param array prepDetails
     * @return this instance
     */
    public function setPrepDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PrepDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PrepDetails.
     */
    public function unsetPrepDetails()
    {
        $this->_fields['PrepDetails']['FieldValue'] = array();
    }

    /**
     * Check to see if PrepDetails is set.
     *
     * @return true if PrepDetails is set.
     */
    public function isSetPrepDetails()
    {
                return !empty($this->_fields['PrepDetails']['FieldValue']);
            }

    /**
     * Add values for PrepDetails, return this.
     *
     * @param prepDetails
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPrepDetails()
    {
        foreach (func_get_args() as $PrepDetails)
        {
            $this->_fields['PrepDetails']['FieldValue'][] = $PrepDetails;
        }
        return $this;
    }

}
