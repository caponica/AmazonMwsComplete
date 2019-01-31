<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class PartneredSmallParcelPackageInputList implements Arrayable
{
    /**
     * @var PartneredSmallParcelPackageInput[]
     */
    private $inputs = [];

    /**
     * @param PartneredSmallParcelPackageInput $input
     */
    public function add(PartneredSmallParcelPackageInput $input)
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
