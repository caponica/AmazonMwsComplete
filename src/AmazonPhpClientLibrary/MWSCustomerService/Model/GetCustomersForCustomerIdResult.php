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
 * MWSCustomerService_Model_GetCustomersForCustomerIdResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerList: array</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_GetCustomersForCustomerIdResult extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CustomerList' => array('FieldValue' => array(), 'FieldType' => array('MWSCustomerService_Model_Customer'), 'ListMemberName' => 'Customer'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CustomerList property.
     *
     * @return List<Customer> CustomerList.
     */
    public function getCustomerList()
    {
        if ($this->_fields['CustomerList']['FieldValue'] == null)
        {
            $this->_fields['CustomerList']['FieldValue'] = array();
        }
        return $this->_fields['CustomerList']['FieldValue'];
    }

    /**
     * Set the value of the CustomerList property.
     *
     * @param array customerList
     * @return this instance
     */
    public function setCustomerList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['CustomerList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear CustomerList.
     */
    public function unsetCustomerList()
    {
        $this->_fields['CustomerList']['FieldValue'] = array();
    }

    /**
     * Check to see if CustomerList is set.
     *
     * @return true if CustomerList is set.
     */
    public function isSetCustomerList()
    {
                return !empty($this->_fields['CustomerList']['FieldValue']);
            }

    /**
     * Add values for CustomerList, return this.
     *
     * @param customerList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withCustomerList()
    {
        foreach (func_get_args() as $CustomerList)
        {
            $this->_fields['CustomerList']['FieldValue'][] = $CustomerList;
        }
        return $this;
    }

}
