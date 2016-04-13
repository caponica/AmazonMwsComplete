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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-02-01
 * Generated: Fri Jan 08 13:26:48 PST 2016
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>MarketplaceId: string</li>
 * <li>Address: FBAOutboundServiceMWS_Model_Address</li>
 * <li>Items: FBAOutboundServiceMWS_Model_GetFulfillmentPreviewItemList</li>
 * <li>ShippingSpeedCategories: FBAOutboundServiceMWS_Model_ShippingSpeedCategoryList</li>
 * <li>IncludeCODFulfillmentPreview: bool</li>
 * <li>IncludeDeliveryWindows: bool</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_GetFulfillmentPreviewRequest extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Address' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_Address'),
    'Items' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_GetFulfillmentPreviewItemList'),
    'ShippingSpeedCategories' => array('FieldValue' => null, 'FieldType' => 'FBAOutboundServiceMWS_Model_ShippingSpeedCategoryList'),
    'IncludeCODFulfillmentPreview' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IncludeDeliveryWindows' => array('FieldValue' => null, 'FieldType' => 'bool'),
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
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
                return !is_null($this->_fields['Marketplace']['FieldValue']);
            }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
                return !is_null($this->_fields['MarketplaceId']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the Address property.
     *
     * @return Address Address.
     */
    public function getAddress()
    {
        return $this->_fields['Address']['FieldValue'];
    }

    /**
     * Set the value of the Address property.
     *
     * @param FBAOutboundServiceMWS_Model_Address address
     * @return this instance
     */
    public function setAddress($value)
    {
        $this->_fields['Address']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Address is set.
     *
     * @return true if Address is set.
     */
    public function isSetAddress()
    {
                return !is_null($this->_fields['Address']['FieldValue']);
            }

    /**
     * Set the value of Address, return this.
     *
     * @param address
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAddress($value)
    {
        $this->setAddress($value);
        return $this;
    }

    /**
     * Get the value of the Items property.
     *
     * @return GetFulfillmentPreviewItemList Items.
     */
    public function getItems()
    {
        return $this->_fields['Items']['FieldValue'];
    }

    /**
     * Set the value of the Items property.
     *
     * @param FBAOutboundServiceMWS_Model_GetFulfillmentPreviewItemList items
     * @return this instance
     */
    public function setItems($value)
    {
        $this->_fields['Items']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Items is set.
     *
     * @return true if Items is set.
     */
    public function isSetItems()
    {
                return !is_null($this->_fields['Items']['FieldValue']);
            }

    /**
     * Set the value of Items, return this.
     *
     * @param items
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItems($value)
    {
        $this->setItems($value);
        return $this;
    }

    /**
     * Get the value of the ShippingSpeedCategories property.
     *
     * @return ShippingSpeedCategoryList ShippingSpeedCategories.
     */
    public function getShippingSpeedCategories()
    {
        return $this->_fields['ShippingSpeedCategories']['FieldValue'];
    }

    /**
     * Set the value of the ShippingSpeedCategories property.
     *
     * @param FBAOutboundServiceMWS_Model_ShippingSpeedCategoryList shippingSpeedCategories
     * @return this instance
     */
    public function setShippingSpeedCategories($value)
    {
        $this->_fields['ShippingSpeedCategories']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingSpeedCategories is set.
     *
     * @return true if ShippingSpeedCategories is set.
     */
    public function isSetShippingSpeedCategories()
    {
                return !is_null($this->_fields['ShippingSpeedCategories']['FieldValue']);
            }

    /**
     * Set the value of ShippingSpeedCategories, return this.
     *
     * @param shippingSpeedCategories
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingSpeedCategories($value)
    {
        $this->setShippingSpeedCategories($value);
        return $this;
    }

    /**
     * Check the value of IncludeCODFulfillmentPreview.
     *
     * @return true if IncludeCODFulfillmentPreview is set to true.
     */
    public function isIncludeCODFulfillmentPreview()
    {
        return !is_null($this->_fields['IncludeCODFulfillmentPreview']['FieldValue']) && $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }

    /**
     * Get the value of the IncludeCODFulfillmentPreview property.
     *
     * @return Boolean IncludeCODFulfillmentPreview.
     */
    public function getIncludeCODFulfillmentPreview()
    {
        return $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'];
    }

    /**
     * Set the value of the IncludeCODFulfillmentPreview property.
     *
     * @param bool includeCODFulfillmentPreview
     * @return this instance
     */
    public function setIncludeCODFulfillmentPreview($value)
    {
        $this->_fields['IncludeCODFulfillmentPreview']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludeCODFulfillmentPreview is set.
     *
     * @return true if IncludeCODFulfillmentPreview is set.
     */
    public function isSetIncludeCODFulfillmentPreview()
    {
                return !is_null($this->_fields['IncludeCODFulfillmentPreview']['FieldValue']);
            }

    /**
     * Set the value of IncludeCODFulfillmentPreview, return this.
     *
     * @param includeCODFulfillmentPreview
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludeCODFulfillmentPreview($value)
    {
        $this->setIncludeCODFulfillmentPreview($value);
        return $this;
    }

    /**
     * Check the value of IncludeDeliveryWindows.
     *
     * @return true if IncludeDeliveryWindows is set to true.
     */
    public function isIncludeDeliveryWindows()
    {
        return !is_null($this->_fields['IncludeDeliveryWindows']['FieldValue']) && $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }

    /**
     * Get the value of the IncludeDeliveryWindows property.
     *
     * @return Boolean IncludeDeliveryWindows.
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->_fields['IncludeDeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of the IncludeDeliveryWindows property.
     *
     * @param bool includeDeliveryWindows
     * @return this instance
     */
    public function setIncludeDeliveryWindows($value)
    {
        $this->_fields['IncludeDeliveryWindows']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IncludeDeliveryWindows is set.
     *
     * @return true if IncludeDeliveryWindows is set.
     */
    public function isSetIncludeDeliveryWindows()
    {
                return !is_null($this->_fields['IncludeDeliveryWindows']['FieldValue']);
            }

    /**
     * Set the value of IncludeDeliveryWindows, return this.
     *
     * @param includeDeliveryWindows
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIncludeDeliveryWindows($value)
    {
        $this->setIncludeDeliveryWindows($value);
        return $this;
    }

}
