<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Encapsulates shared methods for all report records
 */
abstract class BaseMwsReportRecord {
    public function convertRowStringToArray($rowString, $expectedFieldCount) {
        $fieldArray = explode("\t", trim($rowString, "\r\n"));
        $fieldCount = count($fieldArray);

        if ($expectedFieldCount != $fieldCount) {
            throw new InvalidReportRecordException("Expected $expectedFieldCount fields, but found $fieldCount in row: [ " . implode('~~~', $fieldArray) . " ]");
        }

        array_walk($fieldArray, [$this, 'cleanQuotes']);

        return $fieldArray;
    }

    protected function cleanQuotes(&$string, $key) {
        if (is_string($string) && substr($string, 0, 1) === '"' && substr($string, -1, 1) === '"') {
            if (strpos($string, '\"') !== false) {
                $string = str_replace('\"', '"', $string);
            }
            $string = substr($string, 1, -1);
        }
    }
}