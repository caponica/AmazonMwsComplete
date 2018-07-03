<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an orders flat file
 */
class ReportFbaSalesAllByLastUpdateFlatFileRecord extends BaseMwsReportRecord {
    private $amazonOrderId;
    private $merchantOrderId;
    private $purchaseDate;
    private $lastUpdatedDate;
    private $orderStatus;
    private $fulfillmentChannel;
    private $salesChannel;
    private $orderChannel;
    private $url;
    private $shipServiceLevel;
    private $productName;
    private $sku;
    private $asin;
    private $itemStatus;
    private $quantity;
    private $currency;
    private $itemPrice;
    private $itemTax;
    private $shippingPrice;
    private $shippingTax;
    private $giftWrapPrice;
    private $giftWrapTax;
    private $itemPromotionDiscount;
    private $shipPromotionDiscount;
    private $shipCity;
    private $shipState;
    private $shipPostalCode;
    private $shipCountry;
    private $promotionIds;
    private $isBusinessOrder;
    private $purchaseOrderNumber;
    private $priceDesignation;

    /**
     * ReportFBASalesAllByLastUpdateFlatFileRecord constructor.
     *
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow) {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaSalesAllByLastUpdateFlatFile::EXPECTED_FIELD_COUNT);

        $this->amazonOrderId            = $fieldArray[0];
        $this->merchantOrderId          = $fieldArray[1];
        $this->purchaseDate             = $fieldArray[2];
        $this->lastUpdatedDate          = $fieldArray[3];
        $this->orderStatus              = $fieldArray[4];
        $this->fulfillmentChannel       = $fieldArray[5];
        $this->salesChannel             = $fieldArray[6];
        $this->orderChannel             = $fieldArray[7];
        $this->url                      = $fieldArray[8];
        $this->shipServiceLevel         = $fieldArray[9];
        $this->productName              = $fieldArray[10];
        $this->sku                      = $fieldArray[11];
        $this->asin                     = $fieldArray[12];
        $this->itemStatus               = $fieldArray[13];
        $this->quantity                 = $fieldArray[14];
        $this->currency                 = $fieldArray[15];
        $this->itemPrice                = $fieldArray[16];
        $this->itemTax                  = $fieldArray[17];
        $this->shippingPrice            = $fieldArray[18];
        $this->shippingTax              = $fieldArray[19];
        $this->giftWrapPrice            = $fieldArray[20];
        $this->giftWrapTax              = $fieldArray[21];
        $this->itemPromotionDiscount    = $fieldArray[22];
        $this->shipPromotionDiscount    = $fieldArray[23];
        $this->shipCity                 = $fieldArray[24];
        $this->shipState                = $fieldArray[25];
        $this->shipPostalCode           = $fieldArray[26];
        $this->shipCountry              = $fieldArray[27];
        $this->promotionIds             = $fieldArray[28];
        $this->isBusinessOrder          = $fieldArray[29];
        $this->purchaseOrderNumber      = $fieldArray[30];
        $this->priceDesignation         = $fieldArray[31];
    }

    /** Basic getters below here */
    public function getAmazonOrderId() {
        return $this->amazonOrderId;
    }
    public function getMerchantOrderId() {
        return $this->merchantOrderId;
    }
    public function getPurchaseDate() {
        return $this->purchaseDate;
    }
    public function getLastUpdatedDate() {
        return $this->lastUpdatedDate;
    }
    public function getOrderStatus() {
        return $this->orderStatus;
    }
    public function getFulfillmentChannel() {
        return $this->fulfillmentChannel;
    }
    public function getSalesChannel() {
        return $this->salesChannel;
    }
    public function getOrderChannel() {
        return $this->orderChannel;
    }
    public function getUrl() {
        return $this->url;
    }
    public function getShipServiceLevel() {
        return $this->shipServiceLevel;
    }
    public function getProductName() {
        return $this->productName;
    }
    public function getSku() {
        return $this->sku;
    }
    public function getAsin() {
        return $this->asin;
    }
    public function getItemStatus() {
        return $this->itemStatus;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getCurrency() {
        return $this->currency;
    }
    public function getItemPrice() {
        return $this->itemPrice;
    }
    public function getItemTax() {
        return $this->itemTax;
    }
    public function getShippingPrice() {
        return $this->shippingPrice;
    }
    public function getShippingTax() {
        return $this->shippingTax;
    }
    public function getGiftWrapPrice() {
        return $this->giftWrapPrice;
    }
    public function getGiftWrapTax() {
        return $this->giftWrapTax;
    }
    public function getItemPromotionDiscount() {
        return $this->itemPromotionDiscount;
    }
    public function getShipPromotionDiscount() {
        return $this->shipPromotionDiscount;
    }
    public function getShipCity() {
        return $this->shipCity;
    }
    public function getShipState() {
        return $this->shipState;
    }
    public function getShipPostalCode() {
        return $this->shipPostalCode;
    }
    public function getShipCountry() {
        return $this->shipCountry;
    }
    public function getPromotionIds() {
        return $this->promotionIds;
    }
    public function getIsBusinessOrder() {
        return $this->isBusinessOrder;
    }
    public function getPurchaseOrderNumber() {
        return $this->purchaseOrderNumber;
    }
    public function getPriceDesignation() {
        return $this->priceDesignation;
    }
}
