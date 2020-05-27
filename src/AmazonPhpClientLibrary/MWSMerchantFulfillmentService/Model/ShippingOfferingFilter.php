<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSMerchantFulfillmentService_Model_ShippingOfferingFilter
 * 
 * Properties:
 * <ul>
 * 
 * <li>IncludePackingSlipWithLabel: bool</li>
 * <li>IncludeComplexShippingOptions: bool</li>
 * <li>CarrierWillPickUp: string</li>
 * <li>DeliveryExperience: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_ShippingOfferingFilter extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'IncludePackingSlipWithLabel' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IncludeComplexShippingOptions' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'CarrierWillPickUp' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DeliveryExperience' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of IncludePackingSlipWithLabel.
     *
     * @return true if IncludePackingSlipWithLabel is set to true.
     */
    public function isIncludePackingSlipWithLabel()
    {
        return !is_null($this->_fields['IncludePackingSlipWithLabel']['FieldValue']) && $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Get the value of the IncludePackingSlipWithLabel property.
     *
     * @return Boolean IncludePackingSlipWithLabel.
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->_fields['IncludePackingSlipWithLabel']['FieldValue'];
    }

    /**
     * Set the value of the IncludePackingSlipWithLabel property.
     *
     * @param bool includePackingSlipWithLabel
     * @return this instance
     */
    public function setIncludePackingSlipWithLabel($value)
    {
        $this->_fields['IncludePackingSlipWithLabel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludePackingSlipWithLabel is set.
     *
     * @return true if IncludePackingSlipWithLabel is set.
     */
    public function isSetIncludePackingSlipWithLabel()
    {
                return !is_null($this->_fields['IncludePackingSlipWithLabel']['FieldValue']);
            }

    /**
     * Set the value of IncludePackingSlipWithLabel, return this.
     *
     * @param includePackingSlipWithLabel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludePackingSlipWithLabel($value)
    {
        $this->setIncludePackingSlipWithLabel($value);
        return $this;
    }

    /**
     * Check the value of IncludeComplexShippingOptions.
     *
     * @return true if IncludeComplexShippingOptions is set to true.
     */
    public function isIncludeComplexShippingOptions()
    {
        return !is_null($this->_fields['IncludeComplexShippingOptions']['FieldValue']) && $this->_fields['IncludeComplexShippingOptions']['FieldValue'];
    }

    /**
     * Get the value of the IncludeComplexShippingOptions property.
     *
     * @return Boolean IncludeComplexShippingOptions.
     */
    public function getIncludeComplexShippingOptions()
    {
        return $this->_fields['IncludeComplexShippingOptions']['FieldValue'];
    }

    /**
     * Set the value of the IncludeComplexShippingOptions property.
     *
     * @param bool includeComplexShippingOptions
     * @return this instance
     */
    public function setIncludeComplexShippingOptions($value)
    {
        $this->_fields['IncludeComplexShippingOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludeComplexShippingOptions is set.
     *
     * @return true if IncludeComplexShippingOptions is set.
     */
    public function isSetIncludeComplexShippingOptions()
    {
                return !is_null($this->_fields['IncludeComplexShippingOptions']['FieldValue']);
            }

    /**
     * Set the value of IncludeComplexShippingOptions, return this.
     *
     * @param includeComplexShippingOptions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludeComplexShippingOptions($value)
    {
        $this->setIncludeComplexShippingOptions($value);
        return $this;
    }

    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return String CarrierWillPickUp.
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param string carrierWillPickUp
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

}
