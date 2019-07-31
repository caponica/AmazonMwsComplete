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
 * MWSMerchantFulfillmentService_Model_ShippingService
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShippingServiceName: string</li>
 * <li>CarrierName: string</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShippingServiceOfferId: string</li>
 * <li>ShipDate: string</li>
 * <li>EarliestEstimatedDeliveryDate: string</li>
 * <li>LatestEstimatedDeliveryDate: string</li>
 * <li>Rate: MWSMerchantFulfillmentService_Model_CurrencyAmount</li>
 * <li>ShippingServiceOptions: MWSMerchantFulfillmentService_Model_ShippingServiceOptions</li>
 * <li>AvailableLabelFormats: array</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_ShippingService extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ShippingServiceName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingServiceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingServiceOfferId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShipDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EarliestEstimatedDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LatestEstimatedDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Rate' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CurrencyAmount'),
    'ShippingServiceOptions' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ShippingServiceOptions'),
    'AvailableLabelFormats' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'LabelFormat'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ShippingServiceName property.
     *
     * @return String ShippingServiceName.
     */
    public function getShippingServiceName()
    {
        return $this->_fields['ShippingServiceName']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceName property.
     *
     * @param string shippingServiceName
     * @return this instance
     */
    public function setShippingServiceName($value)
    {
        $this->_fields['ShippingServiceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceName is set.
     *
     * @return true if ShippingServiceName is set.
     */
    public function isSetShippingServiceName()
    {
                return !is_null($this->_fields['ShippingServiceName']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceName, return this.
     *
     * @param shippingServiceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceName($value)
    {
        $this->setShippingServiceName($value);
        return $this;
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
                return !is_null($this->_fields['CarrierName']['FieldValue']);
            }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
                return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return String ShippingServiceOfferId.
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @return this instance
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set.
     */
    public function isSetShippingServiceOfferId()
    {
                return !is_null($this->_fields['ShippingServiceOfferId']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param shippingServiceOfferId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOfferId($value)
    {
        $this->setShippingServiceOfferId($value);
        return $this;
    }

    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
                return !is_null($this->_fields['ShipDate']['FieldValue']);
            }

    /**
     * Set the value of ShipDate, return this.
     *
     * @param shipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipDate($value)
    {
        $this->setShipDate($value);
        return $this;
    }

    /**
     * Get the value of the EarliestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar EarliestEstimatedDeliveryDate.
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestEstimatedDeliveryDate property.
     *
     * @param string earliestEstimatedDeliveryDate
     * @return this instance
     */
    public function setEarliestEstimatedDeliveryDate($value)
    {
        $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestEstimatedDeliveryDate is set.
     *
     * @return true if EarliestEstimatedDeliveryDate is set.
     */
    public function isSetEarliestEstimatedDeliveryDate()
    {
                return !is_null($this->_fields['EarliestEstimatedDeliveryDate']['FieldValue']);
            }

    /**
     * Set the value of EarliestEstimatedDeliveryDate, return this.
     *
     * @param earliestEstimatedDeliveryDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEarliestEstimatedDeliveryDate($value)
    {
        $this->setEarliestEstimatedDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar LatestEstimatedDeliveryDate.
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestEstimatedDeliveryDate property.
     *
     * @param string latestEstimatedDeliveryDate
     * @return this instance
     */
    public function setLatestEstimatedDeliveryDate($value)
    {
        $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestEstimatedDeliveryDate is set.
     *
     * @return true if LatestEstimatedDeliveryDate is set.
     */
    public function isSetLatestEstimatedDeliveryDate()
    {
                return !is_null($this->_fields['LatestEstimatedDeliveryDate']['FieldValue']);
            }

    /**
     * Set the value of LatestEstimatedDeliveryDate, return this.
     *
     * @param latestEstimatedDeliveryDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLatestEstimatedDeliveryDate($value)
    {
        $this->setLatestEstimatedDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the Rate property.
     *
     * @return CurrencyAmount Rate.
     */
    public function getRate()
    {
        return $this->_fields['Rate']['FieldValue'];
    }

    /**
     * Set the value of the Rate property.
     *
     * @param MWSMerchantFulfillmentService_Model_CurrencyAmount rate
     * @return this instance
     */
    public function setRate($value)
    {
        $this->_fields['Rate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Rate is set.
     *
     * @return true if Rate is set.
     */
    public function isSetRate()
    {
                return !is_null($this->_fields['Rate']['FieldValue']);
            }

    /**
     * Set the value of Rate, return this.
     *
     * @param rate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRate($value)
    {
        $this->setRate($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOptions property.
     *
     * @return ShippingServiceOptions ShippingServiceOptions.
     */
    public function getShippingServiceOptions()
    {
        return $this->_fields['ShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOptions property.
     *
     * @param MWSMerchantFulfillmentService_Model_ShippingServiceOptions shippingServiceOptions
     * @return this instance
     */
    public function setShippingServiceOptions($value)
    {
        $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOptions is set.
     *
     * @return true if ShippingServiceOptions is set.
     */
    public function isSetShippingServiceOptions()
    {
                return !is_null($this->_fields['ShippingServiceOptions']['FieldValue']);
            }

    /**
     * Set the value of ShippingServiceOptions, return this.
     *
     * @param shippingServiceOptions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOptions($value)
    {
        $this->setShippingServiceOptions($value);
        return $this;
    }

    /**
     * Get the value of the AvailableLabelFormats property.
     *
     * @return List<String> AvailableLabelFormats.
     */
    public function getAvailableLabelFormats()
    {
        if ($this->_fields['AvailableLabelFormats']['FieldValue'] == null)
        {
            $this->_fields['AvailableLabelFormats']['FieldValue'] = array();
        }
        return $this->_fields['AvailableLabelFormats']['FieldValue'];
    }

    /**
     * Set the value of the AvailableLabelFormats property.
     *
     * @param array availableLabelFormats
     * @return this instance
     */
    public function setAvailableLabelFormats($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AvailableLabelFormats']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AvailableLabelFormats.
     */
    public function unsetAvailableLabelFormats()
    {
        $this->_fields['AvailableLabelFormats']['FieldValue'] = array();
    }

    /**
     * Check to see if AvailableLabelFormats is set.
     *
     * @return true if AvailableLabelFormats is set.
     */
    public function isSetAvailableLabelFormats()
    {
                return !empty($this->_fields['AvailableLabelFormats']['FieldValue']);
            }

    /**
     * Add values for AvailableLabelFormats, return this.
     *
     * @param availableLabelFormats
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAvailableLabelFormats()
    {
        foreach (func_get_args() as $AvailableLabelFormats)
        {
            $this->_fields['AvailableLabelFormats']['FieldValue'][] = $AvailableLabelFormats;
        }
        return $this;
    }

}
