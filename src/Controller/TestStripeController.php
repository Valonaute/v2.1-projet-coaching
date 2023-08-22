<?php

namespace App\Controller;

use App\Cart\CartService;
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
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Order;
use App\Entity\OrderedItem;
use App\Entity\Product;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class TestStripeController extends AbstractController
{
    protected $productRepository;
    protected $security;
    protected $session; 
    protected $cartService;
    protected $entityManager; 

    public function __construct(ProductRepository $productRepository, Security $security, RequestStack $session, CartService $cartService, EntityManagerInterface $entityManager)
    {
        $this->productRepository = $productRepository;
        $this->security = $security;
        $this->session = $session;
        $this->cartService = $cartService;
        $this->entityManager = $entityManager; 
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

        // On créé une commande dans la table order 
        // Récupération de l'utilisateur 
        $user = $this->getUser();
        // Création de la variable commande 
        $order = new Order; 
        // Mise à jour des données dans la variable commande
        $order->setIduser($user);
        $order->setDateorder(new DateTime());
        $order->setTotalamount($this->cartService->getTotal());
        $order->setStatut(Order::STATUS_PENDING);
        // On enregistre les infos 
        $this->entityManager->persist($order);
        $this->entityManager->flush();

        // On envoi les infos du panier à stripe 
        $session = Session::create([
            'line_items' => [[
              $eachitem               
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);

        // Redirection 
        return $this->redirect($session->url, 303);
    }

    public function success(MailerInterface $mailer, SessionInterface $session_cart, OrderRepository $orderRepository)
    {
        // Récupération de l'utilisateur de la session
        $user = $this->getUser();
        
        // Récupération de l'email de l'utilisateur 
        // "instanceof" vérifie si $user est une instance de userinterface 
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
                'id' => $oneproduct->getId(),
                'title' => $oneproduct->getTitle(),
                'description' => $oneproduct->getShortdescription(),
                'price' => $oneproduct->getPrice(),
                'quantity' => $qty    
            ];
        }

        // Enregistrement des articles commandés dans la table OrderItem :
        // Récupération de la commande 
        $order = $orderRepository ->findOneby([], ['dateorder' => 'DESC']);
        $id_order = $order->getId();
        
        // On boucle sur les éléments de la commande pour créer des nouveaux produits commandés 
         foreach ($items as $item)
        {    
            $order_items = new OrderedItem;
            $order_items->setProductId($item['id']);
            $order_items->setOrderId($id_order);
            $order_items->setProductname($item['title']);
            $order_items->setProductprice($item['price']);
            $order_items->setQuantity($item['quantity']);

            $this->entityManager->persist($order_items);
        }

        // Sauvegarde des éléments avec flush 
        $this->entityManager->flush();
        
        // Envoi d'un mail de confirmation :
        $email = (new TemplatedEmail())
        ->from('contact@easywebfactory.com')
        ->to($userEmail)
        ->subject('Confirmation de votre commande')
        ->htmlTemplate('mailer/successOrder.html.twig')
        ->context([
            'items' => $items
        ]);
        $mailer->send($email);

        // Mise à jour statut commande :
        
        // Vérification de la commande 
        if(!$order || $order->getStatut() == Order::STATUS_PAID)
        {
            $this->addflash('warning', 'La commande n\'existe pas ou a déja été payée');
            return $this->redirectToRoute('home');
        }
        // Changement du statut 
        $order->setStatut(Order::STATUS_PAID);
        $this->entityManager->flush();      

        // Récupération des éléments du panier 
        // $order_items = $orderItemRepository->findBy(['order_id' => $id_order]); 

        // Vider le panier :
        // Récupérer le panier existant dans la session 
        $cart = $this->session->getSession()->get('cart', []);
        // Supprimer le panier complètement 
        unset($cart);
        // Créer un nouveau panier vide 
        $this->session->getSession()->set('cart', []);

        // Ajout message flash :
        $this->addFlash('success', 'Votre commande a bien été effectué, Merci de votre confiance ! Vous avez reçu une confirmation par email.');
        return $this->redirectToRoute(('home'));

    }

    public function cancel()
    {
        $this->addFlash('error', 'Votre commande n\' a pas été effectué, Veuillez réessayer !');
        return $this->redirectToRoute(('cart_show'));
    }
}
