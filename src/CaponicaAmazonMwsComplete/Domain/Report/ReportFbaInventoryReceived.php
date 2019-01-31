<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_INVENTORY_RECEIVED
 *
 * Contains inventory that has completed the receive process at Amazon’s fulfillment centers.
 */
class ReportFbaInventoryReceived extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 7;
    const EXPECTED_HEADER = 'received-date	fnsku	sku	product-name	quantity	fba-shipment-id	fulfillment-center-id';
}
