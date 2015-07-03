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

    public function obtenerUltimosSeisAction() {

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('DataBaseBundle:Sitio')->findAll();
        $sitiosRutaSugerida = $em->getRepository('DataBaseBundle:SitioRutaSugerida')->findAll();

        $hostname = $this->container->getParameter('database_host');
        $user = $this->container->getParameter('database_user');
        $pass = $this->container->getParameter('database_password');
        $dataBase = $this->container->getParameter('database_name');
        mysql_connect($hostname, $user, $pass);
        mysql_select_db($dataBase);

        $request = $this->getRequest();
        $qry = "SELECT * FROM rutica.sitio ORDER BY id DESC LIMIT 6";
        $res = mysql_query($qry);


        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM rutica.sitio ORDER BY id DESC LIMIT 6");
      
        $statement->execute();
        $results = $statement->fetchAll();


        return $this->render('RutasBundle:Principal:home.html.twig', array(
                    'ultimoSitios' => $results,
                    'sitiosRutaSugerida' => $sitiosRutaSugerida,
        ));
    }

}
