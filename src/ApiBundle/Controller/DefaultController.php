<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function whoAction()
    {
        return new JsonResponse(['name' => 'Daniel Oliveira <daniel@headdev.com.br>']);
    }
}
