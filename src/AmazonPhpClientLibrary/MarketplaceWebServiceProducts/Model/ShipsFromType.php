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
 * MarketplaceWebServiceProducts_Model_ShipsFromType
 * 
 * Properties:
 * <ul>
 * 
 * <li>State: string</li>
 * <li>Country: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_ShipsFromType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'State' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Country' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the State property.
     *
     * @return String State.
     */
    public function getState()
    {
        return $this->_fields['State']['FieldValue'];
    }

    /**
     * Set the value of the State property.
     *
     * @param string state
     * @return this instance
     */
    public function setState($value)
    {
        $this->_fields['State']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if State is set.
     *
     * @return true if State is set.
     */
    public function isSetState()
    {
                return !is_null($this->_fields['State']['FieldValue']);
            }

    /**
     * Set the value of State, return this.
     *
     * @param state
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withState($value)
    {
        $this->setState($value);
        return $this;
    }

    /**
     * Get the value of the Country property.
     *
     * @return String Country.
     */
    public function getCountry()
    {
        return $this->_fields['Country']['FieldValue'];
    }

    /**
     * Set the value of the Country property.
     *
     * @param string country
     * @return this instance
     */
    public function setCountry($value)
    {
        $this->_fields['Country']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Country is set.
     *
     * @return true if Country is set.
     */
    public function isSetCountry()
    {
                return !is_null($this->_fields['Country']['FieldValue']);
            }

    /**
     * Set the value of Country, return this.
     *
     * @param country
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCountry($value)
    {
        $this->setCountry($value);
        return $this;
    }

}
