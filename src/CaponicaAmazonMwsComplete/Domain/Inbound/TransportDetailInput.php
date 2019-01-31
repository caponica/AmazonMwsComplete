<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

class TransportDetailInput implements Arrayable
{
    const PARAM_PARTNERED_SMALL_PARCEL_DATA = 'PartneredSmallParcelData';
    const PARAM_NON_PARTNERED_SMALL_PARCEL_DATA = 'NonPartneredSmallParcelData';
    const PARAM_PARTNERED_LTL_DATA = 'PartneredLtlData';
    const PARAM_NON_PARTNERED_LTL_DATA = 'NonPartneredLtlData';

    /**
     * @var PartneredSmallParcelDataInput
     */
    private $partneredSmallParcelData = null;

    /**
     * @var NonPartneredSmallParcelDataInput
     */
    private $nonPartneredSmallParcelData = null;

    /**
     * @var PartneredLtlDataInput
     */
    private $partneredLtlData = null;

    /**
     * @var NonPartneredLtlDataInput
     */
    private $nonPartneredLtlData = null;

    /**
     * @param PartneredSmallParcelDataInput $partneredSmallParcelData
     */
    public function setPartneredSmallParcelData(PartneredSmallParcelDataInput $partneredSmallParcelData)
    {
        $this->partneredSmallParcelData = $partneredSmallParcelData;
    }

    /**
     * @param NonPartneredSmallParcelDataInput $nonPartneredSmallParcelData
     */
    public function setNonPartneredSmallParcelData(NonPartneredSmallParcelDataInput $nonPartneredSmallParcelData)
    {
        $this->nonPartneredSmallParcelData = $nonPartneredSmallParcelData;
    }

    /**
     * @param PartneredLtlDataInput $partneredLtlData
     */
    public function setPartneredLtlData(PartneredLtlDataInput $partneredLtlData)
    {
        $this->partneredLtlData = $partneredLtlData;
    }

    /**
     * @param NonPartneredLtlDataInput $nonPartneredLtlData
     */
    public function setNonPartneredLtlData(NonPartneredLtlDataInput $nonPartneredLtlData)
    {
        $this->nonPartneredLtlData = $nonPartneredLtlData;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $data = [];

        if ($this->partneredSmallParcelData instanceof PartneredSmallParcelDataInput) {
            $data[self::PARAM_PARTNERED_SMALL_PARCEL_DATA] = $this->partneredSmallParcelData->toArray();
        }

        if ($this->nonPartneredSmallParcelData instanceof NonPartneredSmallParcelDataInput) {
            $data[self::PARAM_NON_PARTNERED_SMALL_PARCEL_DATA] = $this->nonPartneredSmallParcelData->toArray();
        }

        if ($this->partneredLtlData instanceof PartneredLtlDataInput) {
            $data[self::PARAM_PARTNERED_LTL_DATA] = $this->partneredLtlData->toArray();
        }

        if ($this->nonPartneredLtlData instanceof NonPartneredLtlDataInput) {
            $data[self::PARAM_NON_PARTNERED_LTL_DATA] = $this->nonPartneredLtlData->toArray();
        }

        return $data;
    }
}
