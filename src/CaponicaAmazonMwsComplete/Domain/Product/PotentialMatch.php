<?php

namespace CaponicaAmazonMwsComplete\Domain\Product;
use CaponicaAmazonMwsComplete\ClientPack\MwsProductClientPack;
use CaponicaAmazonMwsComplete\Service\LoggerService;
use Psr\Log\LoggerInterface;

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
    /** @var LoggerInterface */
    protected $logger;

    /**
     * @param \MarketplaceWebServiceProducts_Model_Product $product
     * @param string                                       $rawXml Raw XML from the Amazon response
     * @param LoggerInterface|null                         $logger
     */
    public function __construct($product, $rawXml, LoggerInterface $logger = null) {
        $this->logger = $logger;

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
                    //$this->logMessage(
                    //    ">>Found Secondary Rank: #".$salesRank->getRank()." in ".$salesRank->getProductCategoryId()." for asin {$this->asin}",
                    //    LoggerService::DEBUG
                    //);
                }
            }
        }

        // The parser cannot calculate attribute sets, so we need to do it manually:
        $attributes = null;
        $attributesAppearAfter = strpos($rawXml, "<ASIN>{$this->asin}</ASIN>");
        if (false!==$attributesAppearAfter) {
            $attributeOffset = strpos($rawXml, MwsProductClientPack::ATTRIBUTE_SET_MARKER_START, $attributesAppearAfter);
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
        }
        if (!empty($attributes)) {
            $this->logMessage("Trying manual string based attribute search", LoggerService::DEBUG);

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
        } else {
            $this->logMessage("Trying XML based attribute search", LoggerService::DEBUG);

            /** @var \MarketplaceWebServiceProducts_Model_AttributeSetList $asl */
            $asl = $product->getAttributeSets();
            /** @var \DOMElement[] $elementgroups */
            $elementgroups = $asl->getAny();

            $packageBasedDimensions = $this->extractDimensionsFromDomElementArray($elementgroups, 'PackageDimensions');
            if (!empty($packageBasedDimensions)) {
                $this->dimensions = $packageBasedDimensions;
            } else {
                $itemBasedDimensions = $this->extractDimensionsFromDomElementArray($elementgroups, 'ItemDimensions');
                if (!empty($itemBasedDimensions)) {
                    $this->dimensions = $itemBasedDimensions;
                }
            }
            $packageBasedWeight = $this->extractWeightFromDomElementArray($elementgroups, 'PackageDimensions');
            if (!empty($packageBasedWeight)) {
                $this->weightPounds = $packageBasedWeight;
            } else {
                $itemBasedWeight = $this->extractWeightFromDomElementArray($elementgroups, 'ItemDimensions');
                if (!empty($itemBasedWeight)) {
                    $this->weightPounds = $itemBasedWeight;
                }
            }

            if ($foundValue = $this->extractInnerValueFromDomElementArray($elementgroups, 'ListPrice', 'Amount', null)) {
                $this->listPrice = $foundValue;
            }
            if ($foundValue = $this->extractInnerValueFromDomElementArray($elementgroups, 'ListPrice', 'CurrencyCode', null)) {
                $this->listPriceCurrency = $foundValue;
            }

            $basicFields = ['Model', 'ItemPartNumber', 'PartNumber', 'Brand', 'Label', 'Manufacturer', 'Publisher', 'Title'];
            foreach ($basicFields as $xmlKey) {
                $this->setFieldIfBasicValueExists($elementgroups, $xmlKey);
            }
        }
        if (!empty($potentialMatch)) {
            $potentialMatches[] = $potentialMatch;
        }
    }

    public function hasAllThreeDimensions() {
        if (empty($this->dimensions)) {
            return false;
        }
        if (empty($this->dimensions['W']) || empty($this->dimensions['L']) || empty($this->dimensions['H'])) {
            return false;
        }
        return true;
    }
    public function getDimensionsAsArrayOfNumbers() {
        return [
            round((float)$this->dimensions['W'], 1),
            round((float)$this->dimensions['L'], 1),
            round((float)$this->dimensions['H'], 1),
        ];
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    protected function logMessage($message, $level, $context = [])
    {
        if ($this->logger) {
            // Use the internal logger for logging.
            $this->logger->log($level, $message, $context);
        } else {
            LoggerService::logMessage($message, $level, $context);
        }
    }

    // ###################################################################
    // # Helper methods for extracting extra data from the API responses #
    // ###################################################################

    /**
     * @param \DOMElement[] $domElementArray
     * @param string $key                       The key to lookup, e.g. 'ItemDimensions'
     * @return array
     */
    private function extractDimensionsFromDomElementArray($domElementArray, $key) {
        $dimensionAttributeNames = ['Width', 'Length', 'Height'];
        $requiredUnits = 'inches';

        foreach ($domElementArray as $domElement) {
            /** @var \DOMNodeList $nodeList */
            $dimensionNodeList = $domElement->getElementsByTagName($key);
            if ($dimensionNodeList) {
                $dimensionValues = [];
                foreach ($dimensionNodeList as $node) {
                    foreach ($dimensionAttributeNames as $nodeKey) {
                        $innerNodeList = $node->getElementsByTagName($nodeKey);
                        if ($innerNodeList) {
                            list($dimensionValues[$nodeKey], $units) = $this->extractValueAndUnitsFromNodeList($innerNodeList);
                            if (empty($units) || $requiredUnits!=$units || empty($dimensionValues[$nodeKey])) {
                                break 2;
                            }
                        } else {
                            break 2;
                        }
                    }
                }

                if (
                    empty($dimensionValues['Width']) ||
                    empty($dimensionValues['Length']) ||
                    empty($dimensionValues['Height'])
                ) {
                    continue;
                }

                return [
                    'W' => $dimensionValues['Width'],
                    'L' => $dimensionValues['Length'],
                    'H' => $dimensionValues['Height'],
                ];
            }
        }

        return [];
    }
    /**
     * @param \DOMElement[] $domElementArray
     * @param string $key                       The key to lookup, e.g. 'ItemDimensions'
     * @return float|null
     */
    private function extractWeightFromDomElementArray($domElementArray, $key) {
        $requiredUnits = 'pounds';

        foreach ($domElementArray as $domElement) {
            /** @var \DOMNodeList $nodeList */
            $dimensionNodeList = $domElement->getElementsByTagName($key);
            if ($dimensionNodeList) {
                $weight = 0;
                foreach ($dimensionNodeList as $node) {
                    $innerNodeList = $node->getElementsByTagName('Weight');
                    if ($innerNodeList) {
                        list($weight, $units) = $this->extractValueAndUnitsFromNodeList($innerNodeList);
                        if (empty($units) || $requiredUnits!=$units || empty($weight)) {
                            break;
                        }
                    } else {
                        break;
                    }
                }

                if (empty($weight)) {
                    continue;
                }

                return $weight * 1;
            }
        }

        return null;
    }
    /**
     * @param \DOMElement[] $domElementArray
     * @param string $outerKey                      The outer key to lookup, e.g. 'ListPrice'
     * @param string $innerKey                      The inner key to lookup, e.g. 'Amount'
     * @param int|float|string|null $defaultValue   Value to return if no match found
     * @return int|float|string|null
     */
    private function extractInnerValueFromDomElementArray($domElementArray, $outerKey, $innerKey, $defaultValue=null) {
        foreach ($domElementArray as $domElement) {
            /** @var \DOMNodeList $outerNodeList */
            $outerNodeList = $domElement->getElementsByTagName($outerKey);
            if ($outerNodeList) {
                foreach ($outerNodeList as $node) {
                    $innerNodeList = $node->getElementsByTagName($innerKey);
                    if ($innerNodeList) {
                        foreach ($innerNodeList as $innerNode) {
                            return $innerNode->nodeValue;
                        }
                    }
                }
            }
        }

        return $defaultValue;
    }
    /**
     * @param \DOMElement[] $domElementArray
     * @param string $key                           The key to lookup, e.g. 'ItemPartNumber'
     * @param int|float|string|null $defaultValue   Value to return if no match found
     * @return int|float|string|null
     */
    private function extractBasicValueFromDomElementArray($domElementArray, $key, $defaultValue=null) {
        foreach ($domElementArray as $domElement) {
            /** @var \DOMNodeList $nodeList */
            $nodeList = $domElement->getElementsByTagName($key);
            if ($nodeList) {
                foreach ($nodeList as $node) {
                    return $node->nodeValue;
                }
            }
        }

        return $defaultValue;
    }

    /**
     * Tries to find a value for the given xml key. If it is found and non-empty then the given fieldname is updated.
     *
     * @param \DOMElement[] $elementgroups
     * @param string $xmlKey                        The key to lookup, e.g. 'ItemPartNumber'
     * @param null $fieldName                       The field to update if a value is found. Defaults to the xmlKey with a lower case first letter
     */
    private function setFieldIfBasicValueExists($elementgroups, $xmlKey, $fieldName=null) {
        if ($foundValue = $this->extractBasicValueFromDomElementArray($elementgroups, $xmlKey, null)) {
            if (empty($fieldName)) {
                $fieldName = lcfirst($xmlKey);
            }
            $this->$fieldName = $foundValue;
        }
    }

    private function extractValueAndUnitsFromNodeList($nodeList) {
        foreach ($nodeList as $node) {
            $value = $node->nodeValue;
            $units = $node->attributes->getNamedItem('Units')->nodeValue;
            return [$value, $units];
        }
        return [null, null];
    }
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
}
