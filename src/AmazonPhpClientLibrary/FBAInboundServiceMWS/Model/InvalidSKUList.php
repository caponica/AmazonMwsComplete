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
 * FBAInboundServiceMWS_Model_InvalidSKUList
 * 
 * Properties:
 * <ul>
 * 
 * <li>InvalidSKU: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_InvalidSKUList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InvalidSKU' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_InvalidSKU')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InvalidSKU property.
     *
     * @return List<InvalidSKU> InvalidSKU.
     */
    public function getInvalidSKU()
    {
        if ($this->_fields['InvalidSKU']['FieldValue'] == null)
        {
            $this->_fields['InvalidSKU']['FieldValue'] = array();
        }
        return $this->_fields['InvalidSKU']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKU property.
     *
     * @param array invalidSKU
     * @return this instance
     */
    public function setInvalidSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['InvalidSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear InvalidSKU.
     */
    public function unsetInvalidSKU()
    {
        $this->_fields['InvalidSKU']['FieldValue'] = array();
    }

    /**
     * Check to see if InvalidSKU is set.
     *
     * @return true if InvalidSKU is set.
     */
    public function isSetInvalidSKU()
    {
                return !empty($this->_fields['InvalidSKU']['FieldValue']);
            }

    /**
     * Add values for InvalidSKU, return this.
     *
     * @param invalidSKU
     *             New values to add.
     *
     * @return This instance.
     */
    public function withInvalidSKU()
    {
        foreach (func_get_args() as $InvalidSKU)
        {
            $this->_fields['InvalidSKU']['FieldValue'][] = $InvalidSKU;
        }
        return $this;
    }

}
