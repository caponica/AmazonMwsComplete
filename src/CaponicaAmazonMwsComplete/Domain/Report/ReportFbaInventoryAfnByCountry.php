<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about FBA Inventory AFN By Country reports
 */
class ReportFbaInventoryAfnByCountry extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 6;
    const EXPECTED_HEADER = 'seller-sku	fulfillment-channel-sku	asin	condition-type	country	quantity-for-local-fulfillment';
}