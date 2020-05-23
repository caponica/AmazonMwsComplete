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
 * MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentLevelFields: array</li>
 * <li>ItemLevelFieldsList: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetAdditionalSellerInputsResult extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ShipmentLevelFields' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_AdditionalInputs'), 'ListMemberName' => 'member'),
    'ItemLevelFieldsList' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_ItemLevelFields'), 'ListMemberName' => 'member'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentLevelFields property.
     *
     * @return List<AdditionalInputs> ShipmentLevelFields.
     */
    public function getShipmentLevelFields()
    {
        if ($this->_fields['ShipmentLevelFields']['FieldValue'] == null)
        {
            $this->_fields['ShipmentLevelFields']['FieldValue'] = array();
        }
        return $this->_fields['ShipmentLevelFields']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentLevelFields property.
     *
     * @param array shipmentLevelFields
     * @return this instance
     */
    public function setShipmentLevelFields($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ShipmentLevelFields']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ShipmentLevelFields.
     */
    public function unsetShipmentLevelFields()
    {
        $this->_fields['ShipmentLevelFields']['FieldValue'] = array();
    }

    /**
     * Check to see if ShipmentLevelFields is set.
     *
     * @return true if ShipmentLevelFields is set.
     */
    public function isSetShipmentLevelFields()
    {
                return !empty($this->_fields['ShipmentLevelFields']['FieldValue']);
            }

    /**
     * Add values for ShipmentLevelFields, return this.
     *
     * @param shipmentLevelFields
     *             New values to add.
     *
     * @return This instance.
     */
    public function withShipmentLevelFields()
    {
        foreach (func_get_args() as $ShipmentLevelFields)
        {
            $this->_fields['ShipmentLevelFields']['FieldValue'][] = $ShipmentLevelFields;
        }
        return $this;
    }

    /**
     * Get the value of the ItemLevelFieldsList property.
     *
     * @return List<ItemLevelFields> ItemLevelFieldsList.
     */
    public function getItemLevelFieldsList()
    {
        if ($this->_fields['ItemLevelFieldsList']['FieldValue'] == null)
        {
            $this->_fields['ItemLevelFieldsList']['FieldValue'] = array();
        }
        return $this->_fields['ItemLevelFieldsList']['FieldValue'];
    }

    /**
     * Set the value of the ItemLevelFieldsList property.
     *
     * @param array itemLevelFieldsList
     * @return this instance
     */
    public function setItemLevelFieldsList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemLevelFieldsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemLevelFieldsList.
     */
    public function unsetItemLevelFieldsList()
    {
        $this->_fields['ItemLevelFieldsList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemLevelFieldsList is set.
     *
     * @return true if ItemLevelFieldsList is set.
     */
    public function isSetItemLevelFieldsList()
    {
                return !empty($this->_fields['ItemLevelFieldsList']['FieldValue']);
            }

    /**
     * Add values for ItemLevelFieldsList, return this.
     *
     * @param itemLevelFieldsList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemLevelFieldsList()
    {
        foreach (func_get_args() as $ItemLevelFieldsList)
        {
            $this->_fields['ItemLevelFieldsList']['FieldValue'][] = $ItemLevelFieldsList;
        }
        return $this;
    }

}
