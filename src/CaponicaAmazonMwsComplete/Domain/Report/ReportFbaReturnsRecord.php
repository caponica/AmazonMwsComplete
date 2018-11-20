<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an FBA Inventory AFN report
 */
class ReportFbaReturnsRecord extends BaseMwsReportRecord {
    protected $returnDate;
    protected $amazonOrderId;
    protected $sku;
    protected $asin;
    protected $fnsku;
    protected $productName;
    protected $quantity;
    protected $fulfillmentCenterId;
    protected $detailedDisposition;
    protected $reason;
    protected $status;
    protected $licensePlateNumber;
    protected $customerComments;

    public function __construct($fileRow, $expectedFieldCount = null) {
        if (empty($expectedFieldCount)) {
            $expectedFieldCount = ReportFbaReturns::EXPECTED_FIELD_COUNT;
        }
        $fieldArray = $this->convertRowStringToArray($fileRow, $expectedFieldCount);

        $this->returnDate               = $fieldArray[0];
        $this->amazonOrderId            = $fieldArray[1];
        $this->sku                      = $fieldArray[2];
        $this->asin                     = $fieldArray[3];
        $this->fnsku                    = $fieldArray[4];
        $this->productName              = $fieldArray[5];
        $this->quantity                 = $fieldArray[6];
        $this->fulfillmentCenterId      = $fieldArray[7];
        $this->detailedDisposition      = $fieldArray[8];
        $this->reason                   = $fieldArray[9];
        $this->status                   = $fieldArray[10];
        $this->licensePlateNumber       = $fieldArray[11];
        $this->customerComments         = $fieldArray[12];
    }

    public function getReturnDate() {
        return $this->returnDate;
    }
    public function getAmazonOrderId() {
        return $this->amazonOrderId;
    }
    public function getSku() {
        return $this->sku;
    }
    public function getAsin() {
        return $this->asin;
    }
    public function getFnsku() {
        return $this->fnsku;
    }
    public function getProductName() {
        return $this->productName;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getFulfillmentCenterId() {
        return $this->fulfillmentCenterId;
    }
    public function getDetailedDisposition() {
        return $this->detailedDisposition;
    }
    public function getReason() {
        return $this->reason;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getLicensePlateNumber() {
        return $this->licensePlateNumber;
    }
    public function getCustomerComments() {
        return $this->customerComments;
    }
}