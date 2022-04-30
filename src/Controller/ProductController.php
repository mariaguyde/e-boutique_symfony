<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Entity\CommandLine;
use App\Repository\ProductRepository;
use App\Repository\MediaRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{

    /**
     * @Route("/", name="product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository, Request $request): Response
    {
        //$repository = $doctrine->getRepository(Product::class);
        // $product = $productRepository->findBy(['id' => '1']);
        //var_dump($product);

        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/addProduct", name="product_add", methods={"GET"})
     */
    public function product_add(Request $request, ProductRepository $productRepository): Response
    {
        $id = $request->query->get('id'); 
        $name = $request->query->get('nom'); 
        $prix = $request->query->get('prix'); 
        $userId = $request->query->get('userId'); 

        $session = $request->getSession();
        $userId = $session->get('userId');
        $session->set('userId',$userId);
        
        $cartContent = $session->get('cart');
        //$cartContent[$prix] = $name;
        $cartContent[$id] = ["name" => $name, "id" => $id, "priceHT" => $prix];
        $session->set('cart', $cartContent);

        //var_dump($cartContent);

       return $this->render('cart/index.html.twig', [
           'id' => $id,
           'cartContent' => $cartContent,
           'name' => $name,
           'prix' => $prix,
        ]);
        
    }

    /**
     * @Route("/category", name="carnets", methods={"GET"})
     */
    /*public function category(ProductRepository $productRepository, Request $request): Response
    { 
        $category = ($request->query->get('category'));

        return $this->render('product/carnets.html.twig', [
            'products' => $productRepository->findAll(),
            'category' => $category,
        ]);
    }*/

    /**
     * @Route("/new", name="product_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('app_media_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('product_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"POST"})
     */
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager, $id, MediaRepository $mediaRepository): Response
    {
        

        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index', [], Response::HTTP_SEE_OTHER);
    }

}
