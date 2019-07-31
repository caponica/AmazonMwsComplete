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
 * MWSFinancesService_Model_FBALiquidationEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>OriginalRemovalOrderId: string</li>
 * <li>LiquidationProceedsAmount: MWSFinancesService_Model_Currency</li>
 * <li>LiquidationFeeAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_FBALiquidationEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OriginalRemovalOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LiquidationProceedsAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'LiquidationFeeAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
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
     * Get the value of the OriginalRemovalOrderId property.
     *
     * @return String OriginalRemovalOrderId.
     */
    public function getOriginalRemovalOrderId()
    {
        return $this->_fields['OriginalRemovalOrderId']['FieldValue'];
    }

    /**
     * Set the value of the OriginalRemovalOrderId property.
     *
     * @param string originalRemovalOrderId
     * @return this instance
     */
    public function setOriginalRemovalOrderId($value)
    {
        $this->_fields['OriginalRemovalOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OriginalRemovalOrderId is set.
     *
     * @return true if OriginalRemovalOrderId is set.
     */
    public function isSetOriginalRemovalOrderId()
    {
                return !is_null($this->_fields['OriginalRemovalOrderId']['FieldValue']);
            }

    /**
     * Set the value of OriginalRemovalOrderId, return this.
     *
     * @param originalRemovalOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOriginalRemovalOrderId($value)
    {
        $this->setOriginalRemovalOrderId($value);
        return $this;
    }

    /**
     * Get the value of the LiquidationProceedsAmount property.
     *
     * @return Currency LiquidationProceedsAmount.
     */
    public function getLiquidationProceedsAmount()
    {
        return $this->_fields['LiquidationProceedsAmount']['FieldValue'];
    }

    /**
     * Set the value of the LiquidationProceedsAmount property.
     *
     * @param MWSFinancesService_Model_Currency liquidationProceedsAmount
     * @return this instance
     */
    public function setLiquidationProceedsAmount($value)
    {
        $this->_fields['LiquidationProceedsAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LiquidationProceedsAmount is set.
     *
     * @return true if LiquidationProceedsAmount is set.
     */
    public function isSetLiquidationProceedsAmount()
    {
                return !is_null($this->_fields['LiquidationProceedsAmount']['FieldValue']);
            }

    /**
     * Set the value of LiquidationProceedsAmount, return this.
     *
     * @param liquidationProceedsAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLiquidationProceedsAmount($value)
    {
        $this->setLiquidationProceedsAmount($value);
        return $this;
    }

    /**
     * Get the value of the LiquidationFeeAmount property.
     *
     * @return Currency LiquidationFeeAmount.
     */
    public function getLiquidationFeeAmount()
    {
        return $this->_fields['LiquidationFeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the LiquidationFeeAmount property.
     *
     * @param MWSFinancesService_Model_Currency liquidationFeeAmount
     * @return this instance
     */
    public function setLiquidationFeeAmount($value)
    {
        $this->_fields['LiquidationFeeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LiquidationFeeAmount is set.
     *
     * @return true if LiquidationFeeAmount is set.
     */
    public function isSetLiquidationFeeAmount()
    {
                return !is_null($this->_fields['LiquidationFeeAmount']['FieldValue']);
            }

    /**
     * Set the value of LiquidationFeeAmount, return this.
     *
     * @param liquidationFeeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLiquidationFeeAmount($value)
    {
        $this->setLiquidationFeeAmount($value);
        return $this;
    }

}
