<?php

namespace ApiBundle\Tests\Controller;

use ApiBundle\Controller\RestController;
use Symfony\Component\HttpFoundation\Response;

class RestControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testHandle()
    {
        $mock = $this->getMock(RestController::class);
        $mock->method('handle')
            ->willReturn(new Response());
        $param = $this->getMock('Application\Domain\ValueObjectInterface');

        /**
         * @var $mock \ApiBundle\Controller\RestController
         * @var $param \Application\Domain\ValueObjectInterface
         */
        $response = $mock->handle(json_encode($param));

        $this->assertInstanceOf(Response::class, $response);
    }
}
