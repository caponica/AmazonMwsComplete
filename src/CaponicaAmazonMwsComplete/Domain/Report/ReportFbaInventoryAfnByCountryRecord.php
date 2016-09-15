<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an FBA Inventory AFN report
 */
class ReportFbaInventoryAfnByCountryRecord extends ReportFbaInventoryAfnRecord {
    const DEFAULT_CONDITION_CODE = 'SELLABLE'; // The 'By country' report doesn't have this field, but only returns sellable quantities
    protected $country;

    public function __construct($fileRow, $expectedFieldCount = null) {
        if (empty($expectedFieldCount)) {
            $expectedFieldCount = ReportFbaInventoryAfnByCountry::EXPECTED_FIELD_COUNT;
        }
        parent::__construct($fileRow, $expectedFieldCount);

        // handle fields which are different in the "By country" report
        $fieldArray = $this->convertRowStringToArray($fileRow, $expectedFieldCount);

        $this->country                  = $fieldArray[4];
        $this->warehouseConditionCode   = self::DEFAULT_CONDITION_CODE;
    }

    public function getCountry() {
        return $this->country;
    }
}