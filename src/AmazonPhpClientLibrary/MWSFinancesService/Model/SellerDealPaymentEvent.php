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
 * MWSFinancesService_Model_SellerDealPaymentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>postedDate: string</li>
 * <li>dealId: string</li>
 * <li>dealDescription: string</li>
 * <li>eventType: string</li>
 * <li>feeType: string</li>
 * <li>feeAmount: MWSFinancesService_Model_Currency</li>
 * <li>taxAmount: MWSFinancesService_Model_Currency</li>
 * <li>totalAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_SellerDealPaymentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'postedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'dealId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'dealDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
    'eventType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'feeType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'feeAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'taxAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'totalAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the postedDate property.
     *
     * @return XMLGregorianCalendar postedDate.
     */
    public function getpostedDate()
    {
        return $this->_fields['postedDate']['FieldValue'];
    }

    /**
     * Set the value of the postedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setpostedDate($value)
    {
        $this->_fields['postedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if postedDate is set.
     *
     * @return true if postedDate is set.
     */
    public function isSetpostedDate()
    {
                return !is_null($this->_fields['postedDate']['FieldValue']);
            }

    /**
     * Set the value of postedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withpostedDate($value)
    {
        $this->setpostedDate($value);
        return $this;
    }

    /**
     * Get the value of the dealId property.
     *
     * @return String dealId.
     */
    public function getdealId()
    {
        return $this->_fields['dealId']['FieldValue'];
    }

    /**
     * Set the value of the dealId property.
     *
     * @param string dealId
     * @return this instance
     */
    public function setdealId($value)
    {
        $this->_fields['dealId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if dealId is set.
     *
     * @return true if dealId is set.
     */
    public function isSetdealId()
    {
                return !is_null($this->_fields['dealId']['FieldValue']);
            }

    /**
     * Set the value of dealId, return this.
     *
     * @param dealId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withdealId($value)
    {
        $this->setdealId($value);
        return $this;
    }

    /**
     * Get the value of the dealDescription property.
     *
     * @return String dealDescription.
     */
    public function getdealDescription()
    {
        return $this->_fields['dealDescription']['FieldValue'];
    }

    /**
     * Set the value of the dealDescription property.
     *
     * @param string dealDescription
     * @return this instance
     */
    public function setdealDescription($value)
    {
        $this->_fields['dealDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if dealDescription is set.
     *
     * @return true if dealDescription is set.
     */
    public function isSetdealDescription()
    {
                return !is_null($this->_fields['dealDescription']['FieldValue']);
            }

    /**
     * Set the value of dealDescription, return this.
     *
     * @param dealDescription
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withdealDescription($value)
    {
        $this->setdealDescription($value);
        return $this;
    }

    /**
     * Get the value of the eventType property.
     *
     * @return String eventType.
     */
    public function geteventType()
    {
        return $this->_fields['eventType']['FieldValue'];
    }

    /**
     * Set the value of the eventType property.
     *
     * @param string eventType
     * @return this instance
     */
    public function seteventType($value)
    {
        $this->_fields['eventType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if eventType is set.
     *
     * @return true if eventType is set.
     */
    public function isSeteventType()
    {
                return !is_null($this->_fields['eventType']['FieldValue']);
            }

    /**
     * Set the value of eventType, return this.
     *
     * @param eventType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function witheventType($value)
    {
        $this->seteventType($value);
        return $this;
    }

    /**
     * Get the value of the feeType property.
     *
     * @return String feeType.
     */
    public function getfeeType()
    {
        return $this->_fields['feeType']['FieldValue'];
    }

    /**
     * Set the value of the feeType property.
     *
     * @param string feeType
     * @return this instance
     */
    public function setfeeType($value)
    {
        $this->_fields['feeType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if feeType is set.
     *
     * @return true if feeType is set.
     */
    public function isSetfeeType()
    {
                return !is_null($this->_fields['feeType']['FieldValue']);
            }

    /**
     * Set the value of feeType, return this.
     *
     * @param feeType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withfeeType($value)
    {
        $this->setfeeType($value);
        return $this;
    }

    /**
     * Get the value of the feeAmount property.
     *
     * @return Currency feeAmount.
     */
    public function getfeeAmount()
    {
        return $this->_fields['feeAmount']['FieldValue'];
    }

    /**
     * Set the value of the feeAmount property.
     *
     * @param MWSFinancesService_Model_Currency feeAmount
     * @return this instance
     */
    public function setfeeAmount($value)
    {
        $this->_fields['feeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if feeAmount is set.
     *
     * @return true if feeAmount is set.
     */
    public function isSetfeeAmount()
    {
                return !is_null($this->_fields['feeAmount']['FieldValue']);
            }

    /**
     * Set the value of feeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withfeeAmount($value)
    {
        $this->setfeeAmount($value);
        return $this;
    }

    /**
     * Get the value of the taxAmount property.
     *
     * @return Currency taxAmount.
     */
    public function gettaxAmount()
    {
        return $this->_fields['taxAmount']['FieldValue'];
    }

    /**
     * Set the value of the taxAmount property.
     *
     * @param MWSFinancesService_Model_Currency taxAmount
     * @return this instance
     */
    public function settaxAmount($value)
    {
        $this->_fields['taxAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if taxAmount is set.
     *
     * @return true if taxAmount is set.
     */
    public function isSettaxAmount()
    {
                return !is_null($this->_fields['taxAmount']['FieldValue']);
            }

    /**
     * Set the value of taxAmount, return this.
     *
     * @param taxAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withtaxAmount($value)
    {
        $this->settaxAmount($value);
        return $this;
    }

    /**
     * Get the value of the totalAmount property.
     *
     * @return Currency totalAmount.
     */
    public function gettotalAmount()
    {
        return $this->_fields['totalAmount']['FieldValue'];
    }

    /**
     * Set the value of the totalAmount property.
     *
     * @param MWSFinancesService_Model_Currency totalAmount
     * @return this instance
     */
    public function settotalAmount($value)
    {
        $this->_fields['totalAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if totalAmount is set.
     *
     * @return true if totalAmount is set.
     */
    public function isSettotalAmount()
    {
                return !is_null($this->_fields['totalAmount']['FieldValue']);
            }

    /**
     * Set the value of totalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withtotalAmount($value)
    {
        $this->settotalAmount($value);
        return $this;
    }

}
