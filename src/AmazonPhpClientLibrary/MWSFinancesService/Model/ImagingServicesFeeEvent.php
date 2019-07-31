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
 * MWSFinancesService_Model_ImagingServicesFeeEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImagingRequestBillingItemID: string</li>
 * <li>ASIN: string</li>
 * <li>PostedDate: string</li>
 * <li>FeeList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ImagingServicesFeeEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ImagingRequestBillingItemID' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ImagingRequestBillingItemID property.
     *
     * @return String ImagingRequestBillingItemID.
     */
    public function getImagingRequestBillingItemID()
    {
        return $this->_fields['ImagingRequestBillingItemID']['FieldValue'];
    }

    /**
     * Set the value of the ImagingRequestBillingItemID property.
     *
     * @param string imagingRequestBillingItemID
     * @return this instance
     */
    public function setImagingRequestBillingItemID($value)
    {
        $this->_fields['ImagingRequestBillingItemID']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ImagingRequestBillingItemID is set.
     *
     * @return true if ImagingRequestBillingItemID is set.
     */
    public function isSetImagingRequestBillingItemID()
    {
                return !is_null($this->_fields['ImagingRequestBillingItemID']['FieldValue']);
            }

    /**
     * Set the value of ImagingRequestBillingItemID, return this.
     *
     * @param imagingRequestBillingItemID
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withImagingRequestBillingItemID($value)
    {
        $this->setImagingRequestBillingItemID($value);
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
     * Get the value of the FeeList property.
     *
     * @return List<FeeComponent> FeeList.
     */
    public function getFeeList()
    {
        if ($this->_fields['FeeList']['FieldValue'] == null)
        {
            $this->_fields['FeeList']['FieldValue'] = array();
        }
        return $this->_fields['FeeList']['FieldValue'];
    }

    /**
     * Set the value of the FeeList property.
     *
     * @param array feeList
     * @return this instance
     */
    public function setFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeeList.
     */
    public function unsetFeeList()
    {
        $this->_fields['FeeList']['FieldValue'] = array();
    }

    /**
     * Check to see if FeeList is set.
     *
     * @return true if FeeList is set.
     */
    public function isSetFeeList()
    {
                return !empty($this->_fields['FeeList']['FieldValue']);
            }

    /**
     * Add values for FeeList, return this.
     *
     * @param feeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeeList()
    {
        foreach (func_get_args() as $FeeList)
        {
            $this->_fields['FeeList']['FieldValue'][] = $FeeList;
        }
        return $this;
    }

}
