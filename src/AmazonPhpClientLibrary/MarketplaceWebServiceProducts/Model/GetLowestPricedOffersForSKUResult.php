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
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Thu Oct 11 10:46:02 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceID: string</li>
 * <li>SKU: string</li>
 * <li>ItemCondition: string</li>
 * <li>status: string</li>
 * <li>Identifier: MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier</li>
 * <li>Summary: MarketplaceWebServiceProducts_Model_Summary</li>
 * <li>Offers: MarketplaceWebServiceProducts_Model_SKUOfferDetailList</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MarketplaceID' => array('FieldValue' => null, 'FieldType' => '@string'),
    'SKU' => array('FieldValue' => null, 'FieldType' => '@string'),
    'ItemCondition' => array('FieldValue' => null, 'FieldType' => '@string'),
    'status' => array('FieldValue' => null, 'FieldType' => '@string'),
    'Identifier' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier'),
    'Summary' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Summary'),
    'Offers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_SKUOfferDetailList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceID property.
     *
     * @return String MarketplaceID.
     */
    public function getMarketplaceID()
    {
        return $this->_fields['MarketplaceID']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceID property.
     *
     * @param string marketplaceID
     * @return this instance
     */
    public function setMarketplaceID($value)
    {
        $this->_fields['MarketplaceID']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceID is set.
     *
     * @return true if MarketplaceID is set.
     */
    public function isSetMarketplaceID()
    {
                return !is_null($this->_fields['MarketplaceID']['FieldValue']);
            }

    /**
     * Set the value of MarketplaceID, return this.
     *
     * @param marketplaceID
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceID($value)
    {
        $this->setMarketplaceID($value);
        return $this;
    }

    /**
     * Get the value of the SKU property.
     *
     * @return String SKU.
     */
    public function getSKU()
    {
        return $this->_fields['SKU']['FieldValue'];
    }

    /**
     * Set the value of the SKU property.
     *
     * @param string sku
     * @return this instance
     */
    public function setSKU($value)
    {
        $this->_fields['SKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKU is set.
     *
     * @return true if SKU is set.
     */
    public function isSetSKU()
    {
                return !is_null($this->_fields['SKU']['FieldValue']);
            }

    /**
     * Set the value of SKU, return this.
     *
     * @param sku
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKU($value)
    {
        $this->setSKU($value);
        return $this;
    }

    /**
     * Get the value of the ItemCondition property.
     *
     * @return String ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }

    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return this instance
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set.
     */
    public function isSetItemCondition()
    {
                return !is_null($this->_fields['ItemCondition']['FieldValue']);
            }

    /**
     * Set the value of ItemCondition, return this.
     *
     * @param itemCondition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);
        return $this;
    }

    /**
     * Get the value of the status property.
     *
     * @return String status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }

    /**
     * Set the value of the status property.
     *
     * @param string status
     * @return this instance
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if status is set.
     *
     * @return true if status is set.
     */
    public function isSetstatus()
    {
                return !is_null($this->_fields['status']['FieldValue']);
            }

    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withstatus($value)
    {
        $this->setstatus($value);
        return $this;
    }

    /**
     * Get the value of the Identifier property.
     *
     * @return GetLowestPricedOffersSkuIdentifier Identifier.
     */
    public function getIdentifier()
    {
        return $this->_fields['Identifier']['FieldValue'];
    }

    /**
     * Set the value of the Identifier property.
     *
     * @param MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier identifier
     * @return this instance
     */
    public function setIdentifier($value)
    {
        $this->_fields['Identifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Identifier is set.
     *
     * @return true if Identifier is set.
     */
    public function isSetIdentifier()
    {
                return !is_null($this->_fields['Identifier']['FieldValue']);
            }

    /**
     * Set the value of Identifier, return this.
     *
     * @param identifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdentifier($value)
    {
        $this->setIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the Summary property.
     *
     * @return Summary Summary.
     */
    public function getSummary()
    {
        return $this->_fields['Summary']['FieldValue'];
    }

    /**
     * Set the value of the Summary property.
     *
     * @param MarketplaceWebServiceProducts_Model_Summary summary
     * @return this instance
     */
    public function setSummary($value)
    {
        $this->_fields['Summary']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Summary is set.
     *
     * @return true if Summary is set.
     */
    public function isSetSummary()
    {
                return !is_null($this->_fields['Summary']['FieldValue']);
            }

    /**
     * Set the value of Summary, return this.
     *
     * @param summary
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSummary($value)
    {
        $this->setSummary($value);
        return $this;
    }

    /**
     * Get the value of the Offers property.
     *
     * @return SKUOfferDetailList Offers.
     */
    public function getOffers()
    {
        return $this->_fields['Offers']['FieldValue'];
    }

    /**
     * Set the value of the Offers property.
     *
     * @param MarketplaceWebServiceProducts_Model_SKUOfferDetailList offers
     * @return this instance
     */
    public function setOffers($value)
    {
        $this->_fields['Offers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Offers is set.
     *
     * @return true if Offers is set.
     */
    public function isSetOffers()
    {
                return !is_null($this->_fields['Offers']['FieldValue']);
            }

    /**
     * Set the value of Offers, return this.
     *
     * @param offers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOffers($value)
    {
        $this->setOffers($value);
        return $this;
    }

}
