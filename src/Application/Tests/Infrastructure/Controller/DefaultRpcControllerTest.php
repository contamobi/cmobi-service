<?php

namespace Application\Tests\Infrastructure\Controller;

use Application\Infrastructure\Controller\DefaultRpcController;
use Application\Tests\BaseTestCase;

class DefaultRpcControllerTest extends BaseTestCase
{
    public function testWhoAction()
    {
        $controller = new DefaultRpcController();
        $controller->setContainer($this->getContainer());
        $who = $controller->whoAction();

        $this->assertEquals('Daniel Oliveira <daniel@headdev.com.br>', $who['name']);
    }
}