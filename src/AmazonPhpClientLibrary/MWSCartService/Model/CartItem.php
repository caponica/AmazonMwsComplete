<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  MWS Cart Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:29:38 GMT 2015
 */

/**
 *  @see MWSCartService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCartService_Model_CartItem
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASIN: string</li>
 * <li>SellerSKU: string</li>
 * <li>Title: string</li>
 * <li>CurrentPrice: MWSCartService_Model_CurrencyAmount</li>
 * <li>SalePrice: MWSCartService_Model_CurrencyAmount</li>
 * <li>Quantity: int</li>
 * <li>ProductPageURL: string</li>
 * <li>MainProductImageURL: string</li>
 * <li>IsBuyable: bool</li>
 *
 * </ul>
 */

 class MWSCartService_Model_CartItem extends MWSCartService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
    'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Title' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CurrentPrice' => array('FieldValue' => null, 'FieldType' => 'MWSCartService_Model_CurrencyAmount'),
    'SalePrice' => array('FieldValue' => null, 'FieldType' => 'MWSCartService_Model_CurrencyAmount'),
    'Quantity' => array('FieldValue' => null, 'FieldType' => 'int'),
    'ProductPageURL' => array('FieldValue' => null, 'FieldType' => 'string'),
    'MainProductImageURL' => array('FieldValue' => null, 'FieldType' => 'string'),
    'IsBuyable' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return String ASIN.
     */
    public function getASIN()
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param string asin
     * @return this instance
     */
    public function setASIN($value)
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
                return !is_null($this->_fields['ASIN']['FieldValue']);
            }

    /**
     * Set the value of ASIN, return this.
     *
     * @param asin
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
                return !is_null($this->_fields['SellerSKU']['FieldValue']);
            }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the Title property.
     *
     * @return String Title.
     */
    public function getTitle()
    {
        return $this->_fields['Title']['FieldValue'];
    }

    /**
     * Set the value of the Title property.
     *
     * @param string title
     * @return this instance
     */
    public function setTitle($value)
    {
        $this->_fields['Title']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Title is set.
     *
     * @return true if Title is set.
     */
    public function isSetTitle()
    {
                return !is_null($this->_fields['Title']['FieldValue']);
            }

    /**
     * Set the value of Title, return this.
     *
     * @param title
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTitle($value)
    {
        $this->setTitle($value);
        return $this;
    }

    /**
     * Get the value of the CurrentPrice property.
     *
     * @return CurrencyAmount CurrentPrice.
     */
    public function getCurrentPrice()
    {
        return $this->_fields['CurrentPrice']['FieldValue'];
    }

    /**
     * Set the value of the CurrentPrice property.
     *
     * @param MWSCartService_Model_CurrencyAmount currentPrice
     * @return this instance
     */
    public function setCurrentPrice($value)
    {
        $this->_fields['CurrentPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CurrentPrice is set.
     *
     * @return true if CurrentPrice is set.
     */
    public function isSetCurrentPrice()
    {
                return !is_null($this->_fields['CurrentPrice']['FieldValue']);
            }

    /**
     * Set the value of CurrentPrice, return this.
     *
     * @param currentPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCurrentPrice($value)
    {
        $this->setCurrentPrice($value);
        return $this;
    }

    /**
     * Get the value of the SalePrice property.
     *
     * @return CurrencyAmount SalePrice.
     */
    public function getSalePrice()
    {
        return $this->_fields['SalePrice']['FieldValue'];
    }

    /**
     * Set the value of the SalePrice property.
     *
     * @param MWSCartService_Model_CurrencyAmount salePrice
     * @return this instance
     */
    public function setSalePrice($value)
    {
        $this->_fields['SalePrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SalePrice is set.
     *
     * @return true if SalePrice is set.
     */
    public function isSetSalePrice()
    {
                return !is_null($this->_fields['SalePrice']['FieldValue']);
            }

    /**
     * Set the value of SalePrice, return this.
     *
     * @param salePrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSalePrice($value)
    {
        $this->setSalePrice($value);
        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return Integer Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
                return !is_null($this->_fields['Quantity']['FieldValue']);
            }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the ProductPageURL property.
     *
     * @return String ProductPageURL.
     */
    public function getProductPageURL()
    {
        return $this->_fields['ProductPageURL']['FieldValue'];
    }

    /**
     * Set the value of the ProductPageURL property.
     *
     * @param string productPageURL
     * @return this instance
     */
    public function setProductPageURL($value)
    {
        $this->_fields['ProductPageURL']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProductPageURL is set.
     *
     * @return true if ProductPageURL is set.
     */
    public function isSetProductPageURL()
    {
                return !is_null($this->_fields['ProductPageURL']['FieldValue']);
            }

    /**
     * Set the value of ProductPageURL, return this.
     *
     * @param productPageURL
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProductPageURL($value)
    {
        $this->setProductPageURL($value);
        return $this;
    }

    /**
     * Get the value of the MainProductImageURL property.
     *
     * @return String MainProductImageURL.
     */
    public function getMainProductImageURL()
    {
        return $this->_fields['MainProductImageURL']['FieldValue'];
    }

    /**
     * Set the value of the MainProductImageURL property.
     *
     * @param string mainProductImageURL
     * @return this instance
     */
    public function setMainProductImageURL($value)
    {
        $this->_fields['MainProductImageURL']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MainProductImageURL is set.
     *
     * @return true if MainProductImageURL is set.
     */
    public function isSetMainProductImageURL()
    {
                return !is_null($this->_fields['MainProductImageURL']['FieldValue']);
            }

    /**
     * Set the value of MainProductImageURL, return this.
     *
     * @param mainProductImageURL
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMainProductImageURL($value)
    {
        $this->setMainProductImageURL($value);
        return $this;
    }

    /**
     * Check the value of IsBuyable.
     *
     * @return true if IsBuyable is set to true.
     */
    public function isIsBuyable()
    {
        return !is_null($this->_fields['IsBuyable']['FieldValue']) && $this->_fields['IsBuyable']['FieldValue'];
    }

    /**
     * Get the value of the IsBuyable property.
     *
     * @return Boolean IsBuyable.
     */
    public function getIsBuyable()
    {
        return $this->_fields['IsBuyable']['FieldValue'];
    }

    /**
     * Set the value of the IsBuyable property.
     *
     * @param bool isBuyable
     * @return this instance
     */
    public function setIsBuyable($value)
    {
        $this->_fields['IsBuyable']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsBuyable is set.
     *
     * @return true if IsBuyable is set.
     */
    public function isSetIsBuyable()
    {
                return !is_null($this->_fields['IsBuyable']['FieldValue']);
            }

    /**
     * Set the value of IsBuyable, return this.
     *
     * @param isBuyable
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsBuyable($value)
    {
        $this->setIsBuyable($value);
        return $this;
    }

}
