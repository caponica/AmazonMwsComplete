<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

final class ThrottledRequestLog {
    private $apiMethod;
    private $requestTime;
    private $clearsAtTime;

    public function __construct($apiMethod, $lifeInSeconds, $previousRequestClearsAtTime) {
        $this->apiMethod = $apiMethod;
        $now = microtime(true);
        $this->requestTime = $now;
        $this->clearsAtTime = max($now, $previousRequestClearsAtTime) + $lifeInSeconds;
    }

    public function getApiMethod() {
        return $this->apiMethod;
    }
    public function getClearsAtTime() {
        return $this->clearsAtTime;
    }
    public function isExpired() {
        $now = microtime(true);
        return $now > $this->clearsAtTime;
    }
}
