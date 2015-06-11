<?php

namespace Rutica\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdministradorBundle:Default:login.html.twig');
    }
}
