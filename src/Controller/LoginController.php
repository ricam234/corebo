<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login/login.html.twig', [
                         'controller_name' => 'LoginController',
                         'last_username' => $lastUsername,
                         'error'         => $error,
        ]);
    }
    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        return $this->redirect($this->generateUrl('app_login' ));
    }
    #[Route('/', name: 'app_start')]
    public function iniciar(): Response
    {
        return $this->redirect($this->generateUrl('app_login' ));
    }
    #[Route('/create', name: 'app_create')]
    public function create(UserPasswordHasherInterface $passwordHasher,EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $plaintextPassword = 'Corebo#2024';
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $plaintextPassword
            );
        $user->setPassword($hashedPassword);
        $user->setNombre("Guadalupe");
        $user->setApellidos("Amaro");
        $user->setEmail("guadalupe.amaro@corebocuautla.com.mx");
        $user->setRoles(array('ROLE_USER'));
        $entityManager->persist($user);
        $entityManager->flush();
        print_r("agregado");die;
        return $this->render('login/login.html.twig', [
                         'controller_name' => 'LoginController',
                         'last_username' => $lastUsername,
                         'error'         => $error,
        ]);
    }
}
