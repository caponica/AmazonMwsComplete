<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates single row data from an FBA Received Inventory Report
 */
class ReportFbaInventoryReceivedRecord extends BaseMwsReportRecord
{
    /**
     * @var string
     */
    private $receivedDate;

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
    private $quantity;

    /**
     * @var string
     */
    private $fbaShipmentId;

    /**
     * @var string
     */
    private $fulfillmentCenterId;

    /**
     * @param string $fileRow
     *
     * @throws InvalidReportRecordException
     */
    public function __construct($fileRow)
    {
        $fieldArray = $this->convertRowStringToArray($fileRow, ReportFbaInventoryReceived::EXPECTED_FIELD_COUNT);

        $this->receivedDate        = $fieldArray[0];
        $this->fnSku               = $fieldArray[1];
        $this->sku                 = $fieldArray[2];
        $this->productName         = $fieldArray[3];
        $this->quantity            = $fieldArray[4];
        $this->fbaShipmentId       = $fieldArray[5];
        $this->fulfillmentCenterId = $fieldArray[6];
    }

    /**
     * @return string
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
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
    public function getFbaShipmentId()
    {
        return $this->fbaShipmentId;
    }

    /**
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->fulfillmentCenterId;
    }
}
