<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from a French Active Listing Report
 */
class ReportListingActiveListingsFRRecord extends ReportListingActiveListingsRecord {
    public function __construct($fileRow) {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportListingActiveListingsFR::EXPECTED_FIELD_COUNT);

        $this->itemName                 = $fieldArray[0];
        $this->listingId                = $fieldArray[1];
        $this->sellerSku                = $fieldArray[2];
        $this->price                    = $fieldArray[3];
        $this->quantity                 = $fieldArray[4];
        $this->openDate                 = $fieldArray[5];
        $this->productIdType            = $fieldArray[6];
        $this->itemNote                 = $fieldArray[7];
        $this->itemCondition            = $fieldArray[8];
        $this->willShipInternationally  = $fieldArray[9];
        $this->expeditedShipping        = $fieldArray[10];
        $this->productId                = $fieldArray[11];
        $this->pendingQuantity          = $fieldArray[12];
        $this->fulfillmentChannel       = $fieldArray[13];
        $this->merchantShippingGroup    = $fieldArray[14];
    }

    public function getItemDescription() {
        throw new \Exception("getItemDescription is not relevant for ReportListingActiveListingsFR");
    }

    public function getImageUrl() {
        throw new \Exception("getImageUrl is not relevant for ReportListingActiveListingsFR");
    }

    public function getItemIsMarketplace() {
        throw new \Exception("getItemIsMarketplace is not relevant for ReportListingActiveListingsFR");
    }

    public function getZshopShippingFee() {
        throw new \Exception("getZshopShippingFee is not relevant for ReportListingActiveListingsFR");
    }

    public function getZshopCategory1() {
        throw new \Exception("getZshopCategory1 is not relevant for ReportListingActiveListingsFR");
    }

    public function getZshopBrowsePath() {
        throw new \Exception("getZshopBrowsePath is not relevant for ReportListingActiveListingsFR");
    }

    public function getZshopStorefrontFeature() {
        throw new \Exception("getZshopStorefrontFeature is not relevant for ReportListingActiveListingsFR");
    }

    public function getAsin1() {
        throw new \Exception("getAsin1 is not relevant for ReportListingActiveListingsFR");
    }

    public function getAsin2() {
        throw new \Exception("getAsin2 is not relevant for ReportListingActiveListingsFR");
    }

    public function getAsin3() {
        throw new \Exception("getAsin3 is not relevant for ReportListingActiveListingsFR");
    }

    public function getZshopBoldface() {
        throw new \Exception("getZshopBoldface is not relevant for ReportListingActiveListingsFR");
    }

    public function getBidForFeaturedPlacement() {
        throw new \Exception("getBidForFeaturedPlacement is not relevant for ReportListingActiveListingsFR");
    }

    public function getAddDelete() {
        throw new \Exception("getAddDelete is not relevant for ReportListingActiveListingsFR");
    }
}