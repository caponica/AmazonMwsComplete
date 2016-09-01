<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

final class ThrottledRequestManager {
    /** @var ThrottledRequestLogCollection[] */
    private $requestLogCollections  = [];

    /**
     * ThrottledRequestManager constructor.
     * @param array $configuration  Indexed by apiMethod, each one should have 2 or 3 values:
     *                              - int maximumRequestQuota
     *                              - float restoreRatePerSecond
     *                              - string restoreRateBasis
     */
    public function __construct($configuration=[]) {
        foreach ($configuration as $apiMethod => $settings) {
            $maximumRequestQuota = $settings[0];
            $restoreRatePerSecond = $settings[1];
            $restoreRateBasis = empty($settings[2]) ? ThrottledRequestLogCollection::RESTORE_BASIS_REQUEST : $settings[2];
            $this->requestLogCollections[$apiMethod] = new ThrottledRequestLogCollection($maximumRequestQuota, $restoreRatePerSecond, $restoreRateBasis);
        }
    }

    public function getRestoreInterval($apiMethod, $weight=null) {
        return $this->requestLogCollections[$apiMethod]->getRestoreInterval($weight);
    }
    public function snoozeRequiredBeforeNewRequest($apiMethod, $weight=null) {
        return $this->requestLogCollections[$apiMethod]->snoozeRequiredBeforeNewRequest($weight);
    }
    public function addRequestLogForMethod($apiMethod, $weight=null) {
        $this->requestLogCollections[$apiMethod]->addLog($apiMethod, $weight);
    }
}
