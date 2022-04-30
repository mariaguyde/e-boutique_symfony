<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ProductRepository;
use App\Repository\UsersRepository;
use App\Entity\Order;
use App\Entity\Users;
use App\Entity\Cart;
use App\Entity\CommandLine;
use App\Entity\CartLine;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $cartContent = $session->get('cart');
        return $this->render('cart/index.html.twig', [
            'cartContent' => $cartContent,
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/order_products", name="order_products")
     */
    public function order_products(SessionInterface $session, Request $request, ProductRepository $productRepository,UsersRepository $usersRepository ) {

        $session = $request->getSession();
        $userLogged =  $session->get('userLogged');
        $productQuantite = $_GET['quantite']; 

        if ($userLogged === "yes") {

            // Order / Cart
            $order = new Order();
            $cart = new Cart();
    
            $order->setValid(1);
            $order->setDateTime(new \DateTime());
    
            $today = date("Ymd");
            $rand = mt_rand(0.00, 99.99);
            $uniqueNumber = $today . $rand;
            
            $order->setOrderNumber($uniqueNumber);
            $cart->setOrderNum($order);

            $email = $session->get('email');
            $user = $usersRepository->findBy(['email' => $email]);
            $order->setUsers($user[0]);
            $cart->setUsers($user[0]);

            // envoi vers la bdd
            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($order);
            $entityManager->persist($cart);
            $entityManager->flush();

            // Command line
            $cartContentParams = $session->get('cart');
            $cartContent = $session->get('cart');
            $count = 0;           

            foreach($cartContentParams as $item){
                //echo ($item["id"]);
                //die();
                $product = $productRepository->find($item["id"]);
                $commandLine = new CommandLine();
                $commandLine->setOrders($order);
                $commandLine->setQuantite($productQuantite[$count]);
                $commandLine->setProduct($product);

                $cartLine = new CartLine();
                $cartLine->setQuantite($productQuantite[$count]);
                $cartLine->setCart($cart); 
                $cartLine->setProduct($product);

                $entityManager->persist($commandLine);
                $entityManager->persist($cartLine);
                $entityManager->flush();
                $count++;
            }

            $cartContent = []; 
            $session->set('cart', $cartContent);
            $total = $this->totalOrder($cartContentParams, $productQuantite);
            return $this->render('order/recap.html.twig', [
                "cartContent" => $cartContentParams,
                "quantite" => $productQuantite,
                "total" => $total,
            ]);
        }
        else {
            return $this->render('inc/notAuthorized.html.twig', [
            ]);
        }
    }

    public function totalOrder ($cartContent, $quantite) {
        $total = 0; 
        $count = 0; 
        
        foreach ($cartContent as $item) {
           //echo "prix ".$item["priceHT"]; 
           //echo "quantite  ".$quantite[$count]; 
           $total += $item["priceHT"] * $quantite[$count]; 
           $count++; 
        }
        $fraisLivraison = 3; 
        $total += $fraisLivraison;
        return $total;
    }


    /**
     * @Route("/cart_update", name="cart_update")
     */
    public function cart_update (Request $request) {
        $id = $request->query->get('id'); 
        $session = $request->getSession();
        $cartContent = $session->get('cart');
        foreach ($cartContent as $item ) {
            if ($id === $item["id"]) {
                unset($cartContent[$id]); 
            }
        }

        $session->set('cart', $cartContent);

        return $this->render('cart/index.html.twig', [
            'cartContent' => $cartContent,
            'controller_name' => 'CartController',
        ]);


    }

}
