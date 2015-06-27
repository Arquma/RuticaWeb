<?php

namespace Rutica\RutasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactenosController extends Controller {

    //-- Muestra la vista principal de la opción crea tus rutas
    public function mostrarAction() {
        return $this->render('RutasBundle:Principal:contactenos.html.twig');
    }

    public function enviarCorreoAction() {
        $request = $this->getRequest();
        $nombre=$request->get('nombre');
        $email=$request->get('email');
        $msj= $request->get('message')."\r\n\r\nNombre del usuario: ".$nombre."\r\nCorreo: ".$email;
        
       
        $mailer= $this->container->get('mailer');
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername('jorgesax14@gmail.com')
                ->setPassword('Gamma26PUTA');
        $mailer =  \Swift_Mailer::newInstance($transport);
        $msj = \Swift_Message::newInstance('msj')
                ->setSubject('Consulta: '.$email)
                ->setFrom('toke.jorgesax14@gmail.com')
                ->setTo('jorgesax14@gmail.com')
                ->setBody($msj);
        $this->get('mailer')->send($msj);
        echo 'Enviado';
        return $this->render('RutasBundle:Principal:quienesSomos.html.twig');
    }
}
