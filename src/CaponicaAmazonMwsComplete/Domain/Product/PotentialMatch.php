<?php

namespace CaponicaAmazonMwsComplete\Domain\Product;
use CaponicaAmazonMwsComplete\ClientPack\MwsProductClientPack;

/**
 * Attempt to convert a raw MarketplaceWebServiceProducts_Model_Product into something more workable
 *
 * @package CaponicaAmazonMwsComplete\Domain\Product
 */
final class PotentialMatch {
    private $asin;
    private $brand;
    private $dimensions;
    private $itemPartNumber;
    private $label;
    private $listPrice;
    private $listPriceCurrency;
    private $manufacturer;
    private $model;
    private $partNumber;
    private $publisher;
    private $rank;
    private $rankCat;
    private $title;
    private $weightPounds;
    private $finalAttributeOffset;

    /**
     * @param \MarketplaceWebServiceProducts_Model_Product $product
     * @param string $rawXml            Raw XML from the Amazon response
     * @param int $attributeOffset      Offset for this product in the XML
     * @throws \InvalidArgumentException
     */
    public function __construct($product, $rawXml, $attributeOffset) {
        /** @var \MarketplaceWebServiceProducts_Model_IdentifierType $idType */
        $idType = $product->getIdentifiers();
        if ($idType->isSetMarketplaceASIN()) {
            /** @var \MarketplaceWebServiceProducts_Model_ASINIdentifier $asinId */
            $asinId = $idType->getMarketplaceASIN();
            $this->asin = $asinId->getASIN();
        } else {
            // only want matches with ASINs
            throw new \InvalidArgumentException('No ASIN found in supplied product data');
        }

        /** @var \MarketplaceWebServiceProducts_Model_SalesRankList $salesRanks */
        $salesRanks = $product->getSalesRankings();
        if (!empty($salesRanks)) {
            /** @var \MarketplaceWebServiceProducts_Model_SalesRankType $salesRank */
            foreach ($salesRanks->getSalesRank() as $salesRank) {
                if (strpos($salesRank->getProductCategoryId(), '_display_on_website')) {
                    $this->rank = $salesRank->getRank();
                    $this->rankCat = $salesRank->getProductCategoryId();
                } else {
                    // echo "\n>>Found Secondary Rank: #" . $salesRank->getRank() . " in " . $salesRank->getProductCategoryId() . " for asin {$this->asin}";
                }
            }
        }

        $attributes = null;
        // The parser cannot calculate attribute sets, so we need to do it manually:
        $attributeOffset = strpos($rawXml, MwsProductClientPack::ATTRIBUTE_SET_MARKER_START, $attributeOffset);
        if (false !== $attributeOffset) {
            $attributeOffsetEnd = strpos($rawXml, MwsProductClientPack::ATTRIBUTE_SET_MARKER_END, $attributeOffset);
            if (false !== $attributeOffset) {
                $processedXml = substr(
                    $rawXml,
                    $attributeOffset + strlen(MwsProductClientPack::ATTRIBUTE_SET_MARKER_START),
                    $attributeOffsetEnd - $attributeOffset - strlen(MwsProductClientPack::ATTRIBUTE_SET_MARKER_START)
                );
                $processedXml = str_replace('ns2:', '', $processedXml);
                $attributes = new \SimpleXMLElement($processedXml);

                $attributeOffset = $attributeOffsetEnd;
            }
        }
        if (!empty($attributes)) {
            if (!empty($attributes->ListPrice->Amount)) {
                $this->listPrice = $attributes->ListPrice->Amount->__toString();
            }
            if (!empty($attributes->ListPrice->CurrencyCode)) {
                $this->listPriceCurrency = $attributes->ListPrice->CurrencyCode->__toString();
            }
            $dimensionsField = null;
            if (!empty($attributes->ItemDimensions)) {
                $dimensionsField        = 'ItemDimensions';
                $itemBasedDimensions    = $this->extractDimensionsFromAttributes($attributes->$dimensionsField);
                $itemBasedWeight        = $this->extractWeightFromAttributes($attributes->$dimensionsField);
            } else {
                $itemBasedDimensions    = [];
                $itemBasedWeight        = 0;
            }
            if (!empty($attributes->PackageDimensions)) {
                $dimensionsField        = 'PackageDimensions';
                $packageBasedDimensions = $this->extractDimensionsFromAttributes($attributes->$dimensionsField);
                $packageBasedWeight     = $this->extractWeightFromAttributes($attributes->$dimensionsField);
            } else {
                $packageBasedDimensions = [];
                $packageBasedWeight     = 0;
            }
            if (!empty($packageBasedDimensions)) {
                $this->dimensions = $packageBasedDimensions;
            } elseif (!empty($itemBasedDimensions)) {
                $this->dimensions = $itemBasedDimensions;
            }
            if (!empty($packageBasedWeight)) {
                $this->weightPounds = $packageBasedWeight;
            } elseif (!empty($itemBasedWeight)) {
                $this->weightPounds = $itemBasedWeight;
            }
            if (!empty($attributes->Model)) {
                $this->model = $attributes->Model->__toString();
            }
            if (!empty($attributes->ItemPartNumber)) {
                $this->itemPartNumber = $attributes->ItemPartNumber->__toString();
            }
            if (!empty($attributes->PartNumber)) {
                $this->partNumber = $attributes->PartNumber->__toString();
            }
            if (!empty($attributes->Brand)) {
                $this->brand = $attributes->Brand->__toString();
            }
            if (!empty($attributes->Label)) {
                $this->label = $attributes->Label->__toString();
            }
            if (!empty($attributes->Manufacturer)) {
                $this->manufacturer = $attributes->Manufacturer->__toString();
            }
            if (!empty($attributes->Publisher)) {
                $this->publisher = $attributes->Publisher->__toString();
            }
            if (!empty($attributes->Title)) {
                $this->title = $attributes->Title->__toString();
            }
        }
        if (!empty($potentialMatch)) {
            $potentialMatches[] = $potentialMatch;
        }

        $this->finalAttributeOffset = $attributeOffset;
    }


    // ###################################################################
    // # Helper methods for extracting extra data from the API responses #
    // ###################################################################

    private function extractDimensionsFromAttributes($productAttributes) {
        $dimensions = [];
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

    // #################
    // # Basic getters #
    // #################

    /**
     * @return String
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return array
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @return mixed
     */
    public function getItemPartNumber()
    {
        return $this->itemPartNumber;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @return mixed
     */
    public function getListPriceCurrency()
    {
        return $this->listPriceCurrency;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return String
     */
    public function getRankCat()
    {
        return $this->rankCat;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getWeightPounds()
    {
        return $this->weightPounds;
    }

    /**
     * @return bool|int
     */
    public function getFinalAttributeOffset()
    {
        return $this->finalAttributeOffset;
    }
}
