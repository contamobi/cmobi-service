<?php

namespace  Application\Infrastructure\Test\Domain;

use Application\Tests\Domain\Fixtures\Address;

class ValueObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $address = new Address('Av. Bandeirantes', '330', '303315000');

        $this->assertEquals('Av. Bandeirantes, 330, 303315000', (string)$address);
    }
}