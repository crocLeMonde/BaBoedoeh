<?php

namespace BaBoedoeh\BookingBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BaBoedoeh\BookingBundle\Entity\Bungalow;
use BaBoedoeh\BookingBundle\Form\BungalowType;

/**
 * Bungalow controller.
 *
 * @Route("/bungalow")
 */
class BungalowController extends Controller
{

    /**
     * Lists all Bungalow entities.
     *
     * @Route("/", name="bungalow")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BaBoedoehBookingBundle:Bungalow')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Bungalow entity.
     *
     * @Route("/", name="bungalow_create")
     * @Method("POST")
     * @Template("BaBoedoehBookingBundle:Bungalow:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Bungalow();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bungalow_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Bungalow entity.
     *
     * @param Bungalow $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bungalow $entity)
    {
        $form = $this->createForm(new BungalowType(), $entity, array(
            'action' => $this->generateUrl('bungalow_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bungalow entity.
     *
     * @Route("/new", name="bungalow_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bungalow();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Bungalow entity.
     *
     * @Route("/{id}", name="bungalow_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BaBoedoehBookingBundle:Bungalow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bungalow entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Bungalow entity.
     *
     * @Route("/{id}/edit", name="bungalow_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BaBoedoehBookingBundle:Bungalow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bungalow entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Bungalow entity.
    *
    * @param Bungalow $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bungalow $entity)
    {
        $form = $this->createForm(new BungalowType(), $entity, array(
            'action' => $this->generateUrl('bungalow_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Bungalow entity.
     *
     * @Route("/{id}", name="bungalow_update")
     * @Method("PUT")
     * @Template("BaBoedoehBookingBundle:Bungalow:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BaBoedoehBookingBundle:Bungalow')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bungalow entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bungalow_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Bungalow entity.
     *
     * @Route("/{id}", name="bungalow_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BaBoedoehBookingBundle:Bungalow')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bungalow entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bungalow'));
    }

    /**
     * Creates a form to delete a Bungalow entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bungalow_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
