<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_INVENTORY_HISTORY_DAILY
 */
class ReportFbaInventoryHistoryDaily extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 8;
    const EXPECTED_HEADER = 'snapshot-date	fnsku	sku	product-name	quantity	fulfillment-center-id	detailed-disposition	country';
}
