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
 * MWSFinancesService_Model_Currency
 * 
 * Properties:
 * <ul>
 * 
 * <li>CurrencyCode: string</li>
 * <li>CurrencyAmount: float</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_Currency extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CurrencyAmount' => array('FieldValue' => null, 'FieldType' => 'float'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CurrencyCode property.
     *
     * @return String CurrencyCode.
     */
    public function getCurrencyCode()
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }

    /**
     * Set the value of the CurrencyCode property.
     *
     * @param string currencyCode
     * @return this instance
     */
    public function setCurrencyCode($value)
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CurrencyCode is set.
     *
     * @return true if CurrencyCode is set.
     */
    public function isSetCurrencyCode()
    {
                return !is_null($this->_fields['CurrencyCode']['FieldValue']);
            }

    /**
     * Set the value of CurrencyCode, return this.
     *
     * @param currencyCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCurrencyCode($value)
    {
        $this->setCurrencyCode($value);
        return $this;
    }

    /**
     * Get the value of the CurrencyAmount property.
     *
     * @return BigDecimal CurrencyAmount.
     */
    public function getCurrencyAmount()
    {
        return $this->_fields['CurrencyAmount']['FieldValue'];
    }

    /**
     * Set the value of the CurrencyAmount property.
     *
     * @param float currencyAmount
     * @return this instance
     */
    public function setCurrencyAmount($value)
    {
        $this->_fields['CurrencyAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CurrencyAmount is set.
     *
     * @return true if CurrencyAmount is set.
     */
    public function isSetCurrencyAmount()
    {
                return !is_null($this->_fields['CurrencyAmount']['FieldValue']);
            }

    /**
     * Set the value of CurrencyAmount, return this.
     *
     * @param currencyAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCurrencyAmount($value)
    {
        $this->setCurrencyAmount($value);
        return $this;
    }

}
