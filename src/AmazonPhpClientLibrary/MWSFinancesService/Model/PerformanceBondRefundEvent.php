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
 * MWSFinancesService_Model_PerformanceBondRefundEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceCountryCode: string</li>
 * <li>Amount: MWSFinancesService_Model_Currency</li>
 * <li>ProductGroupList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_PerformanceBondRefundEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MarketplaceCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Amount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'ProductGroupList' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'ProductGroup'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceCountryCode property.
     *
     * @return String MarketplaceCountryCode.
     */
    public function getMarketplaceCountryCode()
    {
        return $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceCountryCode property.
     *
     * @param string marketplaceCountryCode
     * @return this instance
     */
    public function setMarketplaceCountryCode($value)
    {
        $this->_fields['MarketplaceCountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceCountryCode is set.
     *
     * @return true if MarketplaceCountryCode is set.
     */
    public function isSetMarketplaceCountryCode()
    {
                return !is_null($this->_fields['MarketplaceCountryCode']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceCountryCode, return this.
     *
     * @param marketplaceCountryCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceCountryCode($value)
    {
        $this->setMarketplaceCountryCode($value);
        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Currency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param MWSFinancesService_Model_Currency amount
     * @return this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
                return !is_null($this->_fields['Amount']['FieldValue']);
            }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }

    /**
     * Get the value of the ProductGroupList property.
     *
     * @return List<String> ProductGroupList.
     */
    public function getProductGroupList()
    {
        if ($this->_fields['ProductGroupList']['FieldValue'] == null)
        {
            $this->_fields['ProductGroupList']['FieldValue'] = array();
        }
        return $this->_fields['ProductGroupList']['FieldValue'];
    }

    /**
     * Set the value of the ProductGroupList property.
     *
     * @param array productGroupList
     * @return this instance
     */
    public function setProductGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ProductGroupList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ProductGroupList.
     */
    public function unsetProductGroupList()
    {
        $this->_fields['ProductGroupList']['FieldValue'] = array();
    }

    /**
     * Check to see if ProductGroupList is set.
     *
     * @return true if ProductGroupList is set.
     */
    public function isSetProductGroupList()
    {
                return !empty($this->_fields['ProductGroupList']['FieldValue']);
            }

    /**
     * Add values for ProductGroupList, return this.
     *
     * @param productGroupList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withProductGroupList()
    {
        foreach (func_get_args() as $ProductGroupList)
        {
            $this->_fields['ProductGroupList']['FieldValue'][] = $ProductGroupList;
        }
        return $this;
    }

}
