<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentAmount implements Arrayable
{
    const PARAM_CURRENCY_CODE = 'CurrencyCode';
    const PARAM_VALUE = 'Value';

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $value;

    /**
     * TransportContentAmount constructor.
     *
     * @param string $currencyCode
     * @param string $value
     */
    public function __construct($currencyCode, $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value        = $value;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_CURRENCY_CODE => $this->currencyCode,
            self::PARAM_VALUE         => $this->value,
        ];
    }
}
