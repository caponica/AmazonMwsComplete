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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-01-01
 * Generated: Wed Sep 12 07:08:09 PDT 2018
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_FulfillmentShipment
 * 
 * Properties:
 * <ul>
 * 
 * <li>AmazonShipmentId: string</li>
 * <li>FulfillmentCenterId: string</li>
 * <li>FulfillmentShipmentStatus: string</li>
 * <li>ShippingDateTime: string</li>
 * <li>EstimatedArrivalDateTime: string</li>
 * <li>FulfillmentShipmentItem: FBAOutboundServiceMWS_Model_FulfillmentShipmentItemList</li>
 * <li>FulfillmentShipmentPackage: FBAOutboundServiceMWS_Model_FulfillmentShipmentPackageList</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_FulfillmentShipment extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'AmazonShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentCenterId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentShipmentStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ShippingDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    'EstimatedArrivalDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentShipmentItem' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentShipmentItemList'),
    'FulfillmentShipmentPackage' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_FulfillmentShipmentPackageList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the AmazonShipmentId property.
     *
     * @return String AmazonShipmentId.
     */
    public function getAmazonShipmentId()
    {
        return $this->_fields['AmazonShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonShipmentId property.
     *
     * @param string amazonShipmentId
     * @return this instance
     */
    public function setAmazonShipmentId($value)
    {
        $this->_fields['AmazonShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonShipmentId is set.
     *
     * @return true if AmazonShipmentId is set.
     */
    public function isSetAmazonShipmentId()
    {
                return !is_null($this->_fields['AmazonShipmentId']['FieldValue']);
            }

    /**
     * Set the value of AmazonShipmentId, return this.
     *
     * @param amazonShipmentId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonShipmentId($value)
    {
        $this->setAmazonShipmentId($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentCenterId property.
     *
     * @return String FulfillmentCenterId.
     */
    public function getFulfillmentCenterId()
    {
        return $this->_fields['FulfillmentCenterId']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentCenterId property.
     *
     * @param string fulfillmentCenterId
     * @return this instance
     */
    public function setFulfillmentCenterId($value)
    {
        $this->_fields['FulfillmentCenterId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentCenterId is set.
     *
     * @return true if FulfillmentCenterId is set.
     */
    public function isSetFulfillmentCenterId()
    {
                return !is_null($this->_fields['FulfillmentCenterId']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentCenterId, return this.
     *
     * @param fulfillmentCenterId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentCenterId($value)
    {
        $this->setFulfillmentCenterId($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentStatus property.
     *
     * @return String FulfillmentShipmentStatus.
     */
    public function getFulfillmentShipmentStatus()
    {
        return $this->_fields['FulfillmentShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentStatus property.
     *
     * @param string fulfillmentShipmentStatus
     * @return this instance
     */
    public function setFulfillmentShipmentStatus($value)
    {
        $this->_fields['FulfillmentShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentStatus is set.
     *
     * @return true if FulfillmentShipmentStatus is set.
     */
    public function isSetFulfillmentShipmentStatus()
    {
                return !is_null($this->_fields['FulfillmentShipmentStatus']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentShipmentStatus, return this.
     *
     * @param fulfillmentShipmentStatus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentShipmentStatus($value)
    {
        $this->setFulfillmentShipmentStatus($value);
        return $this;
    }

    /**
     * Get the value of the ShippingDateTime property.
     *
     * @return XMLGregorianCalendar ShippingDateTime.
     */
    public function getShippingDateTime()
    {
        return $this->_fields['ShippingDateTime']['FieldValue'];
    }

    /**
     * Set the value of the ShippingDateTime property.
     *
     * @param string shippingDateTime
     * @return this instance
     */
    public function setShippingDateTime($value)
    {
        $this->_fields['ShippingDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingDateTime is set.
     *
     * @return true if ShippingDateTime is set.
     */
    public function isSetShippingDateTime()
    {
                return !is_null($this->_fields['ShippingDateTime']['FieldValue']);
            }

    /**
     * Set the value of ShippingDateTime, return this.
     *
     * @param shippingDateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingDateTime($value)
    {
        $this->setShippingDateTime($value);
        return $this;
    }

    /**
     * Get the value of the EstimatedArrivalDateTime property.
     *
     * @return XMLGregorianCalendar EstimatedArrivalDateTime.
     */
    public function getEstimatedArrivalDateTime()
    {
        return $this->_fields['EstimatedArrivalDateTime']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedArrivalDateTime property.
     *
     * @param string estimatedArrivalDateTime
     * @return this instance
     */
    public function setEstimatedArrivalDateTime($value)
    {
        $this->_fields['EstimatedArrivalDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EstimatedArrivalDateTime is set.
     *
     * @return true if EstimatedArrivalDateTime is set.
     */
    public function isSetEstimatedArrivalDateTime()
    {
                return !is_null($this->_fields['EstimatedArrivalDateTime']['FieldValue']);
            }

    /**
     * Set the value of EstimatedArrivalDateTime, return this.
     *
     * @param estimatedArrivalDateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEstimatedArrivalDateTime($value)
    {
        $this->setEstimatedArrivalDateTime($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentItem property.
     *
     * @return FulfillmentShipmentItemList FulfillmentShipmentItem.
     */
    public function getFulfillmentShipmentItem()
    {
        return $this->_fields['FulfillmentShipmentItem']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentItem property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentShipmentItemList fulfillmentShipmentItem
     * @return this instance
     */
    public function setFulfillmentShipmentItem($value)
    {
        $this->_fields['FulfillmentShipmentItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentItem is set.
     *
     * @return true if FulfillmentShipmentItem is set.
     */
    public function isSetFulfillmentShipmentItem()
    {
                return !is_null($this->_fields['FulfillmentShipmentItem']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentShipmentItem, return this.
     *
     * @param fulfillmentShipmentItem
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentShipmentItem($value)
    {
        $this->setFulfillmentShipmentItem($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipmentPackage property.
     *
     * @return FulfillmentShipmentPackageList FulfillmentShipmentPackage.
     */
    public function getFulfillmentShipmentPackage()
    {
        return $this->_fields['FulfillmentShipmentPackage']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipmentPackage property.
     *
     * @param FBAOutboundServiceMWS_Model_FulfillmentShipmentPackageList fulfillmentShipmentPackage
     * @return this instance
     */
    public function setFulfillmentShipmentPackage($value)
    {
        $this->_fields['FulfillmentShipmentPackage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipmentPackage is set.
     *
     * @return true if FulfillmentShipmentPackage is set.
     */
    public function isSetFulfillmentShipmentPackage()
    {
                return !is_null($this->_fields['FulfillmentShipmentPackage']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentShipmentPackage, return this.
     *
     * @param fulfillmentShipmentPackage
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentShipmentPackage($value)
    {
        $this->setFulfillmentShipmentPackage($value);
        return $this;
    }

}
