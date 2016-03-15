<?php

namespace Application\Tests\Domain\Fixtures;

use Application\Domain\ValueObjectInterface;

class Address implements ValueObjectInterface
{
    private $street;
    private $number;
    private $zipcode;

    public function __construct($street, $number, $zipcode)
    {
        $this->street = $street;
        $this->number = $number;
        $this->zipcode = $zipcode;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getZipCode()
    {
        return $this->zipcode;
    }

    public function __toString()
    {
        return join(', ', [$this->street, $this->number, $this->zipcode]);
    }
}