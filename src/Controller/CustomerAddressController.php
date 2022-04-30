<?php

namespace App\Controller;

use App\Entity\CustomerAddress;
use App\Form\CustomerAddress1Type;
use App\Repository\CustomerAddressRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Users;


/**
 * @Route("/customer/address")
 */
class CustomerAddressController extends AbstractController
{
    /**
     * @Route("/", name="customer_address_index", methods={"GET"})
     */
    public function index(CustomerAddressRepository $customerAddressRepository): Response
    {
        return $this->render('customer_address/index.html.twig', [
            'customer_addresses' => $customerAddressRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new}", name="customer_address_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UsersRepository $usersRepository): Response
    {
        $customerAddress = new CustomerAddress();
        $form = $this->createForm(CustomerAddress1Type::class, $customerAddress);
        $form->handleRequest($request);

        /*$user = $request->request->get('user');
        var_dump($user);
        echo "test user";
        die();*/ 

        if ($form->isSubmitted() && $form->isValid()) {
            //recuperer l'user id 
            /*$session = $request->getSession();
            $email = $session->get('email');
            $user = $usersRepository->findBy(['email' => $email]);*/
            //$userId = $user->getId();

            //$customerAddress->setUsers($user[0]);
            //var_dump($userId);
            //die();


            $entityManager->persist($customerAddress);
            $entityManager->flush();

            return $this->redirectToRoute('index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('customer_address/new.html.twig', [
            'customer_address' => $customerAddress,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="customer_address_show", methods={"GET"})
     */
    public function show(CustomerAddress $customerAddress): Response
    {
        return $this->render('customer_address/show.html.twig', [
            'customer_address' => $customerAddress,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="customer_address_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CustomerAddress $customerAddress, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CustomerAddress1Type::class, $customerAddress);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('customer_address_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('customer_address/edit.html.twig', [
            'customer_address' => $customerAddress,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="customer_address_delete", methods={"POST"})
     */
    public function delete(Request $request, CustomerAddress $customerAddress, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$customerAddress->getId(), $request->request->get('_token'))) {
            $entityManager->remove($customerAddress);
            $entityManager->flush();
        }

        return $this->redirectToRoute('customer_address_index', [], Response::HTTP_SEE_OTHER);
    }
}
