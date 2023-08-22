<?php

namespace App\Controller;

use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    public function index(Request $request, UserPasswordHasherInterface $encoder, UserRepository $userRepository, MailerInterface $mailer)
    {
        // Création nouvel utilisateur 
        $user = new User();
        $user->setRegistrationdate(new \DateTime);
        // Création du formulaire 
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valid : 
        if($form->isSubmitted() && $form->isValid())
        {
            // encodage du mot de passe
            $password_hashed = $encoder->hashPassword($user, $form->get('plainPassword')->getData());

            // Insertion du mot de passe crypté
            $user->setPassword($password_hashed);

            // Enregistrement dans la BDD 
            $userRepository->save($user, $flush = true);

            // Envoi email de confirmation : 
            $email = (new TemplatedEmail())
            ->from('contact@easywebfactory.com')
            ->to($user->getEmail())
            ->subject('Confirmation inscription : Bienvenue sur CoachingDevPerso.fr !')
            ->htmlTemplate('mailer/inscription.html.twig')
            ->context([
                'user' => $user
            ]);

            $mailer->send($email);
            
            // Message flash 
            $this->addFlash('success', 'Votre compte a bien été créé');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/inscription.html.twig', [
            'form' => $form->createView()]);
    }
}
