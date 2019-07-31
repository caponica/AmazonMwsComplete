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
 * FBAInboundServiceMWS_Model_AmazonPrepFeesDetails
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepInstruction: string</li>
 * <li>FeePerUnit: FBAInboundServiceMWS_Model_Amount</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_AmazonPrepFeesDetails extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PrepInstruction' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeePerUnit' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_Amount'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return String PrepInstruction.
     */
    public function getPrepInstruction()
    {
        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param string prepInstruction
     * @return this instance
     */
    public function setPrepInstruction($value)
    {
        $this->_fields['PrepInstruction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set.
     */
    public function isSetPrepInstruction()
    {
                return !is_null($this->_fields['PrepInstruction']['FieldValue']);
            }

    /**
     * Set the value of PrepInstruction, return this.
     *
     * @param prepInstruction
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPrepInstruction($value)
    {
        $this->setPrepInstruction($value);
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

}
