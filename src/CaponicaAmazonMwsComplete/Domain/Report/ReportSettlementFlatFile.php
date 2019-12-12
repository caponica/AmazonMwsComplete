<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about a single row from an settlement flat file
 */
class ReportSettlementFlatFile extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 36;
    const EXPECTED_HEADER = 'settlement-id	settlement-start-date	settlement-end-date	deposit-date	total-amount	currency	transaction-type	order-id	merchant-order-id	adjustment-id	shipment-id	marketplace-name	shipment-fee-type	shipment-fee-amount	order-fee-type	order-fee-amount	fulfillment-id	posted-date	order-item-code	merchant-order-item-id	merchant-adjustment-item-id	sku	quantity-purchased	price-type	price-amount	item-related-fee-type	item-related-fee-amount	misc-fee-amount	other-fee-amount	other-fee-reason-description	promotion-id	promotion-type	promotion-amount	direct-payment-type	direct-payment-amount	other-amount';
}