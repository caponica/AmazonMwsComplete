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
 * FBAInboundServiceMWS_Model_GetPrepInstructionsForASINResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASINPrepInstructionsList: FBAInboundServiceMWS_Model_ASINPrepInstructionsList</li>
 * <li>InvalidASINList: FBAInboundServiceMWS_Model_InvalidASINList</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GetPrepInstructionsForASINResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASINPrepInstructionsList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_ASINPrepInstructionsList'),
    'InvalidASINList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_InvalidASINList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASINPrepInstructionsList property.
     *
     * @return ASINPrepInstructionsList ASINPrepInstructionsList.
     */
    public function getASINPrepInstructionsList()
    {
        return $this->_fields['ASINPrepInstructionsList']['FieldValue'];
    }

    /**
     * Set the value of the ASINPrepInstructionsList property.
     *
     * @param FBAInboundServiceMWS_Model_ASINPrepInstructionsList asinPrepInstructionsList
     * @return this instance
     */
    public function setASINPrepInstructionsList($value)
    {
        $this->_fields['ASINPrepInstructionsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASINPrepInstructionsList is set.
     *
     * @return true if ASINPrepInstructionsList is set.
     */
    public function isSetASINPrepInstructionsList()
    {
                return !is_null($this->_fields['ASINPrepInstructionsList']['FieldValue']);
            }

    /**
     * Set the value of ASINPrepInstructionsList, return this.
     *
     * @param asinPrepInstructionsList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASINPrepInstructionsList($value)
    {
        $this->setASINPrepInstructionsList($value);
        return $this;
    }

    /**
     * Get the value of the InvalidASINList property.
     *
     * @return InvalidASINList InvalidASINList.
     */
    public function getInvalidASINList()
    {
        return $this->_fields['InvalidASINList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidASINList property.
     *
     * @param FBAInboundServiceMWS_Model_InvalidASINList invalidASINList
     * @return this instance
     */
    public function setInvalidASINList($value)
    {
        $this->_fields['InvalidASINList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvalidASINList is set.
     *
     * @return true if InvalidASINList is set.
     */
    public function isSetInvalidASINList()
    {
                return !is_null($this->_fields['InvalidASINList']['FieldValue']);
            }

    /**
     * Set the value of InvalidASINList, return this.
     *
     * @param invalidASINList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvalidASINList($value)
    {
        $this->setInvalidASINList($value);
        return $this;
    }

}
