<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;

class MailerController extends AbstractController
{
    public function sendEmail(MailerInterface $mailer): Response
    {

        
        $email = (new TemplatedEmail())
        ->from('valo@gmail.com')
        ->to(new Address ('philiance@gmail.com'))
        ->cc('help@philiance.com')
        ->subject('Quelles sont nos dates de passages ?')

        /* ->addPart((new DataPart(new File('C:\Users\vgaut\Desktop\valo.jpg'), 'Me voici', 'image/jpg'))->asInLine()) */
        ->addPart((new DataPart(new File('assets/img/profil.png'), 'Me voici', 'image/png'))->asInLine())

        ->htmlTemplate('mailer/exemple.html.twig')

        ->context([
            'name' => 'Valentin Gautier',
            'formation' => 'DWWM33',
        ]);

        $mailer->send($email);

        return $this->redirectToRoute('home');
    }
}
