<?php

namespace ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultsController extends FOSRestController implements ClassResourceInterface
{
    public function indexAction()
    {
        if ($this->get('kernel')->getEnvironment() !== 'dev') {
            header('HTTP/1.0 403 Forbidden');
            exit('You are not allowed to access this route.');
        }

        return $this->render('default/index.html.twig');
    }

    public function whoAction()
    {
        return new JsonResponse([
            'name' => 'cmobi-service-standard',
            'Author' => 'Conta.MOBI S.A.',
            'contact' => 'Conta.MOBI <ti@conta.mobi>'
        ]);
    }
}
