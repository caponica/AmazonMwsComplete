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
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2018-10-31
 * Generated: Mon Oct 22 23:32:33 UTC 2018
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_GetShipmentResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Shipment: MWSMerchantFulfillmentService_Model_Shipment</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetShipmentResult extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Shipment' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Shipment'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Shipment property.
     *
     * @return Shipment Shipment.
     */
    public function getShipment()
    {
        return $this->_fields['Shipment']['FieldValue'];
    }

    /**
     * Set the value of the Shipment property.
     *
     * @param MWSMerchantFulfillmentService_Model_Shipment shipment
     * @return this instance
     */
    public function setShipment($value)
    {
        $this->_fields['Shipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipment is set.
     *
     * @return true if Shipment is set.
     */
    public function isSetShipment()
    {
                return !is_null($this->_fields['Shipment']['FieldValue']);
            }

    /**
     * Set the value of Shipment, return this.
     *
     * @param shipment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipment($value)
    {
        $this->setShipment($value);
        return $this;
    }

}
