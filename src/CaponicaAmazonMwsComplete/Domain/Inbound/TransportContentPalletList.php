<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentPalletList implements Arrayable
{
    /**
     * @var TransportContentPallet[]
     */
    private $pallets = [];

    /**
     * @param TransportContentPallet $pallet
     */
    public function add(TransportContentPallet $pallet)
    {
        $this->pallets[] = $pallet->toArray();
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->pallets;
    }
}
