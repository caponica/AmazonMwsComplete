<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about an orders flat file
 */
class ReportTrackingByOrderDateFlatFile extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 29;
    const EXPECTED_HEADER = 'amazon-order-id	merchant-order-id	purchase-date	last-updated-date	order-status	fulfillment-channel	sales-channel	order-channel	url	ship-service-level	product-name	sku	asin	item-status	quantity	currency	item-price	item-tax	shipping-price	shipping-tax	gift-wrap-price	gift-wrap-tax	item-promotion-discount	ship-promotion-discount	ship-city	ship-state	ship-postal-code	ship-country	promotion-ids';
}