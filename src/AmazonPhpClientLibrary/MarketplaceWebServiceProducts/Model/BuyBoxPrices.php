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
 * MarketplaceWebServiceProducts_Model_BuyBoxPrices
 * 
 * Properties:
 * <ul>
 * 
 * <li>BuyBoxPrice: array</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_BuyBoxPrices extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'BuyBoxPrice' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_BuyBoxPriceType')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the BuyBoxPrice property.
     *
     * @return List<BuyBoxPriceType> BuyBoxPrice.
     */
    public function getBuyBoxPrice()
    {
        if ($this->_fields['BuyBoxPrice']['FieldValue'] == null)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'] = array();
        }
        return $this->_fields['BuyBoxPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrice property.
     *
     * @param array buyBoxPrice
     * @return this instance
     */
    public function setBuyBoxPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['BuyBoxPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear BuyBoxPrice.
     */
    public function unsetBuyBoxPrice()
    {
        $this->_fields['BuyBoxPrice']['FieldValue'] = array();
    }

    /**
     * Check to see if BuyBoxPrice is set.
     *
     * @return true if BuyBoxPrice is set.
     */
    public function isSetBuyBoxPrice()
    {
                return !empty($this->_fields['BuyBoxPrice']['FieldValue']);
            }

    /**
     * Add values for BuyBoxPrice, return this.
     *
     * @param buyBoxPrice
     *             New values to add.
     *
     * @return This instance.
     */
    public function withBuyBoxPrice()
    {
        foreach (func_get_args() as $BuyBoxPrice)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'][] = $BuyBoxPrice;
        }
        return $this;
    }

}
