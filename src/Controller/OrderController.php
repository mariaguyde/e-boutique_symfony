<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/order")
 */
class OrderController extends AbstractController
{
    /**
     * @Route("/", name="order_index", methods={"GET"})
     */
    public function index(OrderRepository $orderRepository, SessionInterface $session, Request $request): Response
    {

        $session = $request->getSession();
        $userLogged =  $session->get('userLogged');
        if ($userLogged === "yes") {
            return $this->render('order/index.html.twig', [
                'orders' => $orderRepository->findAll(),
            ]);
        }
        else {
            return $this->render('inc/notAuthorized.html.twig', [
            ]);
        }
    }

    
    /**
     * @Route("/recap", name="recap", methods={"GET"})
     */
    /*public function recap(OrderRepository $orderRepository, Request $request): Response
    {

        $session = $request->getSession();
        $userLogged =  $session->get('userLogged');
        //var_dump($userLogged);
        if ($userLogged === "yes") {
            $cartContentParams = $session->get('cart');
            $cartContent = $session->get('cart');
            $cartContent = []; 
            $session->set('cart', $cartContent);

            return $this->render('order/recap.html.twig', [
                "cartContent" => $cartContentParams,
            ]);
        }
        else {
            return $this->render('inc/notAuthorized.html.twig', [
            ]);
        }
    }*/

    /**
     * @Route("/new", name="order_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($order);
            $entityManager->flush();

            return $this->redirectToRoute('order_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('order/new.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="order_show", methods={"GET"})
     */
    public function show(Order $order): Response
    {
        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="order_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('order_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('order/edit.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="order_delete", methods={"POST"})
     */
    public function delete(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $entityManager->remove($order);
            $entityManager->flush();
        }

        return $this->redirectToRoute('order_index', [], Response::HTTP_SEE_OTHER);
    }
}
