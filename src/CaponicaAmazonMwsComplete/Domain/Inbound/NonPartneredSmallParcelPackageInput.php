<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class NonPartneredSmallParcelPackageInput implements Arrayable
{
    const PARAM_TRACKING_ID = 'TrackingId';

    /**
     * @var string
     */
    private $trackingId;

    /**
     * NonPartneredSmallParcelPackageInput constructor.
     *
     * @param string $trackingId
     */
    public function __construct($trackingId)
    {
        $this->trackingId = $trackingId;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_TRACKING_ID => $this->trackingId,
        ];
    }
}
