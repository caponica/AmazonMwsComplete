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
 * @package  MWS Customer Service
 * @version  2014-03-01
 * Library Version: 2015-06-18
 * Generated: Thu Jun 18 19:32:14 GMT 2015
 */

/**
 *  @see MWSCustomerService_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MWSCustomerService_Model_Address
 * 
 * Properties:
 * <ul>
 * 
 * <li>IsDefaultAddress: bool</li>
 * <li>FullName: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>City: string</li>
 * <li>StateOrRegion: string</li>
 * <li>PostalCode: string</li>
 * <li>CountryCode: string</li>
 *
 * </ul>
 */

 class MWSCustomerService_Model_Address extends MWSCustomerService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'IsDefaultAddress' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'FullName' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'),
    'City' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StateOrRegion' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of IsDefaultAddress.
     *
     * @return true if IsDefaultAddress is set to true.
     */
    public function isIsDefaultAddress()
    {
        return !is_null($this->_fields['IsDefaultAddress']['FieldValue']) && $this->_fields['IsDefaultAddress']['FieldValue'];
    }

    /**
     * Get the value of the IsDefaultAddress property.
     *
     * @return Boolean IsDefaultAddress.
     */
    public function getIsDefaultAddress()
    {
        return $this->_fields['IsDefaultAddress']['FieldValue'];
    }

    /**
     * Set the value of the IsDefaultAddress property.
     *
     * @param bool isDefaultAddress
     * @return this instance
     */
    public function setIsDefaultAddress($value)
    {
        $this->_fields['IsDefaultAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsDefaultAddress is set.
     *
     * @return true if IsDefaultAddress is set.
     */
    public function isSetIsDefaultAddress()
    {
                return !is_null($this->_fields['IsDefaultAddress']['FieldValue']);
            }

    /**
     * Set the value of IsDefaultAddress, return this.
     *
     * @param isDefaultAddress
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsDefaultAddress($value)
    {
        $this->setIsDefaultAddress($value);
        return $this;
    }

    /**
     * Get the value of the FullName property.
     *
     * @return String FullName.
     */
    public function getFullName()
    {
        return $this->_fields['FullName']['FieldValue'];
    }

    /**
     * Set the value of the FullName property.
     *
     * @param string fullName
     * @return this instance
     */
    public function setFullName($value)
    {
        $this->_fields['FullName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FullName is set.
     *
     * @return true if FullName is set.
     */
    public function isSetFullName()
    {
                return !is_null($this->_fields['FullName']['FieldValue']);
            }

    /**
     * Set the value of FullName, return this.
     *
     * @param fullName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFullName($value)
    {
        $this->setFullName($value);
        return $this;
    }

    /**
     * Get the value of the AddressLine1 property.
     *
     * @return String AddressLine1.
     */
    public function getAddressLine1()
    {
        return $this->_fields['AddressLine1']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine1 property.
     *
     * @param string addressLine1
     * @return this instance
     */
    public function setAddressLine1($value)
    {
        $this->_fields['AddressLine1']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressLine1 is set.
     *
     * @return true if AddressLine1 is set.
     */
    public function isSetAddressLine1()
    {
                return !is_null($this->_fields['AddressLine1']['FieldValue']);
            }

    /**
     * Set the value of AddressLine1, return this.
     *
     * @param addressLine1
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAddressLine1($value)
    {
        $this->setAddressLine1($value);
        return $this;
    }

    /**
     * Get the value of the AddressLine2 property.
     *
     * @return String AddressLine2.
     */
    public function getAddressLine2()
    {
        return $this->_fields['AddressLine2']['FieldValue'];
    }

    /**
     * Set the value of the AddressLine2 property.
     *
     * @param string addressLine2
     * @return this instance
     */
    public function setAddressLine2($value)
    {
        $this->_fields['AddressLine2']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AddressLine2 is set.
     *
     * @return true if AddressLine2 is set.
     */
    public function isSetAddressLine2()
    {
                return !is_null($this->_fields['AddressLine2']['FieldValue']);
            }

    /**
     * Set the value of AddressLine2, return this.
     *
     * @param addressLine2
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAddressLine2($value)
    {
        $this->setAddressLine2($value);
        return $this;
    }

    /**
     * Get the value of the City property.
     *
     * @return String City.
     */
    public function getCity()
    {
        return $this->_fields['City']['FieldValue'];
    }

    /**
     * Set the value of the City property.
     *
     * @param string city
     * @return this instance
     */
    public function setCity($value)
    {
        $this->_fields['City']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if City is set.
     *
     * @return true if City is set.
     */
    public function isSetCity()
    {
                return !is_null($this->_fields['City']['FieldValue']);
            }

    /**
     * Set the value of City, return this.
     *
     * @param city
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCity($value)
    {
        $this->setCity($value);
        return $this;
    }

    /**
     * Get the value of the StateOrRegion property.
     *
     * @return String StateOrRegion.
     */
    public function getStateOrRegion()
    {
        return $this->_fields['StateOrRegion']['FieldValue'];
    }

    /**
     * Set the value of the StateOrRegion property.
     *
     * @param string stateOrRegion
     * @return this instance
     */
    public function setStateOrRegion($value)
    {
        $this->_fields['StateOrRegion']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StateOrRegion is set.
     *
     * @return true if StateOrRegion is set.
     */
    public function isSetStateOrRegion()
    {
                return !is_null($this->_fields['StateOrRegion']['FieldValue']);
            }

    /**
     * Set the value of StateOrRegion, return this.
     *
     * @param stateOrRegion
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStateOrRegion($value)
    {
        $this->setStateOrRegion($value);
        return $this;
    }

    /**
     * Get the value of the PostalCode property.
     *
     * @return String PostalCode.
     */
    public function getPostalCode()
    {
        return $this->_fields['PostalCode']['FieldValue'];
    }

    /**
     * Set the value of the PostalCode property.
     *
     * @param string postalCode
     * @return this instance
     */
    public function setPostalCode($value)
    {
        $this->_fields['PostalCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostalCode is set.
     *
     * @return true if PostalCode is set.
     */
    public function isSetPostalCode()
    {
                return !is_null($this->_fields['PostalCode']['FieldValue']);
            }

    /**
     * Set the value of PostalCode, return this.
     *
     * @param postalCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostalCode($value)
    {
        $this->setPostalCode($value);
        return $this;
    }

    /**
     * Get the value of the CountryCode property.
     *
     * @return String CountryCode.
     */
    public function getCountryCode()
    {
        return $this->_fields['CountryCode']['FieldValue'];
    }

    /**
     * Set the value of the CountryCode property.
     *
     * @param string countryCode
     * @return this instance
     */
    public function setCountryCode($value)
    {
        $this->_fields['CountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CountryCode is set.
     *
     * @return true if CountryCode is set.
     */
    public function isSetCountryCode()
    {
                return !is_null($this->_fields['CountryCode']['FieldValue']);
            }

    /**
     * Set the value of CountryCode, return this.
     *
     * @param countryCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCountryCode($value)
    {
        $this->setCountryCode($value);
        return $this;
    }

}
