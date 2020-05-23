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
 * MWSFinancesService_Model_TrialShipmentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonOrderId: string</li>
 * <li>FinancialEventGroupId: string</li>
 * <li>PostedDate: string</li>
 * <li>SKU: string</li>
 * <li>FeeList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_TrialShipmentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FinancialEventGroupId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEventGroupId property.
     *
     * @return String FinancialEventGroupId.
     */
    public function getFinancialEventGroupId()
    {
        return $this->_fields['FinancialEventGroupId']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEventGroupId property.
     *
     * @param string financialEventGroupId
     * @return this instance
     */
    public function setFinancialEventGroupId($value)
    {
        $this->_fields['FinancialEventGroupId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEventGroupId is set.
     *
     * @return true if FinancialEventGroupId is set.
     */
    public function isSetFinancialEventGroupId()
    {
                return !is_null($this->_fields['FinancialEventGroupId']['FieldValue']);
            }

    /**
     * Set the value of FinancialEventGroupId, return this.
     *
     * @param financialEventGroupId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEventGroupId($value)
    {
        $this->setFinancialEventGroupId($value);
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
     * Get the value of the SKU property.
     *
     * @return String SKU.
     */
    public function getSKU()
    {
        return $this->_fields['SKU']['FieldValue'];
    }

    /**
     * Set the value of the SKU property.
     *
     * @param string sku
     * @return this instance
     */
    public function setSKU($value)
    {
        $this->_fields['SKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKU is set.
     *
     * @return true if SKU is set.
     */
    public function isSetSKU()
    {
                return !is_null($this->_fields['SKU']['FieldValue']);
            }

    /**
     * Set the value of SKU, return this.
     *
     * @param sku
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKU($value)
    {
        $this->setSKU($value);
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
