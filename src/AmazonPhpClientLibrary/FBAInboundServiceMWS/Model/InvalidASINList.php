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
 * FBAInboundServiceMWS_Model_InvalidASINList
 * 
 * Properties:
 * <ul>
 * 
 * <li>InvalidASIN: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_InvalidASINList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InvalidASIN' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_InvalidASIN')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InvalidASIN property.
     *
     * @return List<InvalidASIN> InvalidASIN.
     */
    public function getInvalidASIN()
    {
        if ($this->_fields['InvalidASIN']['FieldValue'] == null)
        {
            $this->_fields['InvalidASIN']['FieldValue'] = array();
        }
        return $this->_fields['InvalidASIN']['FieldValue'];
    }

    /**
     * Set the value of the InvalidASIN property.
     *
     * @param array invalidASIN
     * @return this instance
     */
    public function setInvalidASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['InvalidASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear InvalidASIN.
     */
    public function unsetInvalidASIN()
    {
        $this->_fields['InvalidASIN']['FieldValue'] = array();
    }

    /**
     * Check to see if InvalidASIN is set.
     *
     * @return true if InvalidASIN is set.
     */
    public function isSetInvalidASIN()
    {
                return !empty($this->_fields['InvalidASIN']['FieldValue']);
            }

    /**
     * Add values for InvalidASIN, return this.
     *
     * @param invalidASIN
     *             New values to add.
     *
     * @return This instance.
     */
    public function withInvalidASIN()
    {
        foreach (func_get_args() as $InvalidASIN)
        {
            $this->_fields['InvalidASIN']['FieldValue'][] = $InvalidASIN;
        }
        return $this;
    }

}
