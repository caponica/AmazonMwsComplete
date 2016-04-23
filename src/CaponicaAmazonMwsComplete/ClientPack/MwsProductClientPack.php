<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\AmazonClient\MwsProductClient;
use CaponicaAmazonMwsComplete\Response\Product\MwsCompetitivePricing;
use CaponicaAmazonMwsComplete\Response\Product\MwsLowestOfferListing;
use CaponicaAmazonMwsComplete\Response\Product\MwsMyPriceForAsin;

class MwsProductClientPack extends MwsProductClient {
    const ATTRIBUTE_SET_MARKER_START    = '<AttributeSets>';
    const ATTRIBUTE_SET_MARKER_END      = '</AttributeSets>';

    const ITEM_CONDITION_TEXT_NEW       = 'New';

    /** @var string $marketplaceId      The MWS MarketplaceID string used in API connections */
    protected $marketplaceId;
    /** @var string $sellerId           The MWS SellerID string used in API connections */
    protected $sellerId;

    public function __construct(MwsClientPoolConfig $poolConfig) {
        $this->marketplaceId    = $poolConfig->getMarketplaceId($poolConfig->getAmazonSite());
        $this->sellerId         = $poolConfig->getSellerId();

        parent::__construct(
            $poolConfig->getAccessKey(),
            $poolConfig->getSecretKey(),
            $poolConfig->getApplicationName(),
            $poolConfig->getApplicationVersion(),
            $poolConfig->getConfigForProduct($this->getServiceUrlSuffix())
        );
    }

    private function getServiceUrlSuffix() {
        return '/Products/' . self::SERVICE_VERSION;
    }


    // ##################################################
    // #      basic wrappers for API calls go here      #
    // ##################################################
    public function callGetCompetitivePricingForASIN($asin) {
        return $this->getCompetitivePricingForASIN([
            'SellerId'          => $this->sellerId,
            'MarketplaceId'     => $this->marketplaceId,
            'ASINList'          => array('ASIN' => $asin),
        ]);
    }
    public function callGetLowestOfferListingsForASIN($asin, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getLowestOfferListingsForASIN([
            'SellerId'          => $this->sellerId,
            'MarketplaceId'     => $this->marketplaceId,
            'ASINList'          => array('ASIN' => $asin),
            'ItemCondition'     => $itemCondition,
        ]);
    }
    public function callGetMyPriceForASIN($asin, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getMyPriceForASIN([
            'SellerId'          => $this->sellerId,
            'MarketplaceId'     => $this->marketplaceId,
            'ASINList'          => array('ASIN' => $asin),
            'ItemCondition'     => $itemCondition,
        ]);
    }
    public function callListMatchingProducts($query, $queryContext = null) {
        return $this->listMatchingProducts([
            'SellerId'          => $this->sellerId,
            'MarketplaceId'     => $this->marketplaceId,
            'Query'             => $query,
            'QueryContextId'    => $queryContext,
        ]);
    }


