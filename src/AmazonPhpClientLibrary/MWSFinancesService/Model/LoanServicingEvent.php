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
 * MWSFinancesService_Model_LoanServicingEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>LoanAmount: MWSFinancesService_Model_Currency</li>
 * <li>SourceBusinessEventType: string</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_LoanServicingEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'LoanAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'SourceBusinessEventType' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the LoanAmount property.
     *
     * @return Currency LoanAmount.
     */
    public function getLoanAmount()
    {
        return $this->_fields['LoanAmount']['FieldValue'];
    }

    /**
     * Set the value of the LoanAmount property.
     *
     * @param MWSFinancesService_Model_Currency loanAmount
     * @return this instance
     */
    public function setLoanAmount($value)
    {
        $this->_fields['LoanAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LoanAmount is set.
     *
     * @return true if LoanAmount is set.
     */
    public function isSetLoanAmount()
    {
                return !is_null($this->_fields['LoanAmount']['FieldValue']);
            }

    /**
     * Set the value of LoanAmount, return this.
     *
     * @param loanAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLoanAmount($value)
    {
        $this->setLoanAmount($value);
        return $this;
    }

    /**
     * Get the value of the SourceBusinessEventType property.
     *
     * @return String SourceBusinessEventType.
     */
    public function getSourceBusinessEventType()
    {
        return $this->_fields['SourceBusinessEventType']['FieldValue'];
    }

    /**
     * Set the value of the SourceBusinessEventType property.
     *
     * @param string sourceBusinessEventType
     * @return this instance
     */
    public function setSourceBusinessEventType($value)
    {
        $this->_fields['SourceBusinessEventType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SourceBusinessEventType is set.
     *
     * @return true if SourceBusinessEventType is set.
     */
    public function isSetSourceBusinessEventType()
    {
                return !is_null($this->_fields['SourceBusinessEventType']['FieldValue']);
            }

    /**
     * Set the value of SourceBusinessEventType, return this.
     *
     * @param sourceBusinessEventType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSourceBusinessEventType($value)
    {
        $this->setSourceBusinessEventType($value);
        return $this;
    }

}
