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
 * MWSMerchantFulfillmentService_Model_AvailableShippingServiceOptions
 * 
 * Properties:
 * <ul>
 * 
 * <li>AvailableCarrierWillPickUpOptions: array</li>
 * <li>AvailableDeliveryExperienceOptions: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_AvailableShippingServiceOptions extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AvailableCarrierWillPickUpOptions' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_AvailableCarrierWillPickUpOption'), 'ListMemberName' => 'AvailableCarrierWillPickUpOption'),
    'AvailableDeliveryExperienceOptions' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_AvailableDeliveryExperienceOption'), 'ListMemberName' => 'AvailableDeliveryExperienceOption'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AvailableCarrierWillPickUpOptions property.
     *
     * @return List<AvailableCarrierWillPickUpOption> AvailableCarrierWillPickUpOptions.
     */
    public function getAvailableCarrierWillPickUpOptions()
    {
        if ($this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] == null)
        {
            $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = array();
        }
        return $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'];
    }

    /**
     * Set the value of the AvailableCarrierWillPickUpOptions property.
     *
     * @param array availableCarrierWillPickUpOptions
     * @return this instance
     */
    public function setAvailableCarrierWillPickUpOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AvailableCarrierWillPickUpOptions.
     */
    public function unsetAvailableCarrierWillPickUpOptions()
    {
        $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'] = array();
    }

    /**
     * Check to see if AvailableCarrierWillPickUpOptions is set.
     *
     * @return true if AvailableCarrierWillPickUpOptions is set.
     */
    public function isSetAvailableCarrierWillPickUpOptions()
    {
                return !empty($this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue']);
            }

    /**
     * Add values for AvailableCarrierWillPickUpOptions, return this.
     *
     * @param availableCarrierWillPickUpOptions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAvailableCarrierWillPickUpOptions()
    {
        foreach (func_get_args() as $AvailableCarrierWillPickUpOptions)
        {
            $this->_fields['AvailableCarrierWillPickUpOptions']['FieldValue'][] = $AvailableCarrierWillPickUpOptions;
        }
        return $this;
    }

    /**
     * Get the value of the AvailableDeliveryExperienceOptions property.
     *
     * @return List<AvailableDeliveryExperienceOption> AvailableDeliveryExperienceOptions.
     */
    public function getAvailableDeliveryExperienceOptions()
    {
        if ($this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] == null)
        {
            $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = array();
        }
        return $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'];
    }

    /**
     * Set the value of the AvailableDeliveryExperienceOptions property.
     *
     * @param array availableDeliveryExperienceOptions
     * @return this instance
     */
    public function setAvailableDeliveryExperienceOptions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AvailableDeliveryExperienceOptions.
     */
    public function unsetAvailableDeliveryExperienceOptions()
    {
        $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'] = array();
    }

    /**
     * Check to see if AvailableDeliveryExperienceOptions is set.
     *
     * @return true if AvailableDeliveryExperienceOptions is set.
     */
    public function isSetAvailableDeliveryExperienceOptions()
    {
                return !empty($this->_fields['AvailableDeliveryExperienceOptions']['FieldValue']);
            }

    /**
     * Add values for AvailableDeliveryExperienceOptions, return this.
     *
     * @param availableDeliveryExperienceOptions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAvailableDeliveryExperienceOptions()
    {
        foreach (func_get_args() as $AvailableDeliveryExperienceOptions)
        {
            $this->_fields['AvailableDeliveryExperienceOptions']['FieldValue'][] = $AvailableDeliveryExperienceOptions;
        }
        return $this;
    }

}
