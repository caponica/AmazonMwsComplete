<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
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
 * @package  FBA Outbound Service MWS
 * @version  2010-10-01
 * Library Version: 2016-02-01
 * Generated: Fri Jan 08 13:26:48 PST 2016
 */

/**
 *  @see FBAOutboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * FBAOutboundServiceMWS_Model_Address
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>Line1: string</li>
 * <li>Line2: string</li>
 * <li>Line3: string</li>
 * <li>DistrictOrCounty: string</li>
 * <li>City: string</li>
 * <li>StateOrProvinceCode: string</li>
 * <li>CountryCode: string</li>
 * <li>PostalCode: string</li>
 * <li>PhoneNumber: string</li>
 *
 * </ul>
 */

 class FBAOutboundServiceMWS_Model_Address extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Line1' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Line2' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Line3' => array('FieldValue' => null, 'FieldType' => 'string'),
    'DistrictOrCounty' => array('FieldValue' => null, 'FieldType' => 'string'),
    'City' => array('FieldValue' => null, 'FieldType' => 'string'),
    'StateOrProvinceCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
    'PhoneNumber' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the Line1 property.
     *
     * @return String Line1.
     */
    public function getLine1()
    {
        return $this->_fields['Line1']['FieldValue'];
    }

    /**
     * Set the value of the Line1 property.
     *
     * @param string line1
     * @return this instance
     */
    public function setLine1($value)
    {
        $this->_fields['Line1']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Line1 is set.
     *
     * @return true if Line1 is set.
     */
    public function isSetLine1()
    {
                return !is_null($this->_fields['Line1']['FieldValue']);
            }

    /**
     * Set the value of Line1, return this.
     *
     * @param line1
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLine1($value)
    {
        $this->setLine1($value);
        return $this;
    }

    /**
     * Get the value of the Line2 property.
     *
     * @return String Line2.
     */
    public function getLine2()
    {
        return $this->_fields['Line2']['FieldValue'];
    }

    /**
     * Set the value of the Line2 property.
     *
     * @param string line2
     * @return this instance
     */
    public function setLine2($value)
    {
        $this->_fields['Line2']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Line2 is set.
     *
     * @return true if Line2 is set.
     */
    public function isSetLine2()
    {
                return !is_null($this->_fields['Line2']['FieldValue']);
            }

    /**
     * Set the value of Line2, return this.
     *
     * @param line2
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLine2($value)
    {
        $this->setLine2($value);
        return $this;
    }

    /**
     * Get the value of the Line3 property.
     *
     * @return String Line3.
     */
    public function getLine3()
    {
        return $this->_fields['Line3']['FieldValue'];
    }

    /**
     * Set the value of the Line3 property.
     *
     * @param string line3
     * @return this instance
     */
    public function setLine3($value)
    {
        $this->_fields['Line3']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Line3 is set.
     *
     * @return true if Line3 is set.
     */
    public function isSetLine3()
    {
                return !is_null($this->_fields['Line3']['FieldValue']);
            }

    /**
     * Set the value of Line3, return this.
     *
     * @param line3
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLine3($value)
    {
        $this->setLine3($value);
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

    /**
     * Get the value of the PhoneNumber property.
     *
     * @return String PhoneNumber.
     */
    public function getPhoneNumber()
    {
        return $this->_fields['PhoneNumber']['FieldValue'];
    }

    /**
     * Set the value of the PhoneNumber property.
     *
     * @param string phoneNumber
     * @return this instance
     */
    public function setPhoneNumber($value)
    {
        $this->_fields['PhoneNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PhoneNumber is set.
     *
     * @return true if PhoneNumber is set.
     */
    public function isSetPhoneNumber()
    {
                return !is_null($this->_fields['PhoneNumber']['FieldValue']);
            }

    /**
     * Set the value of PhoneNumber, return this.
     *
     * @param phoneNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPhoneNumber($value)
    {
        $this->setPhoneNumber($value);
        return $this;
    }

}
