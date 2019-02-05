<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentWeight implements Arrayable
{
    const VALUE_UNIT_POUNDS = 'pounds';
    const VALUE_UNIT_KILOS = 'kilograms';

    const PARAM_UNIT = 'Unit';
    const PARAM_VALUE = 'Value';

    /**
     * @var string
     */
    private $unit;

    /**
     * @var int
     */
    private $value;

    /**
     * TransportContentWeight constructor.
     *
     * @param string $unit One of 'pounds' or 'kilograms'
     * @param int    $value
     */
    public function __construct($unit, $value)
    {
        $this->unit   = $unit;
        $this->value = $value;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_UNIT  => $this->unit,
            self::PARAM_VALUE => $this->value,
        ];
    }
}
