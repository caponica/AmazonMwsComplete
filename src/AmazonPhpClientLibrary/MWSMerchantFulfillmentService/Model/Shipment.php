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
 * MWSMerchantFulfillmentService_Model_Shipment
 * 
 * Properties:
 * <ul>
 * 
 * <li>ShipmentId: string</li>
 * <li>AmazonOrderId: string</li>
 * <li>SellerOrderId: string</li>
 * <li>ItemList: array</li>
 * <li>ShipFromAddress: MWSMerchantFulfillmentService_Model_Address</li>
 * <li>ShipToAddress: MWSMerchantFulfillmentService_Model_Address</li>
 * <li>PackageDimensions: MWSMerchantFulfillmentService_Model_PackageDimensions</li>
 * <li>Weight: MWSMerchantFulfillmentService_Model_Weight</li>
 * <li>Insurance: MWSMerchantFulfillmentService_Model_CurrencyAmount</li>
 * <li>ShippingService: MWSMerchantFulfillmentService_Model_ShippingService</li>
 * <li>Label: MWSMerchantFulfillmentService_Model_Label</li>
 * <li>Status: string</li>
 * <li>TrackingId: string</li>
 * <li>CreatedDate: string</li>
 * <li>LastUpdatedDate: string</li>
 *
 * </ul>
 */

 class MWSMerchantFulfillmentService_Model_Shipment extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AmazonOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ItemList' => array('FieldValue' => array(), 'FieldType' => array('MWSMerchantFulfillmentService_Model_Item'), 'ListMemberName' => 'Item'),
    'ShipFromAddress' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Address'),
    'ShipToAddress' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Address'),
    'PackageDimensions' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_PackageDimensions'),
    'Weight' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Weight'),
    'Insurance' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_CurrencyAmount'),
    'ShippingService' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ShippingService'),
    'Label' => array('FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Label'),
    'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
    'TrackingId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CreatedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    'LastUpdatedDate' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string shipmentId
     * @return this instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return true if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
                return !is_null($this->_fields['ShipmentId']['FieldValue']);
            }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
                return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
            }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string sellerOrderId
     * @return this instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return true if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
                return !is_null($this->_fields['SellerOrderId']['FieldValue']);
            }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the ItemList property.
     *
     * @return List<Item> ItemList.
     */
    public function getItemList()
    {
        if ($this->_fields['ItemList']['FieldValue'] == null)
        {
            $this->_fields['ItemList']['FieldValue'] = array();
        }
        return $this->_fields['ItemList']['FieldValue'];
    }

    /**
     * Set the value of the ItemList property.
     *
     * @param array itemList
     * @return this instance
     */
    public function setItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ItemList.
     */
    public function unsetItemList()
    {
        $this->_fields['ItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if ItemList is set.
     *
     * @return true if ItemList is set.
     */
    public function isSetItemList()
    {
                return !empty($this->_fields['ItemList']['FieldValue']);
            }

    /**
     * Add values for ItemList, return this.
     *
     * @param itemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withItemList()
    {
        foreach (func_get_args() as $ItemList)
        {
            $this->_fields['ItemList']['FieldValue'][] = $ItemList;
        }
        return $this;
    }

    /**
     * Get the value of the ShipFromAddress property.
     *
     * @return Address ShipFromAddress.
     */
    public function getShipFromAddress()
    {
        return $this->_fields['ShipFromAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipFromAddress property.
     *
     * @param MWSMerchantFulfillmentService_Model_Address shipFromAddress
     * @return this instance
     */
    public function setShipFromAddress($value)
    {
        $this->_fields['ShipFromAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipFromAddress is set.
     *
     * @return true if ShipFromAddress is set.
     */
    public function isSetShipFromAddress()
    {
                return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
            }

    /**
     * Set the value of ShipFromAddress, return this.
     *
     * @param shipFromAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipFromAddress($value)
    {
        $this->setShipFromAddress($value);
        return $this;
    }

    /**
     * Get the value of the ShipToAddress property.
     *
     * @return Address ShipToAddress.
     */
    public function getShipToAddress()
    {
        return $this->_fields['ShipToAddress']['FieldValue'];
    }

    /**
     * Set the value of the ShipToAddress property.
     *
     * @param MWSMerchantFulfillmentService_Model_Address shipToAddress
     * @return this instance
     */
    public function setShipToAddress($value)
    {
        $this->_fields['ShipToAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipToAddress is set.
     *
     * @return true if ShipToAddress is set.
     */
    public function isSetShipToAddress()
    {
                return !is_null($this->_fields['ShipToAddress']['FieldValue']);
            }

    /**
     * Set the value of ShipToAddress, return this.
     *
     * @param shipToAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipToAddress($value)
    {
        $this->setShipToAddress($value);
        return $this;
    }

    /**
     * Get the value of the PackageDimensions property.
     *
     * @return PackageDimensions PackageDimensions.
     */
    public function getPackageDimensions()
    {
        return $this->_fields['PackageDimensions']['FieldValue'];
    }

    /**
     * Set the value of the PackageDimensions property.
     *
     * @param MWSMerchantFulfillmentService_Model_PackageDimensions packageDimensions
     * @return this instance
     */
    public function setPackageDimensions($value)
    {
        $this->_fields['PackageDimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageDimensions is set.
     *
     * @return true if PackageDimensions is set.
     */
    public function isSetPackageDimensions()
    {
                return !is_null($this->_fields['PackageDimensions']['FieldValue']);
            }

    /**
     * Set the value of PackageDimensions, return this.
     *
     * @param packageDimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageDimensions($value)
    {
        $this->setPackageDimensions($value);
        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param MWSMerchantFulfillmentService_Model_Weight weight
     * @return this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
                return !is_null($this->_fields['Weight']['FieldValue']);
            }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }

    /**
     * Get the value of the Insurance property.
     *
     * @return CurrencyAmount Insurance.
     */
    public function getInsurance()
    {
        return $this->_fields['Insurance']['FieldValue'];
    }

    /**
     * Set the value of the Insurance property.
     *
     * @param MWSMerchantFulfillmentService_Model_CurrencyAmount insurance
     * @return this instance
     */
    public function setInsurance($value)
    {
        $this->_fields['Insurance']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Insurance is set.
     *
     * @return true if Insurance is set.
     */
    public function isSetInsurance()
    {
                return !is_null($this->_fields['Insurance']['FieldValue']);
            }

    /**
     * Set the value of Insurance, return this.
     *
     * @param insurance
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInsurance($value)
    {
        $this->setInsurance($value);
        return $this;
    }

    /**
     * Get the value of the ShippingService property.
     *
     * @return ShippingService ShippingService.
     */
    public function getShippingService()
    {
        return $this->_fields['ShippingService']['FieldValue'];
    }

    /**
     * Set the value of the ShippingService property.
     *
     * @param MWSMerchantFulfillmentService_Model_ShippingService shippingService
     * @return this instance
     */
    public function setShippingService($value)
    {
        $this->_fields['ShippingService']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingService is set.
     *
     * @return true if ShippingService is set.
     */
    public function isSetShippingService()
    {
                return !is_null($this->_fields['ShippingService']['FieldValue']);
            }

    /**
     * Set the value of ShippingService, return this.
     *
     * @param shippingService
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingService($value)
    {
        $this->setShippingService($value);
        return $this;
    }

    /**
     * Get the value of the Label property.
     *
     * @return Label Label.
     */
    public function getLabel()
    {
        return $this->_fields['Label']['FieldValue'];
    }

    /**
     * Set the value of the Label property.
     *
     * @param MWSMerchantFulfillmentService_Model_Label label
     * @return this instance
     */
    public function setLabel($value)
    {
        $this->_fields['Label']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Label is set.
     *
     * @return true if Label is set.
     */
    public function isSetLabel()
    {
                return !is_null($this->_fields['Label']['FieldValue']);
            }

    /**
     * Set the value of Label, return this.
     *
     * @param label
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLabel($value)
    {
        $this->setLabel($value);
        return $this;
    }

    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
                return !is_null($this->_fields['Status']['FieldValue']);
            }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the TrackingId property.
     *
     * @return String TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return this instance
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set.
     */
    public function isSetTrackingId()
    {
                return !is_null($this->_fields['TrackingId']['FieldValue']);
            }

    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);
        return $this;
    }

    /**
     * Get the value of the CreatedDate property.
     *
     * @return XMLGregorianCalendar CreatedDate.
     */
    public function getCreatedDate()
    {
        return $this->_fields['CreatedDate']['FieldValue'];
    }

    /**
     * Set the value of the CreatedDate property.
     *
     * @param string createdDate
     * @return this instance
     */
    public function setCreatedDate($value)
    {
        $this->_fields['CreatedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedDate is set.
     *
     * @return true if CreatedDate is set.
     */
    public function isSetCreatedDate()
    {
                return !is_null($this->_fields['CreatedDate']['FieldValue']);
            }

    /**
     * Set the value of CreatedDate, return this.
     *
     * @param createdDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreatedDate($value)
    {
        $this->setCreatedDate($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedDate property.
     *
     * @return XMLGregorianCalendar LastUpdatedDate.
     */
    public function getLastUpdatedDate()
    {
        return $this->_fields['LastUpdatedDate']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedDate property.
     *
     * @param string lastUpdatedDate
     * @return this instance
     */
    public function setLastUpdatedDate($value)
    {
        $this->_fields['LastUpdatedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedDate is set.
     *
     * @return true if LastUpdatedDate is set.
     */
    public function isSetLastUpdatedDate()
    {
                return !is_null($this->_fields['LastUpdatedDate']['FieldValue']);
            }

    /**
     * Set the value of LastUpdatedDate, return this.
     *
     * @param lastUpdatedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdatedDate($value)
    {
        $this->setLastUpdatedDate($value);
        return $this;
    }

}
