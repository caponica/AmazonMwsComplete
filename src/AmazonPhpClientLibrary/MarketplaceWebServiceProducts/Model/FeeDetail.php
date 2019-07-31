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
 * MarketplaceWebServiceProducts_Model_FeeDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>FeeType: string</li>
 * <li>FeeAmount: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>FeePromotion: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>TaxAmount: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>FinalFee: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>IncludedFeeDetailList: MarketplaceWebServiceProducts_Model_FeeDetailList</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeeDetail extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeeType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeeAmount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'FeePromotion' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'TaxAmount' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'FinalFee' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'IncludedFeeDetailList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_FeeDetailList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeeType property.
     *
     * @return String FeeType.
     */
    public function getFeeType()
    {
        return $this->_fields['FeeType']['FieldValue'];
    }

    /**
     * Set the value of the FeeType property.
     *
     * @param string feeType
     * @return this instance
     */
    public function setFeeType($value)
    {
        $this->_fields['FeeType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeType is set.
     *
     * @return true if FeeType is set.
     */
    public function isSetFeeType()
    {
                return !is_null($this->_fields['FeeType']['FieldValue']);
            }

    /**
     * Set the value of FeeType, return this.
     *
     * @param feeType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeType($value)
    {
        $this->setFeeType($value);
        return $this;
    }

    /**
     * Get the value of the FeeAmount property.
     *
     * @return MoneyType FeeAmount.
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the FeeAmount property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType feeAmount
     * @return this instance
     */
    public function setFeeAmount($value)
    {
        $this->_fields['FeeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeAmount is set.
     *
     * @return true if FeeAmount is set.
     */
    public function isSetFeeAmount()
    {
                return !is_null($this->_fields['FeeAmount']['FieldValue']);
            }

    /**
     * Set the value of FeeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeAmount($value)
    {
        $this->setFeeAmount($value);
        return $this;
    }

    /**
     * Get the value of the FeePromotion property.
     *
     * @return MoneyType FeePromotion.
     */
    public function getFeePromotion()
    {
        return $this->_fields['FeePromotion']['FieldValue'];
    }

    /**
     * Set the value of the FeePromotion property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType feePromotion
     * @return this instance
     */
    public function setFeePromotion($value)
    {
        $this->_fields['FeePromotion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeePromotion is set.
     *
     * @return true if FeePromotion is set.
     */
    public function isSetFeePromotion()
    {
                return !is_null($this->_fields['FeePromotion']['FieldValue']);
            }

    /**
     * Set the value of FeePromotion, return this.
     *
     * @param feePromotion
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeePromotion($value)
    {
        $this->setFeePromotion($value);
        return $this;
    }

    /**
     * Get the value of the TaxAmount property.
     *
     * @return MoneyType TaxAmount.
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxAmount property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType taxAmount
     * @return this instance
     */
    public function setTaxAmount($value)
    {
        $this->_fields['TaxAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxAmount is set.
     *
     * @return true if TaxAmount is set.
     */
    public function isSetTaxAmount()
    {
                return !is_null($this->_fields['TaxAmount']['FieldValue']);
            }

    /**
     * Set the value of TaxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxAmount($value)
    {
        $this->setTaxAmount($value);
        return $this;
    }

    /**
     * Get the value of the FinalFee property.
     *
     * @return MoneyType FinalFee.
     */
    public function getFinalFee()
    {
        return $this->_fields['FinalFee']['FieldValue'];
    }

    /**
     * Set the value of the FinalFee property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType finalFee
     * @return this instance
     */
    public function setFinalFee($value)
    {
        $this->_fields['FinalFee']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinalFee is set.
     *
     * @return true if FinalFee is set.
     */
    public function isSetFinalFee()
    {
                return !is_null($this->_fields['FinalFee']['FieldValue']);
            }

    /**
     * Set the value of FinalFee, return this.
     *
     * @param finalFee
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinalFee($value)
    {
        $this->setFinalFee($value);
        return $this;
    }

    /**
     * Get the value of the IncludedFeeDetailList property.
     *
     * @return FeeDetailList IncludedFeeDetailList.
     */
    public function getIncludedFeeDetailList()
    {
        return $this->_fields['IncludedFeeDetailList']['FieldValue'];
    }

    /**
     * Set the value of the IncludedFeeDetailList property.
     *
     * @param MarketplaceWebServiceProducts_Model_FeeDetailList includedFeeDetailList
     * @return this instance
     */
    public function setIncludedFeeDetailList($value)
    {
        $this->_fields['IncludedFeeDetailList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludedFeeDetailList is set.
     *
     * @return true if IncludedFeeDetailList is set.
     */
    public function isSetIncludedFeeDetailList()
    {
                return !is_null($this->_fields['IncludedFeeDetailList']['FieldValue']);
            }

    /**
     * Set the value of IncludedFeeDetailList, return this.
     *
     * @param includedFeeDetailList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludedFeeDetailList($value)
    {
        $this->setIncludedFeeDetailList($value);
        return $this;
    }

}
