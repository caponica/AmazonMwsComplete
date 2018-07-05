<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_FLAT_FILE
 * Encapsulates information about an orders flat file
 */
class ReportFbaSalesAllByLastUpdateFlatFile extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 32;
    const EXPECTED_HEADER = 'amazon-order-id	merchant-order-id	purchase-date	last-updated-date	order-status	fulfillment-channel	sales-channel	order-channel	url	ship-service-level	product-name	sku	asin	item-status	quantity	currency	item-price	item-tax	shipping-price	shipping-tax	gift-wrap-price	gift-wrap-tax	item-promotion-discount	ship-promotion-discount	ship-city	ship-state	ship-postal-code	ship-country	promotion-ids	is-business-order	purchase-order-number	price-designation';
}
