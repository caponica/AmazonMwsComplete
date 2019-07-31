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
 * MarketplaceWebServiceProducts_Model_FeesEstimate
 * 
 * Properties:
 * <ul>
 * 
 * <li>TimeOfFeesEstimation: string</li>
 * <li>TotalFeesEstimate: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>FeeDetailList: MarketplaceWebServiceProducts_Model_FeeDetailList</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeesEstimate extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TimeOfFeesEstimation' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TotalFeesEstimate' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'FeeDetailList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_FeeDetailList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TimeOfFeesEstimation property.
     *
     * @return XMLGregorianCalendar TimeOfFeesEstimation.
     */
    public function getTimeOfFeesEstimation()
    {
        return $this->_fields['TimeOfFeesEstimation']['FieldValue'];
    }

    /**
     * Set the value of the TimeOfFeesEstimation property.
     *
     * @param string timeOfFeesEstimation
     * @return this instance
     */
    public function setTimeOfFeesEstimation($value)
    {
        $this->_fields['TimeOfFeesEstimation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TimeOfFeesEstimation is set.
     *
     * @return true if TimeOfFeesEstimation is set.
     */
    public function isSetTimeOfFeesEstimation()
    {
                return !is_null($this->_fields['TimeOfFeesEstimation']['FieldValue']);
            }

    /**
     * Set the value of TimeOfFeesEstimation, return this.
     *
     * @param timeOfFeesEstimation
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTimeOfFeesEstimation($value)
    {
        $this->setTimeOfFeesEstimation($value);
        return $this;
    }

    /**
     * Get the value of the TotalFeesEstimate property.
     *
     * @return MoneyType TotalFeesEstimate.
     */
    public function getTotalFeesEstimate()
    {
        return $this->_fields['TotalFeesEstimate']['FieldValue'];
    }

    /**
     * Set the value of the TotalFeesEstimate property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType totalFeesEstimate
     * @return this instance
     */
    public function setTotalFeesEstimate($value)
    {
        $this->_fields['TotalFeesEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalFeesEstimate is set.
     *
     * @return true if TotalFeesEstimate is set.
     */
    public function isSetTotalFeesEstimate()
    {
                return !is_null($this->_fields['TotalFeesEstimate']['FieldValue']);
            }

    /**
     * Set the value of TotalFeesEstimate, return this.
     *
     * @param totalFeesEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalFeesEstimate($value)
    {
        $this->setTotalFeesEstimate($value);
        return $this;
    }

    /**
     * Get the value of the FeeDetailList property.
     *
     * @return FeeDetailList FeeDetailList.
     */
    public function getFeeDetailList()
    {
        return $this->_fields['FeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of the FeeDetailList property.
     *
     * @param MarketplaceWebServiceProducts_Model_FeeDetailList feeDetailList
     * @return this instance
     */
    public function setFeeDetailList($value)
    {
        $this->_fields['FeeDetailList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeDetailList is set.
     *
     * @return true if FeeDetailList is set.
     */
    public function isSetFeeDetailList()
    {
                return !is_null($this->_fields['FeeDetailList']['FieldValue']);
            }

    /**
     * Set the value of FeeDetailList, return this.
     *
     * @param feeDetailList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeDetailList($value)
    {
        $this->setFeeDetailList($value);
        return $this;
    }

}
