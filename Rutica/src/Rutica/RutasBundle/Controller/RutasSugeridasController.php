<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RutasSugeridasController extends Controller
{
	//-- Muestra la vista principal de las rutas sugeridas
    public function mostrarAction()
    {
        return $this->render('RutasBundle:Rutas:sugeridas.html.twig');
    }
}