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
 * MWSRecommendationsSectionService_Model_ListRecommendationsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InventoryRecommendations: array</li>
 * <li>SelectionRecommendations: array</li>
 * <li>PricingRecommendations: array</li>
 * <li>FulfillmentRecommendations: array</li>
 * <li>ListingQualityRecommendations: array</li>
 * <li>GlobalSellingRecommendations: array</li>
 * <li>AdvertisingRecommendations: array</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */

 class MWSRecommendationsSectionService_Model_ListRecommendationsResult extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'InventoryRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_InventoryRecommendation'), 'ListMemberName' => 'member'),
    'SelectionRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_SelectionRecommendation'), 'ListMemberName' => 'member'),
    'PricingRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_PricingRecommendation'), 'ListMemberName' => 'member'),
    'FulfillmentRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_FulfillmentRecommendation'), 'ListMemberName' => 'member'),
    'ListingQualityRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_ListingQualityRecommendation'), 'ListMemberName' => 'member'),
    'GlobalSellingRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_GlobalSellingRecommendation'), 'ListMemberName' => 'member'),
    'AdvertisingRecommendations' => array('FieldValue' => array(), 'FieldType' => array('MWSRecommendationsSectionService_Model_AdvertisingRecommendation'), 'ListMemberName' => 'member'),
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the InventoryRecommendations property.
     *
     * @return List<InventoryRecommendation> InventoryRecommendations.
     */
    public function getInventoryRecommendations()
    {
        if ($this->_fields['InventoryRecommendations']['FieldValue'] == null)
        {
            $this->_fields['InventoryRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['InventoryRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the InventoryRecommendations property.
     *
     * @param array inventoryRecommendations
     * @return this instance
     */
    public function setInventoryRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['InventoryRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear InventoryRecommendations.
     */
    public function unsetInventoryRecommendations()
    {
        $this->_fields['InventoryRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if InventoryRecommendations is set.
     *
     * @return true if InventoryRecommendations is set.
     */
    public function isSetInventoryRecommendations()
    {
                return !empty($this->_fields['InventoryRecommendations']['FieldValue']);
            }

    /**
     * Add values for InventoryRecommendations, return this.
     *
     * @param inventoryRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withInventoryRecommendations()
    {
        foreach (func_get_args() as $InventoryRecommendations)
        {
            $this->_fields['InventoryRecommendations']['FieldValue'][] = $InventoryRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the SelectionRecommendations property.
     *
     * @return List<SelectionRecommendation> SelectionRecommendations.
     */
    public function getSelectionRecommendations()
    {
        if ($this->_fields['SelectionRecommendations']['FieldValue'] == null)
        {
            $this->_fields['SelectionRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['SelectionRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the SelectionRecommendations property.
     *
     * @param array selectionRecommendations
     * @return this instance
     */
    public function setSelectionRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SelectionRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SelectionRecommendations.
     */
    public function unsetSelectionRecommendations()
    {
        $this->_fields['SelectionRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if SelectionRecommendations is set.
     *
     * @return true if SelectionRecommendations is set.
     */
    public function isSetSelectionRecommendations()
    {
                return !empty($this->_fields['SelectionRecommendations']['FieldValue']);
            }

    /**
     * Add values for SelectionRecommendations, return this.
     *
     * @param selectionRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSelectionRecommendations()
    {
        foreach (func_get_args() as $SelectionRecommendations)
        {
            $this->_fields['SelectionRecommendations']['FieldValue'][] = $SelectionRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the PricingRecommendations property.
     *
     * @return List<PricingRecommendation> PricingRecommendations.
     */
    public function getPricingRecommendations()
    {
        if ($this->_fields['PricingRecommendations']['FieldValue'] == null)
        {
            $this->_fields['PricingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['PricingRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the PricingRecommendations property.
     *
     * @param array pricingRecommendations
     * @return this instance
     */
    public function setPricingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PricingRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PricingRecommendations.
     */
    public function unsetPricingRecommendations()
    {
        $this->_fields['PricingRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if PricingRecommendations is set.
     *
     * @return true if PricingRecommendations is set.
     */
    public function isSetPricingRecommendations()
    {
                return !empty($this->_fields['PricingRecommendations']['FieldValue']);
            }

    /**
     * Add values for PricingRecommendations, return this.
     *
     * @param pricingRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPricingRecommendations()
    {
        foreach (func_get_args() as $PricingRecommendations)
        {
            $this->_fields['PricingRecommendations']['FieldValue'][] = $PricingRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the FulfillmentRecommendations property.
     *
     * @return List<FulfillmentRecommendation> FulfillmentRecommendations.
     */
    public function getFulfillmentRecommendations()
    {
        if ($this->_fields['FulfillmentRecommendations']['FieldValue'] == null)
        {
            $this->_fields['FulfillmentRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['FulfillmentRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentRecommendations property.
     *
     * @param array fulfillmentRecommendations
     * @return this instance
     */
    public function setFulfillmentRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FulfillmentRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FulfillmentRecommendations.
     */
    public function unsetFulfillmentRecommendations()
    {
        $this->_fields['FulfillmentRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if FulfillmentRecommendations is set.
     *
     * @return true if FulfillmentRecommendations is set.
     */
    public function isSetFulfillmentRecommendations()
    {
                return !empty($this->_fields['FulfillmentRecommendations']['FieldValue']);
            }

    /**
     * Add values for FulfillmentRecommendations, return this.
     *
     * @param fulfillmentRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFulfillmentRecommendations()
    {
        foreach (func_get_args() as $FulfillmentRecommendations)
        {
            $this->_fields['FulfillmentRecommendations']['FieldValue'][] = $FulfillmentRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the ListingQualityRecommendations property.
     *
     * @return List<ListingQualityRecommendation> ListingQualityRecommendations.
     */
    public function getListingQualityRecommendations()
    {
        if ($this->_fields['ListingQualityRecommendations']['FieldValue'] == null)
        {
            $this->_fields['ListingQualityRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['ListingQualityRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the ListingQualityRecommendations property.
     *
     * @param array listingQualityRecommendations
     * @return this instance
     */
    public function setListingQualityRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ListingQualityRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ListingQualityRecommendations.
     */
    public function unsetListingQualityRecommendations()
    {
        $this->_fields['ListingQualityRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if ListingQualityRecommendations is set.
     *
     * @return true if ListingQualityRecommendations is set.
     */
    public function isSetListingQualityRecommendations()
    {
                return !empty($this->_fields['ListingQualityRecommendations']['FieldValue']);
            }

    /**
     * Add values for ListingQualityRecommendations, return this.
     *
     * @param listingQualityRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withListingQualityRecommendations()
    {
        foreach (func_get_args() as $ListingQualityRecommendations)
        {
            $this->_fields['ListingQualityRecommendations']['FieldValue'][] = $ListingQualityRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the GlobalSellingRecommendations property.
     *
     * @return List<GlobalSellingRecommendation> GlobalSellingRecommendations.
     */
    public function getGlobalSellingRecommendations()
    {
        if ($this->_fields['GlobalSellingRecommendations']['FieldValue'] == null)
        {
            $this->_fields['GlobalSellingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['GlobalSellingRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the GlobalSellingRecommendations property.
     *
     * @param array globalSellingRecommendations
     * @return this instance
     */
    public function setGlobalSellingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GlobalSellingRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GlobalSellingRecommendations.
     */
    public function unsetGlobalSellingRecommendations()
    {
        $this->_fields['GlobalSellingRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if GlobalSellingRecommendations is set.
     *
     * @return true if GlobalSellingRecommendations is set.
     */
    public function isSetGlobalSellingRecommendations()
    {
                return !empty($this->_fields['GlobalSellingRecommendations']['FieldValue']);
            }

    /**
     * Add values for GlobalSellingRecommendations, return this.
     *
     * @param globalSellingRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGlobalSellingRecommendations()
    {
        foreach (func_get_args() as $GlobalSellingRecommendations)
        {
            $this->_fields['GlobalSellingRecommendations']['FieldValue'][] = $GlobalSellingRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the AdvertisingRecommendations property.
     *
     * @return List<AdvertisingRecommendation> AdvertisingRecommendations.
     */
    public function getAdvertisingRecommendations()
    {
        if ($this->_fields['AdvertisingRecommendations']['FieldValue'] == null)
        {
            $this->_fields['AdvertisingRecommendations']['FieldValue'] = array();
        }
        return $this->_fields['AdvertisingRecommendations']['FieldValue'];
    }

    /**
     * Set the value of the AdvertisingRecommendations property.
     *
     * @param array advertisingRecommendations
     * @return this instance
     */
    public function setAdvertisingRecommendations($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AdvertisingRecommendations']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AdvertisingRecommendations.
     */
    public function unsetAdvertisingRecommendations()
    {
        $this->_fields['AdvertisingRecommendations']['FieldValue'] = array();
    }

    /**
     * Check to see if AdvertisingRecommendations is set.
     *
     * @return true if AdvertisingRecommendations is set.
     */
    public function isSetAdvertisingRecommendations()
    {
                return !empty($this->_fields['AdvertisingRecommendations']['FieldValue']);
            }

    /**
     * Add values for AdvertisingRecommendations, return this.
     *
     * @param advertisingRecommendations
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAdvertisingRecommendations()
    {
        foreach (func_get_args() as $AdvertisingRecommendations)
        {
            $this->_fields['AdvertisingRecommendations']['FieldValue'][] = $AdvertisingRecommendations;
        }
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

}
