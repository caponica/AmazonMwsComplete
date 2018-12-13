<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates single row data from an FBA Inventory Adjustments Report
 */
class ReportFbaInventoryAdjustmentsRecord extends BaseMwsReportRecord
{
    /**
     * @var string
     */
    private $adjustedDate;

    /**
     * @var string
     */
    private $transactionItemId;

    /**
     * @var string
     */
    private $fnSku;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $fulfillmentCenterId;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $disposition;

    /**
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaInventoryAdjustments::EXPECTED_FIELD_COUNT);

        $this->adjustedDate        = $fieldArray[0];
        $this->transactionItemId   = $fieldArray[1];
        $this->fnSku               = $fieldArray[2];
        $this->sku                 = $fieldArray[3];
        $this->productName         = $fieldArray[4];
        $this->fulfillmentCenterId = $fieldArray[5];
        $this->quantity            = $fieldArray[6];
        $this->reason              = $fieldArray[7];
        $this->disposition         = $fieldArray[8];
    }

    /**
     * @return string
     */
    public function getAdjustedDate()
    {
        return $this->adjustedDate;
    }

    /**
     * @return string
     */
    public function getTransactionItemId()
    {
        return $this->transactionItemId;
    }

    /**
     * @return string
     */
    public function getFnSku()
    {
        return $this->fnSku;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->fulfillmentCenterId;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return string
     */
    public function getDisposition()
    {
        return $this->disposition;
    }
}
