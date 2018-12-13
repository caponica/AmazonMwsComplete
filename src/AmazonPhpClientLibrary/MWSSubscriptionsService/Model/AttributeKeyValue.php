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
 * @package  MWS Subscriptions Service
 * @version  2013-07-01
 * Library Version: 2013-11-01
 * Generated: Tue Oct 02 08:13:42 PDT 2018
 */

/**
 *  @see MWSSubscriptionsService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSSubscriptionsService_Model_AttributeKeyValue
 * 
 * Properties:
 * <ul>
 * 
 * <li>Key: string</li>
 * <li>Value: string</li>
 *
 * </ul>
 */

 class MWSSubscriptionsService_Model_AttributeKeyValue extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Key' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Value' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Key property.
     *
     * @return String Key.
     */
    public function getKey()
    {
        return $this->_fields['Key']['FieldValue'];
    }

    /**
     * Set the value of the Key property.
     *
     * @param string key
     * @return this instance
     */
    public function setKey($value)
    {
        $this->_fields['Key']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Key is set.
     *
     * @return true if Key is set.
     */
    public function isSetKey()
    {
                return !is_null($this->_fields['Key']['FieldValue']);
            }

    /**
     * Set the value of Key, return this.
     *
     * @param key
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withKey($value)
    {
        $this->setKey($value);
        return $this;
    }

    /**
     * Get the value of the Value property.
     *
     * @return String Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @return this instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set.
     */
    public function isSetValue()
    {
                return !is_null($this->_fields['Value']['FieldValue']);
            }

    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValue($value)
    {
        $this->setValue($value);
        return $this;
    }

}
