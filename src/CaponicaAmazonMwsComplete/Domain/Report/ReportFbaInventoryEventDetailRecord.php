<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates single row data from an FBA Inventory Event Detail Report
 */
class ReportFbaInventoryEventDetailRecord extends BaseMwsReportRecord
{
    /**
     * @var string
     */
    private $snapshotDate;

    /**
     * @var string
     */
    private $transactionType;

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
    private $disposition;

    /**
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaInventoryEventDetail::EXPECTED_FIELD_COUNT);

        $this->snapshotDate        = $fieldArray[0];
        $this->transactionType     = $fieldArray[1];
        $this->fnSku               = $fieldArray[2];
        $this->sku                 = $fieldArray[3];
        $this->productName         = $fieldArray[4];
        $this->fulfillmentCenterId = $fieldArray[5];
        $this->quantity            = $fieldArray[6];
        $this->disposition         = $fieldArray[7];
    }

    /**
     * @return string
     */
    public function getSnapshotDate()
    {
        return $this->snapshotDate;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
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
    public function getDisposition()
    {
        return $this->disposition;
    }
}
