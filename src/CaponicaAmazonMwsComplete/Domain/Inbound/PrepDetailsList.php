<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class PrepDetailsList implements Arrayable
{
    private $details = [];

    public function __construct(PrepDetails $prepDetails)
    {
        $this->addPrepDetails($prepDetails);
    }

    /**
     * @param PrepDetails $prepDetails
     */
    public function addPrepDetails(PrepDetails $prepDetails)
    {
        $this->details[] = $prepDetails->toArray();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->details;
    }
}
