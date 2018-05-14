<?php

namespace CaponicaAmazonMwsComplete\Response\Product;

/* 
 *   Object representation of the XML response from Amazon. The raw XML looks like this:
 * 
 *    <Product xmlns="http://mws.amazonservices.com/schema/Products/2011-10-01" xmlns:ns2="http://mws.amazonservices.com/schema/Products/2011-10-01/default.xsd">
 *      <Identifiers>
 *        <MarketplaceASIN>
 *          <MarketplaceId>A1F83G8C2ARO7P</MarketplaceId>
 *          <ASIN>B00BN7ZYIW</ASIN>
 *        </MarketplaceASIN>
 *      </Identifiers>
 *      <CompetitivePricing>
 *        <CompetitivePrices>
 *          <CompetitivePrice belongsToRequester="false" condition="New" subcondition="New">
 *            <CompetitivePriceId>1</CompetitivePriceId>
 *            <Price>
 *              <LandedPrice>
 *                <CurrencyCode>GBP</CurrencyCode>
 *                <Amount>18.89</Amount>
 *              </LandedPrice>
 *              <ListingPrice>
 *                <CurrencyCode>GBP</CurrencyCode>
 *                <Amount>18.89</Amount>
 *              </ListingPrice>
 *              <Shipping>
 *                <CurrencyCode>GBP</CurrencyCode>
 *                <Amount>0.00</Amount>
 *              </Shipping>
 *            </Price>
 *          </CompetitivePrice>
 *        </CompetitivePrices>
 *        <NumberOfOfferListings>
 *          <OfferListingCount condition="Any">20</OfferListingCount>
 *          <OfferListingCount condition="New">20</OfferListingCount>
 *        </NumberOfOfferListings>
 *      </CompetitivePricing>
 *      <SalesRankings>
 *        <SalesRank>
 *          <ProductCategoryId>toy_display_on_website</ProductCategoryId>
 *          <Rank>58970</Rank>
 *        </SalesRank>
 *      </SalesRankings>
 *    </Product>
 *
 */

class MwsCompetitivePricing {
    /** @var string $marketplaceId */
    public $marketplaceId;
    /** @var string $asin */
    public $asin;
    /** @var string $error */
    public $error = null;
    /** @var float $landedPriceAmount */
    public $landedPriceAmount;
    /** @var string $landedPriceCurrency */
    public $landedPriceCurrency = 'GBP';
    /** @var boolean $belongsToRequester */
    public $belongsToRequester;
    /** @var int $numNewOffers */
    public $numNewOffers;
    /** @var string $topLevelCategory */
    public $topLevelCategory;
    /** @var int $rankInTlc */
    public $rankInTlc;

    const CATEGORY_NOT_IN_CATALOGUE = 'NOT IN CATALOGUE';

    public function __construct(\MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResult $cpResult) {
        /** @var \MarketplaceWebServiceProducts_Model_Error $error */
        $error = $cpResult->getError();
        if (!empty($error)) {
            $this->error = array(
                'code'      => $error->getCode(),
                'message'   => $error->getMessage(),
            );
        }

        /** @var \MarketplaceWebServiceProducts_Model_Product $cpProduct */
        $cpProduct = $cpResult->getProduct();

        if (!empty($cpProduct)) {
            /** @var \MarketplaceWebServiceProducts_Model_IdentifierType $identifiers */
            $identifiers = $cpProduct->getIdentifiers();
            /** @var \MarketplaceWebServiceProducts_Model_ASINIdentifier $asinIdentifier */
            $asinIdentifier = $identifiers->getMarketplaceASIN();

            $this->marketplaceId = $asinIdentifier->getMarketplaceId();
            $this->asin = $asinIdentifier->getASIN();

            /** @var \MarketplaceWebServiceProducts_Model_SalesRankList $cpRankList */
            $cpRankList = $cpProduct->getSalesRankings();

            /** @var \MarketplaceWebServiceProducts_Model_SalesRankType $salesRank */
            foreach ($cpRankList->getSalesRank() as $salesRank) {
                $this->topLevelCategory = $salesRank->getProductCategoryId();
                $this->rankInTlc = $salesRank->getRank();
                if (strpos($this->topLevelCategory, '_display_on_website')) {
                    break; // Found the top level category already
                    // if the TLC is never found then it will just save the last cat found
                }
            }

            /** @var \MarketplaceWebServiceProducts_Model_CompetitivePricingType $cpPricing */
            $cpPricing = $cpProduct->getCompetitivePricing();
            /** @var \MarketplaceWebServiceProducts_Model_CompetitivePriceList $cpPriceList */
            $cpPriceList = $cpPricing->getCompetitivePrices();
            /** @var  \MarketplaceWebServiceProducts_Model_CompetitivePriceType[] $cpPrices */
            $cpPrices = $cpPriceList->getCompetitivePrice();

            foreach ($cpPrices as $cpPrice) {
                $this->belongsToRequester = $cpPrice->getbelongsToRequester();

                /** @var \MarketplaceWebServiceProducts_Model_PriceType $price */
                $price = $cpPrice->getPrice();
                /** @var \MarketplaceWebServiceProducts_Model_MoneyType $landedPrice */
                $landedPrice = $price->getLandedPrice();
                $this->landedPriceAmount = $landedPrice->getAmount();
                $this->landedPriceCurrency = $landedPrice->getCurrencyCode();
                break; // just want the first result
            }

            /** @var \MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList $numOffersList */
            $numOffersList = $cpPricing->getNumberOfOfferListings();
            /** @var \MarketplaceWebServiceProducts_Model_OfferListingCountType[] $numOffersArray */
            $numOffersArray = $numOffersList->getOfferListingCount();
            foreach ($numOffersArray as $numOffers) {
                if ('New'===$numOffers->getcondition()) {
                    $this->numNewOffers = $numOffers->getValue();
                    break;
                }
            }
        }
    }

    public function isNotInCatalogue() {
        return self::CATEGORY_NOT_IN_CATALOGUE === $this->topLevelCategory;
    }
}