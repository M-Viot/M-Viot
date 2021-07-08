<?php

namespace App\Controller;

use App\Entity\RemboursementDetail;
use App\Form\RemboursementDetailType;
use App\Repository\RemboursementDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/remboursementDetail")
 */
class RemboursementDetailController extends AbstractController
{
    /**
     * @Route("/api/{ref}", name="remboursementDetail_api_index", methods={"GET"})
     */
    public function api(RemboursementDetailRepository $remboursementDetailRepository,$ref): Response
    {
        return $this->json($remboursementDetailRepository->findByRefReglement($ref, array('dateReglement' => 'DESC')),200);
    }











    /**
     * @Route("/", name="remboursement_detail_index", methods={"GET"})
     */
    public function index(RemboursementDetailRepository $remboursementDetailRepository): Response
    {
        return $this->render('remboursement_detail/index.html.twig', [
            'remboursement_details' => $remboursementDetailRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="remboursement_detail_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $remboursementDetail = new RemboursementDetail();
        $form = $this->createForm(RemboursementDetailType::class, $remboursementDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($remboursementDetail);
            $entityManager->flush();

            return $this->redirectToRoute('remboursement_detail_index');
        }

        return $this->render('remboursement_detail/new.html.twig', [
            'remboursement_detail' => $remboursementDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="remboursement_detail_show", methods={"GET"})
     */
    public function show(RemboursementDetail $remboursementDetail): Response
    {
        return $this->render('remboursement_detail/show.html.twig', [
            'remboursement_detail' => $remboursementDetail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="remboursement_detail_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RemboursementDetail $remboursementDetail): Response
    {
        $form = $this->createForm(RemboursementDetailType::class, $remboursementDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('remboursement_detail_index');
        }

        return $this->render('remboursement_detail/edit.html.twig', [
            'remboursement_detail' => $remboursementDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="remboursement_detail_delete", methods={"POST"})
     */
    public function delete(Request $request, RemboursementDetail $remboursementDetail): Response
    {
        if ($this->isCsrfTokenValid('delete'.$remboursementDetail->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($remboursementDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('remboursement_detail_index');
    }
}
