<?php

namespace CaponicaAmazonMwsComplete\Response\Product;

/* 
 *   Object representation of the XML response from Amazon. The raw XML looks like this:
 * 
 *   <GetMyPriceForASINResult ASIN="1616615397" status="Success">
 *     <Product xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01" xmlns:ns2="http://mws.amazonservices.com/schema/Products/2011-10-01/default.xsd">
 *       <Identifiers>
 *         <MarketplaceASIN>
 *           <MarketplaceId>A1F83G8C2ARO7P</MarketplaceId>
 *           <ASIN>1616615397</ASIN>
 *         </MarketplaceASIN>
 *       </Identifiers>
 *       <Offers>
 *         <Offer>
 *           <BuyingPrice>
 *             <LandedPrice>
 *               <CurrencyCode>GBP</CurrencyCode>
 *               <Amount>27.99</Amount>
 *             </LandedPrice>
 *             <ListingPrice>
 *               <CurrencyCode>GBP</CurrencyCode>
 *               <Amount>27.99</Amount>
 *             </ListingPrice>
 *             <Shipping>
 *               <CurrencyCode>GBP</CurrencyCode>
 *               <Amount>0.00</Amount>
 *             </Shipping>
 *           </BuyingPrice>
 *           <RegularPrice>
 *             <CurrencyCode>GBP</CurrencyCode>
 *             <Amount>27.99</Amount>
 *           </RegularPrice>
 *           <FulfillmentChannel>AMAZON</FulfillmentChannel>
 *           <ItemCondition>New</ItemCondition>
 *           <ItemSubCondition>New</ItemSubCondition>
 *           <SellerId>A2N90YARMMVY73</SellerId>
 *           <SellerSKU>FFGTM10</SellerSKU>
 *         </Offer>
 *       </Offers>
 *     </Product>
 *   </GetMyPriceForASINResult>
 *   (There can be more than one GetMyPriceForASINResult in response to a single request) 
 * 
 */

class MwsMyPriceForAsin {
    const CHANNEL_MERCHANT  = 'MERCHANT';
    const CHANNEL_AMAZON    = 'AMAZON';

    const FEEDBACK_COUNT_AMAZON = 270000;

    /** @var array $offers */
    public $offers;

    public function __construct(\MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult $mpfa) {

        /** @var \MarketplaceWebServiceProducts_Model_Product $product */
        $product = $mpfa->getProduct();
        /** @var  \MarketplaceWebServiceProducts_Model_OffersList $offerList */
        $offerList = $product->getOffers();

        /** @var \MarketplaceWebServiceProducts_Model_OfferType[] $offers */
        $offers = $offerList->getOffer();

        foreach ($offers as $offer) {

            /** @var \MarketplaceWebServiceProducts_Model_MoneyType $regularPriceType */

            $regularPriceType = $offer->getRegularPrice();

            /** @var \MarketplaceWebServiceProducts_Model_PriceType $buyingPrice */

            $buyingPrice = $offer->getBuyingPrice();

            $this->offers[$mpfa->getASIN()][] = [
                'sellerSku' => $offer->getSellerSKU(), 
                'currency' => $regularPriceType->getCurrencyCode(),
                'landedPrice' => $buyingPrice->getLandedPrice()->getAmount(),
                'listingPrice' => $buyingPrice->getListingPrice()->getAmount(),
                'shippingPrice' => $buyingPrice->getShipping()->getAmount(),
                'regularPrice' => $regularPriceType->getAmount(),
                'channel' => $offer->getFulfillmentChannel()
            ];

            // There may be multiple own offers for the same asin
        }
    }
}