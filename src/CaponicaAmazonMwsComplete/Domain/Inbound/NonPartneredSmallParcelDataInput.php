<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class NonPartneredSmallParcelDataInput implements Arrayable
{
    const PARAM_CARRIER_NAME = 'CarrierName';
    const PARAM_PACKAGE_LIST = 'PackageList';

    /**
     * @var string
     */
    private $carrierName;

    /**
     * @var NonPartneredSmallParcelPackageInputList
     */
    private $packageList;

    /**
     * NonPartneredSmallParcelDataInput constructor.
     *
     * @param string                                  $carrierName
     * @param NonPartneredSmallParcelPackageInputList $packageList
     */
    public function __construct($carrierName, NonPartneredSmallParcelPackageInputList $packageList)
    {
        $this->carrierName = $carrierName;
        $this->packageList = $packageList;
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
            self::PARAM_PACKAGE_LIST => ['member' => $this->packageList->toArray()],
        ];
    }
}
