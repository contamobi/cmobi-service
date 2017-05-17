<?php

namespace  Test\Domain;

use Tests\Domain\Fixtures\Address;

class ValueObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testSameAs()
    {
        $address = new Address('Av. Bandeirantes', '330', '303315000');
        $other = new Address('Av. Bandeirantes', '330', '303315000');
        $this->assertTrue($address->sameAs($other));
    }

    public function testNotSameAs()
    {
        $address = new Address('Amphitheatre Parkway', '1600', '94043');
        $other = new Address('Av. Bandeirantes', '330', '303315000');
        $this->assertFalse($address->sameAs($other));
    }
}