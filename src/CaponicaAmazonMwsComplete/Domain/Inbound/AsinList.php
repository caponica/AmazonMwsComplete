<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;
use CaponicaAmazonMwsComplete\Exceptions\MaxQuantityExceededException;
use InvalidArgumentException;

class AsinList implements Arrayable
{
    const MAX_ASIN_COUNT = 50;

    private $asins = [];

    /**
     * AsinList constructor.
     *
     * @param string|string[] $asins
     *
     * @throws MaxQuantityExceededException
     */
    public function __construct($asins)
    {
        if (is_string($asins)) {
            $asins = [$asins];
        }

        if ( ! is_array($asins)) {
            throw new InvalidArgumentException('Invalid $asins argument type. Must be one of `string[]` or `string`.');
        }

        foreach ($asins as $asin) {
            $this->add($asin);
        }
    }

    /**
     * @param string $asin
     *
     * @throws MaxQuantityExceededException
     */
    public function add($asin)
    {
        if (in_array($asin, $this->asins)) {
            return;
        }

        if ( ! is_string($asin)) {
            throw new InvalidArgumentException('Invalid asin type. Must be `string`.');
        }

        if ( ! $this->canAddAsin()) {
            throw new MaxQuantityExceededException('Max count of asins exceeded. Max count allowed: '
                                                   . $this->getMaxAsinCount());
        }

        $this->asins[] = $asin;
    }

    /**
     * @param string $asin
     */
    public function delete($asin)
    {
        $key = array_search($asin, $this->asins);

        if ($key !== false) {
            unset($this->asins[$key]);
        }
    }

    /**
     * @return int
     */
    public function getMaxAsinCount()
    {
        return self::MAX_ASIN_COUNT;
    }

    /**
     * @return int
     */
    public function getAsinCount()
    {
        return count($this->asins);
    }

    /**
     * @return bool
     */
    public function canAddAsin()
    {
        return $this->getAsinCount() < $this->getMaxAsinCount();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->asins;
    }
}
