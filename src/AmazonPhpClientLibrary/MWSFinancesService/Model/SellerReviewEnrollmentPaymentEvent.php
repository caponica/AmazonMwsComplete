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
 * MWSFinancesService_Model_SellerReviewEnrollmentPaymentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>PostedDate: string</li>
 * <li>EnrollmentId: string</li>
 * <li>ParentASIN: string</li>
 * <li>FeeComponent: MWSFinancesService_Model_FeeComponent</li>
 * <li>ChargeComponent: MWSFinancesService_Model_ChargeComponent</li>
 * <li>TotalAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_SellerReviewEnrollmentPaymentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EnrollmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ParentASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeeComponent' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_FeeComponent'),
    'ChargeComponent' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ChargeComponent'),
    'TotalAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
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
     * Get the value of the EnrollmentId property.
     *
     * @return String EnrollmentId.
     */
    public function getEnrollmentId()
    {
        return $this->_fields['EnrollmentId']['FieldValue'];
    }

    /**
     * Set the value of the EnrollmentId property.
     *
     * @param string enrollmentId
     * @return this instance
     */
    public function setEnrollmentId($value)
    {
        $this->_fields['EnrollmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EnrollmentId is set.
     *
     * @return true if EnrollmentId is set.
     */
    public function isSetEnrollmentId()
    {
                return !is_null($this->_fields['EnrollmentId']['FieldValue']);
            }

    /**
     * Set the value of EnrollmentId, return this.
     *
     * @param enrollmentId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEnrollmentId($value)
    {
        $this->setEnrollmentId($value);
        return $this;
    }

    /**
     * Get the value of the ParentASIN property.
     *
     * @return String ParentASIN.
     */
    public function getParentASIN()
    {
        return $this->_fields['ParentASIN']['FieldValue'];
    }

    /**
     * Set the value of the ParentASIN property.
     *
     * @param string parentASIN
     * @return this instance
     */
    public function setParentASIN($value)
    {
        $this->_fields['ParentASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ParentASIN is set.
     *
     * @return true if ParentASIN is set.
     */
    public function isSetParentASIN()
    {
                return !is_null($this->_fields['ParentASIN']['FieldValue']);
            }

    /**
     * Set the value of ParentASIN, return this.
     *
     * @param parentASIN
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withParentASIN($value)
    {
        $this->setParentASIN($value);
        return $this;
    }

    /**
     * Get the value of the FeeComponent property.
     *
     * @return FeeComponent FeeComponent.
     */
    public function getFeeComponent()
    {
        return $this->_fields['FeeComponent']['FieldValue'];
    }

    /**
     * Set the value of the FeeComponent property.
     *
     * @param MWSFinancesService_Model_FeeComponent feeComponent
     * @return this instance
     */
    public function setFeeComponent($value)
    {
        $this->_fields['FeeComponent']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeComponent is set.
     *
     * @return true if FeeComponent is set.
     */
    public function isSetFeeComponent()
    {
                return !is_null($this->_fields['FeeComponent']['FieldValue']);
            }

    /**
     * Set the value of FeeComponent, return this.
     *
     * @param feeComponent
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeComponent($value)
    {
        $this->setFeeComponent($value);
        return $this;
    }

    /**
     * Get the value of the ChargeComponent property.
     *
     * @return ChargeComponent ChargeComponent.
     */
    public function getChargeComponent()
    {
        return $this->_fields['ChargeComponent']['FieldValue'];
    }

    /**
     * Set the value of the ChargeComponent property.
     *
     * @param MWSFinancesService_Model_ChargeComponent chargeComponent
     * @return this instance
     */
    public function setChargeComponent($value)
    {
        $this->_fields['ChargeComponent']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ChargeComponent is set.
     *
     * @return true if ChargeComponent is set.
     */
    public function isSetChargeComponent()
    {
                return !is_null($this->_fields['ChargeComponent']['FieldValue']);
            }

    /**
     * Set the value of ChargeComponent, return this.
     *
     * @param chargeComponent
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChargeComponent($value)
    {
        $this->setChargeComponent($value);
        return $this;
    }

    /**
     * Get the value of the TotalAmount property.
     *
     * @return Currency TotalAmount.
     */
    public function getTotalAmount()
    {
        return $this->_fields['TotalAmount']['FieldValue'];
    }

    /**
     * Set the value of the TotalAmount property.
     *
     * @param MWSFinancesService_Model_Currency totalAmount
     * @return this instance
     */
    public function setTotalAmount($value)
    {
        $this->_fields['TotalAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalAmount is set.
     *
     * @return true if TotalAmount is set.
     */
    public function isSetTotalAmount()
    {
                return !is_null($this->_fields['TotalAmount']['FieldValue']);
            }

    /**
     * Set the value of TotalAmount, return this.
     *
     * @param totalAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalAmount($value)
    {
        $this->setTotalAmount($value);
        return $this;
    }

}
