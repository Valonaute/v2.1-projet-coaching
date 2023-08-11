<?php
namespace App\Controller\Order;

use App\Cart\CartService;
use App\Entity\OrderItem;
use App\Form\CartConfirmationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Order;
use DateTime;
use Symfony\Component\HttpFoundation\RequestStack;

class OrderConfirmationController extends AbstractController {

    protected $cartservice;
    protected $entityManager;
    protected $session;

    public function __construct(CartService $cartService, EntityManagerInterface $entityManager, RequestStack $session)
    {
        $this->cartservice = $cartService;
        $this->entityManager = $entityManager;
        $this->session = $session;
    }

    public function confirm(Request $request)
    {
        // Création et gestion du formulaire 

        $form = $this->createForm(CartConfirmationType::class);

        $form->handleRequest($request);

        if(!$form->isSubmitted()){
            $this->addFlash('warning', 'vous devez remplir le formulaire de confirmation');
            return $this->redirectToRoute('cart_show');
        }

        // Récupération des infos utilisateurs 
        $user = $this->getuser();
        if(!$this->getUser())
        {
            throw new AccessDeniedException("vous devez être connecter pour confirmer une commande");
        }

        // Récupération des éléments du panier 
        $cartitems = $this->cartservice->getDetailedCartItems();

        if(count($cartitems) === 0){
            return $this->redirectToRoute('cart_show');
        }

        // Création commande 
        // Récupération des informations du formulaire 
        $Order = $form->getData();
        // Mise à jour des infos client 
        $Order->setUser($user);
        $Order->setDateorder(new DateTime());
        $Order->setStatus(Order::STATUS_PENDING);
        $this->entityManager->persist($Order);

        $total = $this->cartservice->getTotal();
        $Order->setTotal($total);

        foreach($this->cartservice->getDetailedCartItems() as $cartitem){

            $OrderItem = new OrderItem();
            $OrderItem->setOrder($Order)
                        ->setProduct($cartitem['product'])
                        ->setproductName($cartitem['product']->getTitle())
                        ->setQuantity($cartitem['qty'])
                        ->setProductprice($cartitem['product']->getPrice());

                        $this->entityManager->persist($OrderItem);
        }

        $this->entityManager->flush();

        return $this->redirectToRoute('order_payment_form',[
            'id' => $Order->getId()
        ]);
    }

}