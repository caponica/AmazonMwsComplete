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
 * FBAInboundServiceMWS_Model_PrepInstructionList
 * 
 * Properties:
 * <ul>
 * 
 * <li>PrepInstruction: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_PrepInstructionList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PrepInstruction' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return List<String> PrepInstruction.
     */
    public function getPrepInstruction()
    {
        if ($this->_fields['PrepInstruction']['FieldValue'] == null)
        {
            $this->_fields['PrepInstruction']['FieldValue'] = array();
        }
        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param array prepInstruction
     * @return this instance
     */
    public function setPrepInstruction($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PrepInstruction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PrepInstruction.
     */
    public function unsetPrepInstruction()
    {
        $this->_fields['PrepInstruction']['FieldValue'] = array();
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set.
     */
    public function isSetPrepInstruction()
    {
                return !empty($this->_fields['PrepInstruction']['FieldValue']);
            }

    /**
     * Add values for PrepInstruction, return this.
     *
     * @param prepInstruction
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPrepInstruction()
    {
        foreach (func_get_args() as $PrepInstruction)
        {
            $this->_fields['PrepInstruction']['FieldValue'][] = $PrepInstruction;
        }
        return $this;
    }

}
