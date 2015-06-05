<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RutasSugeridasController extends Controller
{
	//-- Muestra la vista principal de las rutas sugeridas
    public function mostrarAction()
    {

    	$ruta1 = array('id' => 1 ,
    	               'nombre' => "Ciudad de San José" ,
    	               'distancia' => "10 km" ,
    	               'precio' => "$100",
    	               'provincia' => "San José" ,
    	               'tiempo' => "5 horas");

    	$ruta2 = array('id' => "2" ,
    	               'nombre' => "Ciudad de Cartago" ,
    	               'distancia' => "20 km" ,
    	               'precio' => "$50",
    	               'provincia' => "Cartago" ,
    	               'tiempo' => "8 horas");

        return $this->render('RutasBundle:Rutas:sugeridas.html.twig', array('ruta1' => $ruta1, 'ruta2' => $ruta2));
    }
}