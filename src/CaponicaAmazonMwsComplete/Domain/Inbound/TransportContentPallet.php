<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentPallet implements Arrayable
{
    const PARAM_IS_STACKED = 'IsStacked';
    const PARAM_DIMENSIONS = 'Dimensions';
    const PARAM_WEIGHT = 'Weight';

    /**
     * @var bool
     */
    private $isStacked;

    /**
     * @var TransportContentDimensions
     */
    private $dimensions;

    /**
     * @var TransportContentWeight|null
     */
    private $weight;

    /**
     * TransportContentPallet constructor.
     *
     * @param bool                        $isStacked
     * @param TransportContentDimensions  $dimensions
     * @param TransportContentWeight|null $weight
     */
    public function __construct($isStacked, $dimensions, $weight = null)
    {
        $this->isStacked  = $isStacked;
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
        $pallet = [
            self::PARAM_IS_STACKED => $this->isStacked,
            self::PARAM_DIMENSIONS => $this->dimensions->toArray(),
        ];

        if ($this->weight instanceof TransportContentWeight) {
            $pallet[self::PARAM_WEIGHT] = $this->weight->toArray();
        }

        return $pallet;
    }
}