    // ###################################################################################
    // # more advanced methods, trying to retrieve more usefully formed data fro the API #
    // ###################################################################################
    /**
     * @param $searchTerm
     * @param $searchContext
     * @return array|null
     */
    public function retrievePotentialMatchesOnAmazon($searchTerm, $searchContext=null) {
        if (empty($searchTerm)) {
            echo "\nNo terms to search for.";
            return null;
        }

        $potentialMatches = [];

        try {
            sleep(5);
            /** @var \MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse $searchResult */
            $searchResult = $this->callListMatchingProducts($searchTerm, $searchContext);
        } catch (\MarketplaceWebServiceProducts_Exception $e) {
            if ('RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                sleep(5);
            } else {
                echo "\nThere was a problem with the search";
                echo "\nTerms searched:";
                print_r($searchTerm);
            }
            echo "\nException details:";
            print_r($e); // @todo - better way to debug an exception
            return null;
        }
        /** @var \MarketplaceWebServiceProducts_Model_ListMatchingProductsResult $mwsProductResults */
        $mwsProductResults = $searchResult->getListMatchingProductsResult();
        /** @var \MarketplaceWebServiceProducts_Model_ProductList $mwsProducts */
        $mwsProducts = $mwsProductResults->getProducts();

        /** @var \MarketplaceWebServiceProducts_Model_Product[] $productArray */
        $productArray = $mwsProducts->getProduct();
        if (empty($productArray)) {
            echo "\nNo results were found when searching for $searchTerm";
            return null;
        }

        $attributeOffset = 0;
        foreach ($productArray as $product) {
            $potentialMatch = array();
            /** @var \MarketplaceWebServiceProducts_Model_IdentifierType $idType */
            $idType = $product->getIdentifiers();
            if ($idType->isSetMarketplaceASIN()) {
                /** @var \MarketplaceWebServiceProducts_Model_ASINIdentifier $asinId */
                $asinId = $idType->getMarketplaceASIN();
                $potentialMatch['asin'] = $asinId->getASIN();
            } else {
                continue;
            }

            /** @var \MarketplaceWebServiceProducts_Model_SalesRankList $salesRanks */
            $salesRanks = $product->getSalesRankings();
            if (!empty($salesRanks)) {
                /** @var \MarketplaceWebServiceProducts_Model_SalesRankType $salesRank */
                foreach ($salesRanks->getSalesRank() as $salesRank) {
                    if (strpos($salesRank->getProductCategoryId(), '_display_on_website')) {
                        $potentialMatch['rank'] = $salesRank->getRank();
                        $potentialMatch['rankCat'] = $salesRank->getProductCategoryId();
                    } else {
                        echo "\n>>Found Secondary Rank: #" . $salesRank->getRank() . " in " . $salesRank->getProductCategoryId() . " for asin {$potentialMatch['asin']}";
                    }
                }
            }

            $attributes = null;
            // Parser cannot calculate attribute sets, so do it manually:
            $attributeOffset = strpos($searchResult->getRawXml(), self::ATTRIBUTE_SET_MARKER_START, $attributeOffset);
            if (false !== $attributeOffset) {
                $attributeOffsetEnd = strpos($searchResult->getRawXml(), self::ATTRIBUTE_SET_MARKER_END, $attributeOffset);
                if (false !== $attributeOffset) {
                    $processedXml = substr($searchResult->getRawXml(), $attributeOffset+strlen(self::ATTRIBUTE_SET_MARKER_START), $attributeOffsetEnd-$attributeOffset-strlen(self::ATTRIBUTE_SET_MARKER_START));
                    $processedXml = str_replace('ns2:', '', $processedXml);
                    $attributes = new \SimpleXMLElement($processedXml);

                    $attributeOffset = $attributeOffsetEnd;
                }
            }
            if (!empty($attributes)) {
                if (!empty($attributes->ListPrice->Amount)) {
                    $potentialMatch['listPrice'] = $attributes->ListPrice->Amount->__toString();
                }
                if (!empty($attributes->ListPrice->CurrencyCode)) {
                    $potentialMatch['listPriceCurrency'] = $attributes->ListPrice->CurrencyCode->__toString();
                }
                $dimensionsField = null;
                if (!empty($attributes->ItemDimensions)) {
                    $dimensionsField        = 'ItemDimensions';
                    $itemBasedDimensions    = $this->extractDimensionsFromAttributes($attributes->$dimensionsField);
                    $itemBasedWeight        = $this->extractWeightFromAttributes($attributes->$dimensionsField);
                } else {
                    $itemBasedDimensions    = array();
                    $itemBasedWeight        = 0;
                }
                if (!empty($attributes->PackageDimensions)) {
                    $dimensionsField        = 'PackageDimensions';
                    $packageBasedDimensions = $this->extractDimensionsFromAttributes($attributes->$dimensionsField);
                    $packageBasedWeight     = $this->extractWeightFromAttributes($attributes->$dimensionsField);
                } else {
                    $packageBasedDimensions = array();
                    $packageBasedWeight     = 0;
                }
                if (!empty($packageBasedDimensions)) {
                    $potentialMatch['dimensions'] = $packageBasedDimensions;
                } elseif (!empty($itemBasedDimensions)) {
                    $potentialMatch['dimensions'] = $itemBasedDimensions;
                }
                if (!empty($packageBasedWeight)) {
                    $potentialMatch['weightPounds'] = $packageBasedWeight;
                } elseif (!empty($itemBasedWeight)) {
                    $potentialMatch['weightPounds'] = $itemBasedWeight;
                }
                if (!empty($attributes->Model)) {
                    $potentialMatch['model'] = $attributes->Model->__toString();
                }
                if (!empty($attributes->ItemPartNumber)) {
                    $potentialMatch['itemPartNumber'] = $attributes->ItemPartNumber->__toString();
                }
                if (!empty($attributes->PartNumber)) {
                    $potentialMatch['partNumber'] = $attributes->PartNumber->__toString();
                }
                if (!empty($attributes->Brand)) {
                    $potentialMatch['brand'] = $attributes->Brand->__toString();
                }
                if (!empty($attributes->Label)) {
                    $potentialMatch['label'] = $attributes->Label->__toString();
                }
                if (!empty($attributes->Manufacturer)) {
                    $potentialMatch['manufacturer'] = $attributes->Manufacturer->__toString();
                }
                if (!empty($attributes->Publisher)) {
                    $potentialMatch['publisher'] = $attributes->Publisher->__toString();
                }
                if (!empty($attributes->Title)) {
                    $potentialMatch['title'] = $attributes->Title->__toString();
                }
            }
            if (!empty($potentialMatch)) {
                $potentialMatches[] = $potentialMatch;
            }
        }
        return $potentialMatches;
    }

