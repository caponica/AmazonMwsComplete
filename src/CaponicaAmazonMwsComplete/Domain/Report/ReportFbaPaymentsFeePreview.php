<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates information about FBA Payments: Fee Preview reports
 */
class ReportFbaPaymentsFeePreview extends BaseMwsReport {
    const VARIANT_CANADA    = 'CA';
    const VARIANT_UK        = 'UK';
    const VARIANT_USA       = 'US';
    const VARIANT_EUROPE    = 'EUR';

    const EXPECTED_FIELD_COUNTS = [
        self::VARIANT_UK     => 29,
        self::VARIANT_EUROPE => 28,
        self::VARIANT_USA    => 25,
        self::VARIANT_CANADA => 22,
    ];
    const EXPECTED_HEADERS = [
        self::VARIANT_UK     => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	has-local-inventory	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-weight-band	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-order-handling-fee-per-order	expected-domestic-fulfilment-fee-per-unit	expected-efn-fulfilment-fee-per-unit-uk	expected-efn-fulfilment-fee-per-unit-de	expected-efn-fulfilment-fee-per-unit-fr	expected-efn-fulfilment-fee-per-unit-it	expected-efn-fulfilment-fee-per-unit-es',
        self::VARIANT_EUROPE => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	has-local-inventory	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-weight-band	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	expected-domestic-fulfilment-fee-per-unit	expected-efn-fulfilment-fee-per-unit-uk	expected-efn-fulfilment-fee-per-unit-de	expected-efn-fulfilment-fee-per-unit-fr	expected-efn-fulfilment-fee-per-unit-it	expected-efn-fulfilment-fee-per-unit-es',
        self::VARIANT_USA    => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	product-size-tier	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-order-handling-fee-per-order	estimated-pick-pack-fee-per-unit	estimated-weight-handling-fee-per-unit	expected-fulfillment-fee-per-unit',
        self::VARIANT_CANADA => 'sku	fnsku	asin	product-name	product-group	brand	fulfilled-by	your-price	sales-price	longest-side	median-side	shortest-side	length-and-girth	unit-of-dimension	item-package-weight	unit-of-weight	currency	estimated-fee-total	estimated-referral-fee-per-unit	estimated-variable-closing-fee	estimated-pick-pack-fee-per-unit	estimated-weight-handling-fee-per-unit',
    ];

    protected $records = []; // array of arrays, main index is country, then sku
    public function addRecord(ReportFbaPaymentsFeePreviewRecord $record) {
        $country = $record->getCountry();
        if (empty($this->records[$country])) {
            $this->records[$country] = [];
        }

        $this->records[$country][$record->getSellerSku()] = $record;
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