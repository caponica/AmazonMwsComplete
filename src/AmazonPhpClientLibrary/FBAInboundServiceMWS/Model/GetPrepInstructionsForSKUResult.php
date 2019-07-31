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
 * FBAInboundServiceMWS_Model_GetPrepInstructionsForSKUResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SKUPrepInstructionsList: FBAInboundServiceMWS_Model_SKUPrepInstructionsList</li>
 * <li>InvalidSKUList: FBAInboundServiceMWS_Model_InvalidSKUList</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GetPrepInstructionsForSKUResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SKUPrepInstructionsList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_SKUPrepInstructionsList'),
    'InvalidSKUList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_InvalidSKUList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SKUPrepInstructionsList property.
     *
     * @return SKUPrepInstructionsList SKUPrepInstructionsList.
     */
    public function getSKUPrepInstructionsList()
    {
        return $this->_fields['SKUPrepInstructionsList']['FieldValue'];
    }

    /**
     * Set the value of the SKUPrepInstructionsList property.
     *
     * @param FBAInboundServiceMWS_Model_SKUPrepInstructionsList skuPrepInstructionsList
     * @return this instance
     */
    public function setSKUPrepInstructionsList($value)
    {
        $this->_fields['SKUPrepInstructionsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKUPrepInstructionsList is set.
     *
     * @return true if SKUPrepInstructionsList is set.
     */
    public function isSetSKUPrepInstructionsList()
    {
                return !is_null($this->_fields['SKUPrepInstructionsList']['FieldValue']);
            }

    /**
     * Set the value of SKUPrepInstructionsList, return this.
     *
     * @param skuPrepInstructionsList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKUPrepInstructionsList($value)
    {
        $this->setSKUPrepInstructionsList($value);
        return $this;
    }

    /**
     * Get the value of the InvalidSKUList property.
     *
     * @return InvalidSKUList InvalidSKUList.
     */
    public function getInvalidSKUList()
    {
        return $this->_fields['InvalidSKUList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKUList property.
     *
     * @param FBAInboundServiceMWS_Model_InvalidSKUList invalidSKUList
     * @return this instance
     */
    public function setInvalidSKUList($value)
    {
        $this->_fields['InvalidSKUList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvalidSKUList is set.
     *
     * @return true if InvalidSKUList is set.
     */
    public function isSetInvalidSKUList()
    {
                return !is_null($this->_fields['InvalidSKUList']['FieldValue']);
            }

    /**
     * Set the value of InvalidSKUList, return this.
     *
     * @param invalidSKUList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvalidSKUList($value)
    {
        $this->setInvalidSKUList($value);
        return $this;
    }

}
