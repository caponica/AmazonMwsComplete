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
 * @package  MWS Recommendations Section Service
 * @version  2013-04-01
 * Library Version: 2014-10-01
 * Generated: Wed Sep 12 07:35:28 PDT 2018
 */

/**
 *  @see MWSRecommendationsSectionService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSRecommendationsSectionService_Model_PricingRecommendation
 * 
 * Properties:
 * <ul>
 * 
 * <li>LastUpdated: string</li>
 * <li>ItemIdentifier: MWSRecommendationsSectionService_Model_ProductIdentifier</li>
 * <li>ItemName: string</li>
 * <li>Condition: string</li>
 * <li>SubCondition: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>YourPricePlusShipping: MWSRecommendationsSectionService_Model_Price</li>
 * <li>LowestPricePlusShipping: MWSRecommendationsSectionService_Model_Price</li>
 * <li>PriceDifferenceToLowPrice: MWSRecommendationsSectionService_Model_Price</li>
 * <li>MedianPricePlusShipping: MWSRecommendationsSectionService_Model_Price</li>
 * <li>LowestMerchantFulfilledOfferPrice: MWSRecommendationsSectionService_Model_Price</li>
 * <li>LowestAmazonFulfilledOfferPrice: MWSRecommendationsSectionService_Model_Price</li>
 * <li>NumberOfOffers: int</li>
 * <li>NumberOfMerchantFulfilledOffers: int</li>
 * <li>NumberOfAmazonFulfilledOffers: int</li>
 * <li>RecommendationId: string</li>
 * <li>RecommendationReason: string</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_PricingRecommendation extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'LastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'ItemIdentifier' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_ProductIdentifier'),
    'ItemName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Condition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SubCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
    'YourPricePlusShipping' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'LowestPricePlusShipping' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'PriceDifferenceToLowPrice' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'MedianPricePlusShipping' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'LowestMerchantFulfilledOfferPrice' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'LowestAmazonFulfilledOfferPrice' => array('FieldValue' => null, 'FieldType' => 'MWSRecommendationsSectionService_Model_Price'),
    'NumberOfOffers' => array('FieldValue' => null, 'FieldType' => 'int'),
    'NumberOfMerchantFulfilledOffers' => array('FieldValue' => null, 'FieldType' => 'int'),
    'NumberOfAmazonFulfilledOffers' => array('FieldValue' => null, 'FieldType' => 'int'),
    'RecommendationId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'RecommendationReason' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the LastUpdated property.
     *
     * @return XMLGregorianCalendar LastUpdated.
     */
    public function getLastUpdated()
    {
        return $this->_fields['LastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdated property.
     *
     * @param string lastUpdated
     * @return this instance
     */
    public function setLastUpdated($value)
    {
        $this->_fields['LastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdated is set.
     *
     * @return true if LastUpdated is set.
     */
    public function isSetLastUpdated()
    {
                return !is_null($this->_fields['LastUpdated']['FieldValue']);
            }

    /**
     * Set the value of LastUpdated, return this.
     *
     * @param lastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLastUpdated($value)
    {
        $this->setLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the ItemIdentifier property.
     *
     * @return ProductIdentifier ItemIdentifier.
     */
    public function getItemIdentifier()
    {
        return $this->_fields['ItemIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the ItemIdentifier property.
     *
     * @param MWSRecommendationsSectionService_Model_ProductIdentifier itemIdentifier
     * @return this instance
     */
    public function setItemIdentifier($value)
    {
        $this->_fields['ItemIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemIdentifier is set.
     *
     * @return true if ItemIdentifier is set.
     */
    public function isSetItemIdentifier()
    {
                return !is_null($this->_fields['ItemIdentifier']['FieldValue']);
            }

    /**
     * Set the value of ItemIdentifier, return this.
     *
     * @param itemIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemIdentifier($value)
    {
        $this->setItemIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the ItemName property.
     *
     * @return String ItemName.
     */
    public function getItemName()
    {
        return $this->_fields['ItemName']['FieldValue'];
    }

    /**
     * Set the value of the ItemName property.
     *
     * @param string itemName
     * @return this instance
     */
    public function setItemName($value)
    {
        $this->_fields['ItemName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemName is set.
     *
     * @return true if ItemName is set.
     */
    public function isSetItemName()
    {
                return !is_null($this->_fields['ItemName']['FieldValue']);
            }

    /**
     * Set the value of ItemName, return this.
     *
     * @param itemName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemName($value)
    {
        $this->setItemName($value);
        return $this;
    }

    /**
     * Get the value of the Condition property.
     *
     * @return String Condition.
     */
    public function getCondition()
    {
        return $this->_fields['Condition']['FieldValue'];
    }

    /**
     * Set the value of the Condition property.
     *
     * @param string condition
     * @return this instance
     */
    public function setCondition($value)
    {
        $this->_fields['Condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Condition is set.
     *
     * @return true if Condition is set.
     */
    public function isSetCondition()
    {
                return !is_null($this->_fields['Condition']['FieldValue']);
            }

    /**
     * Set the value of Condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCondition($value)
    {
        $this->setCondition($value);
        return $this;
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
     * Get the value of the FulfillmentChannel property.
     *
     * @return String FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return this instance
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
                return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }

    /**
     * Get the value of the YourPricePlusShipping property.
     *
     * @return Price YourPricePlusShipping.
     */
    public function getYourPricePlusShipping()
    {
        return $this->_fields['YourPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the YourPricePlusShipping property.
     *
     * @param MWSRecommendationsSectionService_Model_Price yourPricePlusShipping
     * @return this instance
     */
    public function setYourPricePlusShipping($value)
    {
        $this->_fields['YourPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if YourPricePlusShipping is set.
     *
     * @return true if YourPricePlusShipping is set.
     */
    public function isSetYourPricePlusShipping()
    {
                return !is_null($this->_fields['YourPricePlusShipping']['FieldValue']);
            }

    /**
     * Set the value of YourPricePlusShipping, return this.
     *
     * @param yourPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withYourPricePlusShipping($value)
    {
        $this->setYourPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the LowestPricePlusShipping property.
     *
     * @return Price LowestPricePlusShipping.
     */
    public function getLowestPricePlusShipping()
    {
        return $this->_fields['LowestPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the LowestPricePlusShipping property.
     *
     * @param MWSRecommendationsSectionService_Model_Price lowestPricePlusShipping
     * @return this instance
     */
    public function setLowestPricePlusShipping($value)
    {
        $this->_fields['LowestPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestPricePlusShipping is set.
     *
     * @return true if LowestPricePlusShipping is set.
     */
    public function isSetLowestPricePlusShipping()
    {
                return !is_null($this->_fields['LowestPricePlusShipping']['FieldValue']);
            }

    /**
     * Set the value of LowestPricePlusShipping, return this.
     *
     * @param lowestPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestPricePlusShipping($value)
    {
        $this->setLowestPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the PriceDifferenceToLowPrice property.
     *
     * @return Price PriceDifferenceToLowPrice.
     */
    public function getPriceDifferenceToLowPrice()
    {
        return $this->_fields['PriceDifferenceToLowPrice']['FieldValue'];
    }

    /**
     * Set the value of the PriceDifferenceToLowPrice property.
     *
     * @param MWSRecommendationsSectionService_Model_Price priceDifferenceToLowPrice
     * @return this instance
     */
    public function setPriceDifferenceToLowPrice($value)
    {
        $this->_fields['PriceDifferenceToLowPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PriceDifferenceToLowPrice is set.
     *
     * @return true if PriceDifferenceToLowPrice is set.
     */
    public function isSetPriceDifferenceToLowPrice()
    {
                return !is_null($this->_fields['PriceDifferenceToLowPrice']['FieldValue']);
            }

    /**
     * Set the value of PriceDifferenceToLowPrice, return this.
     *
     * @param priceDifferenceToLowPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPriceDifferenceToLowPrice($value)
    {
        $this->setPriceDifferenceToLowPrice($value);
        return $this;
    }

    /**
     * Get the value of the MedianPricePlusShipping property.
     *
     * @return Price MedianPricePlusShipping.
     */
    public function getMedianPricePlusShipping()
    {
        return $this->_fields['MedianPricePlusShipping']['FieldValue'];
    }

    /**
     * Set the value of the MedianPricePlusShipping property.
     *
     * @param MWSRecommendationsSectionService_Model_Price medianPricePlusShipping
     * @return this instance
     */
    public function setMedianPricePlusShipping($value)
    {
        $this->_fields['MedianPricePlusShipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MedianPricePlusShipping is set.
     *
     * @return true if MedianPricePlusShipping is set.
     */
    public function isSetMedianPricePlusShipping()
    {
                return !is_null($this->_fields['MedianPricePlusShipping']['FieldValue']);
            }

    /**
     * Set the value of MedianPricePlusShipping, return this.
     *
     * @param medianPricePlusShipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMedianPricePlusShipping($value)
    {
        $this->setMedianPricePlusShipping($value);
        return $this;
    }

    /**
     * Get the value of the LowestMerchantFulfilledOfferPrice property.
     *
     * @return Price LowestMerchantFulfilledOfferPrice.
     */
    public function getLowestMerchantFulfilledOfferPrice()
    {
        return $this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestMerchantFulfilledOfferPrice property.
     *
     * @param MWSRecommendationsSectionService_Model_Price lowestMerchantFulfilledOfferPrice
     * @return this instance
     */
    public function setLowestMerchantFulfilledOfferPrice($value)
    {
        $this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestMerchantFulfilledOfferPrice is set.
     *
     * @return true if LowestMerchantFulfilledOfferPrice is set.
     */
    public function isSetLowestMerchantFulfilledOfferPrice()
    {
                return !is_null($this->_fields['LowestMerchantFulfilledOfferPrice']['FieldValue']);
            }

    /**
     * Set the value of LowestMerchantFulfilledOfferPrice, return this.
     *
     * @param lowestMerchantFulfilledOfferPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestMerchantFulfilledOfferPrice($value)
    {
        $this->setLowestMerchantFulfilledOfferPrice($value);
        return $this;
    }

    /**
     * Get the value of the LowestAmazonFulfilledOfferPrice property.
     *
     * @return Price LowestAmazonFulfilledOfferPrice.
     */
    public function getLowestAmazonFulfilledOfferPrice()
    {
        return $this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestAmazonFulfilledOfferPrice property.
     *
     * @param MWSRecommendationsSectionService_Model_Price lowestAmazonFulfilledOfferPrice
     * @return this instance
     */
    public function setLowestAmazonFulfilledOfferPrice($value)
    {
        $this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LowestAmazonFulfilledOfferPrice is set.
     *
     * @return true if LowestAmazonFulfilledOfferPrice is set.
     */
    public function isSetLowestAmazonFulfilledOfferPrice()
    {
                return !is_null($this->_fields['LowestAmazonFulfilledOfferPrice']['FieldValue']);
            }

    /**
     * Set the value of LowestAmazonFulfilledOfferPrice, return this.
     *
     * @param lowestAmazonFulfilledOfferPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLowestAmazonFulfilledOfferPrice($value)
    {
        $this->setLowestAmazonFulfilledOfferPrice($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfOffers property.
     *
     * @return Integer NumberOfOffers.
     */
    public function getNumberOfOffers()
    {
        return $this->_fields['NumberOfOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOffers property.
     *
     * @param int numberOfOffers
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
     * Get the value of the NumberOfMerchantFulfilledOffers property.
     *
     * @return Integer NumberOfMerchantFulfilledOffers.
     */
    public function getNumberOfMerchantFulfilledOffers()
    {
        return $this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfMerchantFulfilledOffers property.
     *
     * @param int numberOfMerchantFulfilledOffers
     * @return this instance
     */
    public function setNumberOfMerchantFulfilledOffers($value)
    {
        $this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfMerchantFulfilledOffers is set.
     *
     * @return true if NumberOfMerchantFulfilledOffers is set.
     */
    public function isSetNumberOfMerchantFulfilledOffers()
    {
                return !is_null($this->_fields['NumberOfMerchantFulfilledOffers']['FieldValue']);
            }

    /**
     * Set the value of NumberOfMerchantFulfilledOffers, return this.
     *
     * @param numberOfMerchantFulfilledOffers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfMerchantFulfilledOffers($value)
    {
        $this->setNumberOfMerchantFulfilledOffers($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfAmazonFulfilledOffers property.
     *
     * @return Integer NumberOfAmazonFulfilledOffers.
     */
    public function getNumberOfAmazonFulfilledOffers()
    {
        return $this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfAmazonFulfilledOffers property.
     *
     * @param int numberOfAmazonFulfilledOffers
     * @return this instance
     */
    public function setNumberOfAmazonFulfilledOffers($value)
    {
        $this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfAmazonFulfilledOffers is set.
     *
     * @return true if NumberOfAmazonFulfilledOffers is set.
     */
    public function isSetNumberOfAmazonFulfilledOffers()
    {
                return !is_null($this->_fields['NumberOfAmazonFulfilledOffers']['FieldValue']);
            }

    /**
     * Set the value of NumberOfAmazonFulfilledOffers, return this.
     *
     * @param numberOfAmazonFulfilledOffers
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfAmazonFulfilledOffers($value)
    {
        $this->setNumberOfAmazonFulfilledOffers($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationId property.
     *
     * @return String RecommendationId.
     */
    public function getRecommendationId()
    {
        return $this->_fields['RecommendationId']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationId property.
     *
     * @param string recommendationId
     * @return this instance
     */
    public function setRecommendationId($value)
    {
        $this->_fields['RecommendationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationId is set.
     *
     * @return true if RecommendationId is set.
     */
    public function isSetRecommendationId()
    {
                return !is_null($this->_fields['RecommendationId']['FieldValue']);
            }

    /**
     * Set the value of RecommendationId, return this.
     *
     * @param recommendationId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationId($value)
    {
        $this->setRecommendationId($value);
        return $this;
    }

    /**
     * Get the value of the RecommendationReason property.
     *
     * @return String RecommendationReason.
     */
    public function getRecommendationReason()
    {
        return $this->_fields['RecommendationReason']['FieldValue'];
    }

    /**
     * Set the value of the RecommendationReason property.
     *
     * @param string recommendationReason
     * @return this instance
     */
    public function setRecommendationReason($value)
    {
        $this->_fields['RecommendationReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RecommendationReason is set.
     *
     * @return true if RecommendationReason is set.
     */
    public function isSetRecommendationReason()
    {
                return !is_null($this->_fields['RecommendationReason']['FieldValue']);
            }

    /**
     * Set the value of RecommendationReason, return this.
     *
     * @param recommendationReason
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRecommendationReason($value)
    {
        $this->setRecommendationReason($value);
        return $this;
    }

}
