<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_INVENTORY_ADJUSTMENTS
 *
 * Contains corrections and updates to your inventory in response to issues such as damage, loss, receiving discrepancies, etc.
 */
class ReportFbaInventoryAdjustments extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 9;
    const EXPECTED_HEADER = 'adjusted-date	transaction-item-id	fnsku	sku	product-name	fulfillment-center-id	quantity	reason	disposition';
}
