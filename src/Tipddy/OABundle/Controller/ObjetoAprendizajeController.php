<?php

namespace Tipddy\OABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Tipddy\OABundle\Entity\ObjetoAprendizaje;
use Tipddy\OABundle\Form\ObjetoAprendizajeType;

/**
 * ObjetoAprendizaje controller.
 *
 */
class ObjetoAprendizajeController extends Controller
{
    /**
     * Lists all ObjetoAprendizaje entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TipddyOABundle:ObjetoAprendizaje')->findAll();

        return $this->render('TipddyOABundle:ObjetoAprendizaje:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a ObjetoAprendizaje entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOABundle:ObjetoAprendizaje')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ObjetoAprendizaje entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOABundle:ObjetoAprendizaje:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new ObjetoAprendizaje entity.
     *
     */
    public function newAction()
    {
        $entity = new ObjetoAprendizaje();
        $form   = $this->createForm(new ObjetoAprendizajeType(), $entity);

        return $this->render('TipddyOABundle:ObjetoAprendizaje:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new ObjetoAprendizaje entity.
     *
     */
    public function createAction()
    {
        $entity  = new ObjetoAprendizaje();
        $request = $this->getRequest();
        $form    = $this->createForm(new ObjetoAprendizajeType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('objetoaprendizaje_show', array('id' => $entity->getId())));
            
        }

        return $this->render('TipddyOABundle:ObjetoAprendizaje:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing ObjetoAprendizaje entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOABundle:ObjetoAprendizaje')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ObjetoAprendizaje entity.');
        }

        $editForm = $this->createForm(new ObjetoAprendizajeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TipddyOABundle:ObjetoAprendizaje:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ObjetoAprendizaje entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TipddyOABundle:ObjetoAprendizaje')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ObjetoAprendizaje entity.');
        }

        $editForm   = $this->createForm(new ObjetoAprendizajeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('objetoaprendizaje_edit', array('id' => $id)));
        }

        return $this->render('TipddyOABundle:ObjetoAprendizaje:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ObjetoAprendizaje entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TipddyOABundle:ObjetoAprendizaje')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ObjetoAprendizaje entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('objetoaprendizaje'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
