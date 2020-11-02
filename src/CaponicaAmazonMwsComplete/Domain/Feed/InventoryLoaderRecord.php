<?php

namespace CaponicaAmazonMwsComplete\Domain\Feed;

/**
 * Domain object which encapsulates the data that could be submitted as part of a Price Feed
 *
 * @package CaponicaAmazonMwsComplete\Domain\Feed
 */
final class InventoryLoaderRecord {
    const INVENTORY_LOADER_ID_TYPE_ASIN = 1;
    const INVENTORY_LOADER_ID_TYPE_ISBN = 2;
    const INVENTORY_LOADER_ID_TYPE_UPC  = 3;
    const INVENTORY_LOADER_ID_TYPE_EAN  = 4;

    const INVENTORY_LOADER_CONDITION_USED_LIKE_NEW = 1;
    const INVENTORY_LOADER_CONDITION_USED_VERY_GOOD = 2;
    const INVENTORY_LOADER_CONDITION_USED_GOOD = 3;
    const INVENTORY_LOADER_CONDITION_USED_ACCEPTABLE = 4;
    const INVENTORY_LOADER_CONDITION_COLLECTIBLE_LIKE_NEW = 5;
    const INVENTORY_LOADER_CONDITION_COLLECTIBLE_VERY_GOOD = 6;
    const INVENTORY_LOADER_CONDITION_COLLECTIBLE_GOOD = 7;
    const INVENTORY_LOADER_CONDITION_COLLECTIBLE_ACCEPTABLE = 8;
    const INVENTORY_LOADER_CONDITION_NOT_USED = 9;
    const INVENTORY_LOADER_CONDITION_NEW = 11;

    const INVENTORY_LOADER_ADD_DELETE_CODE_ADD = 'a';
    const INVENTORY_LOADER_ADD_DELETE_CODE_CLOSE = 'd';
    const INVENTORY_LOADER_ADD_DELETE_CODE_DELETE = 'x';

    const INVENTORY_LOADER_FULFILMENT_CENTRE_FBA_EUROPE = 'AMAZON_EU';
    const INVENTORY_LOADER_FULFILMENT_CENTRE_FBA_NORTH_AMERICA = 'AMAZON_NA';
    const INVENTORY_LOADER_FULFILMENT_CENTRE_MERCHANT_FULFILLED = 'DEFAULT';

    private $sku;
    private $identifier;
    private $identifierType;
    private $price;
    private $minPrice;
    private $maxPrice;
    private $condition;
    private $addDeleteCode;
    private $fulfilmentCentre;

    /**
     * SkuPrice constructor, only the first two arguments (Sku and Amount) are required.
     *
     * @param string $sku
     * @param string $price                     Price, ideally a pre-formatted string for direct output
     * @param string $identifier
     * @param null|int $identifierType          Defaults to ASIN
     * @param null|float $minPrice              Optional
     * @param null|float $maxPrice              Optional
     * @param null|int $condition               Defaults to New
     * @param null|string $addDeleteCode        Defaults to Add
     * @param null|string $fulfilmentCentre     Defaults to FBA Europe
     */
    public function __construct($sku, $price, $identifier,
                                $identifierType=null, $minPrice=null, $maxPrice=null,
                                $condition=null, $addDeleteCode=null, $fulfilmentCentre=null)
    {
        if (empty($sku) || empty($identifier) || empty($price)) {
            throw new \InvalidArgumentException("Need to provide at least SKU, Identifier and Price to InventoryLoaderRecord constructor");
        }
        $this->sku = $sku;
        $this->price = $price;
        $this->identifier = $identifier;
        $this->identifierType = $identifierType ?: self::INVENTORY_LOADER_ID_TYPE_ASIN;
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
        $this->condition = $condition ?: self::INVENTORY_LOADER_CONDITION_NEW;
        $this->addDeleteCode = $addDeleteCode ?: self::INVENTORY_LOADER_ADD_DELETE_CODE_ADD;
        $this->fulfilmentCentre = $fulfilmentCentre ?: self::INVENTORY_LOADER_FULFILMENT_CENTRE_FBA_EUROPE;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @return int
     */
    public function getIdentifierType()
    {
        return $this->identifierType;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @return string
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @return string
     */
    public function getAddDeleteCode()
    {
        return $this->addDeleteCode;
    }

    /**
     * @return string
     */
    public function getFulfilmentCentre()
    {
        return $this->fulfilmentCentre;
    }


}