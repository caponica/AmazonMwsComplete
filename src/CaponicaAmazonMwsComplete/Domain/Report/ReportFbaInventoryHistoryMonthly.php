<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_INVENTORY_HISTORY_MONTHLY
 */
class ReportFbaInventoryHistoryMonthly extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 9;
    const EXPECTED_HEADER = 'month fnsku sku product-name  average-quantity  end-quantity  fulfillment-center-id detailed-disposition  country';
}
