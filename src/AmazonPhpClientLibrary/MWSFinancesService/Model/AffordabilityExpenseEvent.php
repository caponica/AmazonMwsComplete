<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * Library Version: 2020-02-21
 * Generated: Fri Feb 21 09:07:30 PST 2020
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_AffordabilityExpenseEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonOrderId: string</li>
 * <li>PostedDate: string</li>
 * <li>MarketplaceId: string</li>
 * <li>TransactionType: string</li>
 * <li>BaseExpense: MWSFinancesService_Model_Currency</li>
 * <li>TaxTypeCGST: MWSFinancesService_Model_Currency</li>
 * <li>TaxTypeSGST: MWSFinancesService_Model_Currency</li>
 * <li>TaxTypeIGST: MWSFinancesService_Model_Currency</li>
 * <li>TotalExpense: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_AffordabilityExpenseEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TransactionType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'BaseExpense' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxTypeCGST' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxTypeSGST' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxTypeIGST' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TotalExpense' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
                return !is_null($this->_fields['PostedDate']['FieldValue']);
            }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
                return !is_null($this->_fields['MarketplaceId']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the TransactionType property.
     *
     * @return String TransactionType.
     */
    public function getTransactionType()
    {
        return $this->_fields['TransactionType']['FieldValue'];
    }

    /**
     * Set the value of the TransactionType property.
     *
     * @param string transactionType
     * @return this instance
     */
    public function setTransactionType($value)
    {
        $this->_fields['TransactionType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransactionType is set.
     *
     * @return true if TransactionType is set.
     */
    public function isSetTransactionType()
    {
                return !is_null($this->_fields['TransactionType']['FieldValue']);
            }

    /**
     * Set the value of TransactionType, return this.
     *
     * @param transactionType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransactionType($value)
    {
        $this->setTransactionType($value);
        return $this;
    }

    /**
     * Get the value of the BaseExpense property.
     *
     * @return Currency BaseExpense.
     */
    public function getBaseExpense()
    {
        return $this->_fields['BaseExpense']['FieldValue'];
    }

    /**
     * Set the value of the BaseExpense property.
     *
     * @param MWSFinancesService_Model_Currency baseExpense
     * @return this instance
     */
    public function setBaseExpense($value)
    {
        $this->_fields['BaseExpense']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BaseExpense is set.
     *
     * @return true if BaseExpense is set.
     */
    public function isSetBaseExpense()
    {
                return !is_null($this->_fields['BaseExpense']['FieldValue']);
            }

    /**
     * Set the value of BaseExpense, return this.
     *
     * @param baseExpense
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBaseExpense($value)
    {
        $this->setBaseExpense($value);
        return $this;
    }

    /**
     * Get the value of the TaxTypeCGST property.
     *
     * @return Currency TaxTypeCGST.
     */
    public function getTaxTypeCGST()
    {
        return $this->_fields['TaxTypeCGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeCGST property.
     *
     * @param MWSFinancesService_Model_Currency taxTypeCGST
     * @return this instance
     */
    public function setTaxTypeCGST($value)
    {
        $this->_fields['TaxTypeCGST']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxTypeCGST is set.
     *
     * @return true if TaxTypeCGST is set.
     */
    public function isSetTaxTypeCGST()
    {
                return !is_null($this->_fields['TaxTypeCGST']['FieldValue']);
            }

    /**
     * Set the value of TaxTypeCGST, return this.
     *
     * @param taxTypeCGST
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxTypeCGST($value)
    {
        $this->setTaxTypeCGST($value);
        return $this;
    }

    /**
     * Get the value of the TaxTypeSGST property.
     *
     * @return Currency TaxTypeSGST.
     */
    public function getTaxTypeSGST()
    {
        return $this->_fields['TaxTypeSGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeSGST property.
     *
     * @param MWSFinancesService_Model_Currency taxTypeSGST
     * @return this instance
     */
    public function setTaxTypeSGST($value)
    {
        $this->_fields['TaxTypeSGST']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxTypeSGST is set.
     *
     * @return true if TaxTypeSGST is set.
     */
    public function isSetTaxTypeSGST()
    {
                return !is_null($this->_fields['TaxTypeSGST']['FieldValue']);
            }

    /**
     * Set the value of TaxTypeSGST, return this.
     *
     * @param taxTypeSGST
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxTypeSGST($value)
    {
        $this->setTaxTypeSGST($value);
        return $this;
    }

    /**
     * Get the value of the TaxTypeIGST property.
     *
     * @return Currency TaxTypeIGST.
     */
    public function getTaxTypeIGST()
    {
        return $this->_fields['TaxTypeIGST']['FieldValue'];
    }

    /**
     * Set the value of the TaxTypeIGST property.
     *
     * @param MWSFinancesService_Model_Currency taxTypeIGST
     * @return this instance
     */
    public function setTaxTypeIGST($value)
    {
        $this->_fields['TaxTypeIGST']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxTypeIGST is set.
     *
     * @return true if TaxTypeIGST is set.
     */
    public function isSetTaxTypeIGST()
    {
                return !is_null($this->_fields['TaxTypeIGST']['FieldValue']);
            }

    /**
     * Set the value of TaxTypeIGST, return this.
     *
     * @param taxTypeIGST
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxTypeIGST($value)
    {
        $this->setTaxTypeIGST($value);
        return $this;
    }

    /**
     * Get the value of the TotalExpense property.
     *
     * @return Currency TotalExpense.
     */
    public function getTotalExpense()
    {
        return $this->_fields['TotalExpense']['FieldValue'];
    }

    /**
     * Set the value of the TotalExpense property.
     *
     * @param MWSFinancesService_Model_Currency totalExpense
     * @return this instance
     */
    public function setTotalExpense($value)
    {
        $this->_fields['TotalExpense']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalExpense is set.
     *
     * @return true if TotalExpense is set.
     */
    public function isSetTotalExpense()
    {
                return !is_null($this->_fields['TotalExpense']['FieldValue']);
            }

    /**
     * Set the value of TotalExpense, return this.
     *
     * @param totalExpense
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalExpense($value)
    {
        $this->setTotalExpense($value);
        return $this;
    }

}
