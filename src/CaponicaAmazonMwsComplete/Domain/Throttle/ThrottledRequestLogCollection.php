<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

use CaponicaAmazonMwsComplete\Service\LoggerService;

final class ThrottledRequestLogCollection {
    const RESTORE_BASIS_REQUEST = 'request';
    const RESTORE_BASIS_WEIGHT  = 'weight';

    /** @var ThrottledRequestLog[] $logs */
    private $logs = [];
    private $maximumRequestQuota;
    /**
     * @var float   For requestBased queues this is the number of requests that refresh per second (and can be less than 1)
     *              For weightBased queues this is the amount of weight capacity that is made available each second
     */
    private $restoreRatePerSecond;
    private $restoreRateBasis;
    private $weightCapacity = 0;
    private $weightCapacityCalculatedAtTime;

    public function __construct($maximumRequestQuota, $restoreRatePerSecond, $restoreRateBasis = self::RESTORE_BASIS_REQUEST) {
        $this->maximumRequestQuota = $maximumRequestQuota;
        $this->restoreRatePerSecond = $restoreRatePerSecond;
        $this->restoreRateBasis = $restoreRateBasis;
    }

    public function addLog($apiMethod, $weight = null) {
        $this->logs[] = new ThrottledRequestLog($apiMethod, $this->calculateRequestLifetimeInSeconds(), $this->getLatestClearTime());

        if ($this->isWeightBased()) {
            if (count($this->logs) == $this->maximumRequestQuota) {
                $this->weightCapacity = 0;
                $this->weightCapacityCalculatedAtTime = time()+1;
            } elseif (count($this->logs) > $this->maximumRequestQuota) {
                $this->weightCapacity -= $weight;
            }
        }
    }

    public function exhaustRequestQuota($apiMethod) {
        $slotsToFill = $this->maximumRequestQuota - count($this->logs);
        if ($slotsToFill <= 0) {
            return;
        }
        for ($i=1; $i<=$slotsToFill; ++$i) {
            LoggerService::logMessage("Adding fake entry #{$i} to Throttle log to fill a slot", LoggerService::DEBUG);
            $this->addLog($apiMethod);
        }
    }

    public function getRestoreInterval($weight=null) {
        if ($this->isRequestBased()) {
            return ceil(1 / $this->restoreRatePerSecond);
        }
        if ($this->isWeightBased()) {
            return $weight / $this->restoreRatePerSecond;
        }
        return 0;
    }

    public function snoozeRequiredBeforeNewRequest($weight = null) {
        if ($this->isRequestBased()) {
            $this->clearOldLogs();
            if (count($this->logs) < $this->maximumRequestQuota) {
                return 0;
            }

            $now = time();
            $nextClear = $this->getNextClearTime();
            return max(0, ceil($nextClear - $now));
        }
        if ($this->isWeightBased()) {
            if (count($this->logs) < $this->maximumRequestQuota) {
                return 0;
            }

            $this->recalculateWeightCapacity();
            if ($this->weightCapacity > $weight) {
                return 0;
            }
            $excessWeight = $weight - $this->weightCapacity;
            $timeToClearExcessWeight = $excessWeight / $this->restoreRatePerSecond;
            return $timeToClearExcessWeight;
        }
        return 0;
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
    private function recalculateWeightCapacity() {
        $now = microtime(true);
        $timeSinceLastCalculation = $now - $this->weightCapacityCalculatedAtTime;
        $this->weightCapacity += $timeSinceLastCalculation * $this->restoreRatePerSecond;
    }

    private function calculateRequestLifetimeInSeconds() {
        if ($this->isRequestBased()) {
            return 1 / $this->restoreRatePerSecond;
        } else {
            return 60;
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

    private function isWeightBased() {
        return self::RESTORE_BASIS_WEIGHT == $this->restoreRateBasis;
    }
    private function isRequestBased() {
        return self::RESTORE_BASIS_REQUEST == $this->restoreRateBasis;
    }
}
