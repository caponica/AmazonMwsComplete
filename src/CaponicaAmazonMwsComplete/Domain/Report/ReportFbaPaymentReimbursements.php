<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

class ReportFbaPaymentReimbursements extends BaseMwsReport
{
    const EXPECTED_FIELD_COUNT = 18;
    const EXPECTED_HEADER = 'approval-date	reimbursement-id	case-id	amazon-order-id	reason	sku	fnsku	asin	product-name	condition	currency-unit	amount-per-unit	amount-total	quantity-reimbursed-cash	quantity-reimbursed-inventory	quantity-reimbursed-total	original-reimbursement-id	original-reimbursement-type';
}
