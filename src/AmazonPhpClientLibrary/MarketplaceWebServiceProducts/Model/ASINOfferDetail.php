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
 * MarketplaceWebServiceProducts_Model_ASINOfferDetail
 * 
 * Properties:
 * <ul>
 * 
 * <li>SubCondition: string</li>
 * <li>SellerFeedbackRating: MarketplaceWebServiceProducts_Model_SellerFeedbackType</li>
 * <li>ShippingTime: MarketplaceWebServiceProducts_Model_DetailedShippingTimeType</li>
 * <li>ListingPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>Points: MarketplaceWebServiceProducts_Model_Points</li>
 * <li>Shipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>ShipsFrom: MarketplaceWebServiceProducts_Model_ShipsFromType</li>
 * <li>IsFulfilledByAmazon: bool</li>
 * <li>IsBuyBoxWinner: bool</li>
 * <li>IsFeaturedMerchant: bool</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_ASINOfferDetail extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'SubCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_SellerFeedbackType'),
    'ShippingTime' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_DetailedShippingTimeType'),
    'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'Points' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Points'),
    'Shipping' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'ShipsFrom' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ShipsFromType'),
    'IsFulfilledByAmazon' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IsBuyBoxWinner' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'IsFeaturedMerchant' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the SubCondition property.
     *
     * @return String SubCondition.
     */
    public function getSubCondition()
    {
        return $this->_fields['SubCondition']['FieldValue'];
    }

    /**
     * Set the value of the SubCondition property.
     *
     * @param string subCondition
     * @return this instance
     */
    public function setSubCondition($value)
    {
        $this->_fields['SubCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubCondition is set.
     *
     * @return true if SubCondition is set.
     */
    public function isSetSubCondition()
    {
                return !is_null($this->_fields['SubCondition']['FieldValue']);
            }

    /**
     * Set the value of SubCondition, return this.
     *
     * @param subCondition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubCondition($value)
    {
        $this->setSubCondition($value);
        return $this;
    }

    /**
     * Get the value of the SellerFeedbackRating property.
     *
     * @return SellerFeedbackType SellerFeedbackRating.
     */
    public function getSellerFeedbackRating()
    {
        return $this->_fields['SellerFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerFeedbackRating property.
     *
     * @param MarketplaceWebServiceProducts_Model_SellerFeedbackType sellerFeedbackRating
     * @return this instance
     */
    public function setSellerFeedbackRating($value)
    {
        $this->_fields['SellerFeedbackRating']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFeedbackRating is set.
     *
     * @return true if SellerFeedbackRating is set.
     */
    public function isSetSellerFeedbackRating()
    {
                return !is_null($this->_fields['SellerFeedbackRating']['FieldValue']);
            }

    /**
     * Set the value of SellerFeedbackRating, return this.
     *
     * @param sellerFeedbackRating
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerFeedbackRating($value)
    {
        $this->setSellerFeedbackRating($value);
        return $this;
    }

    /**
     * Get the value of the ShippingTime property.
     *
     * @return DetailedShippingTimeType ShippingTime.
     */
    public function getShippingTime()
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }

    /**
     * Set the value of the ShippingTime property.
     *
     * @param MarketplaceWebServiceProducts_Model_DetailedShippingTimeType shippingTime
     * @return this instance
     */
    public function setShippingTime($value)
    {
        $this->_fields['ShippingTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingTime is set.
     *
     * @return true if ShippingTime is set.
     */
    public function isSetShippingTime()
    {
                return !is_null($this->_fields['ShippingTime']['FieldValue']);
            }

    /**
     * Set the value of ShippingTime, return this.
     *
     * @param shippingTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingTime($value)
    {
        $this->setShippingTime($value);
        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType listingPrice
     * @return this instance
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
                return !is_null($this->_fields['ListingPrice']['FieldValue']);
            }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }

    /**
     * Get the value of the Points property.
     *
     * @return Points Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }

    /**
     * Set the value of the Points property.
     *
     * @param MarketplaceWebServiceProducts_Model_Points points
     * @return this instance
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
                return !is_null($this->_fields['Points']['FieldValue']);
            }

    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPoints($value)
    {
        $this->setPoints($value);
        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType shipping
     * @return this instance
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
                return !is_null($this->_fields['Shipping']['FieldValue']);
            }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }

    /**
     * Get the value of the ShipsFrom property.
     *
     * @return ShipsFromType ShipsFrom.
     */
    public function getShipsFrom()
    {
        return $this->_fields['ShipsFrom']['FieldValue'];
    }

    /**
     * Set the value of the ShipsFrom property.
     *
     * @param MarketplaceWebServiceProducts_Model_ShipsFromType shipsFrom
     * @return this instance
     */
    public function setShipsFrom($value)
    {
        $this->_fields['ShipsFrom']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipsFrom is set.
     *
     * @return true if ShipsFrom is set.
     */
    public function isSetShipsFrom()
    {
                return !is_null($this->_fields['ShipsFrom']['FieldValue']);
            }

    /**
     * Set the value of ShipsFrom, return this.
     *
     * @param shipsFrom
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipsFrom($value)
    {
        $this->setShipsFrom($value);
        return $this;
    }

    /**
     * Check the value of IsFulfilledByAmazon.
     *
     * @return true if IsFulfilledByAmazon is set to true.
     */
    public function isIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Get the value of the IsFulfilledByAmazon property.
     *
     * @return boolean IsFulfilledByAmazon.
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->_fields['IsFulfilledByAmazon']['FieldValue'];
    }

    /**
     * Set the value of the IsFulfilledByAmazon property.
     *
     * @param bool isFulfilledByAmazon
     * @return this instance
     */
    public function setIsFulfilledByAmazon($value)
    {
        $this->_fields['IsFulfilledByAmazon']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsFulfilledByAmazon is set.
     *
     * @return true if IsFulfilledByAmazon is set.
     */
    public function isSetIsFulfilledByAmazon()
    {
                return !is_null($this->_fields['IsFulfilledByAmazon']['FieldValue']);
            }

    /**
     * Set the value of IsFulfilledByAmazon, return this.
     *
     * @param isFulfilledByAmazon
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsFulfilledByAmazon($value)
    {
        $this->setIsFulfilledByAmazon($value);
        return $this;
    }

    /**
     * Check the value of IsBuyBoxWinner.
     *
     * @return true if IsBuyBoxWinner is set to true.
     */
    public function isIsBuyBoxWinner()
    {
        return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']) && $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Get the value of the IsBuyBoxWinner property.
     *
     * @return Boolean IsBuyBoxWinner.
     */
    public function getIsBuyBoxWinner()
    {
        return $this->_fields['IsBuyBoxWinner']['FieldValue'];
    }

    /**
     * Set the value of the IsBuyBoxWinner property.
     *
     * @param bool isBuyBoxWinner
     * @return this instance
     */
    public function setIsBuyBoxWinner($value)
    {
        $this->_fields['IsBuyBoxWinner']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsBuyBoxWinner is set.
     *
     * @return true if IsBuyBoxWinner is set.
     */
    public function isSetIsBuyBoxWinner()
    {
                return !is_null($this->_fields['IsBuyBoxWinner']['FieldValue']);
            }

    /**
     * Set the value of IsBuyBoxWinner, return this.
     *
     * @param isBuyBoxWinner
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsBuyBoxWinner($value)
    {
        $this->setIsBuyBoxWinner($value);
        return $this;
    }

    /**
     * Check the value of IsFeaturedMerchant.
     *
     * @return true if IsFeaturedMerchant is set to true.
     */
    public function isIsFeaturedMerchant()
    {
        return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']) && $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Get the value of the IsFeaturedMerchant property.
     *
     * @return Boolean IsFeaturedMerchant.
     */
    public function getIsFeaturedMerchant()
    {
        return $this->_fields['IsFeaturedMerchant']['FieldValue'];
    }

    /**
     * Set the value of the IsFeaturedMerchant property.
     *
     * @param bool isFeaturedMerchant
     * @return this instance
     */
    public function setIsFeaturedMerchant($value)
    {
        $this->_fields['IsFeaturedMerchant']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsFeaturedMerchant is set.
     *
     * @return true if IsFeaturedMerchant is set.
     */
    public function isSetIsFeaturedMerchant()
    {
                return !is_null($this->_fields['IsFeaturedMerchant']['FieldValue']);
            }

    /**
     * Set the value of IsFeaturedMerchant, return this.
     *
     * @param isFeaturedMerchant
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsFeaturedMerchant($value)
    {
        $this->setIsFeaturedMerchant($value);
        return $this;
    }

}
