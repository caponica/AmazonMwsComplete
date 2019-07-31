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
 * MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeesEstimateResultList: MarketplaceWebServiceProducts_Model_FeesEstimateResultList</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeesEstimateResultList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_FeesEstimateResultList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateResultList property.
     *
     * @return FeesEstimateResultList FeesEstimateResultList.
     */
    public function getFeesEstimateResultList()
    {
        return $this->_fields['FeesEstimateResultList']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateResultList property.
     *
     * @param MarketplaceWebServiceProducts_Model_FeesEstimateResultList feesEstimateResultList
     * @return this instance
     */
    public function setFeesEstimateResultList($value)
    {
        $this->_fields['FeesEstimateResultList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimateResultList is set.
     *
     * @return true if FeesEstimateResultList is set.
     */
    public function isSetFeesEstimateResultList()
    {
                return !is_null($this->_fields['FeesEstimateResultList']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimateResultList, return this.
     *
     * @param feesEstimateResultList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimateResultList($value)
    {
        $this->setFeesEstimateResultList($value);
        return $this;
    }

}
