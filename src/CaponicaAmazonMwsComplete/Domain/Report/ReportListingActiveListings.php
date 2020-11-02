<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about Active Listing Reports
 */
class ReportListingActiveListings extends BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 47;
    const EXPECTED_HEADER = 'item-name	item-description	listing-id	seller-sku	price	quantity	open-date	image-url	item-is-marketplace	product-id-type	zshop-shipping-fee	item-note	item-condition	zshop-category1	zshop-browse-path	zshop-storefront-feature	asin1	asin2	asin3	will-ship-internationally	expedited-shipping	zshop-boldface	product-id	bid-for-featured-placement	add-delete	pending-quantity	fulfillment-channel	Business Price	Quantity Price Type	Quantity Lower Bound 1	Quantity Price 1	Quantity Lower Bound 2	Quantity Price 2	Quantity Lower Bound 3	Quantity Price 3	Quantity Lower Bound 4	Quantity Price 4	Quantity Lower Bound 5	Quantity Price 5	merchant-shipping-group	Progressive Price Type	Progressive Lower Bound 1	Progressive Price 1	Progressive Lower Bound 2	Progressive Price 2	Progressive Lower Bound 3	Progressive Price 3';
}