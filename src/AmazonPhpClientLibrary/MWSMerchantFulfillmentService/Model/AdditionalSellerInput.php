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
 * MWSMerchantFulfillmentService_Model_AdditionalSellerInput
 * 
 * Properties:
 * <ul>
 * 
 * <li>DataType: string</li>
 * <li>ValueAsString: string</li>
 * <li>ValueAsBoolean: bool</li>
 * <li>ValueAsInteger: int</li>
 * <li>ValueAsTimestamp: string</li>
 * <li>ValueAsAddress: MWSMerchantFulfillmentService_Model_Address</li>
 * <li>ValueAsWeight: MWSMerchantFulfillmentService_Model_Weight</li>
 * <li>ValueAsDimension: MWSMerchantFulfillmentService_Model_Length</li>
 * <li>ValueAsCurrency: MWSMerchantFulfillmentService_Model_CurrencyAmount</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_AdditionalSellerInput extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DataType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ValueAsString' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ValueAsBoolean' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'ValueAsInteger' => array('FieldValue' => null, 'FieldType' => 'int'),
    'ValueAsTimestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ValueAsAddress' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Address'),
    'ValueAsWeight' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Weight'),
    'ValueAsDimension' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Length'),
    'ValueAsCurrency' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CurrencyAmount'),
    );
    parent::__construct($data);
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
     * Get the value of the ValueAsString property.
     *
     * @return String ValueAsString.
     */
    public function getValueAsString()
    {
        return $this->_fields['ValueAsString']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsString property.
     *
     * @param string valueAsString
     * @return this instance
     */
    public function setValueAsString($value)
    {
        $this->_fields['ValueAsString']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsString is set.
     *
     * @return true if ValueAsString is set.
     */
    public function isSetValueAsString()
    {
                return !is_null($this->_fields['ValueAsString']['FieldValue']);
            }

    /**
     * Set the value of ValueAsString, return this.
     *
     * @param valueAsString
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsString($value)
    {
        $this->setValueAsString($value);
        return $this;
    }

    /**
     * Check the value of ValueAsBoolean.
     *
     * @return true if ValueAsBoolean is set to true.
     */
    public function isValueAsBoolean()
    {
        return !is_null($this->_fields['ValueAsBoolean']['FieldValue']) && $this->_fields['ValueAsBoolean']['FieldValue'];
    }

    /**
     * Get the value of the ValueAsBoolean property.
     *
     * @return Boolean ValueAsBoolean.
     */
    public function getValueAsBoolean()
    {
        return $this->_fields['ValueAsBoolean']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsBoolean property.
     *
     * @param bool valueAsBoolean
     * @return this instance
     */
    public function setValueAsBoolean($value)
    {
        $this->_fields['ValueAsBoolean']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsBoolean is set.
     *
     * @return true if ValueAsBoolean is set.
     */
    public function isSetValueAsBoolean()
    {
                return !is_null($this->_fields['ValueAsBoolean']['FieldValue']);
            }

    /**
     * Set the value of ValueAsBoolean, return this.
     *
     * @param valueAsBoolean
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsBoolean($value)
    {
        $this->setValueAsBoolean($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsInteger property.
     *
     * @return Integer ValueAsInteger.
     */
    public function getValueAsInteger()
    {
        return $this->_fields['ValueAsInteger']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsInteger property.
     *
     * @param int valueAsInteger
     * @return this instance
     */
    public function setValueAsInteger($value)
    {
        $this->_fields['ValueAsInteger']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsInteger is set.
     *
     * @return true if ValueAsInteger is set.
     */
    public function isSetValueAsInteger()
    {
                return !is_null($this->_fields['ValueAsInteger']['FieldValue']);
            }

    /**
     * Set the value of ValueAsInteger, return this.
     *
     * @param valueAsInteger
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsInteger($value)
    {
        $this->setValueAsInteger($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsTimestamp property.
     *
     * @return XMLGregorianCalendar ValueAsTimestamp.
     */
    public function getValueAsTimestamp()
    {
        return $this->_fields['ValueAsTimestamp']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsTimestamp property.
     *
     * @param string valueAsTimestamp
     * @return this instance
     */
    public function setValueAsTimestamp($value)
    {
        $this->_fields['ValueAsTimestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsTimestamp is set.
     *
     * @return true if ValueAsTimestamp is set.
     */
    public function isSetValueAsTimestamp()
    {
                return !is_null($this->_fields['ValueAsTimestamp']['FieldValue']);
            }

    /**
     * Set the value of ValueAsTimestamp, return this.
     *
     * @param valueAsTimestamp
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsTimestamp($value)
    {
        $this->setValueAsTimestamp($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsAddress property.
     *
     * @return Address ValueAsAddress.
     */
    public function getValueAsAddress()
    {
        return $this->_fields['ValueAsAddress']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsAddress property.
     *
     * @param MWSMerchantFulfillmentService_Model_Address valueAsAddress
     * @return this instance
     */
    public function setValueAsAddress($value)
    {
        $this->_fields['ValueAsAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsAddress is set.
     *
     * @return true if ValueAsAddress is set.
     */
    public function isSetValueAsAddress()
    {
                return !is_null($this->_fields['ValueAsAddress']['FieldValue']);
            }

    /**
     * Set the value of ValueAsAddress, return this.
     *
     * @param valueAsAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsAddress($value)
    {
        $this->setValueAsAddress($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsWeight property.
     *
     * @return Weight ValueAsWeight.
     */
    public function getValueAsWeight()
    {
        return $this->_fields['ValueAsWeight']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsWeight property.
     *
     * @param MWSMerchantFulfillmentService_Model_Weight valueAsWeight
     * @return this instance
     */
    public function setValueAsWeight($value)
    {
        $this->_fields['ValueAsWeight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsWeight is set.
     *
     * @return true if ValueAsWeight is set.
     */
    public function isSetValueAsWeight()
    {
                return !is_null($this->_fields['ValueAsWeight']['FieldValue']);
            }

    /**
     * Set the value of ValueAsWeight, return this.
     *
     * @param valueAsWeight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsWeight($value)
    {
        $this->setValueAsWeight($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsDimension property.
     *
     * @return Length ValueAsDimension.
     */
    public function getValueAsDimension()
    {
        return $this->_fields['ValueAsDimension']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsDimension property.
     *
     * @param MWSMerchantFulfillmentService_Model_Length valueAsDimension
     * @return this instance
     */
    public function setValueAsDimension($value)
    {
        $this->_fields['ValueAsDimension']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsDimension is set.
     *
     * @return true if ValueAsDimension is set.
     */
    public function isSetValueAsDimension()
    {
                return !is_null($this->_fields['ValueAsDimension']['FieldValue']);
            }

    /**
     * Set the value of ValueAsDimension, return this.
     *
     * @param valueAsDimension
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsDimension($value)
    {
        $this->setValueAsDimension($value);
        return $this;
    }

    /**
     * Get the value of the ValueAsCurrency property.
     *
     * @return CurrencyAmount ValueAsCurrency.
     */
    public function getValueAsCurrency()
    {
        return $this->_fields['ValueAsCurrency']['FieldValue'];
    }

    /**
     * Set the value of the ValueAsCurrency property.
     *
     * @param MWSMerchantFulfillmentService_Model_CurrencyAmount valueAsCurrency
     * @return this instance
     */
    public function setValueAsCurrency($value)
    {
        $this->_fields['ValueAsCurrency']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ValueAsCurrency is set.
     *
     * @return true if ValueAsCurrency is set.
     */
    public function isSetValueAsCurrency()
    {
                return !is_null($this->_fields['ValueAsCurrency']['FieldValue']);
            }

    /**
     * Set the value of ValueAsCurrency, return this.
     *
     * @param valueAsCurrency
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValueAsCurrency($value)
    {
        $this->setValueAsCurrency($value);
        return $this;
    }

}
