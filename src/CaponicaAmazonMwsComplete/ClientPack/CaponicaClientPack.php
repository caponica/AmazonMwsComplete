<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;
use CaponicaAmazonMwsComplete\Service\LoggerService;

class CaponicaClientPack {
    public static function throttledCall(ThrottleAwareClientPackInterface $clientPack, $method, $options, $weight=null) {
        try {
            self::snooze($clientPack->getThrottleManager()->snoozeRequiredBeforeNewRequest($method, $weight));
            $clientPack->getThrottleManager()->addRequestLogForMethod($method, $weight);
            return $clientPack->$method($options);
        } catch (\Exception $e) {
            if (method_exists($e, 'getErrorCode') && 'RequestThrottled' == $e->getErrorCode()) {
                LoggerService::logMessage("The request was throttled", LoggerService::INFO);
                if ($snoozeLength = $clientPack->getThrottleManager()->getRestoreInterval($method, $weight)) {
                    $clientPack->getThrottleManager()->exhaustRequestQuotaForMethod($method);
                    self::snooze(ceil($snoozeLength) * 2); // Double the normal snooze since we bounced off the server limit

                    // try again. If there's another exception it will bubble up to the caller.
                    return $clientPack->$method($options);
                } else {
                    // don't try again if no snooze time is returned, it would just fail again
                }
            }
            throw $e;
        }
    }

    /**
     * @param int|float $snoozeLength
     */
    private static function snooze($snoozeLength) {
        if ($snoozeLength > 0) {
            LoggerService::logMessage("Snoozing for $snoozeLength seconds", LoggerService::DEBUG);
            if (is_int($snoozeLength)) {
                sleep($snoozeLength);
            } else {
                usleep($snoozeLength * 1000000);
            }
        }
    }
}
