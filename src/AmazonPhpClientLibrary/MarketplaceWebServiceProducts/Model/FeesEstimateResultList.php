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
 * MarketplaceWebServiceProducts_Model_FeesEstimateResultList
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeesEstimateResult: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeesEstimateResultList extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeesEstimateResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_FeesEstimateResult')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateResult property.
     *
     * @return List<FeesEstimateResult> FeesEstimateResult.
     */
    public function getFeesEstimateResult()
    {
        if ($this->_fields['FeesEstimateResult']['FieldValue'] == null)
        {
            $this->_fields['FeesEstimateResult']['FieldValue'] = array();
        }
        return $this->_fields['FeesEstimateResult']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateResult property.
     *
     * @param array feesEstimateResult
     * @return this instance
     */
    public function setFeesEstimateResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeesEstimateResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeesEstimateResult.
     */
    public function unsetFeesEstimateResult()
    {
        $this->_fields['FeesEstimateResult']['FieldValue'] = array();
    }

    /**
     * Check to see if FeesEstimateResult is set.
     *
     * @return true if FeesEstimateResult is set.
     */
    public function isSetFeesEstimateResult()
    {
                return !empty($this->_fields['FeesEstimateResult']['FieldValue']);
            }

    /**
     * Add values for FeesEstimateResult, return this.
     *
     * @param feesEstimateResult
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeesEstimateResult()
    {
        foreach (func_get_args() as $FeesEstimateResult)
        {
            $this->_fields['FeesEstimateResult']['FieldValue'][] = $FeesEstimateResult;
        }
        return $this;
    }

}
