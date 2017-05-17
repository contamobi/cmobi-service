<?php

namespace Tests\Domain\Fixtures;

use Domain\ValueObject\ValueObjectInterface;

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

    public function sameAs(ValueObjectInterface $other)
    {
        if (!$other instanceof Address) {
            return false;
        }

        if (
            $this->getNumber() == $other->getNumber()
            && $this->getStreet() == $other->getStreet()
            && $this->getZipCode() == $other->getZipCode()
        ) {
            return true;
        }
        return false;
    }
}