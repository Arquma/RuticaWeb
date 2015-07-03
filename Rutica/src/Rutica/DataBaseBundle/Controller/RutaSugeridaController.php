<?php

namespace Rutica\DataBaseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Rutica\DataBaseBundle\Entity\RutaSugerida;
use Rutica\DataBaseBundle\Form\RutaSugeridaType;

/**
 * RutaSugerida controller.
 *
 */
class RutaSugeridaController extends Controller
{

    /**
     * Lists all RutaSugerida entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DataBaseBundle:RutaSugerida')->findAll();

        return $this->render('DataBaseBundle:RutaSugerida:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
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
            
            return $this->render('DataBaseBundle:RutaSugerida:new.html.twig', array('sitios' => $sitios));        
        }

        return $this->render('DataBaseBundle:RutaSugerida:new.html.twig');
    }
    
    /**
     * Creates a new RutaSugerida entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new RutaSugerida();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rutasugerida_show', array('id' => $entity->getId())));
        }

        return $this->render('DataBaseBundle:RutaSugerida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a RutaSugerida entity.
     *
     * @param RutaSugerida $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(RutaSugerida $entity)
    {
        $form = $this->createForm(new RutaSugeridaType(), $entity, array(
            'action' => $this->generateUrl('rutasugerida_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }

    /**
     * Displays a form to create a new RutaSugerida entity.
     *
     */
    public function newAction()
    {
        $entity = new RutaSugerida();
        $form   = $this->createCreateForm($entity);

        return $this->render('DataBaseBundle:RutaSugerida:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a RutaSugerida entity.
     *
     */
    public function showAction($id)
    {
       
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:RutaSugerida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RutaSugerida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBaseBundle:RutaSugerida:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing RutaSugerida entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:RutaSugerida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RutaSugerida entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBaseBundle:RutaSugerida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a RutaSugerida entity.
    *
    * @param RutaSugerida $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(RutaSugerida $entity)
    {
        $form = $this->createForm(new RutaSugeridaType(), $entity, array(
            'action' => $this->generateUrl('rutasugerida_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }
    /**
     * Edits an existing RutaSugerida entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBaseBundle:RutaSugerida')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find RutaSugerida entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rutasugerida_edit', array('id' => $id)));
        }

        return $this->render('DataBaseBundle:RutaSugerida:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a RutaSugerida entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DataBaseBundle:RutaSugerida')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find RutaSugerida entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rutasugerida'));
    }

    /**
     * Creates a form to delete a RutaSugerida entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rutasugerida_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')))
            ->getForm()
        ;
    }
}
