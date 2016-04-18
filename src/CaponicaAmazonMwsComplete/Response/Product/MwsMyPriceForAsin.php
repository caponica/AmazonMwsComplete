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

    /** @var string $asin */
    public $asin;
    /** @var string $sellerSku */
    public $sellerSku;
    /** @var string $currency */
    public $currency;
    /** @var float $landedPrice */
    public $landedPrice;
    /** @var float $listingPrice */
    public $listingPrice;
    /** @var float $shipping */
    public $shippingPrice;
    /** @var float $regularPrice */
    public $regularPrice;
    /** @var string $channel */
    public $channel;

    public function __construct(\MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult $mpfa) {
        $this->asin = $mpfa->getASIN();
        /** @var \MarketplaceWebServiceProducts_Model_Product $product */
        $product = $mpfa->getProduct();
        /** @var  \MarketplaceWebServiceProducts_Model_OffersList $offerList */
        $offerList = $product->getOffers();

        /** @var \MarketplaceWebServiceProducts_Model_OfferType[] $offers */
        $offers = $offerList->getOffer();

        foreach ($offers as $offer) {
            $this->channel = $offer->getFulfillmentChannel();
            $this->sellerSku = $offer->getSellerSKU();

            /** @var \MarketplaceWebServiceProducts_Model_PriceType $buyingPrice */
            $buyingPrice = $offer->getBuyingPrice();
            $this->landedPrice = $buyingPrice->getLandedPrice()->getAmount();
            $this->listingPrice = $buyingPrice->getListingPrice()->getAmount();
            $this->shippingPrice = $buyingPrice->getShipping()->getAmount();

            /** @var \MarketplaceWebServiceProducts_Model_MoneyType $regularPriceType */
            $regularPriceType = $offer->getRegularPrice();
            $this->regularPrice = $regularPriceType->getAmount();
            $this->currency = $regularPriceType->getCurrencyCode();
            break;  // There should only be one offer, since we're looking up our own pricing for an ASIN
        }
    }
}