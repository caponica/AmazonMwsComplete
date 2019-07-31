<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an FBA Inventory AFN report
 */
class ReportFbaInventoryAfnRecord extends BaseMwsReportRecord implements IdentifiableStockRecordInterface {
    protected $sellerSku;
    protected $fnSku;
    protected $asin;
    protected $itemConditionType;
    protected $warehouseConditionCode;
    protected $quantity;

    public function __construct($fileRow, $expectedFieldCount = null) {
        if (empty($expectedFieldCount)) {
            $expectedFieldCount = ReportFbaInventoryAfn::EXPECTED_FIELD_COUNT;
        }
        $fieldArray = $this->convertRowStringToArray($fileRow, $expectedFieldCount);

        $this->sellerSku                = $fieldArray[0];
        $this->fnSku                    = $fieldArray[1];
        $this->asin                     = $fieldArray[2];
        $this->itemConditionType        = $fieldArray[3];
        $this->warehouseConditionCode   = $fieldArray[4];
        $this->quantity                 = $fieldArray[5];
    }

    public function getSellerSku() {
        return $this->sellerSku;
    }

    public function getFnSku() {
        return $this->fnSku;
    }

    public function getAsin() {
        return $this->asin;
    }

    public function getItemConditionType() {
        return $this->itemConditionType;
    }

    public function getWarehouseConditionCode() {
        return $this->warehouseConditionCode;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}