<?php

namespace CaponicaAmazonMwsComplete\ClientPack;

interface ThrottleAwareClientPackInterface {
    /**
     * @return array    An array of seconds to snooze for, indexed by method name
     */
    public function getThrottleSnoozeSeconds();
}
