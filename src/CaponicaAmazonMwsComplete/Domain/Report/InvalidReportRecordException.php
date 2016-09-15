<?php
namespace CaponicaAmazonMwsComplete\Domain\Report;

/**
 * Exception thrown when a report row does not match the expected format (often just a simple check of field count)
 */
class InvalidReportRecordException extends \Exception
{
}