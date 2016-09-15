<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about FBA Inventory AFN reports
 */
class ReportFbaInventoryAfn extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 6;
    const EXPECTED_HEADER = 'seller-sku	fulfillment-channel-sku	asin	condition-type	Warehouse-Condition-code	Quantity Available';
}