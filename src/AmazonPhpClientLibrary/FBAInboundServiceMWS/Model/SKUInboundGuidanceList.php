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
 * FBAInboundServiceMWS_Model_SKUInboundGuidanceList
 * 
 * Properties:
 * <ul>
 * 
 * <li>SKUInboundGuidance: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_SKUInboundGuidanceList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SKUInboundGuidance' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_SKUInboundGuidance')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SKUInboundGuidance property.
     *
     * @return List<SKUInboundGuidance> SKUInboundGuidance.
     */
    public function getSKUInboundGuidance()
    {
        if ($this->_fields['SKUInboundGuidance']['FieldValue'] == null)
        {
            $this->_fields['SKUInboundGuidance']['FieldValue'] = array();
        }
        return $this->_fields['SKUInboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of the SKUInboundGuidance property.
     *
     * @param array skuInboundGuidance
     * @return this instance
     */
    public function setSKUInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SKUInboundGuidance']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SKUInboundGuidance.
     */
    public function unsetSKUInboundGuidance()
    {
        $this->_fields['SKUInboundGuidance']['FieldValue'] = array();
    }

    /**
     * Check to see if SKUInboundGuidance is set.
     *
     * @return true if SKUInboundGuidance is set.
     */
    public function isSetSKUInboundGuidance()
    {
                return !empty($this->_fields['SKUInboundGuidance']['FieldValue']);
            }

    /**
     * Add values for SKUInboundGuidance, return this.
     *
     * @param skuInboundGuidance
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSKUInboundGuidance()
    {
        foreach (func_get_args() as $SKUInboundGuidance)
        {
            $this->_fields['SKUInboundGuidance']['FieldValue'][] = $SKUInboundGuidance;
        }
        return $this;
    }

}
