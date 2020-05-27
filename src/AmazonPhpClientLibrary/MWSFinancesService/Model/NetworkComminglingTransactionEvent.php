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
 * MWSFinancesService_Model_NetworkComminglingTransactionEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>TransactionType: string</li>
 * <li>PostedDate: string</li>
 * <li>NetCoTransactionID: string</li>
 * <li>SwapReason: string</li>
 * <li>ASIN: string</li>
 * <li>MarketplaceId: string</li>
 * <li>TaxExclusiveAmount: MWSFinancesService_Model_Currency</li>
 * <li>TaxAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_NetworkComminglingTransactionEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TransactionType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'NetCoTransactionID' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SwapReason' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TaxExclusiveAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'TaxAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
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
     * Get the value of the NetCoTransactionID property.
     *
     * @return String NetCoTransactionID.
     */
    public function getNetCoTransactionID()
    {
        return $this->_fields['NetCoTransactionID']['FieldValue'];
    }

    /**
     * Set the value of the NetCoTransactionID property.
     *
     * @param string netCoTransactionID
     * @return this instance
     */
    public function setNetCoTransactionID($value)
    {
        $this->_fields['NetCoTransactionID']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NetCoTransactionID is set.
     *
     * @return true if NetCoTransactionID is set.
     */
    public function isSetNetCoTransactionID()
    {
                return !is_null($this->_fields['NetCoTransactionID']['FieldValue']);
            }

    /**
     * Set the value of NetCoTransactionID, return this.
     *
     * @param netCoTransactionID
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNetCoTransactionID($value)
    {
        $this->setNetCoTransactionID($value);
        return $this;
    }

    /**
     * Get the value of the SwapReason property.
     *
     * @return String SwapReason.
     */
    public function getSwapReason()
    {
        return $this->_fields['SwapReason']['FieldValue'];
    }

    /**
     * Set the value of the SwapReason property.
     *
     * @param string swapReason
     * @return this instance
     */
    public function setSwapReason($value)
    {
        $this->_fields['SwapReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SwapReason is set.
     *
     * @return true if SwapReason is set.
     */
    public function isSetSwapReason()
    {
                return !is_null($this->_fields['SwapReason']['FieldValue']);
            }

    /**
     * Set the value of SwapReason, return this.
     *
     * @param swapReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSwapReason($value)
    {
        $this->setSwapReason($value);
        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
                return !is_null($this->_fields['ASIN']['FieldValue']);
            }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
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
     * Get the value of the TaxExclusiveAmount property.
     *
     * @return Currency TaxExclusiveAmount.
     */
    public function getTaxExclusiveAmount()
    {
        return $this->_fields['TaxExclusiveAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxExclusiveAmount property.
     *
     * @param MWSFinancesService_Model_Currency taxExclusiveAmount
     * @return this instance
     */
    public function setTaxExclusiveAmount($value)
    {
        $this->_fields['TaxExclusiveAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TaxExclusiveAmount is set.
     *
     * @return true if TaxExclusiveAmount is set.
     */
    public function isSetTaxExclusiveAmount()
    {
                return !is_null($this->_fields['TaxExclusiveAmount']['FieldValue']);
            }

    /**
     * Set the value of TaxExclusiveAmount, return this.
     *
     * @param taxExclusiveAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTaxExclusiveAmount($value)
    {
        $this->setTaxExclusiveAmount($value);
        return $this;
    }

    /**
     * Get the value of the TaxAmount property.
     *
     * @return Currency TaxAmount.
     */
    public function getTaxAmount()
    {
        return $this->_fields['TaxAmount']['FieldValue'];
    }

    /**
     * Set the value of the TaxAmount property.
     *
     * @param MWSFinancesService_Model_Currency taxAmount
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

}
