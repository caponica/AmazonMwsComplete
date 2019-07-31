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
 * MarketplaceWebServiceProducts_Model_DetailedShippingTimeType
 * 
 * Properties:
 * <ul>
 * 
 * <li>minimumHours: int</li>
 * <li>maximumHours: int</li>
 * <li>availableDate: string</li>
 * <li>availabilityType: string</li>
 *
 * </ul>
 */

 class MarketplaceWebServiceProducts_Model_DetailedShippingTimeType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'minimumHours' => array('FieldValue' => null, 'FieldType' => '@int'),
    'maximumHours' => array('FieldValue' => null, 'FieldType' => '@int'),
    'availableDate' => array('FieldValue' => null, 'FieldType' => '@string'),
    'availabilityType' => array('FieldValue' => null, 'FieldType' => '@string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the minimumHours property.
     *
     * @return Long minimumHours.
     */
    public function getminimumHours()
    {
        return $this->_fields['minimumHours']['FieldValue'];
    }

    /**
     * Set the value of the minimumHours property.
     *
     * @param int minimumHours
     * @return this instance
     */
    public function setminimumHours($value)
    {
        $this->_fields['minimumHours']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if minimumHours is set.
     *
     * @return true if minimumHours is set.
     */
    public function isSetminimumHours()
    {
                return !is_null($this->_fields['minimumHours']['FieldValue']);
            }

    /**
     * Set the value of minimumHours, return this.
     *
     * @param minimumHours
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withminimumHours($value)
    {
        $this->setminimumHours($value);
        return $this;
    }

    /**
     * Get the value of the maximumHours property.
     *
     * @return Long maximumHours.
     */
    public function getmaximumHours()
    {
        return $this->_fields['maximumHours']['FieldValue'];
    }

    /**
     * Set the value of the maximumHours property.
     *
     * @param int maximumHours
     * @return this instance
     */
    public function setmaximumHours($value)
    {
        $this->_fields['maximumHours']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if maximumHours is set.
     *
     * @return true if maximumHours is set.
     */
    public function isSetmaximumHours()
    {
                return !is_null($this->_fields['maximumHours']['FieldValue']);
            }

    /**
     * Set the value of maximumHours, return this.
     *
     * @param maximumHours
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withmaximumHours($value)
    {
        $this->setmaximumHours($value);
        return $this;
    }

    /**
     * Get the value of the availableDate property.
     *
     * @return XMLGregorianCalendar availableDate.
     */
    public function getavailableDate()
    {
        return $this->_fields['availableDate']['FieldValue'];
    }

    /**
     * Set the value of the availableDate property.
     *
     * @param string availableDate
     * @return this instance
     */
    public function setavailableDate($value)
    {
        $this->_fields['availableDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if availableDate is set.
     *
     * @return true if availableDate is set.
     */
    public function isSetavailableDate()
    {
                return !is_null($this->_fields['availableDate']['FieldValue']);
            }

    /**
     * Set the value of availableDate, return this.
     *
     * @param availableDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withavailableDate($value)
    {
        $this->setavailableDate($value);
        return $this;
    }

    /**
     * Get the value of the availabilityType property.
     *
     * @return String availabilityType.
     */
    public function getavailabilityType()
    {
        return $this->_fields['availabilityType']['FieldValue'];
    }

    /**
     * Set the value of the availabilityType property.
     *
     * @param string availabilityType
     * @return this instance
     */
    public function setavailabilityType($value)
    {
        $this->_fields['availabilityType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if availabilityType is set.
     *
     * @return true if availabilityType is set.
     */
    public function isSetavailabilityType()
    {
                return !is_null($this->_fields['availabilityType']['FieldValue']);
            }

    /**
     * Set the value of availabilityType, return this.
     *
     * @param availabilityType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withavailabilityType($value)
    {
        $this->setavailabilityType($value);
        return $this;
    }

}
