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
 * MWSFinancesService_Model_ChargeInstrument
 * 
 * Properties:
 * <ul>
 * 
 * <li>Description: string</li>
 * <li>Tail: string</li>
 * <li>Amount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ChargeInstrument extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Tail' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Amount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Description property.
     *
     * @return String Description.
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @return this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set.
     */
    public function isSetDescription()
    {
                return !is_null($this->_fields['Description']['FieldValue']);
            }

    /**
     * Set the value of Description, return this.
     *
     * @param description
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }

    /**
     * Get the value of the Tail property.
     *
     * @return String Tail.
     */
    public function getTail()
    {
        return $this->_fields['Tail']['FieldValue'];
    }

    /**
     * Set the value of the Tail property.
     *
     * @param string tail
     * @return this instance
     */
    public function setTail($value)
    {
        $this->_fields['Tail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Tail is set.
     *
     * @return true if Tail is set.
     */
    public function isSetTail()
    {
                return !is_null($this->_fields['Tail']['FieldValue']);
            }

    /**
     * Set the value of Tail, return this.
     *
     * @param tail
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTail($value)
    {
        $this->setTail($value);
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

}
