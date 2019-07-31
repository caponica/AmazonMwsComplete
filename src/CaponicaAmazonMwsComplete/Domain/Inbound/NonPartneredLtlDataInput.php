<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class NonPartneredLtlDataInput implements Arrayable
{
    const VALUE_CARRIER_NAME_UK_BUSINESS_POST = 'BUSINESS_POST';
    const VALUE_CARRIER_NAME_UK_DHL_AIRWAYS_INC = 'DHL_AIRWAYS_INC';
    const VALUE_CARRIER_NAME_UK_DHL_UK = 'DHL_UK';
    const VALUE_CARRIER_NAME_UK_PARCELFORCE = 'PARCELFORCE';
    const VALUE_CARRIER_NAME_UK_DPD = 'DPD';
    const VALUE_CARRIER_NAME_UK_TNT_LOGISTICS_CORPORATION = 'TNT_LOGISTICS_CORPORATION';
    const VALUE_CARRIER_NAME_UK_TNT = 'TNT';
    const VALUE_CARRIER_NAME_UK_YODEL = 'YODEL';
    const VALUE_CARRIER_NAME_US_DHL_EXPRESS_USA_INC = 'DHL_EXPRESS_USA_INC';
    const VALUE_CARRIER_NAME_US_FEDERAL_EXPRESS_CORP = 'FEDERAL_EXPRESS_CORP';
    const VALUE_CARRIER_NAME_US_UNITED_STATES_POSTAL_SERVICE = 'UNITED_STATES_POSTAL_SERVICE';
    const VALUE_CARRIER_NAME_UNITED_PARCEL_SERVICE_INC = 'UNITED_PARCEL_SERVICE_INC';
    const VALUE_CARRIER_NAME_OTHER = 'OTHER';

    const PARAM_CARRIER_NAME = 'CarrierName';
    const PARAM_PRO_NUMBER = 'ProNumber';

    /**
     * @var string One of VALUE_CARRIER_NAME_* constants
     */
    private $carrierName;

    /**
     * @var string
     */
    private $proNumber;

    /**
     * NonPartneredLtlDataInput constructor.
     *
     * @param string $carrierName
     * @param string $proNumber
     */
    public function __construct($carrierName, $proNumber)
    {
        $this->carrierName = $carrierName;
        $this->proNumber   = $proNumber;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_CARRIER_NAME => $this->carrierName,
            self::PARAM_PRO_NUMBER   => $this->proNumber,
        ];
    }
}
