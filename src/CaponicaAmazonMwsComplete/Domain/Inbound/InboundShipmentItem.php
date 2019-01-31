<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class InboundShipmentItem implements Arrayable
{
    const PARAM_SELLER_SKU = 'SellerSKU';
    const PARAM_QUANTITY_SHIPPED = 'QuantityShipped';
    const PARAM_QUANTITY_IN_CASE = 'QuantityInCase';
    const PARAM_PREP_DETAILS_LIST = 'PrepDetailsList';

    private $sellerSku;
    private $quantityShipped;
    private $quantityInCase;
    private $prepDetailsList;

    /**
     * CreateInboundShipmentItem constructor.
     *
     * @param string               $sellerSku
     * @param int                  $quantityShipped
     * @param int|null             $quantityInCase
     * @param PrepDetailsList|null $prepDetailsList
     */
    public function __construct($sellerSku,
        $quantityShipped,
        $quantityInCase = null,
        PrepDetailsList $prepDetailsList = null)
    {
        $this->sellerSku       = $sellerSku;
        $this->quantityShipped = $quantityShipped;
        $this->quantityInCase  = $quantityInCase;
        $this->prepDetailsList = $prepDetailsList;
    }

    public function getSellerSku()
    {
        return $this->sellerSku;
    }

    public function toArray()
    {
        $item = [
            self::PARAM_SELLER_SKU => $this->sellerSku,
            self::PARAM_QUANTITY_SHIPPED   => $this->quantityShipped,
        ];

        if ( ! empty($this->quantityInCase)) {
            $item[self::PARAM_QUANTITY_IN_CASE] = $this->quantityInCase;
        }

        if ( ! empty($this->prepDetailsList)) {
            $item[self::PARAM_PREP_DETAILS_LIST] = ['member' => $this->prepDetailsList->toArray()];
        }

        return $item;
    }
}
