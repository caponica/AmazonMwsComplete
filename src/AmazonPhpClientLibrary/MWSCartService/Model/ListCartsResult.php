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
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:38 GMT 2015
 */

/**
 *  @see MWSCartService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCartService_Model_ListCartsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>CartList: array</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */

 class MWSCartService_Model_ListCartsResult extends MWSCartService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CartList' => array('FieldValue' => array(), 'FieldType' => array('MWSCartService_Model_Cart'), 'ListMemberName' => 'Cart'),
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CartList property.
     *
     * @return List<Cart> CartList.
     */
    public function getCartList()
    {
        if ($this->_fields['CartList']['FieldValue'] == null)
        {
            $this->_fields['CartList']['FieldValue'] = array();
        }
        return $this->_fields['CartList']['FieldValue'];
    }

    /**
     * Set the value of the CartList property.
     *
     * @param array cartList
     * @return this instance
     */
    public function setCartList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['CartList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear CartList.
     */
    public function unsetCartList()
    {
        $this->_fields['CartList']['FieldValue'] = array();
    }

    /**
     * Check to see if CartList is set.
     *
     * @return true if CartList is set.
     */
    public function isSetCartList()
    {
                return !empty($this->_fields['CartList']['FieldValue']);
            }

    /**
     * Add values for CartList, return this.
     *
     * @param cartList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withCartList()
    {
        foreach (func_get_args() as $CartList)
        {
            $this->_fields['CartList']['FieldValue'][] = $CartList;
        }
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

}
