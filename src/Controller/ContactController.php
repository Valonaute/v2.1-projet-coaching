<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    public $entityManager;
    public $contactRepository; 

    public function __construct(EntityManagerInterface $entityManager, ContactRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->contactRepository = $productRepository;
    }

    public function contactForm(Request $request, MailerInterface $mailer)
    {
        $contact = new Contact;
        $contact->setDate(new \DateTime);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            // On sauvegarde dans la BDD
            $this->contactRepository->save($contact, $flush = true);
            // On envoi l'email 
            $email = (new TemplatedEmail())
            ->from($contact->getEmail())
            ->to('contact@easywebfactory.com')
            ->subject('Demande de contact')
            ->htmlTemplate('mailer/mail.html.twig')
            ->context([
                'contact' => $contact
            ]);
            $mailer->send($email);
            // Ajout message flash
            $this->addFlash('success', 'Le mail a bien été envoyé !');
            return $this->redirectToRoute(('home'));
        }

        return $this->render('mailer/contactForm.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
