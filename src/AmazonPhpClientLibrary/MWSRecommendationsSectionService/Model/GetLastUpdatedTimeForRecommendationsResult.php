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
 * MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InventoryRecommendationsLastUpdated: string</li>
 * <li>SelectionRecommendationsLastUpdated: string</li>
 * <li>FulfillmentRecommendationsLastUpdated: string</li>
 * <li>PricingRecommendationsLastUpdated: string</li>
 * <li>GlobalSellingRecommendationsLastUpdated: string</li>
 * <li>AdvertisingRecommendationsLastUpdated: string</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_GetLastUpdatedTimeForRecommendationsResult extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InventoryRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SelectionRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PricingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'GlobalSellingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AdvertisingRecommendationsLastUpdated' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InventoryRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar InventoryRecommendationsLastUpdated.
     */
    public function getInventoryRecommendationsLastUpdated()
    {
        return $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the InventoryRecommendationsLastUpdated property.
     *
     * @param string inventoryRecommendationsLastUpdated
     * @return this instance
     */
    public function setInventoryRecommendationsLastUpdated($value)
    {
        $this->_fields['InventoryRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InventoryRecommendationsLastUpdated is set.
     *
     * @return true if InventoryRecommendationsLastUpdated is set.
     */
    public function isSetInventoryRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['InventoryRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of InventoryRecommendationsLastUpdated, return this.
     *
     * @param inventoryRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInventoryRecommendationsLastUpdated($value)
    {
        $this->setInventoryRecommendationsLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the SelectionRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar SelectionRecommendationsLastUpdated.
     */
    public function getSelectionRecommendationsLastUpdated()
    {
        return $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the SelectionRecommendationsLastUpdated property.
     *
     * @param string selectionRecommendationsLastUpdated
     * @return this instance
     */
    public function setSelectionRecommendationsLastUpdated($value)
    {
        $this->_fields['SelectionRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SelectionRecommendationsLastUpdated is set.
     *
     * @return true if SelectionRecommendationsLastUpdated is set.
     */
    public function isSetSelectionRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['SelectionRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of SelectionRecommendationsLastUpdated, return this.
     *
     * @param selectionRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSelectionRecommendationsLastUpdated($value)
    {
        $this->setSelectionRecommendationsLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar FulfillmentRecommendationsLastUpdated.
     */
    public function getFulfillmentRecommendationsLastUpdated()
    {
        return $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentRecommendationsLastUpdated property.
     *
     * @param string fulfillmentRecommendationsLastUpdated
     * @return this instance
     */
    public function setFulfillmentRecommendationsLastUpdated($value)
    {
        $this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentRecommendationsLastUpdated is set.
     *
     * @return true if FulfillmentRecommendationsLastUpdated is set.
     */
    public function isSetFulfillmentRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['FulfillmentRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentRecommendationsLastUpdated, return this.
     *
     * @param fulfillmentRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentRecommendationsLastUpdated($value)
    {
        $this->setFulfillmentRecommendationsLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the PricingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar PricingRecommendationsLastUpdated.
     */
    public function getPricingRecommendationsLastUpdated()
    {
        return $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the PricingRecommendationsLastUpdated property.
     *
     * @param string pricingRecommendationsLastUpdated
     * @return this instance
     */
    public function setPricingRecommendationsLastUpdated($value)
    {
        $this->_fields['PricingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PricingRecommendationsLastUpdated is set.
     *
     * @return true if PricingRecommendationsLastUpdated is set.
     */
    public function isSetPricingRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['PricingRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of PricingRecommendationsLastUpdated, return this.
     *
     * @param pricingRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPricingRecommendationsLastUpdated($value)
    {
        $this->setPricingRecommendationsLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar GlobalSellingRecommendationsLastUpdated.
     */
    public function getGlobalSellingRecommendationsLastUpdated()
    {
        return $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the GlobalSellingRecommendationsLastUpdated property.
     *
     * @param string globalSellingRecommendationsLastUpdated
     * @return this instance
     */
    public function setGlobalSellingRecommendationsLastUpdated($value)
    {
        $this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GlobalSellingRecommendationsLastUpdated is set.
     *
     * @return true if GlobalSellingRecommendationsLastUpdated is set.
     */
    public function isSetGlobalSellingRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['GlobalSellingRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of GlobalSellingRecommendationsLastUpdated, return this.
     *
     * @param globalSellingRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGlobalSellingRecommendationsLastUpdated($value)
    {
        $this->setGlobalSellingRecommendationsLastUpdated($value);
        return $this;
    }

    /**
     * Get the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @return XMLGregorianCalendar AdvertisingRecommendationsLastUpdated.
     */
    public function getAdvertisingRecommendationsLastUpdated()
    {
        return $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'];
    }

    /**
     * Set the value of the AdvertisingRecommendationsLastUpdated property.
     *
     * @param string advertisingRecommendationsLastUpdated
     * @return this instance
     */
    public function setAdvertisingRecommendationsLastUpdated($value)
    {
        $this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdvertisingRecommendationsLastUpdated is set.
     *
     * @return true if AdvertisingRecommendationsLastUpdated is set.
     */
    public function isSetAdvertisingRecommendationsLastUpdated()
    {
                return !is_null($this->_fields['AdvertisingRecommendationsLastUpdated']['FieldValue']);
            }

    /**
     * Set the value of AdvertisingRecommendationsLastUpdated, return this.
     *
     * @param advertisingRecommendationsLastUpdated
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdvertisingRecommendationsLastUpdated($value)
    {
        $this->setAdvertisingRecommendationsLastUpdated($value);
        return $this;
    }

}
