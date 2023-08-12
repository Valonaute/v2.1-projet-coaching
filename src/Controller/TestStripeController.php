<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Controller\Stripe;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class TestStripeController extends AbstractController
{
    public $productRepository;
    public $security;

    public function __construct(ProductRepository $productRepository, Security $security)
    {
        $this->productRepository = $productRepository;
        $this->security = $security;
    }

    public function checkout($stripeSK, SessionInterface $session_cart)
    {
        // On met en parametre la clé API (clé Secret) via .env.local
        \Stripe\Stripe::setApiKey($stripeSK);

        // On récupère les infos du panier 
        $cart_data = $session_cart->get('cart', []);
        
        $cart_detail = [];

        foreach ($cart_data as $id => $qty)
        {
            $oneproduct = $this->productRepository->find($id);
            $cart_detail[] = [
                'title' => $oneproduct->getTitle(),
                'price' => $oneproduct->getPrice(),
                'quantity' => $qty    
            ];
        }
        
        
        $eachitem = [];
        // on récupère dans un tableau chaque article avec la quantité
        foreach ($cart_detail as $item_detail) 
        {
            $eachitem[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $item_detail['title'],
                    ],
                    'unit_amount' => $item_detail['price']*100,
                ], 
                'quantity' => $item_detail['quantity']                
            ];
        }


        // On envoi les infos du panier à stripe 
        $session = Session::create([
            'line_items' => [[
              $eachitem               
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

          return $this->redirect($session->url, 303);
    }

    public function success(MailerInterface $mailer, SessionInterface $session_cart)
    {
        // Récupération de l'utilisateur de la session
        $user = $this->getUser();
        
        // Récupération de l'email de l'utilisateur 
        if ($user instanceof UserInterface) {
            $userEmail = $user->getEmail();
        }
        
        // Récupération des informations du panier 
        $items = [];

        $cart_data = $session_cart->get('cart', []);

        foreach ($cart_data as $id => $qty)
        {
            $oneproduct = $this->productRepository->find($id);
            $items[] = [
                'title' => $oneproduct->getTitle(),
                'description' => $oneproduct->getShortdescription(),
                'price' => $oneproduct->getPrice(),
                'quantity' => $qty    
            ];
        }
        

        // Envoi d'un mail de confirmation 
        $email = (new TemplatedEmail())
        ->from('thankyou@monsite.com')
        ->to($userEmail)
        ->subject('Confirmation de votre commande')
        ->htmlTemplate('mailer/successOrder.html.twig')
        ->context([
            'items' => $items
        ]);

        $mailer->send($email);

        // Ajout message flash
        $this->addFlash('success', 'Votre commande a bien été effectué, Merci de votre confiance ! Vous avez reçu une confirmation par email.');
        return $this->redirectToRoute(('home'));

    }

    public function cancel()
    {
        $this->addFlash('error', 'Votre commande n\' a pas été effectué, Veuillez réessayer !');
        return $this->redirectToRoute(('home'));
    }
}
