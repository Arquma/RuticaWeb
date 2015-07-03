<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Rutica\DataBaseBundle\Entity\Sitio;
use Rutica\DataBaseBundle\Entity\RutaSugerida;
use Rutica\DataBaseBundle\Entity\SitioRutaSugerida;

class RutasSugeridasController extends Controller
{
    //-- Muestra la vista principal de las rutas sugeridas
    public function mostrarAction(Request $request)
    {    
         //-- use the entity manager to serach the places
        $em = $this->getDoctrine()->getManager();

        $sugeridas = $em->getRepository('DataBaseBundle:RutaSugerida')->findAll();

          //-- to vailidate the form
        if($request->getMethod() == 'POST')
        {
            //-- get the request values
            $idrutasugerida = $request->get('nombre');           

            //-- create a DQL Query
            $query = $em->createQuery(
                'SELECT s
                FROM DataBaseBundle:Sitio s, DataBaseBundle:SitioRutaSugerida r
                WHERE r.idrutasugerida = :id AND s.id = r.idsitio'                
            )->setParameters(array('id'=> $idrutasugerida));

            //-- get the DQL Query results
            $sitios = $query->getResult();

            return $this->render('RutasBundle:Rutas:sugeridas.html.twig', array('sugeridas' => $sugeridas, 'sitios' => $sitios));        
        }

        return $this->render('RutasBundle:Rutas:sugeridas.html.twig', array('sugeridas' => $sugeridas ));   
    }
}