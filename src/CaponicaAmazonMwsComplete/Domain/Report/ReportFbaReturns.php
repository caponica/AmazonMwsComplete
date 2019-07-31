<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about FBA Inventory AFN By Country reports
 */
class ReportFbaReturns extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 13;
    const EXPECTED_HEADER = 'return-date	order-id	sku	asin	fnsku	product-name	quantity	fulfillment-center-id	detailed-disposition	reason	status	license-plate-number	customer-comments';
}