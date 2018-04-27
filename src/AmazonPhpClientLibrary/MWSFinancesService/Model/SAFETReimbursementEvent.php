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
 * MWSFinancesService_Model_SAFETReimbursementEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>SAFETClaimId: string</li>
 * <li>ReimbursedAmount: MWSFinancesService_Model_Currency</li>
 * <li>ReasonCode: string</li>
 * <li>SAFETReimbursementItemList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_SAFETReimbursementEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SAFETClaimId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ReimbursedAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'ReasonCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SAFETReimbursementItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_SAFETReimbursementItem'), 'ListMemberName' => 'SAFETReimbursementItem'),
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
     * Get the value of the SAFETClaimId property.
     *
     * @return String SAFETClaimId.
     */
    public function getSAFETClaimId()
    {
        return $this->_fields['SAFETClaimId']['FieldValue'];
    }

    /**
     * Set the value of the SAFETClaimId property.
     *
     * @param string safetClaimId
     * @return this instance
     */
    public function setSAFETClaimId($value)
    {
        $this->_fields['SAFETClaimId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SAFETClaimId is set.
     *
     * @return true if SAFETClaimId is set.
     */
    public function isSetSAFETClaimId()
    {
                return !is_null($this->_fields['SAFETClaimId']['FieldValue']);
            }

    /**
     * Set the value of SAFETClaimId, return this.
     *
     * @param safetClaimId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSAFETClaimId($value)
    {
        $this->setSAFETClaimId($value);
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

    /**
     * Get the value of the ReasonCode property.
     *
     * @return String ReasonCode.
     */
    public function getReasonCode()
    {
        return $this->_fields['ReasonCode']['FieldValue'];
    }

    /**
     * Set the value of the ReasonCode property.
     *
     * @param string reasonCode
     * @return this instance
     */
    public function setReasonCode($value)
    {
        $this->_fields['ReasonCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ReasonCode is set.
     *
     * @return true if ReasonCode is set.
     */
    public function isSetReasonCode()
    {
                return !is_null($this->_fields['ReasonCode']['FieldValue']);
            }

    /**
     * Set the value of ReasonCode, return this.
     *
     * @param reasonCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withReasonCode($value)
    {
        $this->setReasonCode($value);
        return $this;
    }

    /**
     * Get the value of the SAFETReimbursementItemList property.
     *
     * @return List<SAFETReimbursementItem> SAFETReimbursementItemList.
     */
    public function getSAFETReimbursementItemList()
    {
        if ($this->_fields['SAFETReimbursementItemList']['FieldValue'] == null)
        {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'] = array();
        }
        return $this->_fields['SAFETReimbursementItemList']['FieldValue'];
    }

    /**
     * Set the value of the SAFETReimbursementItemList property.
     *
     * @param array safetReimbursementItemList
     * @return this instance
     */
    public function setSAFETReimbursementItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SAFETReimbursementItemList.
     */
    public function unsetSAFETReimbursementItemList()
    {
        $this->_fields['SAFETReimbursementItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if SAFETReimbursementItemList is set.
     *
     * @return true if SAFETReimbursementItemList is set.
     */
    public function isSetSAFETReimbursementItemList()
    {
                return !empty($this->_fields['SAFETReimbursementItemList']['FieldValue']);
            }

    /**
     * Add values for SAFETReimbursementItemList, return this.
     *
     * @param safetReimbursementItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSAFETReimbursementItemList()
    {
        foreach (func_get_args() as $SAFETReimbursementItemList)
        {
            $this->_fields['SAFETReimbursementItemList']['FieldValue'][] = $SAFETReimbursementItemList;
        }
        return $this;
    }

}
