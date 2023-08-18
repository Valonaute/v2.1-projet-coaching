<?php

namespace App\Controller;

use App\Form\UserUpdateType;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserSecurityController extends AbstractController
{
    public $entityManager;
    public $userRepository;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository; 
        $this->entityManager = $entityManager;
    }

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

    public function updateAccount(Request $request)
    {
        // Récupération de l'utilisateur existant 
        $user = $this->getUser();

        // Si utilisateur bien présent 
        if(!$user)
        {
            // Redirection 
            return $this->redirectToRoute('account');
        }

        // Création du formulaire adapté et déja rempli 
        $form = $this->createForm(UserUpdateType::class, $user);
        $form->handleRequest($request);

        // Si le formulaire est valide 
        if($form->isSubmitted() && $form->isValid())
        {
            // Sauvegarder les changements de l'utilisateur 
            $this->userRepository->save($user, $flush = true);

            // Ajout message Flash
            $this->addFlash('success', 'Votre profil a bien été modifié');
            
            // Redirection sur la page du compte 
            return $this->redirectToRoute('account');
        }

        // Afficher le formulaire 
        return $this->render('security/update.html.twig', [
            'form' => $form->createview()
        ]);
    }

    public function deleteAccount()
    {

    }

}
