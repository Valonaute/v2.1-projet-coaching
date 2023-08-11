<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Controller\Stripe;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TestStripeController extends AbstractController
{
    #[Route('/checkout', name: 'payment_checkout')]
    public function checkout($stripeSK, SessionInterface $session_cart, ManagerRegistry $doctrine)
    {
        #On met en parametre la clé API (clé Secret)
        Stripe::setApiKey($stripeSK);

        // On récupère les infos du panier 
        $cart_data = $session_cart->get('cart', []);

        $eachitem = [];
        // on récupère dans un tableau chaque article avec la quantité
        foreach ($cart_data as $id => $value) 
        {
            $eachitem[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $value['product']->getTitle(),
                    ],
                    'unit_amount' => $value['product']->getPrice()*100,
                ], 
                'quantity' => $value['quantity']                
            ];
        }


        // On envoi les infos du panier à stripe 
        $session = Session::create([
            'line_items' => [
              $eachitem
            ],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

          return $this->redirect($session->url, 303);
    }

    #[Route('/success', name: 'success_url')]
    public function success()
    {
        return new Response("<b>Bravo paiement réussi</b>");
    }

    #[Route('/cancel', name: 'cancel_url')]
    public function cancel()
    {
        return new Response("<span style='color:red'><b>Erreur de paiement</b></span>");
    }
}
