<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Customer Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:32:14 GMT 2015
 */

/**
 *  @see MWSCustomerService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCustomerService_Model_CustomerPrimaryContactInfo
 * 
 * Properties:
 * <ul>
 * 
 * <li>Email: string</li>
 * <li>FullName: string</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_CustomerPrimaryContactInfo extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Email' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FullName' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Email property.
     *
     * @return String Email.
     */
    public function getEmail()
    {
        return $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of the Email property.
     *
     * @param string email
     * @return this instance
     */
    public function setEmail($value)
    {
        $this->_fields['Email']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Email is set.
     *
     * @return true if Email is set.
     */
    public function isSetEmail()
    {
                return !is_null($this->_fields['Email']['FieldValue']);
            }

    /**
     * Set the value of Email, return this.
     *
     * @param email
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEmail($value)
    {
        $this->setEmail($value);
        return $this;
    }

    /**
     * Get the value of the FullName property.
     *
     * @return String FullName.
     */
    public function getFullName()
    {
        return $this->_fields['FullName']['FieldValue'];
    }

    /**
     * Set the value of the FullName property.
     *
     * @param string fullName
     * @return this instance
     */
    public function setFullName($value)
    {
        $this->_fields['FullName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FullName is set.
     *
     * @return true if FullName is set.
     */
    public function isSetFullName()
    {
                return !is_null($this->_fields['FullName']['FieldValue']);
            }

    /**
     * Set the value of FullName, return this.
     *
     * @param fullName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFullName($value)
    {
        $this->setFullName($value);
        return $this;
    }

}
