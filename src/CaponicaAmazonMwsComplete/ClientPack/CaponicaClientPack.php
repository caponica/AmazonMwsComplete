<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

class CaponicaClientPack {
    public static function throttledCall($clientPack, $method, $options) {
        try {
            return $clientPack->$method($options);
        } catch (\Exception $e) {
            if (method_exists($e, 'getErrorCode') && 'RequestThrottled' == $e->getErrorCode()) {
                echo "\nThe request was throttled";
                if ($snoozeLength = self::getThrottleSnoozeSecondsForMethod($clientPack, $method)) {
                    echo "\nSnoozing for $snoozeLength seconds";
                    if (is_int($snoozeLength)) {
                        sleep($snoozeLength);
                    } else {
                        usleep($snoozeLength * 1000);
                    }
                    // try again. If there's another exception it will bubble up to the caller.
                    return $clientPack->$method($options);
                }
            }
            throw $e;
        }
    }

    private static function getThrottleSnoozeSecondsForMethod(ThrottleAwareClientPackInterface $clientPack, $method) {
        $snoozeLengths = $clientPack->getThrottleSnoozeSeconds();
        if (!empty($snoozeLengths[$method])) {
            return $snoozeLengths[$method];
        }
        return null;
    }
}
