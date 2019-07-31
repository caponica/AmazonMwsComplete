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
 * FBAInboundServiceMWS_Model_AmazonPrepFeesDetailsList
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonPrepFeesDetails: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_AmazonPrepFeesDetailsList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonPrepFeesDetails' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_AmazonPrepFeesDetails')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AmazonPrepFeesDetails property.
     *
     * @return List<AmazonPrepFeesDetails> AmazonPrepFeesDetails.
     */
    public function getAmazonPrepFeesDetails()
    {
        if ($this->_fields['AmazonPrepFeesDetails']['FieldValue'] == null)
        {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = array();
        }
        return $this->_fields['AmazonPrepFeesDetails']['FieldValue'];
    }

    /**
     * Set the value of the AmazonPrepFeesDetails property.
     *
     * @param array amazonPrepFeesDetails
     * @return this instance
     */
    public function setAmazonPrepFeesDetails($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AmazonPrepFeesDetails.
     */
    public function unsetAmazonPrepFeesDetails()
    {
        $this->_fields['AmazonPrepFeesDetails']['FieldValue'] = array();
    }

    /**
     * Check to see if AmazonPrepFeesDetails is set.
     *
     * @return true if AmazonPrepFeesDetails is set.
     */
    public function isSetAmazonPrepFeesDetails()
    {
                return !empty($this->_fields['AmazonPrepFeesDetails']['FieldValue']);
            }

    /**
     * Add values for AmazonPrepFeesDetails, return this.
     *
     * @param amazonPrepFeesDetails
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAmazonPrepFeesDetails()
    {
        foreach (func_get_args() as $AmazonPrepFeesDetails)
        {
            $this->_fields['AmazonPrepFeesDetails']['FieldValue'][] = $AmazonPrepFeesDetails;
        }
        return $this;
    }

}
