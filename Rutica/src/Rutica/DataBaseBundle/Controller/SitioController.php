<?php

namespace Rutica\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Rutica\DataBaseBundle\Entity\Sitio;
use Rutica\DataBaseBundle\Form\SitioType;

/**
 * Sitio controller.
 *
 */
class SitioController extends Controller
{

    /**
     * Lists all Sitio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DataBaseBundle:Sitio')->findAll();

        return $this->render('DataBaseBundle:Sitio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
     public function aSubirImagenAction() {
        $hostname = $this->container->getParameter('database_host');
        $user = $this->container->getParameter('database_user');
        $pass = $this->container->getParameter('database_password');
        $dataBase = $this->container->getParameter('database_name');
        mysql_connect($hostname, $user, $pass);
        mysql_select_db($dataBase);

        $request = $this->getRequest();
        

        if ($request->getMethod() == 'POST') {
            
           

           
           $descripcion = $request->get('descripcion');
           $nombre = $request->get('nombre');
           $precio = $request->get('precio');
           $latitud = $request->get('latitud');
           $longitud = $request->get('longitud');
           $provincia= $request->get('provincia');
           $actividad= $request->get('actividad');
           $activ= $this->getDoctrine()->getRepository('DataBaseBundle:Actividad')->findOneBy(array("id"=>$actividad));
           $provin= $this->getDoctrine()->getRepository('DataBaseBundle:Provincia')->findOneBy(array("id"=>$provincia));
            // File Properties
            $file_name = $_FILES['archivo']['name'];
            $file_tmp = $_FILES['archivo']['tmp_name'];



            // Working With File Extension
            $file_ext = explode('.', $file_name);
            $file_fname = explode('.', $file_name);

            $file_fname = strtolower(current($file_fname));
            $file_ext = strtolower(end($file_ext));
            $allowed = array('jpg', 'jpeg', 'png');

            $entity = new Sitio();
            $form = $this->createCreateForm($entity);
            $form->handleRequest($request);
            $entity->setImagen($file_name);
            $entity->setNombre($nombre);
            $entity->setPrecio($precio);
            $entity->setLatitud($latitud);
            $entity->setLongitud($longitud);
            $entity->setDescripcion($descripcion);
            $entity->setIdActividad($activ);
            $entity->setIdProvincia($provin);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

//        $qry = "INSERT INTO rutica.sitio(nombre,descripcion,imagen,id_provincia,id_actividad,longitud,latitud,precio) VALUES
//                ('$nombre','123','".$file_name."','1','1','123','312','200')";
//        
//
//        mysql_query($qry);
//            
            
            if (in_array($file_ext, $allowed)) {
                $root = getcwd();
                move_uploaded_file($_FILES['archivo']['tmp_name'], $root . '/imagenes_sitios/' . $_FILES['archivo']['name']);
                $message = '¡Archivo cargado correctamente!';



                return $this->redirect($this->generateUrl('sitio'));
            }//fin validadicon de formato
            else {
                $error = '¡Informato incorrecto!';
                return $this->redirect($this->generateUrl('sitio'));
            }
        }

        return $this->redirect($this->generateUrl('sitio'));

    }
    /**
     * Creates a new Sitio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Sitio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sitio_show', array('id' => $entity->getId())));
        }

        return $this->render('DataBaseBundle:Sitio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Sitio entity.
     *
     * @param Sitio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sitio $entity)
    {
        $form = $this->createForm(new SitioType(), $entity, array(
            'action' => $this->generateUrl('sitio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }

    /**
     * Displays a form to create a new Sitio entity.
     *
     */
    public function newAction()
    {
        $entity = new Sitio();
        $form   = $this->createCreateForm($entity);

        return $this->render('DataBaseBundle:Sitio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sitio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:Sitio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sitio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBaseBundle:Sitio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sitio entity.
     *
     */
    public function editarSitioAction(){
         $hostname = $this->container->getParameter('database_host');
        $user = $this->container->getParameter('database_user');
        $pass = $this->container->getParameter('database_password');
        $dataBase = $this->container->getParameter('database_name');
        mysql_connect($hostname, $user, $pass);
        mysql_select_db($dataBase);

        $request = $this->getRequest();
        

        if ($request->getMethod() == 'POST') {
           $id = $request->get('id');
           $descripcion = $request->get('descripcion');
           $nombre = $request->get('nombre');
           $precio = $request->get('precio');
           $latitud =  $request->get('lati') ;
           $longitud = $request->get('longi');
             // File Properties
            $file_name = $_FILES['archivo']['name'];
            $file_tmp = $_FILES['archivo']['tmp_name'];
            
           
            // Working With File Extension
            $file_ext = explode('.', $file_name);
            $file_fname = explode('.', $file_name);

            $file_fname = strtolower(current($file_fname));
            $file_ext = strtolower(end($file_ext));
            $allowed = array('jpg', 'jpeg', 'png');
            
            if ($file_name == ""){
                $qry = "UPDATE  rutica.sitio set nombre='$nombre',descripcion='$descripcion',longitud=$longitud,latitud=$latitud,precio=$precio where id=$id";
                  mysql_query($qry);
            }else{
                $qry = "UPDATE  rutica.sitio set nombre='$nombre',descripcion=''$descripcion'',imagen='".$file_name."',longitud=$longitud,latitud=$latitud,precio=$precio where id=$id";
                  mysql_query($qry);
                  
                  if (in_array($file_ext, $allowed)) {
                $root = getcwd();
                move_uploaded_file($_FILES['archivo']['tmp_name'], $root . '/imagenes_sitios/' . $_FILES['archivo']['name']);
                $message = '¡Archivo cargado correctamente!';

                return $this->redirect($this->generateUrl('sitio'));
            }//fin validadicon de formato
            else {
                $error = '¡Informato incorrecto!';
                return $this->redirect($this->generateUrl('sitio'));
            }
            }
                    
             
            
                  
             
             return $this->redirect($this->generateUrl('sitio'));
            
        }
            
        
        
        
        
       
        
        return $this->redirect($this->generateUrl('sitio'));
    }
    
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:Sitio')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sitio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBaseBundle:Sitio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sitio entity.
    *
    * @param Sitio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sitio $entity)
    {
        $form = $this->createForm(new SitioType(), $entity, array(
            'action' => $this->generateUrl('sitio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }
    /**
     * Edits an existing Sitio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:Sitio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sitio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sitio_edit', array('id' => $id)));
        }

        return $this->render('DataBaseBundle:Sitio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sitio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DataBaseBundle:Sitio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sitio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sitio'));
    }

    /**
     * Creates a form to delete a Sitio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sitio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Borrar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')))
            ->getForm()
        ;
    }
}
