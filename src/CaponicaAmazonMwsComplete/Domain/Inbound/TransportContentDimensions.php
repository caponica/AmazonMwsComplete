<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentDimensions implements Arrayable
{
    const VALUE_UNIT_INCHES = 'inches';
    const VALUE_UNIT_CENTIMETERS = 'centimeters';

    const PARAM_UNIT = 'Unit';
    const PARAM_LENGTH = 'Length';
    const PARAM_WIDTH = 'Width';
    const PARAM_HEIGHT = 'Height';

    /**
     * @var string
     */
    private $unit;

    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * TransportContentDimensions constructor.
     *
     * @param string $unit One of 'inches' or 'centimeters'
     * @param float  $length
     * @param float  $width
     * @param float  $height
     */
    public function __construct($unit, $length, $width, $height)
    {
        $this->unit   = $unit;
        $this->length = $length;
        $this->width  = $width;
        $this->height = $height;
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
            self::PARAM_LENGTH => $this->length,
            self::PARAM_WIDTH  => $this->width,
            self::PARAM_HEIGHT => $this->height,
        ];
    }
}
