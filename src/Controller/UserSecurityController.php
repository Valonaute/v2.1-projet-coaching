<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserSecurityController extends AbstractController
{
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Redirection si utilisateur déja connecter 
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        // Récupérer les erreurs s'ils y en a 
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier nom d'utilisateur rentré 
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    public function showHome()
    {
        return $this->render('public/home.html.twig');
    }

    public function showAccount(OrderRepository $orderRepository) 
    {
        // On récupère l'ID Utilisateur
        $user = $this->getUser();
            if ($user instanceof UserInterface) {
                $idUser = $user->getId();
            }
        // On récupère les commandes passées par l'utilisateur 
        $orders = $orderRepository->findBy(['iduser' => $idUser]);
        // On envoi les commandes passés dans twig 
        return $this->render('security/account.html.twig', [
            'orders' => $orders
        ]);
    }
}
