<?php

namespace Rutica\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdministradorBundle:Default:inicio.html.twig');
    }
}
