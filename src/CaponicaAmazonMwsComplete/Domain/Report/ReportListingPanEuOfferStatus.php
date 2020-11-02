<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about Active Listing Reports
 */
class ReportListingPanEuOfferStatus extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 20;
    const EXPECTED_HEADER = 'ASIN	MerchantSKU	Enrol	FnSKU	Pan EU Status	Enrollment Date	Title	UK Offer Status	DE Offer Status	FR Offer Status	IT Offer Status	ES Offer Status	Last Active On	Date Pan EU expires	Product comments	UK PanEU Benefits	DE PanEU Benefits	FR PanEU Benefits	IT PanEU Benefits	ES PanEU Benefits';

    protected $records          = [];   // array of arrays, main index is sku

    public function addRecord(ReportListingPanEuOfferStatusRecord $record) {
        $asin       = $record->getAsin();
        $sellerSku  = $record->getSellerSku();

        if (empty($this->records[$sellerSku])) {
            $this->records[$sellerSku] = [];
        }
        if (empty($this->asins[$asin])) {
            $this->asins[$asin] = [];
        }

        $this->records[$sellerSku] = $record;
        $this->asins[$asin][$sellerSku] = true;
    }

    public function countRecords() {
        $numRecords = count($this->records);
        return $numRecords;
    }

    public function retrieveRecordForMsku($msku) {
        if (empty($this->records[$msku])) {
            return null;
        }
        return $this->records[$msku];
    }
}