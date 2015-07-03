<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitiosController extends Controller {

    //-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DataBaseBundle:Sitio')->findAll();
        $sitiosRutaSugerida = $em->getRepository('DataBaseBundle:SitioRutaSugerida')->findAll();
       
        return $this->render('RutasBundle:Principal:sitiosTuristicos.html.twig', array(
                    'entities' => $entities,
                    'sitiosRutaSugerida' => $sitiosRutaSugerida,
        ));
    }

    public function obtenerAction($id) {
        $em = $this->getDoctrine()->getManager();

        $sitioPorId = $em->getRepository('DataBaseBundle:Sitio')->find($id);

        return $this->render(array(
                    'sitioTest' => $sitioPorId
        ));
    }

}
