<?php

namespace CaponicaAmazonMwsComplete\Domain\Throttle;

final class ThrottledRequestManager {
    /** @var ThrottledRequestLogCollection[] */
    private $requestLogCollections  = [];
    private $maximumRequestQuotas   = [];
    private $restoreRatesPerSecond  = [];

    public function __construct($maximumRequestQuotas=[], $restoreRatesPerSecond=[]) {
        $this->maximumRequestQuotas  = $maximumRequestQuotas;
        $this->restoreRatesPerSecond = $restoreRatesPerSecond;
        if (count($maximumRequestQuotas) != count($restoreRatesPerSecond)) {
            throw new \InvalidArgumentException('Should be identical number of settings for each ThrottledRequestManager parameter');
        }

        $apiMethods = array_keys($this->maximumRequestQuotas);
        foreach ($apiMethods as $apiMethod) {
            $maximumRequestQuota = $this->maximumRequestQuotas[$apiMethod];
            $restoreRatePerSecond = $this->restoreRatesPerSecond[$apiMethod];
            $this->requestLogCollections[$apiMethod] = new ThrottledRequestLogCollection($maximumRequestQuota, $restoreRatePerSecond);
        }
    }

    public function getRestoreInterval($apiMethod) {
        return ceil(1 / $this->restoreRatesPerSecond[$apiMethod]);
    }
    public function snoozeRequiredBeforeNewRequest($apiMethod) {
        return $this->requestLogCollections[$apiMethod]->snoozeRequiredBeforeNewRequest();
    }
    public function addRequestLogForMethod($apiMethod) {
        $this->requestLogCollections[$apiMethod]->addLog($apiMethod);
    }
}
