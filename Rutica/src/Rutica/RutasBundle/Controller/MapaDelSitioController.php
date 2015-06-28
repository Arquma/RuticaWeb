<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapaDelSitioController extends Controller {

    //-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction() {
        return $this->render('RutasBundle:Principal:mapadelsitio.html.twig');
    }

 
}
