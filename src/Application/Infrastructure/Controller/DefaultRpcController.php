<?php

namespace Application\Infrastructure\Controller;

use Cmobi\RabbitmqBundle\Rpc\Controller\RpcController;

class DefaultRpcController extends RpcController
{
    public function whoAction()
    {
        return ['name' => 'Daniel Oliveira <daniel@headdev.com.br>'];
    }
}