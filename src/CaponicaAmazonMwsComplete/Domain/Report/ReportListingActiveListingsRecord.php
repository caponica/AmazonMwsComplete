<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an Active Listing Report
 */
class ReportListingActiveListingsRecord extends BaseMwsReportRecord implements IdentifiableStockRecordInterface {
    const CONDITION_USED_LIKE_NEW               = 1;
    const CONDITION_USED_VERY_GOOD              = 2;
    const CONDITION_USED_GOOD                   = 3;
    const CONDITION_USED_ACCEPTABLE             = 4;
    const CONDITION_COLLECTIBLE_LIKE_NEW        = 5;
    const CONDITION_COLLECTIBLE_VERY_GOOD       = 6;
    const CONDITION_COLLECTIBLE_GOOD            = 7;
    const CONDITION_COLLECTIBLE_ACCEPTABLE      = 8;
    const CONDITION_NEW                         = 11;

    const FULFILMENT_CENTER_FBA_EUROPE          = 'AMAZON_EU';
    const FULFILMENT_CENTER_FBM                 = 'DEFAULT';

    const PRODUCT_ID_TYPE_ASIN                  = 1;
    const PRODUCT_ID_TYPE_ISBN                  = 2;
    const PRODUCT_ID_TYPE_UPC                   = 3;
    const PRODUCT_ID_TYPE_EAN                   = 4;

    const WILL_SHIP_UK_ONLY                     = 3;
    const WILL_SHIP_UK_AND_EUROPE               = 4;
    const WILL_SHIP_UK_EUROPE_AND_NORTH_AMERICA = 5;
    const WILL_SHIP_WORLDWIDE                   = 6;

    protected $itemName;
    protected $itemDescription;
    protected $listingId;
    protected $sellerSku;
    protected $price;
    protected $quantity;
    protected $openDate;
    protected $imageUrl;
    protected $itemIsMarketplace;
    protected $productIdType;
    protected $zshopShippingFee;
    protected $itemNote;
    protected $itemCondition;
    protected $zshopCategory1;
    protected $zshopBrowsePath;
    protected $zshopStorefrontFeature;
    protected $asin1;
    protected $asin2;
    protected $asin3;
    protected $willShipInternationally;
    protected $expeditedShipping;
    protected $zshopBoldface;
    protected $productId;
    protected $bidForFeaturedPlacement;
    protected $addDelete;
    protected $pendingQuantity;
    protected $fulfillmentChannel;
    protected $merchantShippingGroup;

    /** Alias to fit IdentifiableStockRecordInterface */
    public function getAsin() {
        if (!empty($this->asin1)) {
            return $this->asin1;
        }
        if ($this->productIdType===self::PRODUCT_ID_TYPE_ASIN && $this->productId) {
            return $this->productId;
        }
        return null;
    }

    public function isFulfilledByAmazon() {
        return self::FULFILMENT_CENTER_FBA_EUROPE == $this->fulfillmentChannel;
    }
    public function isConditionNew() {
        return self::CONDITION_NEW == $this->itemCondition;
    }

    public function __construct($fileRow) {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportListingActiveListings::EXPECTED_FIELD_COUNT);

        $this->itemName                 = $fieldArray[0];
        $this->itemDescription          = $fieldArray[1];
        $this->listingId                = $fieldArray[2];
        $this->sellerSku                = $fieldArray[3];
        $this->price                    = $fieldArray[4];
        $this->quantity                 = $fieldArray[5];
        $this->openDate                 = $fieldArray[6];
        $this->imageUrl                 = $fieldArray[7];
        $this->itemIsMarketplace        = $fieldArray[8];
        $this->productIdType            = $fieldArray[9];
        $this->zshopShippingFee         = $fieldArray[10];
        $this->itemNote                 = $fieldArray[11];
        $this->itemCondition            = $fieldArray[12];
        $this->zshopCategory1           = $fieldArray[13];
        $this->zshopBrowsePath          = $fieldArray[14];
        $this->zshopStorefrontFeature   = $fieldArray[15];
        $this->asin1                    = $fieldArray[16];
        $this->asin2                    = $fieldArray[17];
        $this->asin3                    = $fieldArray[18];
        $this->willShipInternationally  = $fieldArray[19];
        $this->expeditedShipping        = $fieldArray[20];
        $this->zshopBoldface            = $fieldArray[21];
        $this->productId                = $fieldArray[22];
        $this->bidForFeaturedPlacement  = $fieldArray[23];
        $this->addDelete                = $fieldArray[24];
        $this->pendingQuantity          = $fieldArray[25];
        $this->fulfillmentChannel       = $fieldArray[26];
        $this->merchantShippingGroup    = $fieldArray[27];
    }

    public function getItemName() {
        return $this->itemName;
    }

    public function getItemDescription() {
        return $this->itemDescription;
    }

    public function getListingId() {
        return $this->listingId;
    }

    public function getSellerSku() {
        return $this->sellerSku;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getOpenDate() {
        return $this->openDate;
    }

    public function getImageUrl() {
        return $this->imageUrl;
    }

    public function getItemIsMarketplace() {
        return $this->itemIsMarketplace;
    }

    public function getProductIdType() {
        return $this->productIdType;
    }

    public function getZshopShippingFee() {
        return $this->zshopShippingFee;
    }

    public function getItemNote() {
        return $this->itemNote;
    }

    public function getItemCondition() {
        return $this->itemCondition;
    }

    public function getZshopCategory1() {
        return $this->zshopCategory1;
    }

    public function getZshopBrowsePath() {
        return $this->zshopBrowsePath;
    }

    public function getZshopStorefrontFeature() {
        return $this->zshopStorefrontFeature;
    }

    public function getAsin1() {
        return $this->asin1;
    }

    public function getAsin2() {
        return $this->asin2;
    }

    public function getAsin3() {
        return $this->asin3;
    }

    public function getWillShipInternationally() {
        return $this->willShipInternationally;
    }

    public function getExpeditedShipping() {
        return $this->expeditedShipping;
    }

    public function getZshopBoldface() {
        return $this->zshopBoldface;
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getBidForFeaturedPlacement() {
        return $this->bidForFeaturedPlacement;
    }

    public function getAddDelete() {
        return $this->addDelete;
    }

    public function getPendingQuantity() {
        return $this->pendingQuantity;
    }

    public function getFulfillmentChannel() {
        return $this->fulfillmentChannel;
    }

    public function getMerchantShippingGroup() {
        return $this->merchantShippingGroup;
    }
}