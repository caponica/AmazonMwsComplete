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
 * FBAInboundServiceMWS_Model_GuidanceReasonList
 * 
 * Properties:
 * <ul>
 * 
 * <li>GuidanceReason: array</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GuidanceReasonList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GuidanceReason' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GuidanceReason property.
     *
     * @return List<String> GuidanceReason.
     */
    public function getGuidanceReason()
    {
        if ($this->_fields['GuidanceReason']['FieldValue'] == null)
        {
            $this->_fields['GuidanceReason']['FieldValue'] = array();
        }
        return $this->_fields['GuidanceReason']['FieldValue'];
    }

    /**
     * Set the value of the GuidanceReason property.
     *
     * @param array guidanceReason
     * @return this instance
     */
    public function setGuidanceReason($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GuidanceReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GuidanceReason.
     */
    public function unsetGuidanceReason()
    {
        $this->_fields['GuidanceReason']['FieldValue'] = array();
    }

    /**
     * Check to see if GuidanceReason is set.
     *
     * @return true if GuidanceReason is set.
     */
    public function isSetGuidanceReason()
    {
                return !empty($this->_fields['GuidanceReason']['FieldValue']);
            }

    /**
     * Add values for GuidanceReason, return this.
     *
     * @param guidanceReason
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGuidanceReason()
    {
        foreach (func_get_args() as $GuidanceReason)
        {
            $this->_fields['GuidanceReason']['FieldValue'][] = $GuidanceReason;
        }
        return $this;
    }

}
