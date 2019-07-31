<?php

namespace CaponicaAmazonMwsComplete\Domain\Inbound;

use CaponicaAmazonMwsComplete\Contracts\Arrayable;

final class TransportContentContact implements Arrayable
{
    const PARAM_NAME = 'Name';
    const PARAM_EMAIL = 'Email';
    const PARAM_PHONE = 'Phone';
    const PARAM_FAX = 'Fax';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $fax;

    /**
     * TransportContentContact constructor.
     *
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $fax
     */
    public function __construct($name, $email, $phone, $fax)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->fax   = $fax;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::PARAM_NAME  => $this->name,
            self::PARAM_EMAIL => $this->email,
            self::PARAM_PHONE => $this->phone,
            self::PARAM_FAX   => $this->fax,
        ];
    }
}
