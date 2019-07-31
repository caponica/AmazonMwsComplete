<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about FBA Payments: Fee Preview reports
 */
class ReportFbaPaymentsFeePreview extends BaseMwsReport {
    const VARIANT_CANADA        = 'CA';
    const VARIANT_UK            = 'UK';
    const VARIANT_UK_TEMP       = 'UK_TEMP';
    const VARIANT_USA           = 'US';
    const VARIANT_EUROPE        = 'EUR';

    const EXPECTED_FIELD_COUNTS = [
        self::VARIANT_UK        => 29,
        self::VARIANT_UK_TEMP   => 37,
        self::VARIANT_EUROPE    => 28,
        self::VARIANT_USA       => 25,
        self::VARIANT_CANADA    => 22,
    ];
    const EXPECTED_HEADERS = [
        self::VARIANT_UK        => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	has-local-inventory	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-weight-band	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-order-handling-fee-per-order	expected-domestic-fulfilment-fee-per-unit	expected-efn-fulfilment-fee-per-unit-uk	expected-efn-fulfilment-fee-per-unit-de	expected-efn-fulfilment-fee-per-unit-fr	expected-efn-fulfilment-fee-per-unit-it	expected-efn-fulfilment-fee-per-unit-es',
        self::VARIANT_UK_TEMP   => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	has-local-inventory	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-weight-band	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-order-handling-fee-per-order	expected-domestic-fulfilment-fee-per-unit	estimated-future-fee (Current Selling on Amazon + Future Fulfillment fees)	estimated-future-order-handling-fee-per-order	expected-future-domestic-fulfilment-fee-per-unit	expected-efn-fulfilment-fee-per-unit-uk	expected-efn-fulfilment-fee-per-unit-de	expected-efn-fulfilment-fee-per-unit-fr	expected-efn-fulfilment-fee-per-unit-it	expected-efn-fulfilment-fee-per-unit-es	expected-future-efn-fulfilment-fee-per-unit-uk	expected-future-efn-fulfilment-fee-per-unit-de	expected-future-efn-fulfilment-fee-per-unit-fr	expected-future-efn-fulfilment-fee-per-unit-it	expected-future-efn-fulfilment-fee-per-unit-es',
        self::VARIANT_EUROPE    => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	has-local-inventory	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-weight-band	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	expected-domestic-fulfilment-fee-per-unit	expected-efn-fulfilment-fee-per-unit-uk	expected-efn-fulfilment-fee-per-unit-de	expected-efn-fulfilment-fee-per-unit-fr	expected-efn-fulfilment-fee-per-unit-it	expected-efn-fulfilment-fee-per-unit-es',
        self::VARIANT_USA       => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-tier	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-order-handling-fee-per-order	estimated-pick-pack-fee-per-unit	estimated-weight-handling-fee-per-unit	expected-fulfillment-fee-per-unit',
        self::VARIANT_CANADA    => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-pick-pack-fee-per-unit	estimated-weight-handling-fee-per-unit',
    ];

    protected $records          = [];   // array of arrays, main index is country, then sku
    protected $asins            = [];   // array of arrays, main index is asin and the record is an array of SellerSkus that asin is listed through
    protected $skus             = [];   // array of arrays, main index is sku and the record is an array of countries that sku is listed on

    public function addRecord(ReportFbaPaymentsFeePreviewRecord $record) {
        $asin       = $record->getAsin();
        $country    = $record->getCountry();
        $sellerSku  = $record->getSellerSku();

        if (empty($this->records[$country])) {
            $this->records[$country] = [];
        }
        if (empty($this->asins[$asin])) {
            $this->asins[$asin] = [];
        }
        if (empty($this->skus[$sellerSku])) {
            $this->skus[$sellerSku] = [];
        }

        $this->records[$country][$sellerSku] = $record;
        $this->asins[$asin][$sellerSku] = true;
        $this->skus[$sellerSku][]   = $country;
    }
    public function getRecordCountries() {
        return array_keys($this->records);
    }
    public function getRecordsForCountry($country) {
        if (empty($this->records[$country])) {
            return [];
        }
        return $this->records[$country];
    }

    public function getAsins() {
        return array_keys($this->asins);
    }
    public function getSellerSkusLinkedToAsin($asin, $excludingSku=null) {
        $sellerSkus = $this->asins[$asin];
        if ($excludingSku && isset($sellerSkus[$excludingSku])) {
            unset($sellerSkus[$excludingSku]);
        }
        return array_keys($sellerSkus);
    }

    public function getSellerSkus() {
        return array_keys($this->skus);
    }
    public function getCountriesForSellerSku($sellerSku) {
        if (empty($this->skus[$sellerSku])) {
            return [];
        }
        return array_unique($this->skus[$sellerSku]);
    }

    /**
     * @param $sellerSku
     * @return ReportFbaPaymentsFeePreviewRecord[]
     */
    public function getRecordsForSellerSku($sellerSku) {
        $records = [];

        $countries = $this->getCountriesForSellerSku($sellerSku);
        foreach ($countries as $country) {
            $records[] = $this->records[$country][$sellerSku];
        }

        return $records;
    }

    public function countRecords() {
        $numCountries = count($this->records);
        $numRecordsAndCountries = count($this->records, COUNT_RECURSIVE);
        return $numRecordsAndCountries - $numCountries;
    }

    /**
     * Validates the given string (first line of a report file) is as-expected for a ReportType.
     *
     * @param string $headerString              The first line of an Amazon Report file
     * @return string                           The variant key that matched the header (e.g. 'UK' or 'EUR')
     * @throws InvalidReportHeaderException     If no match was found
     */
    public static function validateHeaderRow($headerString) {
        $headerString = trim($headerString,"\n\r ");
        foreach (self::EXPECTED_HEADERS as $variant => $expectation) {
            if ($headerString === $expectation) {
                return $variant;
            }
        }

        throw new InvalidReportHeaderException("Unexpected file header. Got:\n#{$headerString}#\nExpected one of the ReportFbaPaymentsFeePreview headers\n");
    }

    public static function getFieldCountForVariant($variant) {
        $fieldCounts = self::EXPECTED_FIELD_COUNTS;
        if (!empty($fieldCounts[$variant])) {
            return $fieldCounts[$variant];
        }
        throw new InvalidReportHeaderException("Unknown variant ($variant) given");
    }
    public static function getHeadersForVariant($variant) {
        $headers = self::EXPECTED_HEADERS;
        if (!empty($headers[$variant])) {
            return explode("\t", $headers[$variant]);
        }
        throw new InvalidReportHeaderException("Unknown variant ($variant) given");
    }


}