<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

class ReportFbaInventoryHistoryDailyRecord extends BaseMwsReportRecord
{
    private $snapshotDate;
    private $fnSku;
    private $sku;
    private $productName;
    private $quantity;
    private $fulfillmentCenterId;
    private $detailedDisposition;
    private $country;

    /**
     * ReportFbaInventoryHistoryDailyRecord constructor.
     *
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaInventoryHistoryDaily::EXPECTED_FIELD_COUNT);

        $this->snapshotDate        = $fieldArray[0];
        $this->fnSku               = $fieldArray[1];
        $this->sku                 = $fieldArray[2];
        $this->productName         = $fieldArray[3];
        $this->quantity            = $fieldArray[4];
        $this->fulfillmentCenterId = $fieldArray[5];
        $this->detailedDisposition = $fieldArray[6];
        $this->country             = $fieldArray[7];
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
    public function getQuantity()
    {
        return $this->quantity;
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
    public function getDetailedDisposition()
    {
        return $this->detailedDisposition;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