    /**
     * Uses the Amazon API to call getCompetitivePricingForASIN()
     *
     * @param $asin
     * @return null|MwsCompetitivePricing[]
     */
    public function retrieveCompetitivePricingForASIN($asin) {
        if (empty($asin)) {
            echo "\nNo terms to search for.";
            return null;
        }

        try {
            /** @var \MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse $mwsResponse */
            $mwsResponse = $this->callGetCompetitivePricingForASIN($asin);
        } catch (\MarketplaceWebServiceProducts_Exception $e) {
            if ('RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                sleep(2);
            } else {
                echo "\nThere was a problem with looking up ASIN $asin";
            }
            echo "\nException details:";
            print_r($e); // @todo - better way to debug an exception
            return null;
        }

        /** @var \MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResult[] $cpResults */
        $cpResults = $mwsResponse->getGetCompetitivePricingForASINResult();

        $cpObjects = array();
        foreach ($cpResults as $cpResult) {
            $cpObjects[] = new MwsCompetitivePricing($cpResult);
        }
        return $cpObjects;
    }

    /**
     * Uses the Amazon API to call getLowestOfferListingsForASIN()
     *
     * @param $asin
     * @param $itemCondition
     * @return null|MwsLowestOfferListing[]
     */
    public function retrieveLowestOfferListingsForASIN($asin, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        if (empty($asin)) {
            echo "\nNo terms to search for.";
            return null;
        }

        try {
            /** @var \MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse $lolResponse */
            $lolResponse = $this->callGetLowestOfferListingsForASIN($asin, $itemCondition);
        } catch (\MarketplaceWebServiceProducts_Exception $e) {
            if ('RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                sleep(2);
            } else {
                echo "\nThere was a problem with looking up ASIN $asin";
            }
            echo "\nException details:";
            print_r($e); // @todo - better way to debug an exception
            return null;
        }

        /** @var \MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResult[] $lolResults */
        $lolResults = $lolResponse->getGetLowestOfferListingsForASINResult();

        $lolObjects = array();
        foreach ($lolResults as $lolResult) {
            /** @var \MarketplaceWebServiceProducts_Model_Product $lolProduct */
            $lolProduct = $lolResult->getProduct();
            /** @var \MarketplaceWebServiceProducts_Model_LowestOfferListingList $lolList */
            $lolList = $lolProduct->getLowestOfferListings();
            /** @var \MarketplaceWebServiceProducts_Model_LowestOfferListingType[] $lol */
            $lolArray = $lolList->getLowestOfferListing();
            foreach ($lolArray as $lolType) {
                $lolObjects[] = new MwsLowestOfferListing($lolType);
            }
        }
        return $lolObjects;
    }

    /**
     * Uses the Amazon API to call getMyPriceForASIN()
     *
     * @param string|array $asin
     * @param string $itemCondition
     * @return null|MwsMyPriceForAsin[]
     */
    public function retrieveMyPriceForASIN($asin, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        if (empty($asin)) {
            echo "\nNo terms to search for.";
            return null;
        }

        try {
            /** @var \MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse $mpfaResponse */
            $mpfaResponse = $this->callGetMyPriceForASIN($asin, $itemCondition);
        } catch (\MarketplaceWebServiceProducts_Exception $e) {
            if ('RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                sleep(2);
            } else {
                echo "\nThere was a problem with looking up ASIN $asin";
            }
            echo "\nException details:";
            print_r($e); // @todo - better way to debug an exception
            return null;
        }

        /** @var \MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult[] $mpfaResults */
        $mpfaResults = $mpfaResponse->getGetMyPriceForASINResult();

        $mpfaObjects = array();
        foreach ($mpfaResults as $mpfaResult) {
            $mpfaObjects[] = new MwsMyPriceForAsin($mpfaResult);
        }
        return $mpfaObjects;
    }


    // ###################################################################
    // # Helper methods for extracting extra data from the API responses #
    // ###################################################################
    private function extractDimensionsFromAttributes($productAttributes) {
        $dimensions = array();
        if (!empty($productAttributes->Width) &&
            !empty($productAttributes->Length) &&
            !empty($productAttributes->Height)
        ) {
            $dimensionAttributes = $productAttributes->Width->attributes();
            if (!empty($dimensionAttributes['Units'][0]) && 'inches'==$dimensionAttributes['Units'][0]) {
                $dimensions = array(
                    'W' => $productAttributes->Width->__toString(),
                    'L' => $productAttributes->Length->__toString(),
                    'H' => $productAttributes->Height->__toString(),
                );
            }
        }
        return $dimensions;
    }
    private function extractWeightFromAttributes($productAttributes) {
        $weight = 0;
        if (!empty($productAttributes->Weight)) {
            $weightAmount = $productAttributes->Weight->__toString();
            $weightAttributes = $productAttributes->Weight->attributes();
            if (!empty($weightAttributes['Units'][0]) && 'pounds'==$weightAttributes['Units'][0]) {
                $weight = $weightAmount * 1;
            }
        }
        return $weight;
    }
}
