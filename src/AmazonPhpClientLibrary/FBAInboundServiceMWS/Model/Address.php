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
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-10-05
 * Generated: Thu Nov 08 11:45:48 PST 2018
 */

/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAInboundServiceMWS_Model_Address
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>AddressLine1: string</li>
 * <li>AddressLine2: string</li>
 * <li>DistrictOrCounty: string</li>
 * <li>City: string</li>
 * <li>StateOrProvinceCode: string</li>
 * <li>CountryCode: string</li>
 * <li>PostalCode: string</li>
 *
 * </ul>
 */

 class FBAInboundServiceMWS_Model_Address extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AddressLine1' => array('FieldValue' => null, 'FieldType' => 'string'),
    'AddressLine2' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DistrictOrCounty' => array('FieldValue' => null, 'FieldType' => 'string'),
    'City' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StateOrProvinceCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
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
     * Get the value of the DistrictOrCounty property.
     *
     * @return String DistrictOrCounty.
     */
    public function getDistrictOrCounty()
    {
        return $this->_fields['DistrictOrCounty']['FieldValue'];
    }

    /**
     * Set the value of the DistrictOrCounty property.
     *
     * @param string districtOrCounty
     * @return this instance
     */
    public function setDistrictOrCounty($value)
    {
        $this->_fields['DistrictOrCounty']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DistrictOrCounty is set.
     *
     * @return true if DistrictOrCounty is set.
     */
    public function isSetDistrictOrCounty()
    {
                return !is_null($this->_fields['DistrictOrCounty']['FieldValue']);
            }

    /**
     * Set the value of DistrictOrCounty, return this.
     *
     * @param districtOrCounty
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDistrictOrCounty($value)
    {
        $this->setDistrictOrCounty($value);
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
     * Get the value of the StateOrProvinceCode property.
     *
     * @return String StateOrProvinceCode.
     */
    public function getStateOrProvinceCode()
    {
        return $this->_fields['StateOrProvinceCode']['FieldValue'];
    }

    /**
     * Set the value of the StateOrProvinceCode property.
     *
     * @param string stateOrProvinceCode
     * @return this instance
     */
    public function setStateOrProvinceCode($value)
    {
        $this->_fields['StateOrProvinceCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if StateOrProvinceCode is set.
     *
     * @return true if StateOrProvinceCode is set.
     */
    public function isSetStateOrProvinceCode()
    {
                return !is_null($this->_fields['StateOrProvinceCode']['FieldValue']);
            }

    /**
     * Set the value of StateOrProvinceCode, return this.
     *
     * @param stateOrProvinceCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStateOrProvinceCode($value)
    {
        $this->setStateOrProvinceCode($value);
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

}
