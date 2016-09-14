<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Domain object to encapsulate information about Active Listing Reports
 */
class ReportListingActiveListings {
    const EXPECTED_FIELD_COUNT = 27;
    const EXPECTED_HEADER = 'item-name	item-description	listing-id	seller-sku	price	quantity	open-date	image-url	item-is-marketplace	product-id-type	zshop-shipping-fee	item-note	item-condition	zshop-category1	zshop-browse-path	zshop-storefront-feature	asin1	asin2	asin3	will-ship-internationally	expedited-shipping	zshop-boldface	product-id	bid-for-featured-placement	add-delete	pending-quantity	fulfillment-channel';

    public static function validateHeaderRow($headerString) {
        return trim($headerString,"\n") == self::EXPECTED_HEADER;
    }
}