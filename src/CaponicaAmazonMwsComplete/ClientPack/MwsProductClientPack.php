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

    const ID_TYPE_ASIN                          = 'ASIN';
    const ID_TYPE_GCID                          = 'GCID';
    const ID_TYPE_SELLER_SKU                    = 'SellerSKU';
    const ID_TYPE_UPC                           = 'UPC';
    const ID_TYPE_EAN                           = 'EAN';
    const ID_TYPE_ISBN                          = 'ISBN';
    const ID_TYPE_JAN                           = 'JAN';

    const ITEM_CONDITION_TEXT_ANY               = 'Any';
    const ITEM_CONDITION_TEXT_NEW               = 'New';
    const ITEM_CONDITION_TEXT_USED              = 'Used';
    const ITEM_CONDITION_TEXT_COLLECTIBLE       = 'Collectible';
    const ITEM_CONDITION_TEXT_REFURBISHED       = 'Refurbished';
    const ITEM_CONDITION_TEXT_CLUB              = 'Club';

    const PARAM_ASIN                            = 'ASIN';
    const PARAM_ASIN_LIST                       = 'ASINList';
    const PARAM_ID_LIST                         = 'IdList';
    const PARAM_ID_TYPE                         = 'IdType';
    const PARAM_ITEM_CONDITION                  = 'ItemCondition';
    const PARAM_MARKETPLACE_ID                  = 'MarketplaceId';
    const PARAM_QUERY                           = 'Query';
    const PARAM_QUERY_CONTEXT_ID                = 'QueryContextId';
    const PARAM_SELLER_ID                       = 'SellerId';
    const PARAM_SELLER_SKU                      = 'SellerSKU';
    const PARAM_SELLER_SKU_LIST                 = 'SellerSKUList';

    const QUERY_CONTEXT_ALL                     = 'All';
    const QUERY_CONTEXT_APPAREL                 = 'Apparel';
    const QUERY_CONTEXT_APPLIANCES              = 'Appliances';
    const QUERY_CONTEXT_ARTS_AND_CRAFTS         = 'ArtsAndCrafts';
    const QUERY_CONTEXT_AUTOMOTIVE              = 'Automotive';
    const QUERY_CONTEXT_BABY                    = 'Baby';
    const QUERY_CONTEXT_BEAUTY                  = 'Beauty';
    const QUERY_CONTEXT_BOOKS                   = 'Books';
    const QUERY_CONTEXT_CLASSICAL               = 'Classical';
    const QUERY_CONTEXT_DVD                     = 'DVD';
    const QUERY_CONTEXT_DIGITAL_MUSIC           = 'DigitalMusic';
    const QUERY_CONTEXT_ELECTRONICS             = 'Electronics';
    const QUERY_CONTEXT_FOREIGN_BOOKS           = 'ForeignBooks';
    const QUERY_CONTEXT_GARDEN                  = 'Garden';
    const QUERY_CONTEXT_GROCERY                 = 'Grocery';
    const QUERY_CONTEXT_HEALTH_PERSONAL_CARE    = 'HealthPersonalCare';
    const QUERY_CONTEXT_HOBBIES                 = 'Hobbies';
    const QUERY_CONTEXT_HOME                    = 'Home';
    const QUERY_CONTEXT_HOME_GARDEN             = 'HomeGarden';
    const QUERY_CONTEXT_HOME_IMPROVEMENT        = 'HomeImprovement';
    const QUERY_CONTEXT_INDUSTRIAL              = 'Industrial';
    const QUERY_CONTEXT_JEWELRY                 = 'Jewelry';
    const QUERY_CONTEXT_KINDLE_STORE            = 'KindleStore';
    const QUERY_CONTEXT_KITCHEN                 = 'Kitchen';
    const QUERY_CONTEXT_LIGHTING                = 'Lighting';
    const QUERY_CONTEXT_MP3_DOWNLOADS           = 'MP3Downloads';
    const QUERY_CONTEXT_MAGAZINES               = 'Magazines';
    const QUERY_CONTEXT_MISC                    = 'Misc';
    const QUERY_CONTEXT_MISCELLANEOUS           = 'Miscellaneous';
    const QUERY_CONTEXT_MOBILE_APPS             = 'MobileApps';
    const QUERY_CONTEXT_MUSIC                   = 'Music';
    const QUERY_CONTEXT_MUSIC_TRACKS            = 'MusicTracks';
    const QUERY_CONTEXT_MUSICAL_INSTRUMENTS     = 'MusicalInstruments';
    const QUERY_CONTEXT_OFFICE_PRODUCTS         = 'OfficeProducts';
    const QUERY_CONTEXT_OUTDOOR_LIVING          = 'OutdoorLiving';
    const QUERY_CONTEXT_OUTLET                  = 'Outlet';
    const QUERY_CONTEXT_PC_HARDWARE             = 'PCHardware';
    const QUERY_CONTEXT_PET_SUPPLIES            = 'PetSupplies';
    const QUERY_CONTEXT_PHOTO                   = 'Photo';
    const QUERY_CONTEXT_SHOES                   = 'Shoes';
    const QUERY_CONTEXT_SOFTWARE                = 'Software';
    const QUERY_CONTEXT_SOFTWARE_VIDEO_GAMES    = 'SoftwareVideoGames';
    const QUERY_CONTEXT_SPORTING_GOODS          = 'SportingGoods';
    const QUERY_CONTEXT_TOOLS                   = 'Tools';
    const QUERY_CONTEXT_TOYS                    = 'Toys';
    const QUERY_CONTEXT_UNBOX_VIDEO             = 'UnboxVideo';
    const QUERY_CONTEXT_VHS                     = 'VHS';
    const QUERY_CONTEXT_VIDEO                   = 'Video';
    const QUERY_CONTEXT_VIDEO_GAMES             = 'VideoGames';
    const QUERY_CONTEXT_WATCHES                 = 'Watches';
    const QUERY_CONTEXT_WIRELESS                = 'Wireless';
    const QUERY_CONTEXT_WIRELESS_ACCESSORIES    = 'WirelessAccessories';

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
    /**
     * @param string|array $asin        One or more ASINs to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     */
    public function callGetCompetitivePricingForASIN($asin) {
        return $this->getCompetitivePricingForASIN([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN_LIST       => array('ASIN' => $asin),
        ]);
    }
    /**
     * @param string|array $skuList     One or more SKUs to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     */
    public function callGetCompetitivePricingForSKU($skuList) {
        return $this->getCompetitivePricingForSKU([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_SKU_LIST => array('SellerSKU' => $skuList),
        ]);
    }
    /**
     * @param string|array $asinList    One or more ASINs to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     */
    public function callGetLowestOfferListingsForASIN($asinList, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getLowestOfferListingsForASIN([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN_LIST          => array('ASIN' => $asinList),
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string|array $skuList     One or more SKUs to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     */
    public function callGetLowestOfferListingsForSKU($skuList, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getLowestOfferListingsForSKU([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_SKU_LIST => array('SellerSKU' => $skuList),
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string $asin              A single ASIN to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse
     */
    public function callGetLowestPricedOffersForASIN($asin, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getLowestPricedOffersForASIN([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN            => $asin,
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string $sku               A single SKU to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResponse
     */
    public function callGetLowestPricedOffersForSKU($sku, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getLowestPricedOffersForSKU([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_SKU      => $sku,
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string|array $asinList    One or more ASINs to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     */
    public function callGetMatchingProduct($asinList) {
        return $this->getMatchingProduct([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN_LIST          => array('ASIN' => $asinList),
        ]);
    }
    /**
     * @param string $idType            The IdType of the IDs to look up, one of the ID_TYPE_XYZ values
     * @param string|array $idList      One or more IDs to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse
     */
    public function callGetMatchingProductForId($idType, $idList) {
        return $this->getMatchingProductForId([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ID_TYPE         => $idType,
            self::PARAM_ID_LIST         => array('Id' => $idList),
        ]);
    }
    /**
     * @param string|array $asinList    One or more ASINs to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     */
    public function callGetMyPriceForASIN($asinList, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getMyPriceForASIN([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN_LIST       => array('ASIN' => $asinList),
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string|array $skuList     One or more SKUs to lookup
     * @param string $itemCondition     Defaults to ITEM_CONDITION_TEXT_NEW
     * @return \MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     */
    public function callGetMyPriceForSKU($skuList, $itemCondition = self::ITEM_CONDITION_TEXT_NEW) {
        return $this->getMyPriceForSKU([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_SKU_LIST => array('SellerSKU' => $skuList),
            self::PARAM_ITEM_CONDITION  => $itemCondition,
        ]);
    }
    /**
     * @param string $asin              A single ASIN to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     */
    public function callGetProductCategoriesForASIN($asin) {
        return $this->getProductCategoriesForASIN([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_ASIN            => $asin,
        ]);
    }
    /**
     * @param string $sku               A single SKU to lookup
     * @return \MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     */
    public function callGetProductCategoriesForSKU($sku) {
        return $this->getProductCategoriesForSKU([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_SELLER_SKU      => $sku,
        ]);
    }

    /**
     * @param string $query             The search string
     * @param null $queryContext        Optional search context, one of the QUERY_CONTEXT_XYZ values
     * @return \MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     */
    public function callListMatchingProducts($query, $queryContext = null) {
        return $this->listMatchingProducts([
            self::PARAM_SELLER_ID       => $this->sellerId,
            self::PARAM_MARKETPLACE_ID  => $this->marketplaceId,
            self::PARAM_QUERY           => $query,
            self::PARAM_QUERY_CONTEXT_ID => $queryContext,
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
