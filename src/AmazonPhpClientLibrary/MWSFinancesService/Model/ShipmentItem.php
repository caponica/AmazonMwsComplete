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
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2018-03-22
 * Generated: Thu Mar 15 07:12:28 GMT 2018
 */

/**
 *  @see MWSFinancesService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSFinancesService_Model_ShipmentItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerSKU: string</li>
 * <li>OrderItemId: string</li>
 * <li>OrderAdjustmentItemId: string</li>
 * <li>QuantityShipped: int</li>
 * <li>ItemChargeList: array</li>
 * <li>ItemChargeAdjustmentList: array</li>
 * <li>ItemFeeList: array</li>
 * <li>ItemFeeAdjustmentList: array</li>
 * <li>ItemTaxWithheldList: array</li>
 * <li>PromotionList: array</li>
 * <li>PromotionAdjustmentList: array</li>
 * <li>CostOfPointsGranted: MWSFinancesService_Model_Currency</li>
 * <li>CostOfPointsReturned: MWSFinancesService_Model_Currency</li>
 *
 * </ul>
 */

 class MWSFinancesService_Model_ShipmentItem extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'OrderAdjustmentItemId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'QuantityShipped' => array('FieldValue' => null, 'FieldType' => 'int'),
    'ItemChargeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
    'ItemChargeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
    'ItemFeeList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'ItemFeeAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_FeeComponent'), 'ListMemberName' => 'FeeComponent'),
    'ItemTaxWithheldList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_TaxWithheldComponent'), 'ListMemberName' => 'TaxWithheldComponent'),
    'PromotionList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_Promotion'), 'ListMemberName' => 'Promotion'),
    'PromotionAdjustmentList' => array('FieldValue' => array(), 'FieldType' => array('MWSFinancesService_Model_Promotion'), 'ListMemberName' => 'Promotion'),
    'CostOfPointsGranted' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    'CostOfPointsReturned' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
                return !is_null($this->_fields['SellerSKU']['FieldValue']);
            }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the OrderItemId property.
     *
     * @return String OrderItemId.
     */
    public function getOrderItemId()
    {
        return $this->_fields['OrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderItemId property.
     *
     * @param string orderItemId
     * @return this instance
     */
    public function setOrderItemId($value)
    {
        $this->_fields['OrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderItemId is set.
     *
     * @return true if OrderItemId is set.
     */
    public function isSetOrderItemId()
    {
                return !is_null($this->_fields['OrderItemId']['FieldValue']);
            }

    /**
     * Set the value of OrderItemId, return this.
     *
     * @param orderItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrderItemId($value)
    {
        $this->setOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the OrderAdjustmentItemId property.
     *
     * @return String OrderAdjustmentItemId.
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->_fields['OrderAdjustmentItemId']['FieldValue'];
    }

    /**
     * Set the value of the OrderAdjustmentItemId property.
     *
     * @param string orderAdjustmentItemId
     * @return this instance
     */
    public function setOrderAdjustmentItemId($value)
    {
        $this->_fields['OrderAdjustmentItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OrderAdjustmentItemId is set.
     *
     * @return true if OrderAdjustmentItemId is set.
     */
    public function isSetOrderAdjustmentItemId()
    {
                return !is_null($this->_fields['OrderAdjustmentItemId']['FieldValue']);
            }

    /**
     * Set the value of OrderAdjustmentItemId, return this.
     *
     * @param orderAdjustmentItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOrderAdjustmentItemId($value)
    {
        $this->setOrderAdjustmentItemId($value);
        return $this;
    }

    /**
     * Get the value of the QuantityShipped property.
     *
     * @return Integer QuantityShipped.
     */
    public function getQuantityShipped()
    {
        return $this->_fields['QuantityShipped']['FieldValue'];
    }

    /**
     * Set the value of the QuantityShipped property.
     *
     * @param int quantityShipped
     * @return this instance
     */
    public function setQuantityShipped($value)
    {
        $this->_fields['QuantityShipped']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QuantityShipped is set.
     *
     * @return true if QuantityShipped is set.
     */
    public function isSetQuantityShipped()
    {
                return !is_null($this->_fields['QuantityShipped']['FieldValue']);
            }

    /**
     * Set the value of QuantityShipped, return this.
     *
     * @param quantityShipped
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantityShipped($value)
    {
        $this->setQuantityShipped($value);
        return $this;
    }

    /**
     * Get the value of the ItemChargeList property.
     *
     * @return List<ChargeComponent> ItemChargeList.
     */
    public function getItemChargeList()
    {
        if ($this->_fields['ItemChargeList']['FieldValue'] == null)
        {
            $this->_fields['ItemChargeList']['FieldValue'] = array();
        }
        return $this->_fields['ItemChargeList']['FieldValue'];
    }

    /**
     * Set the value of the ItemChargeList property.
     *
     * @param array itemChargeList
     * @return this instance
     */
    public function setItemChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemChargeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemChargeList.
     */
    public function unsetItemChargeList()
    {
        $this->_fields['ItemChargeList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemChargeList is set.
     *
     * @return true if ItemChargeList is set.
     */
    public function isSetItemChargeList()
    {
                return !empty($this->_fields['ItemChargeList']['FieldValue']);
            }

    /**
     * Add values for ItemChargeList, return this.
     *
     * @param itemChargeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemChargeList()
    {
        foreach (func_get_args() as $ItemChargeList)
        {
            $this->_fields['ItemChargeList']['FieldValue'][] = $ItemChargeList;
        }
        return $this;
    }

    /**
     * Get the value of the ItemChargeAdjustmentList property.
     *
     * @return List<ChargeComponent> ItemChargeAdjustmentList.
     */
    public function getItemChargeAdjustmentList()
    {
        if ($this->_fields['ItemChargeAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ItemChargeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ItemChargeAdjustmentList property.
     *
     * @param array itemChargeAdjustmentList
     * @return this instance
     */
    public function setItemChargeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemChargeAdjustmentList.
     */
    public function unsetItemChargeAdjustmentList()
    {
        $this->_fields['ItemChargeAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemChargeAdjustmentList is set.
     *
     * @return true if ItemChargeAdjustmentList is set.
     */
    public function isSetItemChargeAdjustmentList()
    {
                return !empty($this->_fields['ItemChargeAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for ItemChargeAdjustmentList, return this.
     *
     * @param itemChargeAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemChargeAdjustmentList()
    {
        foreach (func_get_args() as $ItemChargeAdjustmentList)
        {
            $this->_fields['ItemChargeAdjustmentList']['FieldValue'][] = $ItemChargeAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the ItemFeeList property.
     *
     * @return List<FeeComponent> ItemFeeList.
     */
    public function getItemFeeList()
    {
        if ($this->_fields['ItemFeeList']['FieldValue'] == null)
        {
            $this->_fields['ItemFeeList']['FieldValue'] = array();
        }
        return $this->_fields['ItemFeeList']['FieldValue'];
    }

    /**
     * Set the value of the ItemFeeList property.
     *
     * @param array itemFeeList
     * @return this instance
     */
    public function setItemFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemFeeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemFeeList.
     */
    public function unsetItemFeeList()
    {
        $this->_fields['ItemFeeList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemFeeList is set.
     *
     * @return true if ItemFeeList is set.
     */
    public function isSetItemFeeList()
    {
                return !empty($this->_fields['ItemFeeList']['FieldValue']);
            }

    /**
     * Add values for ItemFeeList, return this.
     *
     * @param itemFeeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemFeeList()
    {
        foreach (func_get_args() as $ItemFeeList)
        {
            $this->_fields['ItemFeeList']['FieldValue'][] = $ItemFeeList;
        }
        return $this;
    }

    /**
     * Get the value of the ItemFeeAdjustmentList property.
     *
     * @return List<FeeComponent> ItemFeeAdjustmentList.
     */
    public function getItemFeeAdjustmentList()
    {
        if ($this->_fields['ItemFeeAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['ItemFeeAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the ItemFeeAdjustmentList property.
     *
     * @param array itemFeeAdjustmentList
     * @return this instance
     */
    public function setItemFeeAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemFeeAdjustmentList.
     */
    public function unsetItemFeeAdjustmentList()
    {
        $this->_fields['ItemFeeAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemFeeAdjustmentList is set.
     *
     * @return true if ItemFeeAdjustmentList is set.
     */
    public function isSetItemFeeAdjustmentList()
    {
                return !empty($this->_fields['ItemFeeAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for ItemFeeAdjustmentList, return this.
     *
     * @param itemFeeAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemFeeAdjustmentList()
    {
        foreach (func_get_args() as $ItemFeeAdjustmentList)
        {
            $this->_fields['ItemFeeAdjustmentList']['FieldValue'][] = $ItemFeeAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the ItemTaxWithheldList property.
     *
     * @return List<TaxWithheldComponent> ItemTaxWithheldList.
     */
    public function getItemTaxWithheldList()
    {
        if ($this->_fields['ItemTaxWithheldList']['FieldValue'] == null)
        {
            $this->_fields['ItemTaxWithheldList']['FieldValue'] = array();
        }
        return $this->_fields['ItemTaxWithheldList']['FieldValue'];
    }

    /**
     * Set the value of the ItemTaxWithheldList property.
     *
     * @param array itemTaxWithheldList
     * @return this instance
     */
    public function setItemTaxWithheldList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemTaxWithheldList.
     */
    public function unsetItemTaxWithheldList()
    {
        $this->_fields['ItemTaxWithheldList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemTaxWithheldList is set.
     *
     * @return true if ItemTaxWithheldList is set.
     */
    public function isSetItemTaxWithheldList()
    {
                return !empty($this->_fields['ItemTaxWithheldList']['FieldValue']);
            }

    /**
     * Add values for ItemTaxWithheldList, return this.
     *
     * @param itemTaxWithheldList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemTaxWithheldList()
    {
        foreach (func_get_args() as $ItemTaxWithheldList)
        {
            $this->_fields['ItemTaxWithheldList']['FieldValue'][] = $ItemTaxWithheldList;
        }
        return $this;
    }

    /**
     * Get the value of the PromotionList property.
     *
     * @return List<Promotion> PromotionList.
     */
    public function getPromotionList()
    {
        if ($this->_fields['PromotionList']['FieldValue'] == null)
        {
            $this->_fields['PromotionList']['FieldValue'] = array();
        }
        return $this->_fields['PromotionList']['FieldValue'];
    }

    /**
     * Set the value of the PromotionList property.
     *
     * @param array promotionList
     * @return this instance
     */
    public function setPromotionList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PromotionList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PromotionList.
     */
    public function unsetPromotionList()
    {
        $this->_fields['PromotionList']['FieldValue'] = array();
    }

    /**
     * Check to see if PromotionList is set.
     *
     * @return true if PromotionList is set.
     */
    public function isSetPromotionList()
    {
                return !empty($this->_fields['PromotionList']['FieldValue']);
            }

    /**
     * Add values for PromotionList, return this.
     *
     * @param promotionList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPromotionList()
    {
        foreach (func_get_args() as $PromotionList)
        {
            $this->_fields['PromotionList']['FieldValue'][] = $PromotionList;
        }
        return $this;
    }

    /**
     * Get the value of the PromotionAdjustmentList property.
     *
     * @return List<Promotion> PromotionAdjustmentList.
     */
    public function getPromotionAdjustmentList()
    {
        if ($this->_fields['PromotionAdjustmentList']['FieldValue'] == null)
        {
            $this->_fields['PromotionAdjustmentList']['FieldValue'] = array();
        }
        return $this->_fields['PromotionAdjustmentList']['FieldValue'];
    }

    /**
     * Set the value of the PromotionAdjustmentList property.
     *
     * @param array promotionAdjustmentList
     * @return this instance
     */
    public function setPromotionAdjustmentList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PromotionAdjustmentList.
     */
    public function unsetPromotionAdjustmentList()
    {
        $this->_fields['PromotionAdjustmentList']['FieldValue'] = array();
    }

    /**
     * Check to see if PromotionAdjustmentList is set.
     *
     * @return true if PromotionAdjustmentList is set.
     */
    public function isSetPromotionAdjustmentList()
    {
                return !empty($this->_fields['PromotionAdjustmentList']['FieldValue']);
            }

    /**
     * Add values for PromotionAdjustmentList, return this.
     *
     * @param promotionAdjustmentList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPromotionAdjustmentList()
    {
        foreach (func_get_args() as $PromotionAdjustmentList)
        {
            $this->_fields['PromotionAdjustmentList']['FieldValue'][] = $PromotionAdjustmentList;
        }
        return $this;
    }

    /**
     * Get the value of the CostOfPointsGranted property.
     *
     * @return Currency CostOfPointsGranted.
     */
    public function getCostOfPointsGranted()
    {
        return $this->_fields['CostOfPointsGranted']['FieldValue'];
    }

    /**
     * Set the value of the CostOfPointsGranted property.
     *
     * @param MWSFinancesService_Model_Currency costOfPointsGranted
     * @return this instance
     */
    public function setCostOfPointsGranted($value)
    {
        $this->_fields['CostOfPointsGranted']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CostOfPointsGranted is set.
     *
     * @return true if CostOfPointsGranted is set.
     */
    public function isSetCostOfPointsGranted()
    {
                return !is_null($this->_fields['CostOfPointsGranted']['FieldValue']);
            }

    /**
     * Set the value of CostOfPointsGranted, return this.
     *
     * @param costOfPointsGranted
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCostOfPointsGranted($value)
    {
        $this->setCostOfPointsGranted($value);
        return $this;
    }

    /**
     * Get the value of the CostOfPointsReturned property.
     *
     * @return Currency CostOfPointsReturned.
     */
    public function getCostOfPointsReturned()
    {
        return $this->_fields['CostOfPointsReturned']['FieldValue'];
    }

    /**
     * Set the value of the CostOfPointsReturned property.
     *
     * @param MWSFinancesService_Model_Currency costOfPointsReturned
     * @return this instance
     */
    public function setCostOfPointsReturned($value)
    {
        $this->_fields['CostOfPointsReturned']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CostOfPointsReturned is set.
     *
     * @return true if CostOfPointsReturned is set.
     */
    public function isSetCostOfPointsReturned()
    {
                return !is_null($this->_fields['CostOfPointsReturned']['FieldValue']);
            }

    /**
     * Set the value of CostOfPointsReturned, return this.
     *
     * @param costOfPointsReturned
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCostOfPointsReturned($value)
    {
        $this->setCostOfPointsReturned($value);
        return $this;
    }

}
