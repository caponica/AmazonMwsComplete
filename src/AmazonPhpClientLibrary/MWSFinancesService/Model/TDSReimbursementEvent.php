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
 * MWSFinancesService_Model_TDSReimbursementEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>TdsOrderId: string</li>
 * <li>ReimbursedAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_TDSReimbursementEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TdsOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReimbursedAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
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
     * Get the value of the TdsOrderId property.
     *
     * @return String TdsOrderId.
     */
    public function getTdsOrderId()
    {
        return $this->_fields['TdsOrderId']['FieldValue'];
    }

    /**
     * Set the value of the TdsOrderId property.
     *
     * @param string tdsOrderId
     * @return this instance
     */
    public function setTdsOrderId($value)
    {
        $this->_fields['TdsOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TdsOrderId is set.
     *
     * @return true if TdsOrderId is set.
     */
    public function isSetTdsOrderId()
    {
                return !is_null($this->_fields['TdsOrderId']['FieldValue']);
            }

    /**
     * Set the value of TdsOrderId, return this.
     *
     * @param tdsOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTdsOrderId($value)
    {
        $this->setTdsOrderId($value);
        return $this;
    }

    /**
     * Get the value of the ReimbursedAmount property.
     *
     * @return Currency ReimbursedAmount.
     */
    public function getReimbursedAmount()
    {
        return $this->_fields['ReimbursedAmount']['FieldValue'];
    }

    /**
     * Set the value of the ReimbursedAmount property.
     *
     * @param MWSFinancesService_Model_Currency reimbursedAmount
     * @return this instance
     */
    public function setReimbursedAmount($value)
    {
        $this->_fields['ReimbursedAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReimbursedAmount is set.
     *
     * @return true if ReimbursedAmount is set.
     */
    public function isSetReimbursedAmount()
    {
                return !is_null($this->_fields['ReimbursedAmount']['FieldValue']);
            }

    /**
     * Set the value of ReimbursedAmount, return this.
     *
     * @param reimbursedAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReimbursedAmount($value)
    {
        $this->setReimbursedAmount($value);
        return $this;
    }

}
