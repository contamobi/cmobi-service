<?php

namespace ApiBundle\Controller;

class DefaultController extends RestController
{
    public function indexAction()
    {
        return $this->render('default/index.html.twig', []);
    }
}