<?php

namespace MantenimientosBundle\Controller;

use MantenimientosBundle\Entity\Agencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Agencium controller.
 *
 */
class AgenciaController extends Controller
{
    /**
     * Lists all agencium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agencias = $em->getRepository('MantenimientosBundle:Agencia')->findAll();

        return $this->render('agencia/index.html.twig', array(
            'agencias' => $agencias,
        ));
    }

    /**
     * Creates a new agencium entity.
     *
     */
    public function newAction(Request $request)
    {
        $agencium = new Agencia();
        $form = $this->createForm('MantenimientosBundle\Form\AgenciaType', $agencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agencium);
            $em->flush($agencium);

            return $this->redirectToRoute('agencia_show', array('id' => $agencium->getCodigoAgencia()));
        }

        return $this->render('agencia/new.html.twig', array(
            'agencium' => $agencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agencium entity.
     *
     */
    public function showAction(Agencia $agencium)
    {
        $deleteForm = $this->createDeleteForm($agencium);

        return $this->render('agencia/show.html.twig', array(
            'agencium' => $agencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agencium entity.
     *
     */
    public function editAction(Request $request, Agencia $agencium)
    {
        $deleteForm = $this->createDeleteForm($agencium);
        $editForm = $this->createForm('MantenimientosBundle\Form\AgenciaType', $agencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agencia_edit', array('id' => $agencium->getId()));
        }

        return $this->render('agencia/edit.html.twig', array(
            'agencium' => $agencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a agencium entity.
     *
     */
    public function deleteAction(Request $request, Agencia $agencium)
    {
        $form = $this->createDeleteForm($agencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agencium);
            $em->flush();
        }

        return $this->redirectToRoute('agencia_index');
    }

    /**
     * Creates a form to delete a agencium entity.
     *
     * @param Agencia $agencium The agencium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agencia $agencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agencia_delete', array('id' => $agencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
