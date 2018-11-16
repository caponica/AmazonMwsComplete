<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;
use CaponicaAmazonMwsComplete\Exceptions\DuplicateItemException;
use CaponicaAmazonMwsComplete\Exceptions\MaxQuantityExceededException;
use InvalidArgumentException;

final class InboundShipmentItemList implements Arrayable
{
    const MAX_SELLER_SKU_COUNT = 200;

    /**
     * @var InboundShipmentItem[]
     */
    private $items = [];

    /**
     * List of items to include in the CreateInboundShipmentPlan request.
     *
     * Duplicate SellerSKU's are not allowed.
     * A maximum of 200 SellerSKU's are allowed per request.
     *
     * @param InboundShipmentItem $item
     *
     * @throws MaxQuantityExceededException
     * @throws DuplicateItemException
     *
     * @return InboundShipmentItemList
     */
    public function add(InboundShipmentItem $item)
    {
        if ( ! $this->canAddItems()) {
            throw new MaxQuantityExceededException('Max count of inbound shipment items exceeded. Max count allowed: '
                                                          . $this->getMaxItemCount());
        }

        if (array_key_exists($item->getSellerSku(), $this->items)) {
            throw new DuplicateItemException('Duplicate SellerSku in inbound shipment item list not allowed: '
                                                          . $item->getSellerSku());
        }

        $this->items[$item->getSellerSku()] = $item->toArray();

        return $this;
    }

    /**
     * @param InboundShipmentItem $item
     *
     * @return $this
     */
    public function update(InboundShipmentItem $item)
    {
        if ( ! array_key_exists($item->getSellerSku(), $this->items)) {
            throw new InvalidArgumentException('Cannot update missing inbound shipment item for sku: '
                                               . $item->getSellerSku());
        }

        $this->items[$item->getSellerSku()] = $item->toArray();

        return $this;
    }

    /**
     * @param InboundShipmentItem $item
     *
     * @return InboundShipmentItemList
     */
    public function delete(InboundShipmentItem $item)
    {
        if (array_key_exists($item->getSellerSku(), $this->items)) {
            unset($this->items[$item->getSellerSku()]);
        }

        return $this;
    }

    /**
     * @param string $sellerSku
     *
     * @return InboundShipmentItem|null
     */
    public function getItemBySku($sellerSku)
    {
        return array_key_exists($sellerSku(), $this->items) ? $this->items[$sellerSku] : null;
    }

    /**
     * @return int
     */
    public function getMaxItemCount()
    {
        return self::MAX_SELLER_SKU_COUNT;
    }

    /**
     * @return int
     */
    public function getItemCount()
    {
        return count($this->items);
    }

    /**
     * @return bool
     */
    public function canAddItems()
    {
        return $this->getItemCount() < $this->getMaxItemCount();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_values($this->items);
    }
}
