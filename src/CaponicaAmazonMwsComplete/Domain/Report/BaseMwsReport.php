<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

use CaponicaAmazonMwsComplete\ClientPack\MwsFeedAndReportClientPack;

/**
 * Domain object to encapsulate shared methods for all reports
 */
abstract class BaseMwsReport {
    const EXPECTED_FIELD_COUNT = 'abstract'; // implement in concrete class
    const EXPECTED_HEADER = 'abstract'; // implement in concrete class

    private static $reportClassMap = [
        MwsFeedAndReportClientPack::REPORT_FBA_INVENTORY_AFN                      => 'ReportFbaInventoryAfn',
        MwsFeedAndReportClientPack::REPORT_FBA_INVENTORY_AFN_BY_COUNTRY           => 'ReportFbaInventoryAfnByCountry',
        MwsFeedAndReportClientPack::REPORT_FBA_INVENTORY_HISTORY_DAILY            => 'ReportFbaInventoryHistoryDaily',
        MwsFeedAndReportClientPack::REPORT_FBA_INVENTORY_HISTORY_MONTHLY          => 'ReportFbaInventoryHistoryMonthly',
        MwsFeedAndReportClientPack::REPORT_FBA_PAYMENTS_FEE_PREVIEW               => 'ReportFbaPaymentsFeePreview',
        MwsFeedAndReportClientPack::REPORT_LISTING_ACTIVE_LISTINGS                => 'ReportListingActiveListings',
        MwsFeedAndReportClientPack::REPORT_TRACKING_BY_ORDER_DATE_FLAT_FILE       => 'ReportTrackingByOrderDateFlatFile',
        MwsFeedAndReportClientPack::REPORT_FBA_SALES_ALL_BY_LAST_UPDATE_FLAT_FILE => 'ReportFbaSalesAllByLastUpdateFlatFile',
    ];

    /**
     * Validates the given string (first line of a report file) is as-expected for a ReportType.
     * This method should not be called on BaseMwsReport itself, but rather on one of the child classes.
     *
     * @param string $headerString      The first line of an Amazon Report file
     * @return bool
     * @throws InvalidReportHeaderException
     */
    public static function validateHeaderRow($headerString) {
        $headerString = trim($headerString,"\n\r ");
        if ($headerString == static::EXPECTED_HEADER) {
            return true;
        } else {
            throw new InvalidReportHeaderException("Unexpected file header. Got:\n#{$headerString}#\nExpected:\n#".static::EXPECTED_HEADER."#\n");
        }
    }

    /**
     * If you have a file and know its report type, this method will map it to the correct Report class and validate
     * the given line as a header
     *
     * @param string $lineFromFile
     * @param string $reportType
     * @return bool
     * @throws InvalidReportHeaderException
     */
    public static function validateHeaderRowForReportType($lineFromFile, $reportType) {
        $reportClass = self::convertReportTypeToReportClass($reportType);
        return $reportClass::validateHeaderRow($lineFromFile);
    }

    /**
     * @param string $reportType    One of the MwsFeedAndReportClientPack::REPORT_XYZ constants
     * @param bool $withNamespace   Defaults to true, which returns the name-spaced class name.
     * @return string               The class name which encapsulates reports of the given reportType
     */
    public static function convertReportTypeToReportClass($reportType, $withNamespace = true) {
        if (! array_key_exists($reportType, self::$reportClassMap)) {
            throw new \InvalidArgumentException('No report class implemented yet for report type:' . $reportType);
        }

        return ($withNamespace ? __NAMESPACE__ . '\\' : '') . self::$reportClassMap[$reportType];
    }

    /**
     * @param string $reportType    One of the MwsFeedAndReportClientPack::REPORT_XYZ constants
     * @param bool $withNamespace   Defaults to true, which returns the name-spaced class name.
     * @return string               The class name which encapsulates records of the given reportType
     */
    public static function convertReportTypeToReportRecordClass($reportType, $withNamespace = true) {
        return self::convertReportTypeToReportClass($reportType, $withNamespace) . 'Record';
    }
}
