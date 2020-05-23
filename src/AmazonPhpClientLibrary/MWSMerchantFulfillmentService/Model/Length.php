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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_Length
 * 
 * Properties:
 * <ul>
 * 
 * <li>value: float</li>
 * <li>unit: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_Length extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'value' => array('FieldValue' => null, 'FieldType' => 'float'),
    'unit' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the value property.
     *
     * @return BigDecimal value.
     */
    public function getvalue()
    {
        return $this->_fields['value']['FieldValue'];
    }

    /**
     * Set the value of the value property.
     *
     * @param float value
     * @return this instance
     */
    public function setvalue($value)
    {
        $this->_fields['value']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if value is set.
     *
     * @return true if value is set.
     */
    public function isSetvalue()
    {
                return !is_null($this->_fields['value']['FieldValue']);
            }

    /**
     * Set the value of value, return this.
     *
     * @param value
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withvalue($value)
    {
        $this->setvalue($value);
        return $this;
    }

    /**
     * Get the value of the unit property.
     *
     * @return String unit.
     */
    public function getunit()
    {
        return $this->_fields['unit']['FieldValue'];
    }

    /**
     * Set the value of the unit property.
     *
     * @param string unit
     * @return this instance
     */
    public function setunit($value)
    {
        $this->_fields['unit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if unit is set.
     *
     * @return true if unit is set.
     */
    public function isSetunit()
    {
                return !is_null($this->_fields['unit']['FieldValue']);
            }

    /**
     * Set the value of unit, return this.
     *
     * @param unit
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withunit($value)
    {
        $this->setunit($value);
        return $this;
    }

}
