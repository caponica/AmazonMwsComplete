<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class InboundShipmentPlanRequestItem implements Arrayable
{
    const PARAM_SELLER_SKU = 'SellerSKU';
    const PARAM_ASIN = 'ASIN';
    const PARAM_CONDITION = 'Condition';
    const PARAM_QUANTITY = 'Quantity';
    const PARAM_QUANTITY_IN_CASE = 'QuantityInCase';
    const PARAM_PREP_DETAILS_LIST = 'PrepDetailsList';

    private $sellerSku;
    private $asin;
    private $condition;
    private $quantity;
    private $quantityInCase;
    private $prepDetailsList;

    /**
     * CreateInboundShipmentPlanRequestItem constructor.
     *
     * @param string               $sellerSku
     * @param int                  $quantity
     * @param int|null             $quantityInCase
     * @param string|null          $asin
     * @param string|null          $condition
     * @param PrepDetailsList|null $prepDetailsList
     */
    public function __construct($sellerSku,
        $quantity,
        $quantityInCase = null,
        $asin = null,
        $condition = null,
        PrepDetailsList $prepDetailsList = null)
    {
        $this->sellerSku       = $sellerSku;
        $this->asin            = $asin;
        $this->condition       = $condition;
        $this->quantity        = $quantity;
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
            self::PARAM_QUANTITY   => $this->quantity,
        ];

        if ( ! empty($this->quantityInCase)) {
            $item[self::PARAM_QUANTITY_IN_CASE] = $this->quantityInCase;
        }

        if ( ! empty($this->asin)) {
            $item[self::PARAM_ASIN] = $this->asin;
        }

        if ( ! empty($this->condition)) {
            $item[self::PARAM_CONDITION] = $this->condition;
        }

        if ( ! empty($this->prepDetailsList)) {
            $item[self::PARAM_PREP_DETAILS_LIST] = ['member' => $this->prepDetailsList->toArray()];
        }

        return $item;
    }
}
