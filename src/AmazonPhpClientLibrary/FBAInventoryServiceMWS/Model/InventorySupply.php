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
 * FBAInventoryServiceMWS_Model_InventorySupply
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerSKU: string</li>
 * <li>FNSKU: string</li>
 * <li>ASIN: string</li>
 * <li>Condition: string</li>
 * <li>TotalSupplyQuantity: int</li>
 * <li>InStockSupplyQuantity: int</li>
 * <li>EarliestAvailability: FBAInventoryServiceMWS_Model_Timepoint</li>
 * <li>SupplyDetail: FBAInventoryServiceMWS_Model_InventorySupplyDetailList</li>
 *
 * </ul>
 */

 class FBAInventoryServiceMWS_Model_InventorySupply extends FBAInventoryServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FNSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Condition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TotalSupplyQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'InStockSupplyQuantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'EarliestAvailability' => array('FieldValue' => null, 'FieldType' => 'FBAInventoryServiceMWS_Model_Timepoint'),
    'SupplyDetail' => array('FieldValue' => null, 'FieldType' => 'FBAInventoryServiceMWS_Model_InventorySupplyDetailList'),
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
     * Get the value of the FNSKU property.
     *
     * @return String FNSKU.
     */
    public function getFNSKU()
    {
        return $this->_fields['FNSKU']['FieldValue'];
    }

    /**
     * Set the value of the FNSKU property.
     *
     * @param string fnsku
     * @return this instance
     */
    public function setFNSKU($value)
    {
        $this->_fields['FNSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FNSKU is set.
     *
     * @return true if FNSKU is set.
     */
    public function isSetFNSKU()
    {
                return !is_null($this->_fields['FNSKU']['FieldValue']);
            }

    /**
     * Set the value of FNSKU, return this.
     *
     * @param fnsku
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFNSKU($value)
    {
        $this->setFNSKU($value);
        return $this;
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
                return !is_null($this->_fields['ASIN']['FieldValue']);
            }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Get the value of the Condition property.
     *
     * @return String Condition.
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @return this instance
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set.
     */
    public function isSetCondition()
    {
                return !is_null($this->_fields['Condition']['FieldValue']);
            }

    /**
     * Set the value of Condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCondition($value)
    {
        $this->setCondition($value);
        return $this;
    }

    /**
     * Get the value of the TotalSupplyQuantity property.
     *
     * @return Integer TotalSupplyQuantity.
     */
    public function getTotalSupplyQuantity()
    {
        return $this->_fields['TotalSupplyQuantity']['FieldValue'];
    }

    /**
     * Set the value of the TotalSupplyQuantity property.
     *
     * @param int totalSupplyQuantity
     * @return this instance
     */
    public function setTotalSupplyQuantity($value)
    {
        $this->_fields['TotalSupplyQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalSupplyQuantity is set.
     *
     * @return true if TotalSupplyQuantity is set.
     */
    public function isSetTotalSupplyQuantity()
    {
                return !is_null($this->_fields['TotalSupplyQuantity']['FieldValue']);
            }

    /**
     * Set the value of TotalSupplyQuantity, return this.
     *
     * @param totalSupplyQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalSupplyQuantity($value)
    {
        $this->setTotalSupplyQuantity($value);
        return $this;
    }

    /**
     * Get the value of the InStockSupplyQuantity property.
     *
     * @return Integer InStockSupplyQuantity.
     */
    public function getInStockSupplyQuantity()
    {
        return $this->_fields['InStockSupplyQuantity']['FieldValue'];
    }

    /**
     * Set the value of the InStockSupplyQuantity property.
     *
     * @param int inStockSupplyQuantity
     * @return this instance
     */
    public function setInStockSupplyQuantity($value)
    {
        $this->_fields['InStockSupplyQuantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InStockSupplyQuantity is set.
     *
     * @return true if InStockSupplyQuantity is set.
     */
    public function isSetInStockSupplyQuantity()
    {
                return !is_null($this->_fields['InStockSupplyQuantity']['FieldValue']);
            }

    /**
     * Set the value of InStockSupplyQuantity, return this.
     *
     * @param inStockSupplyQuantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInStockSupplyQuantity($value)
    {
        $this->setInStockSupplyQuantity($value);
        return $this;
    }

    /**
     * Get the value of the EarliestAvailability property.
     *
     * @return Timepoint EarliestAvailability.
     */
    public function getEarliestAvailability()
    {
        return $this->_fields['EarliestAvailability']['FieldValue'];
    }

    /**
     * Set the value of the EarliestAvailability property.
     *
     * @param FBAInventoryServiceMWS_Model_Timepoint earliestAvailability
     * @return this instance
     */
    public function setEarliestAvailability($value)
    {
        $this->_fields['EarliestAvailability']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestAvailability is set.
     *
     * @return true if EarliestAvailability is set.
     */
    public function isSetEarliestAvailability()
    {
                return !is_null($this->_fields['EarliestAvailability']['FieldValue']);
            }

    /**
     * Set the value of EarliestAvailability, return this.
     *
     * @param earliestAvailability
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEarliestAvailability($value)
    {
        $this->setEarliestAvailability($value);
        return $this;
    }

    /**
     * Get the value of the SupplyDetail property.
     *
     * @return InventorySupplyDetailList SupplyDetail.
     */
    public function getSupplyDetail()
    {
        return $this->_fields['SupplyDetail']['FieldValue'];
    }

    /**
     * Set the value of the SupplyDetail property.
     *
     * @param FBAInventoryServiceMWS_Model_InventorySupplyDetailList supplyDetail
     * @return this instance
     */
    public function setSupplyDetail($value)
    {
        $this->_fields['SupplyDetail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SupplyDetail is set.
     *
     * @return true if SupplyDetail is set.
     */
    public function isSetSupplyDetail()
    {
                return !is_null($this->_fields['SupplyDetail']['FieldValue']);
            }

    /**
     * Set the value of SupplyDetail, return this.
     *
     * @param supplyDetail
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSupplyDetail($value)
    {
        $this->setSupplyDetail($value);
        return $this;
    }

}
