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
 * MWSFinancesService_Model_DirectPayment
 * 
 * Properties:
 * <ul>
 * 
 * <li>DirectPaymentType: string</li>
 * <li>DirectPaymentAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_DirectPayment extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DirectPaymentType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DirectPaymentAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DirectPaymentType property.
     *
     * @return String DirectPaymentType.
     */
    public function getDirectPaymentType()
    {
        return $this->_fields['DirectPaymentType']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentType property.
     *
     * @param string directPaymentType
     * @return this instance
     */
    public function setDirectPaymentType($value)
    {
        $this->_fields['DirectPaymentType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DirectPaymentType is set.
     *
     * @return true if DirectPaymentType is set.
     */
    public function isSetDirectPaymentType()
    {
                return !is_null($this->_fields['DirectPaymentType']['FieldValue']);
            }

    /**
     * Set the value of DirectPaymentType, return this.
     *
     * @param directPaymentType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDirectPaymentType($value)
    {
        $this->setDirectPaymentType($value);
        return $this;
    }

    /**
     * Get the value of the DirectPaymentAmount property.
     *
     * @return Currency DirectPaymentAmount.
     */
    public function getDirectPaymentAmount()
    {
        return $this->_fields['DirectPaymentAmount']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentAmount property.
     *
     * @param MWSFinancesService_Model_Currency directPaymentAmount
     * @return this instance
     */
    public function setDirectPaymentAmount($value)
    {
        $this->_fields['DirectPaymentAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DirectPaymentAmount is set.
     *
     * @return true if DirectPaymentAmount is set.
     */
    public function isSetDirectPaymentAmount()
    {
                return !is_null($this->_fields['DirectPaymentAmount']['FieldValue']);
            }

    /**
     * Set the value of DirectPaymentAmount, return this.
     *
     * @param directPaymentAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDirectPaymentAmount($value)
    {
        $this->setDirectPaymentAmount($value);
        return $this;
    }

}
