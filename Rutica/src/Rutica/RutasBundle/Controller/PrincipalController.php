<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrincipalController extends Controller
{
	//-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction()
    {
        return $this->render('RutasBundle:Principal:home.html.twig');
    }
}