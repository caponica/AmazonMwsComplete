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
 * MWSFinancesService_Model_AdjustmentEvent
 * 
 * Properties:
 * <ul>
 * 
 * <li>AdjustmentType: string</li>
 * <li>PostedDate: string</li>
 * <li>AdjustmentAmount: MWSFinancesService_Model_Currency</li>
 * <li>AdjustmentItemList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_AdjustmentEvent extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AdjustmentType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AdjustmentAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'AdjustmentItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_AdjustmentItem'), 'ListMemberName' => 'AdjustmentItem'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AdjustmentType property.
     *
     * @return String AdjustmentType.
     */
    public function getAdjustmentType()
    {
        return $this->_fields['AdjustmentType']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentType property.
     *
     * @param string adjustmentType
     * @return this instance
     */
    public function setAdjustmentType($value)
    {
        $this->_fields['AdjustmentType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdjustmentType is set.
     *
     * @return true if AdjustmentType is set.
     */
    public function isSetAdjustmentType()
    {
                return !is_null($this->_fields['AdjustmentType']['FieldValue']);
            }

    /**
     * Set the value of AdjustmentType, return this.
     *
     * @param adjustmentType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdjustmentType($value)
    {
        $this->setAdjustmentType($value);
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
     * Get the value of the AdjustmentAmount property.
     *
     * @return Currency AdjustmentAmount.
     */
    public function getAdjustmentAmount()
    {
        return $this->_fields['AdjustmentAmount']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentAmount property.
     *
     * @param MWSFinancesService_Model_Currency adjustmentAmount
     * @return this instance
     */
    public function setAdjustmentAmount($value)
    {
        $this->_fields['AdjustmentAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdjustmentAmount is set.
     *
     * @return true if AdjustmentAmount is set.
     */
    public function isSetAdjustmentAmount()
    {
                return !is_null($this->_fields['AdjustmentAmount']['FieldValue']);
            }

    /**
     * Set the value of AdjustmentAmount, return this.
     *
     * @param adjustmentAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdjustmentAmount($value)
    {
        $this->setAdjustmentAmount($value);
        return $this;
    }

    /**
     * Get the value of the AdjustmentItemList property.
     *
     * @return List<AdjustmentItem> AdjustmentItemList.
     */
    public function getAdjustmentItemList()
    {
        if ($this->_fields['AdjustmentItemList']['FieldValue'] == null)
        {
            $this->_fields['AdjustmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['AdjustmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentItemList property.
     *
     * @param array adjustmentItemList
     * @return this instance
     */
    public function setAdjustmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AdjustmentItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AdjustmentItemList.
     */
    public function unsetAdjustmentItemList()
    {
        $this->_fields['AdjustmentItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if AdjustmentItemList is set.
     *
     * @return true if AdjustmentItemList is set.
     */
    public function isSetAdjustmentItemList()
    {
                return !empty($this->_fields['AdjustmentItemList']['FieldValue']);
            }

    /**
     * Add values for AdjustmentItemList, return this.
     *
     * @param adjustmentItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAdjustmentItemList()
    {
        foreach (func_get_args() as $AdjustmentItemList)
        {
            $this->_fields['AdjustmentItemList']['FieldValue'][] = $AdjustmentItemList;
        }
        return $this;
    }

}
