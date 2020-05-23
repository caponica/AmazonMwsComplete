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
 * MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>ShipmentRequestDetails: MWSMerchantFulfillmentService_Model_ShipmentRequestDetails</li>
 * <li>ShippingOfferingFilter: MWSMerchantFulfillmentService_Model_ShippingOfferingFilter</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_GetEligibleShippingServicesRequest extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipmentRequestDetails' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ShipmentRequestDetails'),
    'ShippingOfferingFilter' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ShippingOfferingFilter'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
                return !is_null($this->_fields['SellerId']['FieldValue']);
            }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
                return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
            }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentRequestDetails property.
     *
     * @return ShipmentRequestDetails ShipmentRequestDetails.
     */
    public function getShipmentRequestDetails()
    {
        return $this->_fields['ShipmentRequestDetails']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentRequestDetails property.
     *
     * @param MWSMerchantFulfillmentService_Model_ShipmentRequestDetails shipmentRequestDetails
     * @return this instance
     */
    public function setShipmentRequestDetails($value)
    {
        $this->_fields['ShipmentRequestDetails']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentRequestDetails is set.
     *
     * @return true if ShipmentRequestDetails is set.
     */
    public function isSetShipmentRequestDetails()
    {
                return !is_null($this->_fields['ShipmentRequestDetails']['FieldValue']);
            }

    /**
     * Set the value of ShipmentRequestDetails, return this.
     *
     * @param shipmentRequestDetails
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentRequestDetails($value)
    {
        $this->setShipmentRequestDetails($value);
        return $this;
    }

    /**
     * Get the value of the ShippingOfferingFilter property.
     *
     * @return ShippingOfferingFilter ShippingOfferingFilter.
     */
    public function getShippingOfferingFilter()
    {
        return $this->_fields['ShippingOfferingFilter']['FieldValue'];
    }

    /**
     * Set the value of the ShippingOfferingFilter property.
     *
     * @param MWSMerchantFulfillmentService_Model_ShippingOfferingFilter shippingOfferingFilter
     * @return this instance
     */
    public function setShippingOfferingFilter($value)
    {
        $this->_fields['ShippingOfferingFilter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingOfferingFilter is set.
     *
     * @return true if ShippingOfferingFilter is set.
     */
    public function isSetShippingOfferingFilter()
    {
                return !is_null($this->_fields['ShippingOfferingFilter']['FieldValue']);
            }

    /**
     * Set the value of ShippingOfferingFilter, return this.
     *
     * @param shippingOfferingFilter
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingOfferingFilter($value)
    {
        $this->setShippingOfferingFilter($value);
        return $this;
    }

}
