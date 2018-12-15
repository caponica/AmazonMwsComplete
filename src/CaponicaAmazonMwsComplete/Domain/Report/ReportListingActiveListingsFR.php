<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * French version of ReportListingActiveListings
 */
class ReportListingActiveListingsFR extends ReportListingActiveListings {
    const EXPECTED_FIELD_COUNT = 15;
    const EXPECTED_HEADER = 'item-name	listing-id	seller-sku	price	quantity	open-date	product-id-type	item-note	item-condition	will-ship-internationally	expedited-shipping	product-id	pending-quantity	fulfillment-channel	merchant-shipping-group';
}