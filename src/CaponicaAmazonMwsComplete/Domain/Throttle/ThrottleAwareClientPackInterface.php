<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

interface ThrottleAwareClientPackInterface {
    public function initThrottleManager();
    /** @return ThrottledRequestManager */
    public function getThrottleManager();
}
