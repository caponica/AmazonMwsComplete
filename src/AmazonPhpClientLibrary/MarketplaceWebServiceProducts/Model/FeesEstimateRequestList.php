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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceProducts_Model_FeesEstimateRequestList
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeesEstimateRequest: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeesEstimateRequestList extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeesEstimateRequest' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_FeesEstimateRequest')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateRequest property.
     *
     * @return List<FeesEstimateRequest> FeesEstimateRequest.
     */
    public function getFeesEstimateRequest()
    {
        if ($this->_fields['FeesEstimateRequest']['FieldValue'] == null)
        {
            $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
        }
        return $this->_fields['FeesEstimateRequest']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateRequest property.
     *
     * @param array feesEstimateRequest
     * @return this instance
     */
    public function setFeesEstimateRequest($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeesEstimateRequest']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeesEstimateRequest.
     */
    public function unsetFeesEstimateRequest()
    {
        $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
    }

    /**
     * Check to see if FeesEstimateRequest is set.
     *
     * @return true if FeesEstimateRequest is set.
     */
    public function isSetFeesEstimateRequest()
    {
                return !empty($this->_fields['FeesEstimateRequest']['FieldValue']);
            }

    /**
     * Add values for FeesEstimateRequest, return this.
     *
     * @param feesEstimateRequest
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeesEstimateRequest()
    {
        foreach (func_get_args() as $FeesEstimateRequest)
        {
            $this->_fields['FeesEstimateRequest']['FieldValue'][] = $FeesEstimateRequest;
        }
        return $this;
    }

}
