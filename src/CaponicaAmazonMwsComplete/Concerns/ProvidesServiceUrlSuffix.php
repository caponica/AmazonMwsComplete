<?php

namespace CaponicaAmazonMwsComplete\Concerns;

trait ProvidesServiceUrlSuffix
{
    /**
     * Return the service specific API url portion.
     *
     * @return string
     */
    private function getServiceUrlSuffix()
    {
        return sprintf('/%s/%s', static::SERVICE_NAME, static::SERVICE_VERSION);
    }
}
