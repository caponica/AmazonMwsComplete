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
 * MWSFinancesService_Model_Promotion
 * 
 * Properties:
 * <ul>
 * 
 * <li>PromotionType: string</li>
 * <li>PromotionId: string</li>
 * <li>PromotionAmount: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_Promotion extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PromotionType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PromotionId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PromotionAmount' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PromotionType property.
     *
     * @return String PromotionType.
     */
    public function getPromotionType()
    {
        return $this->_fields['PromotionType']['FieldValue'];
    }

    /**
     * Set the value of the PromotionType property.
     *
     * @param string promotionType
     * @return this instance
     */
    public function setPromotionType($value)
    {
        $this->_fields['PromotionType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromotionType is set.
     *
     * @return true if PromotionType is set.
     */
    public function isSetPromotionType()
    {
                return !is_null($this->_fields['PromotionType']['FieldValue']);
            }

    /**
     * Set the value of PromotionType, return this.
     *
     * @param promotionType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPromotionType($value)
    {
        $this->setPromotionType($value);
        return $this;
    }

    /**
     * Get the value of the PromotionId property.
     *
     * @return String PromotionId.
     */
    public function getPromotionId()
    {
        return $this->_fields['PromotionId']['FieldValue'];
    }

    /**
     * Set the value of the PromotionId property.
     *
     * @param string promotionId
     * @return this instance
     */
    public function setPromotionId($value)
    {
        $this->_fields['PromotionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromotionId is set.
     *
     * @return true if PromotionId is set.
     */
    public function isSetPromotionId()
    {
                return !is_null($this->_fields['PromotionId']['FieldValue']);
            }

    /**
     * Set the value of PromotionId, return this.
     *
     * @param promotionId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPromotionId($value)
    {
        $this->setPromotionId($value);
        return $this;
    }

    /**
     * Get the value of the PromotionAmount property.
     *
     * @return Currency PromotionAmount.
     */
    public function getPromotionAmount()
    {
        return $this->_fields['PromotionAmount']['FieldValue'];
    }

    /**
     * Set the value of the PromotionAmount property.
     *
     * @param MWSFinancesService_Model_Currency promotionAmount
     * @return this instance
     */
    public function setPromotionAmount($value)
    {
        $this->_fields['PromotionAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PromotionAmount is set.
     *
     * @return true if PromotionAmount is set.
     */
    public function isSetPromotionAmount()
    {
                return !is_null($this->_fields['PromotionAmount']['FieldValue']);
            }

    /**
     * Set the value of PromotionAmount, return this.
     *
     * @param promotionAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPromotionAmount($value)
    {
        $this->setPromotionAmount($value);
        return $this;
    }

}
