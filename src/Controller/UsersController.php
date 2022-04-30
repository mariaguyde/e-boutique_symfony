<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use App\Form\UsersType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index(Request $request, UsersRepository $UsersRepository): Response
    {
        $session = $request->getSession();
        $userLogged =  $session->get('userLogged');

        if ($userLogged === "yes") {
            $email = $session->get('email');
            $user = $UsersRepository->findBy(['email' => $email]);
            return $this->render('users/index.html.twig', [
                "user" => $user[0],
            ]);
        } else {
            return $this->render('inc/notAuthorized.html.twig', []);
        }
    }

    /**
     * @Route("/updateProfil/{id}", name="updateProfil", methods={"GET", "POST"})
     */
    public function updateProfil(Request $request, Users $user, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
            $entityManager->flush();

            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('users/updateprofile.html.twig', [
            'form' => $form->createView()
        ]); 
    }

    /**
     * @Route("/updateProfilData", name="updateProfilData")
     */
    public function updateProfilData(UsersRepository $UsersRepository): Response
    {
        echo $_GET["name"]; 
    }
}
