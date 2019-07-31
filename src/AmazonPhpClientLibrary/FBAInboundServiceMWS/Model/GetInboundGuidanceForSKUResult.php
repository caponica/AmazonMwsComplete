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
 * FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SKUInboundGuidanceList: FBAInboundServiceMWS_Model_SKUInboundGuidanceList</li>
 * <li>InvalidSKUList: FBAInboundServiceMWS_Model_InvalidSKUList</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_GetInboundGuidanceForSKUResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SKUInboundGuidanceList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_SKUInboundGuidanceList'),
    'InvalidSKUList' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_InvalidSKUList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SKUInboundGuidanceList property.
     *
     * @return SKUInboundGuidanceList SKUInboundGuidanceList.
     */
    public function getSKUInboundGuidanceList()
    {
        return $this->_fields['SKUInboundGuidanceList']['FieldValue'];
    }

    /**
     * Set the value of the SKUInboundGuidanceList property.
     *
     * @param FBAInboundServiceMWS_Model_SKUInboundGuidanceList skuInboundGuidanceList
     * @return this instance
     */
    public function setSKUInboundGuidanceList($value)
    {
        $this->_fields['SKUInboundGuidanceList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKUInboundGuidanceList is set.
     *
     * @return true if SKUInboundGuidanceList is set.
     */
    public function isSetSKUInboundGuidanceList()
    {
                return !is_null($this->_fields['SKUInboundGuidanceList']['FieldValue']);
            }

    /**
     * Set the value of SKUInboundGuidanceList, return this.
     *
     * @param skuInboundGuidanceList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKUInboundGuidanceList($value)
    {
        $this->setSKUInboundGuidanceList($value);
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
