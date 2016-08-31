<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

use CaponicaAmazonMwsComplete\Domain\Throttle\ThrottleAwareClientPackInterface;

class CaponicaClientPack {
    public static function throttledCall(ThrottleAwareClientPackInterface $clientPack, $method, $options) {
        try {
            self::snooze($clientPack->getThrottleManager()->snoozeRequiredBeforeNewRequest($method));
            $clientPack->getThrottleManager()->addRequestLogForMethod($method);
            return $clientPack->$method($options);
        } catch (\Exception $e) {
            if (method_exists($e, 'getErrorCode') && 'RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                if ($snoozeLength = $clientPack->getThrottleManager()->getRestoreInterval($method)) {
                    self::snooze($snoozeLength * 2); // Double the normal snooze since we bounced off the server limit

                    // try again. If there's another exception it will bubble up to the caller.
                    return $clientPack->$method($options);
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
            echo "\nSnoozing for $snoozeLength seconds";
            if (is_int($snoozeLength)) {
                echo "\nSleep for $snoozeLength seconds";
                sleep($snoozeLength);
            } else {
                echo "\nusleep for $snoozeLength seconds";
                usleep($snoozeLength * 1000000);
            }
            echo "\nSnooze over";
        }
    }
}
