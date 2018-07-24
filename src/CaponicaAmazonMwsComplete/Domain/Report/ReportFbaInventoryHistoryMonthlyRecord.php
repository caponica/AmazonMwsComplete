<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

class ReportFbaInventoryHistoryMonthlyRecord extends BaseMwsReportRecord
{
    private $month;
    private $fnSku;
    private $sku;
    private $productName;
    private $averageQuantity;
    private $endQuantity;
    private $fulfillmentCenterId;
    private $detailedDisposition;
    private $country;

    /**
     * ReportFbaInventoryHistoryMonthlyRecord constructor.
     *
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaInventoryHistoryMonthly::EXPECTED_FIELD_COUNT);

        $this->month               = $fieldArray[0];
        $this->fnSku               = $fieldArray[1];
        $this->sku                 = $fieldArray[2];
        $this->productName         = $fieldArray[3];
        $this->averageQuantity     = $fieldArray[4];
        $this->endQuantity         = $fieldArray[5];
        $this->fulfillmentCenterId = $fieldArray[6];
        $this->detailedDisposition = $fieldArray[7];
        $this->country             = $fieldArray[8];
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
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
    public function getAverageQuantity()
    {
        return $this->averageQuantity;
    }

    /**
     * @return string
     */
    public function getEndQuantity()
    {
        return $this->endQuantity;
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
