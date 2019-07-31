<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class NonPartneredSmallParcelPackageInputList implements Arrayable
{
    /**
     * @var NonPartneredSmallParcelPackageInput[]
     */
    private $inputs = [];

    /**
     * @param NonPartneredSmallParcelPackageInput $input
     */
    public function add(NonPartneredSmallParcelPackageInput $input)
    {
        $this->inputs[] = $input->toArray();
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->inputs;
    }
}
