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
 * MWSMerchantFulfillmentService_Model_AvailableCarrierWillPickUpOption
 * 
 * Properties:
 * <ul>
 * 
 * <li>CarrierWillPickUpOption: string</li>
 * <li>Charge: MWSMerchantFulfillmentService_Model_CurrencyAmount</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_AvailableCarrierWillPickUpOption extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CarrierWillPickUpOption' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Charge' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CurrencyAmount'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CarrierWillPickUpOption property.
     *
     * @return String CarrierWillPickUpOption.
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->_fields['CarrierWillPickUpOption']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUpOption property.
     *
     * @param string carrierWillPickUpOption
     * @return this instance
     */
    public function setCarrierWillPickUpOption($value)
    {
        $this->_fields['CarrierWillPickUpOption']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierWillPickUpOption is set.
     *
     * @return true if CarrierWillPickUpOption is set.
     */
    public function isSetCarrierWillPickUpOption()
    {
                return !is_null($this->_fields['CarrierWillPickUpOption']['FieldValue']);
            }

    /**
     * Set the value of CarrierWillPickUpOption, return this.
     *
     * @param carrierWillPickUpOption
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierWillPickUpOption($value)
    {
        $this->setCarrierWillPickUpOption($value);
        return $this;
    }

    /**
     * Get the value of the Charge property.
     *
     * @return CurrencyAmount Charge.
     */
    public function getCharge()
    {
        return $this->_fields['Charge']['FieldValue'];
    }

    /**
     * Set the value of the Charge property.
     *
     * @param MWSMerchantFulfillmentService_Model_CurrencyAmount charge
     * @return this instance
     */
    public function setCharge($value)
    {
        $this->_fields['Charge']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Charge is set.
     *
     * @return true if Charge is set.
     */
    public function isSetCharge()
    {
                return !is_null($this->_fields['Charge']['FieldValue']);
            }

    /**
     * Set the value of Charge, return this.
     *
     * @param charge
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCharge($value)
    {
        $this->setCharge($value);
        return $this;
    }

}
