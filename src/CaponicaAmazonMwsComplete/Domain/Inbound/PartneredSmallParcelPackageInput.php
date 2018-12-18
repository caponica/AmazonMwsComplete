<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class PartneredSmallParcelPackageInput implements Arrayable
{
    const PARAM_DIMENSIONS = 'Dimensions';
    const PARAM_WEIGHT = 'Weight';

    /**
     * @var TransportContentDimensions
     */
    private $dimensions;

    /**
     * @var TransportContentWeight
     */
    private $weight;

    /**
     * PartneredSmallParcelPackageInput constructor.
     *
     * @param TransportContentDimensions $dimensions
     * @param TransportContentWeight     $weight
     */
    public function __construct(TransportContentDimensions $dimensions, TransportContentWeight $weight)
    {
        $this->dimensions = $dimensions;
        $this->weight     = $weight;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_DIMENSIONS => $this->dimensions->toArray(),
            self::PARAM_WEIGHT     => $this->weight->toArray(),
        ];
    }
}
