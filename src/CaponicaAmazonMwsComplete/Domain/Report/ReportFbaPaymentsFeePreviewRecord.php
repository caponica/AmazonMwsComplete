<?php

namespace CaponicaAmazonMwsComplete\Domain\Report;

use CaponicaAmazonMwsComplete\ClientPool\MwsClientPoolConfig;
use CaponicaAmazonMwsComplete\Domain\Conversion\DimensionConverter;

/**
 * Encapsulates information about a single row from an FBA Payments: Fee Preview report
 */
class ReportFbaPaymentsFeePreviewRecord extends BaseMwsReportRecord implements IdentifiableStockRecordInterface
{
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_USD = 'USD';

    const VALUE_NA     = '--';

    protected $dataArray;
    protected $variant;
    protected $country;

    public function __construct($fileRow, $variant)
    {
        if (empty($expectedFieldCount)) {
            $expectedFieldCount = ReportFbaPaymentsFeePreview::getFieldCountForVariant($variant);
        }

        $headerArray = ReportFbaPaymentsFeePreview::getHeadersForVariant($variant);
        $fieldArray = $this->convertRowStringToArray($fileRow, $expectedFieldCount);

        $this->dataArray = array_combine($headerArray, $fieldArray);
        $this->variant = $variant;

        $this->country = $this->calculateCountry();
    }

    protected function calculateCountry() {
        if (self::CURRENCY_CAD === $this->getCurrency()) {
            return MwsClientPoolConfig::SITE_CANADA;
        }
        if (self::CURRENCY_USD === $this->getCurrency()) {
            return MwsClientPoolConfig::SITE_USA;
        }
        if (self::CURRENCY_GBP === $this->getCurrency() && self::VALUE_NA === $this->getExpectedEfnFulfilmentFeePerUnitUk()) {
            return MwsClientPoolConfig::SITE_UK;
        }
        if (self::CURRENCY_EUR === $this->getCurrency()) {
            if (self::VALUE_NA === $this->getExpectedEfnFulfilmentFeePerUnitDe()) {
                return MwsClientPoolConfig::SITE_GERMANY;
            } elseif (self::VALUE_NA === $this->getExpectedEfnFulfilmentFeePerUnitEs()) {
                return MwsClientPoolConfig::SITE_SPAIN;
            } elseif (self::VALUE_NA === $this->getExpectedEfnFulfilmentFeePerUnitFr()) {
                return MwsClientPoolConfig::SITE_FRANCE;
            } elseif (self::VALUE_NA === $this->getExpectedEfnFulfilmentFeePerUnitIt()) {
                return MwsClientPoolConfig::SITE_ITALY;
            }
        }
        throw new InvalidReportRecordException(
            "Cannot determine which country record belongs to in ReportFbaPaymentsFeePreviewRecord::calculateCountry.\n".
            "Currency is {$this->getCurrency()} and SKU is {$this->getSellerSku()}"
        );
    }
    public function getCountry() {
        return $this->country;
    }

    public function getPackageWeightGrams() {
        return DimensionConverter::convertToGrams($this->getItemPackageWeight(), $this->getUnitOfWeight());
    }
    public function getPackageWeightPounds() {
        return DimensionConverter::convertToPounds($this->getItemPackageWeight(), $this->getUnitOfWeight());
    }

    public function getDimensionArrayCm() {
        return [
            DimensionConverter::convertToCm($this->getLongestSide(), $this->getUnitOfDimension()),
            DimensionConverter::convertToCm($this->getMedianSide(), $this->getUnitOfDimension()),
            DimensionConverter::convertToCm($this->getShortestSide(), $this->getUnitOfDimension()),
        ];
    }
    public function getDimensionArrayInches() {
        return [
            DimensionConverter::convertToInches($this->getLongestSide(), $this->getUnitOfDimension()),
            DimensionConverter::convertToInches($this->getMedianSide(), $this->getUnitOfDimension()),
            DimensionConverter::convertToInches($this->getShortestSide(), $this->getUnitOfDimension()),
        ];
    }
    public function calculateVolumeCbm() {
        $volumeCuFt = $this->calculateVolumeCuFt();
        if (is_null($volumeCuFt)) {
            return null;
        }

        return $volumeCuFt * DimensionConverter::CBM_PER_CUFT;
    }
    public function calculateVolumeCuFt() {
        $dims = $this->getDimensionArrayInches();
        if (empty($dims[0]) || empty($dims[1]) || empty($dims[2])) {
            return null;
        }
        $volume = ($dims[0] * $dims[1] * $dims[2]) / DimensionConverter::CUIN_PER_CUFT;
        return $volume;
    }

