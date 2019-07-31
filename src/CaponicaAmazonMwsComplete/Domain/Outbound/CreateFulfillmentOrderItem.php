<?php

namespace CaponicaAmazonMwsComplete\Domain\Outbound;

/**
 * Domain object which encapsulates CreateFulfillmentOrderItem data that could be submitted as part of an Outbound call
 *
 * @package CaponicaAmazonMwsComplete\Domain\Outbound
 */
final class CreateFulfillmentOrderItem {
    private $sellerSKU;
    private $sellerItemId;
    private $quantity;
    private $displayableComment;
    private $fulfillmentNetworkSKU;
    private $perUnitDeclaredValue;
    private $perUnitPrice;
    private $perUnitTax;

    const PARAM_SELLER_SKU              = 'SellerSKU';
    const PARAM_SELLER_ITEM_ID          = 'SellerFulfillmentOrderItemId';
    const PARAM_QUANTITY                = 'Quantity';
    const PARAM_DISPLAYABLE_COMMENT     = 'DisplayableComment';
    const PARAM_FNSKU                   = 'FulfillmentNetworkSKU';
    const PARAM_PER_UNIT_DECLARED_VALUE = 'PerUnitDeclaredValue';
    const PARAM_PER_UNIT_PRICE          = 'PerUnitPrice';
    const PARAM_PER_UNIT_TAX            = 'PerUnitTax';

    /**
     * Address constructor
     *
     * @param  string $sellerSKU
     * @param  string $sellerItemId
     * @param  string $quantity
     * @param  string $displayableComment
     * @param  string $fulfillmentNetworkSKU
     * @param  string $perUnitDeclaredValue
     * @param  string $perUnitPrice
     * @param  string $perUnitTax
     */
    public function __construct(
        $sellerSKU, $sellerItemId, $quantity,
        $displayableComment=null, $fulfillmentNetworkSKU=null,
        $perUnitDeclaredValue=null, $perUnitPrice=null, $perUnitTax=null
    ) {
        $this->sellerSKU                = $sellerSKU;
        $this->sellerItemId             = $sellerItemId;
        $this->quantity                 = $quantity;
        $this->displayableComment       = $displayableComment;
        $this->fulfillmentNetworkSKU    = $fulfillmentNetworkSKU;
        $this->perUnitDeclaredValue     = $perUnitDeclaredValue;
        $this->perUnitPrice             = $perUnitPrice;
        $this->perUnitTax               = $perUnitTax;
    }

    public function getArray() {
        $array = [
            self::PARAM_SELLER_SKU              => $this->sellerSKU,
            self::PARAM_SELLER_ITEM_ID          => $this->sellerItemId,
            self::PARAM_QUANTITY                => $this->quantity,
        ];


        if (!empty($this->displayableComment)) {
            $array[self::PARAM_DISPLAYABLE_COMMENT] = $this->displayableComment;
        }
        if (!empty($this->fulfillmentNetworkSKU)) {
            $array[self::PARAM_FNSKU] = $this->fulfillmentNetworkSKU;
        }
        if (!empty($this->perUnitDeclaredValue)) {
            $array[self::PARAM_PER_UNIT_DECLARED_VALUE] = $this->perUnitDeclaredValue;
        }
        if (!empty($this->perUnitPrice)) {
            $array[self::PARAM_PER_UNIT_PRICE] = $this->perUnitPrice;
        }
        if (!empty($this->perUnitTax)) {
            $array[self::PARAM_PER_UNIT_TAX] = $this->perUnitTax;
        }

        return $array;
    }
}
