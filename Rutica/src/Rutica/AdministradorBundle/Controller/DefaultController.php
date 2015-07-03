<?php

namespace Rutica\AdministradorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
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


        return $this->render('AdministradorBundle:Default:inicio.html.twig', array(
                    'ultimoSitios' => $results,
                    'sitiosRutaSugerida' => $sitiosRutaSugerida,
        ));
    }
}
