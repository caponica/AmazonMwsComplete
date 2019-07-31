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
 * FBAInboundServiceMWS_Model_ASINInboundGuidanceList
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASINInboundGuidance: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_ASINInboundGuidanceList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASINInboundGuidance' => array('FieldValue' => array(), 'FieldType' => array('FBAInboundServiceMWS_Model_ASINInboundGuidance')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASINInboundGuidance property.
     *
     * @return List<ASINInboundGuidance> ASINInboundGuidance.
     */
    public function getASINInboundGuidance()
    {
        if ($this->_fields['ASINInboundGuidance']['FieldValue'] == null)
        {
            $this->_fields['ASINInboundGuidance']['FieldValue'] = array();
        }
        return $this->_fields['ASINInboundGuidance']['FieldValue'];
    }

    /**
     * Set the value of the ASINInboundGuidance property.
     *
     * @param array asinInboundGuidance
     * @return this instance
     */
    public function setASINInboundGuidance($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ASINInboundGuidance']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ASINInboundGuidance.
     */
    public function unsetASINInboundGuidance()
    {
        $this->_fields['ASINInboundGuidance']['FieldValue'] = array();
    }

    /**
     * Check to see if ASINInboundGuidance is set.
     *
     * @return true if ASINInboundGuidance is set.
     */
    public function isSetASINInboundGuidance()
    {
                return !empty($this->_fields['ASINInboundGuidance']['FieldValue']);
            }

    /**
     * Add values for ASINInboundGuidance, return this.
     *
     * @param asinInboundGuidance
     *             New values to add.
     *
     * @return This instance.
     */
    public function withASINInboundGuidance()
    {
        foreach (func_get_args() as $ASINInboundGuidance)
        {
            $this->_fields['ASINInboundGuidance']['FieldValue'][] = $ASINInboundGuidance;
        }
        return $this;
    }

}
