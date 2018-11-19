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
 * MarketplaceWebServiceProducts_Model_Summary
 * 
 * Properties:
 * <ul>
 * 
 * <li>TotalOfferCount: int</li>
 * <li>NumberOfOffers: MarketplaceWebServiceProducts_Model_NumberOfOffers</li>
 * <li>LowestPrices: MarketplaceWebServiceProducts_Model_LowestPrices</li>
 * <li>BuyBoxPrices: MarketplaceWebServiceProducts_Model_BuyBoxPrices</li>
 * <li>ListPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>SuggestedLowerPricePlusShipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>BuyBoxEligibleOffers: MarketplaceWebServiceProducts_Model_BuyBoxEligibleOffers</li>
 * <li>OffersAvailableTime: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_Summary extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'TotalOfferCount' => array('FieldValue' => null, 'FieldType' => 'int'),
    'NumberOfOffers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_NumberOfOffers'),
    'LowestPrices' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_LowestPrices'),
    'BuyBoxPrices' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_BuyBoxPrices'),
    'ListPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'SuggestedLowerPricePlusShipping' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
    'BuyBoxEligibleOffers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_BuyBoxEligibleOffers'),
    'OffersAvailableTime' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the TotalOfferCount property.
     *
     * @return int TotalOfferCount.
     */
    public function getTotalOfferCount()
    {
        return $this->_fields['TotalOfferCount']['FieldValue'];
    }

    /**
     * Set the value of the TotalOfferCount property.
     *
     * @param int totalOfferCount
     * @return this instance
     */
    public function setTotalOfferCount($value)
    {
        $this->_fields['TotalOfferCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalOfferCount is set.
     *
     * @return true if TotalOfferCount is set.
     */
    public function isSetTotalOfferCount()
    {
                return !is_null($this->_fields['TotalOfferCount']['FieldValue']);
            }

    /**
     * Set the value of TotalOfferCount, return this.
     *
     * @param totalOfferCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalOfferCount($value)
    {
        $this->setTotalOfferCount($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return NumberOfOffers NumberOfOffers.
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param MarketplaceWebServiceProducts_Model_NumberOfOffers numberOfOffers
     * @return this instance
     */
    public function setNumberOfOffers($value)
    {
        $this->_fields['NumberOfOffers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfOffers is set.
     *
     * @return true if NumberOfOffers is set.
     */
    public function isSetNumberOfOffers()
    {
                return !is_null($this->_fields['NumberOfOffers']['FieldValue']);
            }

    /**
     * Set the value of NumberOfOffers, return this.
     *
     * @param numberOfOffers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfOffers($value)
    {
        $this->setNumberOfOffers($value);
        return $this;
    }

    /**
     * Get the value of the LowestPrices property.
     *
     * @return LowestPrices LowestPrices.
     */
    public function getLowestPrices()
    {
        return $this->_fields['LowestPrices']['FieldValue'];
    }

    /**
     * Set the value of the LowestPrices property.
     *
     * @param MarketplaceWebServiceProducts_Model_LowestPrices lowestPrices
     * @return this instance
     */
    public function setLowestPrices($value)
    {
        $this->_fields['LowestPrices']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestPrices is set.
     *
     * @return true if LowestPrices is set.
     */
    public function isSetLowestPrices()
    {
                return !is_null($this->_fields['LowestPrices']['FieldValue']);
            }

    /**
     * Set the value of LowestPrices, return this.
     *
     * @param lowestPrices
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestPrices($value)
    {
        $this->setLowestPrices($value);
        return $this;
    }

    /**
     * Get the value of the BuyBoxPrices property.
     *
     * @return BuyBoxPrices BuyBoxPrices.
     */
    public function getBuyBoxPrices()
    {
        return $this->_fields['BuyBoxPrices']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrices property.
     *
     * @param MarketplaceWebServiceProducts_Model_BuyBoxPrices buyBoxPrices
     * @return this instance
     */
    public function setBuyBoxPrices($value)
    {
        $this->_fields['BuyBoxPrices']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyBoxPrices is set.
     *
     * @return true if BuyBoxPrices is set.
     */
    public function isSetBuyBoxPrices()
    {
                return !is_null($this->_fields['BuyBoxPrices']['FieldValue']);
            }

    /**
     * Set the value of BuyBoxPrices, return this.
     *
     * @param buyBoxPrices
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBuyBoxPrices($value)
    {
        $this->setBuyBoxPrices($value);
        return $this;
    }

    /**
     * Get the value of the ListPrice property.
     *
     * @return MoneyType ListPrice.
     */
    public function getListPrice()
    {
        return $this->_fields['ListPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType listPrice
     * @return this instance
     */
    public function setListPrice($value)
    {
        $this->_fields['ListPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListPrice is set.
     *
     * @return true if ListPrice is set.
     */
    public function isSetListPrice()
    {
                return !is_null($this->_fields['ListPrice']['FieldValue']);
            }

    /**
     * Set the value of ListPrice, return this.
     *
     * @param listPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListPrice($value)
    {
        $this->setListPrice($value);
        return $this;
    }

    /**
     * Get the value of the SuggestedLowerPricePlusShipping property.
     *
     * @return MoneyType SuggestedLowerPricePlusShipping.
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the SuggestedLowerPricePlusShipping property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType suggestedLowerPricePlusShipping
     * @return this instance
     */
    public function setSuggestedLowerPricePlusShipping($value)
    {
        $this->_fields['SuggestedLowerPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SuggestedLowerPricePlusShipping is set.
     *
     * @return true if SuggestedLowerPricePlusShipping is set.
     */
    public function isSetSuggestedLowerPricePlusShipping()
    {
                return !is_null($this->_fields['SuggestedLowerPricePlusShipping']['FieldValue']);
            }

    /**
     * Set the value of SuggestedLowerPricePlusShipping, return this.
     *
     * @param suggestedLowerPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSuggestedLowerPricePlusShipping($value)
    {
        $this->setSuggestedLowerPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the BuyBoxEligibleOffers property.
     *
     * @return BuyBoxEligibleOffers BuyBoxEligibleOffers.
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->_fields['BuyBoxEligibleOffers']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxEligibleOffers property.
     *
     * @param MarketplaceWebServiceProducts_Model_BuyBoxEligibleOffers buyBoxEligibleOffers
     * @return this instance
     */
    public function setBuyBoxEligibleOffers($value)
    {
        $this->_fields['BuyBoxEligibleOffers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyBoxEligibleOffers is set.
     *
     * @return true if BuyBoxEligibleOffers is set.
     */
    public function isSetBuyBoxEligibleOffers()
    {
                return !is_null($this->_fields['BuyBoxEligibleOffers']['FieldValue']);
            }

    /**
     * Set the value of BuyBoxEligibleOffers, return this.
     *
     * @param buyBoxEligibleOffers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withBuyBoxEligibleOffers($value)
    {
        $this->setBuyBoxEligibleOffers($value);
        return $this;
    }

    /**
     * Get the value of the OffersAvailableTime property.
     *
     * @return XMLGregorianCalendar OffersAvailableTime.
     */
    public function getOffersAvailableTime()
    {
        return $this->_fields['OffersAvailableTime']['FieldValue'];
    }

    /**
     * Set the value of the OffersAvailableTime property.
     *
     * @param string offersAvailableTime
     * @return this instance
     */
    public function setOffersAvailableTime($value)
    {
        $this->_fields['OffersAvailableTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if OffersAvailableTime is set.
     *
     * @return true if OffersAvailableTime is set.
     */
    public function isSetOffersAvailableTime()
    {
                return !is_null($this->_fields['OffersAvailableTime']['FieldValue']);
            }

    /**
     * Set the value of OffersAvailableTime, return this.
     *
     * @param offersAvailableTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withOffersAvailableTime($value)
    {
        $this->setOffersAvailableTime($value);
        return $this;
    }

}
