<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

final class ThrottledRequestManager {
    /** @var ThrottledRequestLogCollection[] */
    private $requestLogCollections  = [];

    private $mapApiMethodToThrottleLogKey = [];
    /**
     * ThrottledRequestManager constructor.
     * @param array $configuration  Indexed by apiMethod, each one should have 2 or 3 values:
     *                              - int maximumRequestQuota
     *                              - float restoreRatePerSecond
     *                              - string restoreRateBasis
     *                              - string throttleKey        defaults to the apiMethod, but use this value to share limits between multiple methods
     */
    public function __construct($configuration=[]) {
        foreach ($configuration as $apiMethod => $settings) {
            $maximumRequestQuota = $settings[0];
            $restoreRatePerSecond = $settings[1];
            $restoreRateBasis = empty($settings[2]) ? ThrottledRequestLogCollection::RESTORE_BASIS_REQUEST : $settings[2];
            $throttleLogKey = empty($settings[3]) ? $apiMethod : $settings[3];
            if ($throttleLogKey == $apiMethod) {
                $this->requestLogCollections[$apiMethod] = new ThrottledRequestLogCollection($maximumRequestQuota, $restoreRatePerSecond, $restoreRateBasis);
            }
            $this->mapApiMethodToThrottleLogKey[$apiMethod] = $throttleLogKey;
        }
    }

    private function convertApiMethodToThrottleLogKey($apiMethod) {
        return $this->mapApiMethodToThrottleLogKey[$apiMethod];
    }

    public function getRestoreInterval($apiMethod, $weight=null) {
        $key = $this->convertApiMethodToThrottleLogKey($apiMethod);
        return $this->requestLogCollections[$key]->getRestoreInterval($weight);
    }
    public function snoozeRequiredBeforeNewRequest($apiMethod, $weight=null) {
        $key = $this->convertApiMethodToThrottleLogKey($apiMethod);
        return $this->requestLogCollections[$key]->snoozeRequiredBeforeNewRequest($weight);
    }
    public function addRequestLogForMethod($apiMethod, $weight=null) {
        $key = $this->convertApiMethodToThrottleLogKey($apiMethod);
        $this->requestLogCollections[$key]->addLog($apiMethod, $weight);
    }
    public function exhaustRequestQuotaForMethod($apiMethod) {
        $key = $this->convertApiMethodToThrottleLogKey($apiMethod);
        $this->requestLogCollections[$key]->exhaustRequestQuota($apiMethod);
    }
}
