<?php

namespace App\Controller;

use App\Entity\TipoOperaciones;
use App\Form\TipoOperacionesType;
use App\Repository\TipoOperacionesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/tipo/operaciones")
 */
class TipoOperacionesController extends AbstractController
{
    /**
     * @Route("/", name="tipo_operaciones_index", methods={"GET"})
     */
    public function index(TipoOperacionesRepository $tipoOperacionesRepository): Response
    {
        return $this->render('tipo_operaciones/index.html.twig', [
            'tipo_operaciones' => $tipoOperacionesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tipo_operaciones_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tipoOperacione = new TipoOperaciones();
        $form = $this->createForm(TipoOperacionesType::class, $tipoOperacione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tipoOperacione);
            $entityManager->flush();

            return $this->redirectToRoute('tipo_operaciones_index');
        }

        return $this->render('tipo_operaciones/new.html.twig', [
            'tipo_operacione' => $tipoOperacione,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_operaciones_show", methods={"GET"})
     */
    public function show(TipoOperaciones $tipoOperacione): Response
    {
        return $this->render('tipo_operaciones/show.html.twig', [
            'tipo_operacione' => $tipoOperacione,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_operaciones_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TipoOperaciones $tipoOperacione): Response
    {
        $form = $this->createForm(TipoOperacionesType::class, $tipoOperacione);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_operaciones_index');
        }

        return $this->render('tipo_operaciones/edit.html.twig', [
            'tipo_operacione' => $tipoOperacione,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_operaciones_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TipoOperaciones $tipoOperacione): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoOperacione->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tipoOperacione);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tipo_operaciones_index');
    }
}
