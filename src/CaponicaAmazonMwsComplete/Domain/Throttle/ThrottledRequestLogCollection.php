<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

final class ThrottledRequestLogCollection {
    /** @var ThrottledRequestLog[] $logs */
    private $logs = [];
    private $maximumRequestQuota;
    private $restoreRatePerSecond;
    private $requestLifetimeInSeconds;

    public function __construct($maximumRequestQuota, $restoreRatePerSecond) {
        $this->maximumRequestQuota = $maximumRequestQuota;
        $this->restoreRatePerSecond = $restoreRatePerSecond;
        $this->requestLifetimeInSeconds = 1 / $restoreRatePerSecond;
    }

    public function addLog($apiMethod) {
        $this->logs[] = new ThrottledRequestLog($apiMethod, $this->requestLifetimeInSeconds, $this->getLatestClearTime());
    }

    public function snoozeRequiredBeforeNewRequest() {
        $this->clearOldLogs();
        if (count($this->logs) < $this->maximumRequestQuota) {
            return 0;
        }

        $now = time();
        $nextClear = $this->getNextClearTime();
        return max(0, ceil($nextClear - $now));
    }

    private function clearOldLogs() {
        $keysToClear = [];
        foreach ($this->logs as $key => $log) {
            if ($log->isExpired()) {
                $keysToClear[] = $key;
            }
        }
        foreach ($keysToClear as $key) {
            unset($this->logs[$key]);
        }
    }

    private function getNextClearTime() {
        /** @var ThrottledRequestLog $arbitraryLog */
        $arbitraryLog = reset($this->logs);
        $earliestClearTime = $arbitraryLog->getClearsAtTime();
        /** @var ThrottledRequestLog $log */
        foreach ($this->logs as $log) {
            $earliestClearTime = min($log->getClearsAtTime(), $earliestClearTime);
        }
        return $earliestClearTime;
    }

    private function getLatestClearTime() {
        $latestClearTime = 0;
        /** @var ThrottledRequestLog $log */
        foreach ($this->logs as $log) {
            $latestClearTime = max($log->getClearsAtTime(), $latestClearTime);
        }
        return $latestClearTime;
    }
}
