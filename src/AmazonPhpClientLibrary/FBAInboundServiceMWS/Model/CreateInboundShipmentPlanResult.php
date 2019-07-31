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
 * FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InboundShipmentPlans: FBAInboundServiceMWS_Model_InboundShipmentPlanList</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_CreateInboundShipmentPlanResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InboundShipmentPlans' => array('FieldValue' => null, 'FieldType' => 'FBAInboundServiceMWS_Model_InboundShipmentPlanList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InboundShipmentPlans property.
     *
     * @return InboundShipmentPlanList InboundShipmentPlans.
     */
    public function getInboundShipmentPlans()
    {
        return $this->_fields['InboundShipmentPlans']['FieldValue'];
    }

    /**
     * Set the value of the InboundShipmentPlans property.
     *
     * @param FBAInboundServiceMWS_Model_InboundShipmentPlanList inboundShipmentPlans
     * @return this instance
     */
    public function setInboundShipmentPlans($value)
    {
        $this->_fields['InboundShipmentPlans']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InboundShipmentPlans is set.
     *
     * @return true if InboundShipmentPlans is set.
     */
    public function isSetInboundShipmentPlans()
    {
                return !is_null($this->_fields['InboundShipmentPlans']['FieldValue']);
            }

    /**
     * Set the value of InboundShipmentPlans, return this.
     *
     * @param inboundShipmentPlans
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInboundShipmentPlans($value)
    {
        $this->setInboundShipmentPlans($value);
        return $this;
    }

}
