<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * @package  FBA Inventory Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Wed May 04 17:14:15 UTC 2016
 */

/**
 *  @see FBAInventoryServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInventoryServiceMWS_Model_InventorySupplyList
 * 
 * Properties:
 * <ul>
 * 
 * <li>member: array</li>
 *
 * </ul>
 */

 class FBAInventoryServiceMWS_Model_InventorySupplyList extends FBAInventoryServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'member' => array('FieldValue' => array(), 'FieldType' => array('FBAInventoryServiceMWS_Model_InventorySupply')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the member property.
     *
     * @return List<InventorySupply> member.
     */
    public function getmember()
    {
        if ($this->_fields['member']['FieldValue'] == null)
        {
            $this->_fields['member']['FieldValue'] = array();
        }
        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Set the value of the member property.
     *
     * @param array member
     * @return this instance
     */
    public function setmember($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['member']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear member.
     */
    public function unsetmember()
    {
        $this->_fields['member']['FieldValue'] = array();
    }

    /**
     * Check to see if member is set.
     *
     * @return true if member is set.
     */
    public function isSetmember()
    {
                return !empty($this->_fields['member']['FieldValue']);
            }

    /**
     * Add values for member, return this.
     *
     * @param member
     *             New values to add.
     *
     * @return This instance.
     */
    public function withmember()
    {
        foreach (func_get_args() as $member)
        {
            $this->_fields['member']['FieldValue'][] = $member;
        }
        return $this;
    }

}
