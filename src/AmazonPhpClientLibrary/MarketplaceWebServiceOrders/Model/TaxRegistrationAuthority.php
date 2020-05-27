<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2020-05-11
 * Generated: Fri May 08 09:10:38 GMT 2020
 */

/**
 *  @see MarketplaceWebServiceOrders_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority
 * 
 * Properties:
 * <ul>
 * 
 * <li>country: string</li>
 * <li>state: string</li>
 * <li>district: string</li>
 * <li>province: string</li>
 * <li>city: string</li>
 * <li>warehouseId: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceOrders_Model_TaxRegistrationAuthority extends MarketplaceWebServiceOrders_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'country' => array('FieldValue' => null, 'FieldType' => 'string'),
    'state' => array('FieldValue' => null, 'FieldType' => 'string'),
    'district' => array('FieldValue' => null, 'FieldType' => 'string'),
    'province' => array('FieldValue' => null, 'FieldType' => 'string'),
    'city' => array('FieldValue' => null, 'FieldType' => 'string'),
    'warehouseId' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the country property.
     *
     * @return String country.
     */
    public function getcountry()
    {
        return $this->_fields['country']['FieldValue'];
    }

    /**
     * Set the value of the country property.
     *
     * @param string country
     * @return this instance
     */
    public function setcountry($value)
    {
        $this->_fields['country']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if country is set.
     *
     * @return true if country is set.
     */
    public function isSetcountry()
    {
                return !is_null($this->_fields['country']['FieldValue']);
            }

    /**
     * Set the value of country, return this.
     *
     * @param country
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withcountry($value)
    {
        $this->setcountry($value);
        return $this;
    }

    /**
     * Get the value of the state property.
     *
     * @return String state.
     */
    public function getstate()
    {
        return $this->_fields['state']['FieldValue'];
    }

    /**
     * Set the value of the state property.
     *
     * @param string state
     * @return this instance
     */
    public function setstate($value)
    {
        $this->_fields['state']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if state is set.
     *
     * @return true if state is set.
     */
    public function isSetstate()
    {
                return !is_null($this->_fields['state']['FieldValue']);
            }

    /**
     * Set the value of state, return this.
     *
     * @param state
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withstate($value)
    {
        $this->setstate($value);
        return $this;
    }

    /**
     * Get the value of the district property.
     *
     * @return String district.
     */
    public function getdistrict()
    {
        return $this->_fields['district']['FieldValue'];
    }

    /**
     * Set the value of the district property.
     *
     * @param string district
     * @return this instance
     */
    public function setdistrict($value)
    {
        $this->_fields['district']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if district is set.
     *
     * @return true if district is set.
     */
    public function isSetdistrict()
    {
                return !is_null($this->_fields['district']['FieldValue']);
            }

    /**
     * Set the value of district, return this.
     *
     * @param district
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withdistrict($value)
    {
        $this->setdistrict($value);
        return $this;
    }

    /**
     * Get the value of the province property.
     *
     * @return String province.
     */
    public function getprovince()
    {
        return $this->_fields['province']['FieldValue'];
    }

    /**
     * Set the value of the province property.
     *
     * @param string province
     * @return this instance
     */
    public function setprovince($value)
    {
        $this->_fields['province']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if province is set.
     *
     * @return true if province is set.
     */
    public function isSetprovince()
    {
                return !is_null($this->_fields['province']['FieldValue']);
            }

    /**
     * Set the value of province, return this.
     *
     * @param province
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withprovince($value)
    {
        $this->setprovince($value);
        return $this;
    }

    /**
     * Get the value of the city property.
     *
     * @return String city.
     */
    public function getcity()
    {
        return $this->_fields['city']['FieldValue'];
    }

    /**
     * Set the value of the city property.
     *
     * @param string city
     * @return this instance
     */
    public function setcity($value)
    {
        $this->_fields['city']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if city is set.
     *
     * @return true if city is set.
     */
    public function isSetcity()
    {
                return !is_null($this->_fields['city']['FieldValue']);
            }

    /**
     * Set the value of city, return this.
     *
     * @param city
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withcity($value)
    {
        $this->setcity($value);
        return $this;
    }

    /**
     * Get the value of the warehouseId property.
     *
     * @return String warehouseId.
     */
    public function getwarehouseId()
    {
        return $this->_fields['warehouseId']['FieldValue'];
    }

    /**
     * Set the value of the warehouseId property.
     *
     * @param string warehouseId
     * @return this instance
     */
    public function setwarehouseId($value)
    {
        $this->_fields['warehouseId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if warehouseId is set.
     *
     * @return true if warehouseId is set.
     */
    public function isSetwarehouseId()
    {
                return !is_null($this->_fields['warehouseId']['FieldValue']);
            }

    /**
     * Set the value of warehouseId, return this.
     *
     * @param warehouseId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withwarehouseId($value)
    {
        $this->setwarehouseId($value);
        return $this;
    }

}
