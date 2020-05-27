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
 * MWSMerchantFulfillmentService_Model_SellerInputDefinition
 * 
 * Properties:
 * <ul>
 * 
 * <li>IsRequired: bool</li>
 * <li>DataType: string</li>
 * <li>Constraints: array</li>
 * <li>InputDisplayText: string</li>
 * <li>InputTarget: string</li>
 * <li>StoredValue: MWSMerchantFulfillmentService_Model_AdditionalSellerInput</li>
 * <li>RestrictedSetValues: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_SellerInputDefinition extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'IsRequired' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'DataType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Constraints' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_Constraint'), 'ListMemberName' => 'member'),
    'InputDisplayText' => array('FieldValue' => null, 'FieldType' => 'string'),
    'InputTarget' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StoredValue' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_AdditionalSellerInput'),
    'RestrictedSetValues' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'member'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of IsRequired.
     *
     * @return true if IsRequired is set to true.
     */
    public function isIsRequired()
    {
        return $this->_fields['IsRequired']['FieldValue'];
    }

    /**
     * Get the value of the IsRequired property.
     *
     * @return boolean IsRequired.
     */
    public function getIsRequired()
    {
        return $this->_fields['IsRequired']['FieldValue'];
    }

    /**
     * Set the value of the IsRequired property.
     *
     * @param bool isRequired
     * @return this instance
     */
    public function setIsRequired($value)
    {
        $this->_fields['IsRequired']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsRequired is set.
     *
     * @return true if IsRequired is set.
     */
    public function isSetIsRequired()
    {
                return !is_null($this->_fields['IsRequired']['FieldValue']);
            }

    /**
     * Set the value of IsRequired, return this.
     *
     * @param isRequired
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsRequired($value)
    {
        $this->setIsRequired($value);
        return $this;
    }

    /**
     * Get the value of the DataType property.
     *
     * @return String DataType.
     */
    public function getDataType()
    {
        return $this->_fields['DataType']['FieldValue'];
    }

    /**
     * Set the value of the DataType property.
     *
     * @param string dataType
     * @return this instance
     */
    public function setDataType($value)
    {
        $this->_fields['DataType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DataType is set.
     *
     * @return true if DataType is set.
     */
    public function isSetDataType()
    {
                return !is_null($this->_fields['DataType']['FieldValue']);
            }

    /**
     * Set the value of DataType, return this.
     *
     * @param dataType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDataType($value)
    {
        $this->setDataType($value);
        return $this;
    }

    /**
     * Get the value of the Constraints property.
     *
     * @return List<Constraint> Constraints.
     */
    public function getConstraints()
    {
        if ($this->_fields['Constraints']['FieldValue'] == null)
        {
            $this->_fields['Constraints']['FieldValue'] = array();
        }
        return $this->_fields['Constraints']['FieldValue'];
    }

    /**
     * Set the value of the Constraints property.
     *
     * @param array constraints
     * @return this instance
     */
    public function setConstraints($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Constraints']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Constraints.
     */
    public function unsetConstraints()
    {
        $this->_fields['Constraints']['FieldValue'] = array();
    }

    /**
     * Check to see if Constraints is set.
     *
     * @return true if Constraints is set.
     */
    public function isSetConstraints()
    {
                return !empty($this->_fields['Constraints']['FieldValue']);
            }

    /**
     * Add values for Constraints, return this.
     *
     * @param constraints
     *             New values to add.
     *
     * @return This instance.
     */
    public function withConstraints()
    {
        foreach (func_get_args() as $Constraints)
        {
            $this->_fields['Constraints']['FieldValue'][] = $Constraints;
        }
        return $this;
    }

    /**
     * Get the value of the InputDisplayText property.
     *
     * @return String InputDisplayText.
     */
    public function getInputDisplayText()
    {
        return $this->_fields['InputDisplayText']['FieldValue'];
    }

    /**
     * Set the value of the InputDisplayText property.
     *
     * @param string inputDisplayText
     * @return this instance
     */
    public function setInputDisplayText($value)
    {
        $this->_fields['InputDisplayText']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InputDisplayText is set.
     *
     * @return true if InputDisplayText is set.
     */
    public function isSetInputDisplayText()
    {
                return !is_null($this->_fields['InputDisplayText']['FieldValue']);
            }

    /**
     * Set the value of InputDisplayText, return this.
     *
     * @param inputDisplayText
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInputDisplayText($value)
    {
        $this->setInputDisplayText($value);
        return $this;
    }

    /**
     * Get the value of the InputTarget property.
     *
     * @return String InputTarget.
     */
    public function getInputTarget()
    {
        return $this->_fields['InputTarget']['FieldValue'];
    }

    /**
     * Set the value of the InputTarget property.
     *
     * @param string inputTarget
     * @return this instance
     */
    public function setInputTarget($value)
    {
        $this->_fields['InputTarget']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InputTarget is set.
     *
     * @return true if InputTarget is set.
     */
    public function isSetInputTarget()
    {
                return !is_null($this->_fields['InputTarget']['FieldValue']);
            }

    /**
     * Set the value of InputTarget, return this.
     *
     * @param inputTarget
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInputTarget($value)
    {
        $this->setInputTarget($value);
        return $this;
    }

    /**
     * Get the value of the StoredValue property.
     *
     * @return AdditionalSellerInput StoredValue.
     */
    public function getStoredValue()
    {
        return $this->_fields['StoredValue']['FieldValue'];
    }

    /**
     * Set the value of the StoredValue property.
     *
     * @param MWSMerchantFulfillmentService_Model_AdditionalSellerInput storedValue
     * @return this instance
     */
    public function setStoredValue($value)
    {
        $this->_fields['StoredValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StoredValue is set.
     *
     * @return true if StoredValue is set.
     */
    public function isSetStoredValue()
    {
                return !is_null($this->_fields['StoredValue']['FieldValue']);
            }

    /**
     * Set the value of StoredValue, return this.
     *
     * @param storedValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStoredValue($value)
    {
        $this->setStoredValue($value);
        return $this;
    }

    /**
     * Get the value of the RestrictedSetValues property.
     *
     * @return List<String> RestrictedSetValues.
     */
    public function getRestrictedSetValues()
    {
        if ($this->_fields['RestrictedSetValues']['FieldValue'] == null)
        {
            $this->_fields['RestrictedSetValues']['FieldValue'] = array();
        }
        return $this->_fields['RestrictedSetValues']['FieldValue'];
    }

    /**
     * Set the value of the RestrictedSetValues property.
     *
     * @param array restrictedSetValues
     * @return this instance
     */
    public function setRestrictedSetValues($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RestrictedSetValues']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RestrictedSetValues.
     */
    public function unsetRestrictedSetValues()
    {
        $this->_fields['RestrictedSetValues']['FieldValue'] = array();
    }

    /**
     * Check to see if RestrictedSetValues is set.
     *
     * @return true if RestrictedSetValues is set.
     */
    public function isSetRestrictedSetValues()
    {
                return !empty($this->_fields['RestrictedSetValues']['FieldValue']);
            }

    /**
     * Add values for RestrictedSetValues, return this.
     *
     * @param restrictedSetValues
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRestrictedSetValues()
    {
        foreach (func_get_args() as $RestrictedSetValues)
        {
            $this->_fields['RestrictedSetValues']['FieldValue'][] = $RestrictedSetValues;
        }
        return $this;
    }

}
