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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_BoxContentsFeeDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>TotalUnits: int</li>
 * <li>FeePerUnit: FBAInboundServiceMWS_Model_Amount</li>
 * <li>TotalFee: FBAInboundServiceMWS_Model_Amount</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_BoxContentsFeeDetails extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TotalUnits' => array('FieldValue' => null, 'FieldType' => 'int'),
    'FeePerUnit' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Amount'),
    'TotalFee' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Amount'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TotalUnits property.
     *
     * @return Integer TotalUnits.
     */
    public function getTotalUnits()
    {
        return $this->_fields['TotalUnits']['FieldValue'];
    }

    /**
     * Set the value of the TotalUnits property.
     *
     * @param int totalUnits
     * @return this instance
     */
    public function setTotalUnits($value)
    {
        $this->_fields['TotalUnits']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalUnits is set.
     *
     * @return true if TotalUnits is set.
     */
    public function isSetTotalUnits()
    {
                return !is_null($this->_fields['TotalUnits']['FieldValue']);
            }

    /**
     * Set the value of TotalUnits, return this.
     *
     * @param totalUnits
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalUnits($value)
    {
        $this->setTotalUnits($value);
        return $this;
    }

    /**
     * Get the value of the FeePerUnit property.
     *
     * @return Amount FeePerUnit.
     */
    public function getFeePerUnit()
    {
        return $this->_fields['FeePerUnit']['FieldValue'];
    }

    /**
     * Set the value of the FeePerUnit property.
     *
     * @param FBAInboundServiceMWS_Model_Amount feePerUnit
     * @return this instance
     */
    public function setFeePerUnit($value)
    {
        $this->_fields['FeePerUnit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeePerUnit is set.
     *
     * @return true if FeePerUnit is set.
     */
    public function isSetFeePerUnit()
    {
                return !is_null($this->_fields['FeePerUnit']['FieldValue']);
            }

    /**
     * Set the value of FeePerUnit, return this.
     *
     * @param feePerUnit
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeePerUnit($value)
    {
        $this->setFeePerUnit($value);
        return $this;
    }

    /**
     * Get the value of the TotalFee property.
     *
     * @return Amount TotalFee.
     */
    public function getTotalFee()
    {
        return $this->_fields['TotalFee']['FieldValue'];
    }

    /**
     * Set the value of the TotalFee property.
     *
     * @param FBAInboundServiceMWS_Model_Amount totalFee
     * @return this instance
     */
    public function setTotalFee($value)
    {
        $this->_fields['TotalFee']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalFee is set.
     *
     * @return true if TotalFee is set.
     */
    public function isSetTotalFee()
    {
                return !is_null($this->_fields['TotalFee']['FieldValue']);
            }

    /**
     * Set the value of TotalFee, return this.
     *
     * @param totalFee
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalFee($value)
    {
        $this->setTotalFee($value);
        return $this;
    }

}
