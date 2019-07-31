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
 * FBAInboundServiceMWS_Model_ASINPrepInstructionsList
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASINPrepInstructions: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_ASINPrepInstructionsList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASINPrepInstructions' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_ASINPrepInstructions')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASINPrepInstructions property.
     *
     * @return List<ASINPrepInstructions> ASINPrepInstructions.
     */
    public function getASINPrepInstructions()
    {
        if ($this->_fields['ASINPrepInstructions']['FieldValue'] == null)
        {
            $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
        }
        return $this->_fields['ASINPrepInstructions']['FieldValue'];
    }

    /**
     * Set the value of the ASINPrepInstructions property.
     *
     * @param array asinPrepInstructions
     * @return this instance
     */
    public function setASINPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ASINPrepInstructions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ASINPrepInstructions.
     */
    public function unsetASINPrepInstructions()
    {
        $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
    }

    /**
     * Check to see if ASINPrepInstructions is set.
     *
     * @return true if ASINPrepInstructions is set.
     */
    public function isSetASINPrepInstructions()
    {
                return !empty($this->_fields['ASINPrepInstructions']['FieldValue']);
            }

    /**
     * Add values for ASINPrepInstructions, return this.
     *
     * @param asinPrepInstructions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withASINPrepInstructions()
    {
        foreach (func_get_args() as $ASINPrepInstructions)
        {
            $this->_fields['ASINPrepInstructions']['FieldValue'][] = $ASINPrepInstructions;
        }
        return $this;
    }

}
