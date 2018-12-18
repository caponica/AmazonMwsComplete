<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentWeight implements Arrayable
{
    const VALUE_UNIT_POUNDS = 'pounds';
    const VALUE_UNIT_KILOS = 'kilograms';

    const PARAM_UNIT = 'Unit';
    const PARAM_WEIGHT = 'Weight';

    /**
     * @var string
     */
    private $unit;

    /**
     * @var int
     */
    private $weight;

    /**
     * TransportContentWeight constructor.
     *
     * @param string $unit One of 'pounds' or 'kilograms'
     * @param int    $weight
     */
    public function __construct($unit, $weight)
    {
        $this->unit   = $unit;
        $this->weight = $weight;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_UNIT   => $this->unit,
            self::PARAM_WEIGHT => $this->weight,
        ];
    }
}
