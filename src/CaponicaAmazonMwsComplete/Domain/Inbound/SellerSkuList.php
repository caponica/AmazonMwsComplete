<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;
use CaponicaAmazonMwsComplete\Exceptions\MaxQuantityExceededException;
use InvalidArgumentException;

class SellerSkuList implements Arrayable
{
    const MAX_SELLER_SKU_COUNT = 50;

    private $sellerSkus = [];

    /**
     * SellerSkuList constructor.
     *
     * @param string|string[] $sellerSkus
     *
     * @throws MaxQuantityExceededException
     */
    public function __construct($sellerSkus)
    {
        if (is_string($sellerSkus)) {
            $sellerSkus = [$sellerSkus];
        }

        if ( ! is_array($sellerSkus)) {
            throw new InvalidArgumentException('Invalid $sellerSkus argument type. Must be one of `string[]` or `string`.');
        }

        foreach ($sellerSkus as $sellerSku) {
            $this->add($sellerSku);
        }
    }

    /**
     * @param string $sellerSku
     *
     * @throws MaxQuantityExceededException
     */
    public function add($sellerSku)
    {
        if (in_array($sellerSku, $this->sellerSkus)) {
            return;
        }

        if ( ! is_string($sellerSku)) {
            throw new InvalidArgumentException('Invalid sku type. Must be `string`.');
        }

        if ( ! $this->canAddSku()) {
            throw new MaxQuantityExceededException('Max count of seller skus exceeded. Max count allowed: '
                                                   . $this->getMaxSkuCount());
        }

        $this->sellerSkus[] = $sellerSku;
    }

    /**
     * @param string $sellerSku
     */
    public function delete($sellerSku)
    {
        $key = array_search($sellerSku, $this->sellerSkus);

        if ($key !== false) {
            unset($this->sellerSkus[$key]);
        }
    }

    /**
     * @return int
     */
    public function getMaxSkuCount()
    {
        return self::MAX_SELLER_SKU_COUNT;
    }

    /**
     * @return int
     */
    public function getSkuCount()
    {
        return count($this->sellerSkus);
    }

    /**
     * @return bool
     */
    public function canAddSku()
    {
        return $this->getSkuCount() < $this->getMaxSkuCount();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->sellerSkus;
    }
}
