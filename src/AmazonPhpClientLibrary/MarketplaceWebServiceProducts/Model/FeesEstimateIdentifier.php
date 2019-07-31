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
 * MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceId: string</li>
 * <li>SellerId: string</li>
 * <li>IdType: string</li>
 * <li>IdValue: string</li>
 * <li>IsAmazonFulfilled: bool</li>
 * <li>PriceToEstimateFees: MarketplaceWebServiceProducts_Model_PriceToEstimateFees</li>
 * <li>SellerInputIdentifier: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_FeesEstimateIdentifier extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'IdType' => array('FieldValue' => null, 'FieldType' => 'string'),
    'IdValue' => array('FieldValue' => null, 'FieldType' => 'string'),
    'IsAmazonFulfilled' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'PriceToEstimateFees' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceToEstimateFees'),
    'SellerInputIdentifier' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
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
     * Get the value of the IdType property.
     *
     * @return String IdType.
     */
    public function getIdType()
    {
        return $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Set the value of the IdType property.
     *
     * @param string idType
     * @return this instance
     */
    public function setIdType($value)
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IdType is set.
     *
     * @return true if IdType is set.
     */
    public function isSetIdType()
    {
                return !is_null($this->_fields['IdType']['FieldValue']);
            }

    /**
     * Set the value of IdType, return this.
     *
     * @param idType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdType($value)
    {
        $this->setIdType($value);
        return $this;
    }

    /**
     * Get the value of the IdValue property.
     *
     * @return String IdValue.
     */
    public function getIdValue()
    {
        return $this->_fields['IdValue']['FieldValue'];
    }

    /**
     * Set the value of the IdValue property.
     *
     * @param string idValue
     * @return this instance
     */
    public function setIdValue($value)
    {
        $this->_fields['IdValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IdValue is set.
     *
     * @return true if IdValue is set.
     */
    public function isSetIdValue()
    {
                return !is_null($this->_fields['IdValue']['FieldValue']);
            }

    /**
     * Set the value of IdValue, return this.
     *
     * @param idValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIdValue($value)
    {
        $this->setIdValue($value);
        return $this;
    }

    /**
     * Check the value of IsAmazonFulfilled.
     *
     * @return true if IsAmazonFulfilled is set to true.
     */
    public function isIsAmazonFulfilled()
    {
        return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']) && $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }

    /**
     * Get the value of the IsAmazonFulfilled property.
     *
     * @return Boolean IsAmazonFulfilled.
     */
    public function getIsAmazonFulfilled()
    {
        return $this->_fields['IsAmazonFulfilled']['FieldValue'];
    }

    /**
     * Set the value of the IsAmazonFulfilled property.
     *
     * @param bool isAmazonFulfilled
     * @return this instance
     */
    public function setIsAmazonFulfilled($value)
    {
        $this->_fields['IsAmazonFulfilled']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsAmazonFulfilled is set.
     *
     * @return true if IsAmazonFulfilled is set.
     */
    public function isSetIsAmazonFulfilled()
    {
                return !is_null($this->_fields['IsAmazonFulfilled']['FieldValue']);
            }

    /**
     * Set the value of IsAmazonFulfilled, return this.
     *
     * @param isAmazonFulfilled
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsAmazonFulfilled($value)
    {
        $this->setIsAmazonFulfilled($value);
        return $this;
    }

    /**
     * Get the value of the PriceToEstimateFees property.
     *
     * @return PriceToEstimateFees PriceToEstimateFees.
     */
    public function getPriceToEstimateFees()
    {
        return $this->_fields['PriceToEstimateFees']['FieldValue'];
    }

    /**
     * Set the value of the PriceToEstimateFees property.
     *
     * @param MarketplaceWebServiceProducts_Model_PriceToEstimateFees priceToEstimateFees
     * @return this instance
     */
    public function setPriceToEstimateFees($value)
    {
        $this->_fields['PriceToEstimateFees']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PriceToEstimateFees is set.
     *
     * @return true if PriceToEstimateFees is set.
     */
    public function isSetPriceToEstimateFees()
    {
                return !is_null($this->_fields['PriceToEstimateFees']['FieldValue']);
            }

    /**
     * Set the value of PriceToEstimateFees, return this.
     *
     * @param priceToEstimateFees
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPriceToEstimateFees($value)
    {
        $this->setPriceToEstimateFees($value);
        return $this;
    }

    /**
     * Get the value of the SellerInputIdentifier property.
     *
     * @return String SellerInputIdentifier.
     */
    public function getSellerInputIdentifier()
    {
        return $this->_fields['SellerInputIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the SellerInputIdentifier property.
     *
     * @param string sellerInputIdentifier
     * @return this instance
     */
    public function setSellerInputIdentifier($value)
    {
        $this->_fields['SellerInputIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerInputIdentifier is set.
     *
     * @return true if SellerInputIdentifier is set.
     */
    public function isSetSellerInputIdentifier()
    {
                return !is_null($this->_fields['SellerInputIdentifier']['FieldValue']);
            }

    /**
     * Set the value of SellerInputIdentifier, return this.
     *
     * @param sellerInputIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerInputIdentifier($value)
    {
        $this->setSellerInputIdentifier($value);
        return $this;
    }

}
