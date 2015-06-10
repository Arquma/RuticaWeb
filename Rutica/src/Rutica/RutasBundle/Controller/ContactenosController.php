<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CreaTusRutasController extends Controller
{
	//-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction()
    {
        return $this->render('RutasBundle:Rutas:creatusrutas.html.twig');
    }
}