<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * Library Version: 2016-03-30
 * Generated: Tue Mar 29 19:00:01 UTC 2016
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_ShippingServiceOptions
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeliveryExperience: string</li>
 * <li>DeclaredValue: MWSMerchantFulfillmentService_Model_CurrencyAmount</li>
 * <li>CarrierWillPickUp: bool</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_ShippingServiceOptions extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'DeliveryExperience' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DeclaredValue' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CurrencyAmount'),
    'CarrierWillPickUp' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryExperience property.
     *
     * @return String DeliveryExperience.
     */
    public function getDeliveryExperience()
    {
        return $this->_fields['DeliveryExperience']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryExperience property.
     *
     * @param string deliveryExperience
     * @return this instance
     */
    public function setDeliveryExperience($value)
    {
        $this->_fields['DeliveryExperience']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryExperience is set.
     *
     * @return true if DeliveryExperience is set.
     */
    public function isSetDeliveryExperience()
    {
                return !is_null($this->_fields['DeliveryExperience']['FieldValue']);
            }

    /**
     * Set the value of DeliveryExperience, return this.
     *
     * @param deliveryExperience
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryExperience($value)
    {
        $this->setDeliveryExperience($value);
        return $this;
    }

    /**
     * Get the value of the DeclaredValue property.
     *
     * @return CurrencyAmount DeclaredValue.
     */
    public function getDeclaredValue()
    {
        return $this->_fields['DeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the DeclaredValue property.
     *
     * @param MWSMerchantFulfillmentService_Model_CurrencyAmount declaredValue
     * @return this instance
     */
    public function setDeclaredValue($value)
    {
        $this->_fields['DeclaredValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeclaredValue is set.
     *
     * @return true if DeclaredValue is set.
     */
    public function isSetDeclaredValue()
    {
                return !is_null($this->_fields['DeclaredValue']['FieldValue']);
            }

    /**
     * Set the value of DeclaredValue, return this.
     *
     * @param declaredValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeclaredValue($value)
    {
        $this->setDeclaredValue($value);
        return $this;
    }

    /**
     * Check the value of CarrierWillPickUp.
     *
     * @return true if CarrierWillPickUp is set to true.
     */
    public function isCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return boolean CarrierWillPickUp.
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param bool carrierWillPickUp
     * @return this instance
     */
    public function setCarrierWillPickUp($value)
    {
        $this->_fields['CarrierWillPickUp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierWillPickUp is set.
     *
     * @return true if CarrierWillPickUp is set.
     */
    public function isSetCarrierWillPickUp()
    {
                return !is_null($this->_fields['CarrierWillPickUp']['FieldValue']);
            }

    /**
     * Set the value of CarrierWillPickUp, return this.
     *
     * @param carrierWillPickUp
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierWillPickUp($value)
    {
        $this->setCarrierWillPickUp($value);
        return $this;
    }

}
