<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Rutica\DataBaseBundle\Entity\Sitio;

class CreaTusRutasController extends Controller
{
	//-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction(Request $request)
    {
    	//-- to vailidate the form
    	if($request->getMethod() == 'POST')
        {
        	//-- get the request values
        	$provincia = $request->get('provincia');
        	$actividad = $request->get('actividad');
        	$precio = $request->get('precio');

        	//-- use the entity manager to serach the places
        	$em = $this->getDoctrine()->getManager();

        	//-- create a DQL Query
        	$query = $em->createQuery(
    			'SELECT s
    			FROM DataBaseBundle:Sitio s, DataBaseBundle:Provincia p, DataBaseBundle:Actividad a
    			WHERE p.nombre = :provincia AND a.nombre = :actividad AND s.idProvincia = p.id AND s.idActividad = a.id'    			
			)->setParameters( array('provincia' => $provincia, 'actividad' => $actividad ));

        	//-- get the DQL Query results
        	$sitios = $query->getResult();
            
            return $this->render('RutasBundle:Rutas:creatusrutas.html.twig', array('sitios' => $sitios));        
        }

        return $this->render('RutasBundle:Rutas:creatusrutas.html.twig');
    }
}