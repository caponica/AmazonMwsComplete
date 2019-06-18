<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * _GET_MERCHANT_LISTINGS_ALL_DATA_
 * Encapsulates information about All Product Listing Reports
 */
class ReportListingAllListings extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 29;
    const EXPECTED_HEADER = 'item-name	item-description	listing-id	seller-sku	price	quantity	open-date	image-url	item-is-marketplace	product-id-type	zshop-shipping-fee	item-note	item-condition	zshop-category1	zshop-browse-path	zshop-storefront-feature	asin1	asin2	asin3	will-ship-internationally	expedited-shipping	zshop-boldface	product-id	bid-for-featured-placement	add-delete	pending-quantity	fulfillment-channel	merchant-shipping-group	status';
}