    /**
     * @return float
     * @throws InvalidReportRecordException
     */
    public function calculateFbaFee() {
        if ($this->isVariantCanada()) {
            return ($this->getEstimatedWeightHandlingFeePerUnit() + $this->getExpectedFulfillmentFeePerUnit())  * 1;
        }
        if ($this->isVariantUsa()) {
            return $this->getExpectedFulfillmentFeePerUnit() * 1;
        }
        if ($this->isVariantUk() || $this->isVariantEurope()) {
            return $this->getExpectedDomesticFulfilmentFeePerUnit() * 1;
        }
        throw new InvalidReportRecordException("Unknown variant ($this->variant) in ReportFbaPaymentsFeePreviewRecord");
    }

    public function isVariantCanada() {
        return ReportFbaPaymentsFeePreview::VARIANT_CANADA === $this->variant;
    }
    public function isVariantEurope() {
        return ReportFbaPaymentsFeePreview::VARIANT_EUROPE === $this->variant;
    }
    public function isVariantUk() {
        if (ReportFbaPaymentsFeePreview::VARIANT_UK === $this->variant) {
            return true;
        }
        if (ReportFbaPaymentsFeePreview::VARIANT_UK_TEMP === $this->variant) {
            return true;
        }
        return false;
    }
    public function isVariantUsa() {
        return ReportFbaPaymentsFeePreview::VARIANT_USA === $this->variant;
    }

    //###############################//
    //  Straight getters below here  //
    //###############################//
    public function getSellerSku()
    {
        return $this->dataArray['sku'];
    }

    public function getFnSku()
    {
        return $this->dataArray['fnsku'];
    }

    public function getAsin()
    {
        return $this->dataArray['asin'];
    }

    public function getProductName()
    {
        return $this->dataArray['product-name'];
    }

    public function getProductGroup()
    {
        return $this->dataArray['product-group'];
    }

    public function getBrand()
    {
        return $this->dataArray['brand'];
    }

    public function getFulfilledBy()
    {
        return $this->dataArray['fulfilled-by'];
    }

    public function getHasLocalInventory()
    {
        if (isset($this->dataArray['has-local-inventory'])) {
            return $this->dataArray['has-local-inventory'];
        }
        return null;
    }

    public function getYourPrice()
    {
        return $this->dataArray['your-price'];
    }

    public function getSalesPrice()
    {
        return $this->dataArray['sales-price'];
    }

    public function getLongestSide()
    {
        return $this->dataArray['longest-side'];
    }

    public function getMedianSide()
    {
        return $this->dataArray['median-side'];
    }

    public function getShortestSide()
    {
        return $this->dataArray['shortest-side'];
    }

    public function getLengthAndGirth()
    {
        return $this->dataArray['length-and-girth'];
    }

    public function getUnitOfDimension()
    {
        return $this->dataArray['unit-of-dimension'];
    }

    public function getItemPackageWeight()
    {
        return $this->dataArray['item-package-weight'];
    }

    public function getUnitOfWeight()
    {
        return $this->dataArray['unit-of-weight'];
    }

    public function getProductSizeWeightBand()
    {
        return $this->getProductSizeTier();
    }

    public function getProductSizeTier()
    {
        if (isset($this->dataArray['product-size-weight-band'])) {
            return $this->dataArray['product-size-weight-band'];
        }
        if (isset($this->dataArray['product-size-tier'])) {
            return $this->dataArray['product-size-tier'];
        }
        return null;
    }

    public function getCurrency()
    {
        return $this->dataArray['currency'];
    }

    public function getEstimatedFeeTotal()
    {
        return $this->dataArray['estimated-fee-total'];
    }


    public function getEstimatedReferralFeePerUnit()
    {
        return $this->dataArray['estimated-referral-fee-per-unit'];
    }

