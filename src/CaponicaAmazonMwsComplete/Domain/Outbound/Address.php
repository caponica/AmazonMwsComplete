<?php

namespace CaponicaAmazonMwsComplete\Domain\Outbound;

/**
 * Domain object which encapsulates the Address data that could be submitted as part of an Outbound call
 *
 * @package CaponicaAmazonMwsComplete\Domain\Outbound
 */
final class Address {
    private $name;
    private $line1;
    private $city;
    private $stateOrProvinceCode;
    private $postalCode;
    private $countryCode;
    private $line2;
    private $line3;
    private $districtOrCounty;
    private $phoneNumber;

    const PARAM_NAME                = 'Name';
    const PARAM_LINE1               = 'Line1';
    const PARAM_CITY                = 'City';
    const PARAM_STATE_CODE          = 'StateOrProvinceCode';
    const PARAM_POSTAL_CODE         = 'PostalCode';
    const PARAM_COUNTRY_CODE        = 'CountryCode';
    const PARAM_LINE2               = 'Line2';
    const PARAM_LINE3               = 'Line3';
    const PARAM_DISTRICT_COUNTY     = 'Districtorcounty';
    const PARAM_PHONE_NUMBER        = 'PhoneNumber';

    /**
     * Address constructor
     *
     * @param  string $name
     * @param  string $line1
     * @param  string $city
     * @param  string $stateOrProvinceCode
     * @param  string $postalCode
     * @param  string $countryCode
     * @param  string $line2
     * @param  string $line3
     * @param  string $districtOrCounty
     * @param  string $phoneNumber
     */
    public function __construct(
        $name, $line1, $city, $stateOrProvinceCode, $postalCode=null, $countryCode,
        $line2=null, $line3=null, $districtOrCounty=null, $phoneNumber=null
    ) {
        $this->name                 = $name;
        $this->line1                = $line1;
        $this->line2                = $line2;
        $this->line3                = $line3;
        $this->districtOrCounty     = $districtOrCounty;
        $this->city                 = $city;
        $this->stateOrProvinceCode  = $stateOrProvinceCode;
        $this->countryCode          = $countryCode;
        $this->postalCode           = $postalCode;
        $this->phoneNumber          = $phoneNumber;
    }

    public function getArray() {
        $array = [
            self::PARAM_NAME                => $this->name,
            self::PARAM_LINE1               => $this->line1,
            self::PARAM_CITY                => $this->city,
            self::PARAM_STATE_CODE          => $this->stateOrProvinceCode,
            self::PARAM_POSTAL_CODE         => $this->postalCode,
            self::PARAM_COUNTRY_CODE        => $this->countryCode,
        ];


        if (!empty($this->line2)) {
            $array[self::PARAM_LINE2] = $this->line2;
        }
        if (!empty($this->line3)) {
            $array[self::PARAM_LINE3] = $this->line3;
        }
        if (!empty($this->districtOrCounty)) {
            $array[self::PARAM_DISTRICT_COUNTY] = $this->districtOrCounty;
        }
        if (!empty($this->phoneNumber)) {
            $array[self::PARAM_PHONE_NUMBER] = $this->phoneNumber;
        }

        return $array;
    }
}
