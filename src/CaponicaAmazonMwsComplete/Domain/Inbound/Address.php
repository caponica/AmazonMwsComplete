<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

/**
 * Domain object which encapsulates the Address data that could be submitted as part of an Inbound call
 *
 * @package CaponicaAmazonMwsComplete\Domain\Inbound
 */
final class Address implements Arrayable
{
    const PARAM_NAME = 'Name';
    const PARAM_ADDRESS_LINE_1 = 'AddressLine1';
    const PARAM_ADDRESS_LINE_2 = 'AddressLine2';
    const PARAM_CITY = 'City';
    const PARAM_DISTRICT_OR_COUNTY = 'DistrictOrCounty';
    const PARAM_STATE_OR_PROVINCE_CODE = 'StateOrProvinceCode';
    const PARAM_COUNTRY_CODE = 'CountryCode';
    const PARAM_POSTAL_CODE = 'PostalCode';

    private $name;
    private $addressLine1;
    private $addressLine2;
    private $city;
    private $districtOrCounty;
    private $stateOrProvinceCode;
    private $countryCode;
    private $postalCode;

    public function __construct($name,
        $addressLine1,
        $city,
        $stateOrProvinceCode,
        $countryCode,
        $postalCode,
        $addressLine2 = null,
        $districtOrCounty = null)
    {
        $this->name                = $name;
        $this->addressLine1        = $addressLine1;
        $this->city                = $city;
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        $this->countryCode         = $countryCode;
        $this->postalCode          = $postalCode;
        $this->addressLine2        = $addressLine2;
        $this->districtOrCounty    = $districtOrCounty;
    }

    public function toArray()
    {
        $address = [
            self::PARAM_NAME                   => $this->name,
            self::PARAM_ADDRESS_LINE_1         => $this->addressLine1,
            self::PARAM_CITY                   => $this->city,
            self::PARAM_STATE_OR_PROVINCE_CODE => $this->stateOrProvinceCode,
            self::PARAM_COUNTRY_CODE           => $this->countryCode,
            self::PARAM_POSTAL_CODE            => $this->postalCode,
        ];

        if ( ! empty($this->addressLine2)) {
            $address[self::PARAM_ADDRESS_LINE_2] = $this->addressLine2;
        }

        if ( ! empty($this->districtOrCounty)) {
            $address[self::PARAM_DISTRICT_OR_COUNTY] = $this->districtOrCounty;
        }

        return $address;
    }
}