    public function getEstimatedVariableClosingFee()
    {
        return $this->dataArray['estimated-variable-closing-fee'];
    }

    public function getEstimatedOrderHandlingFeePerOrder()
    {
        if (isset($this->dataArray['estimated-future-order-handling-fee-per-order'])) {
            return $this->dataArray['estimated-future-order-handling-fee-per-order'];
        }
        if (isset($this->dataArray['estimated-order-handling-fee-per-order'])) {
            return $this->dataArray['estimated-order-handling-fee-per-order'];
        }
        return null;
    }

    public function getExpectedDomesticFulfilmentFeePerUnit()
    {
        if (isset($this->dataArray['expected-future-domestic-fulfilment-fee-per-unit'])) {
            return $this->dataArray['expected-future-domestic-fulfilment-fee-per-unit'];
        }
        if (isset($this->dataArray['expected-domestic-fulfilment-fee-per-unit'])) {
            return $this->dataArray['expected-domestic-fulfilment-fee-per-unit'];
        }
        return null;
    }

    public function getExpectedEfnFulfilmentFeePerUnitUk()
    {
        if (isset($this->dataArray['expected-future-efn-fulfilment-fee-per-unit-uk'])) {
            return $this->dataArray['expected-future-efn-fulfilment-fee-per-unit-uk'];
        }
        if (isset($this->dataArray['expected-efn-fulfilment-fee-per-unit-uk'])) {
            return $this->dataArray['expected-efn-fulfilment-fee-per-unit-uk'];
        }
        return null;
    }

    public function getExpectedEfnFulfilmentFeePerUnitDe()
    {
        if (isset($this->dataArray['expected-future-efn-fulfilment-fee-per-unit-de'])) {
            return $this->dataArray['expected-future-efn-fulfilment-fee-per-unit-de'];
        }
        if (isset($this->dataArray['expected-efn-fulfilment-fee-per-unit-de'])) {
            return $this->dataArray['expected-efn-fulfilment-fee-per-unit-de'];
        }
        return null;
    }

    public function getExpectedEfnFulfilmentFeePerUnitFr()
    {
        if (isset($this->dataArray['expected-future-efn-fulfilment-fee-per-unit-fr'])) {
            return $this->dataArray['expected-future-efn-fulfilment-fee-per-unit-fr'];
        }
        if (isset($this->dataArray['expected-efn-fulfilment-fee-per-unit-fr'])) {
            return $this->dataArray['expected-efn-fulfilment-fee-per-unit-fr'];
        }
        return null;
    }

    public function getExpectedEfnFulfilmentFeePerUnitIt()
    {
        if (isset($this->dataArray['expected-future-efn-fulfilment-fee-per-unit-it'])) {
            return $this->dataArray['expected-future-efn-fulfilment-fee-per-unit-it'];
        }
        if (isset($this->dataArray['expected-efn-fulfilment-fee-per-unit-it'])) {
            return $this->dataArray['expected-efn-fulfilment-fee-per-unit-it'];
        }
        return null;
    }

    public function getExpectedEfnFulfilmentFeePerUnitEs()
    {
        if (isset($this->dataArray['expected-future-efn-fulfilment-fee-per-unit-es'])) {
            return $this->dataArray['expected-future-efn-fulfilment-fee-per-unit-es'];
        }
        if (isset($this->dataArray['expected-efn-fulfilment-fee-per-unit-es'])) {
            return $this->dataArray['expected-efn-fulfilment-fee-per-unit-es'];
        }
        return null;
    }

    public function getEstimatedPickPackFeePerUnit()
    {
        if (isset($this->dataArray['estimated-pick-pack-fee-per-unit'])) {
            return $this->dataArray['estimated-pick-pack-fee-per-unit'];
        }
        return null;
    }

    public function getEstimatedWeightHandlingFeePerUnit()
    {
        if (isset($this->dataArray['estimated-weight-handling-fee-per-unit'])) {
            return $this->dataArray['estimated-weight-handling-fee-per-unit'];
        }
        return null;
    }

    public function getExpectedFulfillmentFeePerUnit()
    {
        if (isset($this->dataArray['expected-fulfillment-fee-per-unit'])) {
            return $this->dataArray['expected-fulfillment-fee-per-unit'];
        }
        return null;
    }
}