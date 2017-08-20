<?php
/*******************************************************************************
 * Copyright 2009-2017 Amazon Services. All Rights Reserved.
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
 * Library Version: 2017-07-26
 * Generated: Tue Jul 25 12:48:59 UTC 2017
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_SAFETReimbursementItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>itemChargeList: array</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_SAFETReimbursementItem extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'itemChargeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the itemChargeList property.
     *
     * @return List<ChargeComponent> itemChargeList.
     */
    public function getitemChargeList()
    {
        if ($this->_fields['itemChargeList']['FieldValue'] == null)
        {
            $this->_fields['itemChargeList']['FieldValue'] = array();
        }
        return $this->_fields['itemChargeList']['FieldValue'];
    }

    /**
     * Set the value of the itemChargeList property.
     *
     * @param array itemChargeList
     * @return this instance
     */
    public function setitemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['itemChargeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear itemChargeList.
     */
    public function unsetitemChargeList()
    {
        $this->_fields['itemChargeList']['FieldValue'] = array();
    }

    /**
     * Check to see if itemChargeList is set.
     *
     * @return true if itemChargeList is set.
     */
    public function isSetitemChargeList()
    {
                return !empty($this->_fields['itemChargeList']['FieldValue']);
            }

    /**
     * Add values for itemChargeList, return this.
     *
     * @param itemChargeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withitemChargeList()
    {
        foreach (func_get_args() as $itemChargeList)
        {
            $this->_fields['itemChargeList']['FieldValue'][] = $itemChargeList;
        }
        return $this;
    }

}
