<?php

namespace CaponicaAmazonMwsComplete\Service;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * LoggerService singleton
 */
class LoggerService
{

    const EMERGENCY = LogLevel::EMERGENCY;
    const ALERT = LogLevel::ALERT;
    const CRITICAL = LogLevel::CRITICAL;
    const ERROR = LogLevel::ERROR;
    const WARNING = LogLevel::WARNING;
    const NOTICE = LogLevel::NOTICE;
    const INFO = LogLevel::INFO;
    const DEBUG = LogLevel::DEBUG;

    /**
     * @var LoggerInterface|null
     */
    private static $logger;

    /**
     * Log error messages.
     *
     * @param $message
     * @param $level
     * @param $context
     */
    public static function logMessage($message, $level = self::INFO, $context = [])
    {
        if (self::$logger) {
            self::$logger->log($level, $message, $context);
        }
    }

    /**
     * Set the default logger.
     *
     * @param LoggerInterface $logger
     */
    public static function setDefaultLogger(LoggerInterface $logger)
    {
        self::$logger = $logger;
    }

    /**
     * Return the default logger.
     *
     * @return LoggerInterface|null
     */
    public static function getDefaultLogger() {
        return self::$logger;
    }
}