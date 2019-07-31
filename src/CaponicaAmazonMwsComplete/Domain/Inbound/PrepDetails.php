<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class PrepDetails implements Arrayable
{
    const PARAM_OWNER = 'PrepOwner';
    const PARAM_INSTRUCTION = 'PrepInstruction';

    private $owner;
    private $instruction;

    public function __construct($owner, $instruction)
    {
        $this->owner       = $owner;
        $this->instruction = $instruction;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_OWNER       => $this->owner,
            self::PARAM_INSTRUCTION => $this->instruction,
        ];
    }
}
