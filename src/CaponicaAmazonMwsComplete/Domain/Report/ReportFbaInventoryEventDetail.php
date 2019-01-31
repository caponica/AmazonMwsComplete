<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_INVENTORY_EVENT_DETAIL
 *
 * Contains history of inventory events (e.g. receipts, shipments, adjustments etc.) by SKU and Fulfillment Center.
 */
class ReportFbaInventoryEventDetail extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 8;
    const EXPECTED_HEADER = 'snapshot-date	transaction-type	fnsku	sku	product-name	fulfillment-center-id	quantity	disposition';
}
