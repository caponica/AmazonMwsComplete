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
 * @package  Marketplace Web Service Sellers
 * @version  2011-07-01
 * Library Version: 2015-06-18
 * Generated: Wed Sep 12 08:12:03 PDT 2018
 */

/**
 *  @see MarketplaceWebServiceSellers_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceSellers_Model_Marketplace
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceId: string</li>
 * <li>Name: string</li>
 * <li>DefaultCountryCode: string</li>
 * <li>DefaultCurrencyCode: string</li>
 * <li>DefaultLanguageCode: string</li>
 * <li>DomainName: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceSellers_Model_Marketplace extends MarketplaceWebServiceSellers_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DefaultCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DefaultCurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DefaultLanguageCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DomainName' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the Name property.
     *
     * @return String Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return this instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set.
     */
    public function isSetName()
    {
                return !is_null($this->_fields['Name']['FieldValue']);
            }

    /**
     * Set the value of Name, return this.
     *
     * @param name
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }

    /**
     * Get the value of the DefaultCountryCode property.
     *
     * @return String DefaultCountryCode.
     */
    public function getDefaultCountryCode()
    {
        return $this->_fields['DefaultCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the DefaultCountryCode property.
     *
     * @param string defaultCountryCode
     * @return this instance
     */
    public function setDefaultCountryCode($value)
    {
        $this->_fields['DefaultCountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DefaultCountryCode is set.
     *
     * @return true if DefaultCountryCode is set.
     */
    public function isSetDefaultCountryCode()
    {
                return !is_null($this->_fields['DefaultCountryCode']['FieldValue']);
            }

    /**
     * Set the value of DefaultCountryCode, return this.
     *
     * @param defaultCountryCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDefaultCountryCode($value)
    {
        $this->setDefaultCountryCode($value);
        return $this;
    }

    /**
     * Get the value of the DefaultCurrencyCode property.
     *
     * @return String DefaultCurrencyCode.
     */
    public function getDefaultCurrencyCode()
    {
        return $this->_fields['DefaultCurrencyCode']['FieldValue'];
    }

    /**
     * Set the value of the DefaultCurrencyCode property.
     *
     * @param string defaultCurrencyCode
     * @return this instance
     */
    public function setDefaultCurrencyCode($value)
    {
        $this->_fields['DefaultCurrencyCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DefaultCurrencyCode is set.
     *
     * @return true if DefaultCurrencyCode is set.
     */
    public function isSetDefaultCurrencyCode()
    {
                return !is_null($this->_fields['DefaultCurrencyCode']['FieldValue']);
            }

    /**
     * Set the value of DefaultCurrencyCode, return this.
     *
     * @param defaultCurrencyCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDefaultCurrencyCode($value)
    {
        $this->setDefaultCurrencyCode($value);
        return $this;
    }

    /**
     * Get the value of the DefaultLanguageCode property.
     *
     * @return String DefaultLanguageCode.
     */
    public function getDefaultLanguageCode()
    {
        return $this->_fields['DefaultLanguageCode']['FieldValue'];
    }

    /**
     * Set the value of the DefaultLanguageCode property.
     *
     * @param string defaultLanguageCode
     * @return this instance
     */
    public function setDefaultLanguageCode($value)
    {
        $this->_fields['DefaultLanguageCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DefaultLanguageCode is set.
     *
     * @return true if DefaultLanguageCode is set.
     */
    public function isSetDefaultLanguageCode()
    {
                return !is_null($this->_fields['DefaultLanguageCode']['FieldValue']);
            }

    /**
     * Set the value of DefaultLanguageCode, return this.
     *
     * @param defaultLanguageCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDefaultLanguageCode($value)
    {
        $this->setDefaultLanguageCode($value);
        return $this;
    }

    /**
     * Get the value of the DomainName property.
     *
     * @return String DomainName.
     */
    public function getDomainName()
    {
        return $this->_fields['DomainName']['FieldValue'];
    }

    /**
     * Set the value of the DomainName property.
     *
     * @param string domainName
     * @return this instance
     */
    public function setDomainName($value)
    {
        $this->_fields['DomainName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DomainName is set.
     *
     * @return true if DomainName is set.
     */
    public function isSetDomainName()
    {
                return !is_null($this->_fields['DomainName']['FieldValue']);
            }

    /**
     * Set the value of DomainName, return this.
     *
     * @param domainName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDomainName($value)
    {
        $this->setDomainName($value);
        return $this;
    }

}
