<?php

namespace CaponicaAmazonMwsComplete\Response\Product;

/* 
 *   Object representation of the XML response from Amazon. The raw XML looks like this:
 * 
 *    <LowestOfferListing>
 *      <Qualifiers>
 *        <ItemCondition>New</ItemCondition>
 *        <ItemSubcondition>New</ItemSubcondition>
 *        <FulfillmentChannel>Merchant</FulfillmentChannel>
 *        <ShipsDomestically>True</ShipsDomestically>
 *        <ShippingTime>
 *          <Max>0-2 days</Max>
 *        </ShippingTime>
 *        <SellerPositiveFeedbackRating>90-94%</SellerPositiveFeedbackRating>
 *      </Qualifiers>
 *      <NumberOfOfferListingsConsidered>2</NumberOfOfferListingsConsidered>
 *      <SellerFeedbackCount>150919</SellerFeedbackCount>
 *      <Price>
 *        <LandedPrice>
 *          <CurrencyCode>GBP</CurrencyCode>
 *          <Amount>18.70</Amount>
 *        </LandedPrice>
 *        <ListingPrice>
 *          <CurrencyCode>GBP</CurrencyCode>
 *          <Amount>13.57</Amount>
 *        </ListingPrice>
 *        <Shipping>
 *          <CurrencyCode>GBP</CurrencyCode>
 *          <Amount>5.13</Amount>
 *        </Shipping>
 *      </Price>
 *      <MultipleOffersAtLowestPrice>False</MultipleOffersAtLowestPrice>
 *    </LowestOfferListing>
 * 
 */

class MwsLowestOfferListing {
    const CHANNEL_MERCHANT  = 'Merchant';
    const CHANNEL_AMAZON    = 'Amazon';

    const OFFER_TYPE_AMAZON     = 'AMZ';    // Sold by Amazon
    const OFFER_TYPE_FBA        = 'FBA';    // Fulfilled by Amazon
    const OFFER_TYPE_MERCHANT   = 'MER';    // Fulfilled by Merchant

    const FEEDBACK_COUNT_AMAZON = 270000;

    /** @var string $itemCondition */
    public $itemCondition;
    /** @var string $fulfillmentChannel */
    public $fulfillmentChannel;
    /** @var string $sellerPositiveFeedbackRating */
    public $sellerPositiveFeedbackRating;
    /** @var string $sellerPositiveFeedbackCount */
    public $sellerPositiveFeedbackCount;
    /** @var float $landedPriceAmount */
    public $landedPriceAmount;
    /** @var string $landedPriceCurrency */
    public $landedPriceCurrency;

    public function __construct(\MarketplaceWebServiceProducts_Model_LowestOfferListingType $lolType) {
        /** @var \MarketplaceWebServiceProducts_Model_QualifiersType $qualifiers */
        $qualifiers = $lolType->getQualifiers();
        $this->itemCondition = $qualifiers->getItemCondition();
        $this->fulfillmentChannel = $qualifiers->getFulfillmentChannel();
        $this->sellerPositiveFeedbackRating = $qualifiers->getSellerPositiveFeedbackRating();
        
        $this->sellerPositiveFeedbackCount = $lolType->getSellerFeedbackCount();

        /** @var \MarketplaceWebServiceProducts_Model_PriceType $price */
        $price = $lolType->getPrice();
        /** @var \MarketplaceWebServiceProducts_Model_MoneyType $landedPrice */
        $landedPrice = $price->getLandedPrice();
        $this->landedPriceAmount = $landedPrice->getAmount();
        $this->landedPriceCurrency = $landedPrice->getCurrencyCode();
    }

    public function getSellerRatingLowerBound() {
        if (empty($this->sellerPositiveFeedbackRating)) {
            return null;
        }
        if ($separatorPos = strpos($this->sellerPositiveFeedbackRating, '-')) {
            return (int)substr($this->sellerPositiveFeedbackRating, 0, $separatorPos);
        }
        if ($separatorPos = strpos($this->sellerPositiveFeedbackRating, '%')) {
            return (int)substr($this->sellerPositiveFeedbackRating, 0, $separatorPos);
        }
        if ('Just Launched' === $this->sellerPositiveFeedbackRating) {
            return 0;
        }
        throw new \InvalidArgumentException('Could not parse a feedback rating of "' . $this->sellerPositiveFeedbackRating . '"');
    }

    public function getOfferType() {
        if (self::CHANNEL_MERCHANT === $this->fulfillmentChannel) {
            return self::OFFER_TYPE_MERCHANT;
        } elseif (self::CHANNEL_AMAZON === $this->fulfillmentChannel) {
            if (self::FEEDBACK_COUNT_AMAZON < $this->sellerPositiveFeedbackCount) { // @todo - improve this "amazon" detector
                return self::OFFER_TYPE_AMAZON;
            } else {
                return self::OFFER_TYPE_FBA;
            }
        }
        return null;
    }
}