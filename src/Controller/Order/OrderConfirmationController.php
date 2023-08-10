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
    protected $em;
    protected $session;

    public function __construct(CartService $cartService, EntityManagerInterface $em, RequestStack $session)
    {
        $this->cartservice = $cartService;
        $this->em = $em;
        $this->session = $session;
    }

    public function confirm(Request $request)
    {
        $form = $this->createForm(CartConfirmationType::class);

        $form->handleRequest($request);

        if(!$form->isSubmitted()){
            $this->addFlash('warning', 'vous devez remplir le formulaire de confirmation');
            return $this->redirectToRoute('cart_show');
        }

        $user = $this->getuser();
        if(!$this->getUser())
        {
            throw new AccessDeniedException("vous devez être connecter pour confirmer une commande");
        }

        $cartitems = $this->cartservice->getDetailedCartItems();

        if(count($cartitems) === 0){
            return $this->redirectToRoute('cart_show');
        }

        $Order = $form->getData();
        $Order->setUser($user)
                ->setDateorder(new DateTime())
                ->setStatus(Order::STATUS_PENDING);
        $this->em->persist($Order);

        $total = $this->cartservice->getTotal();
        $Order->setTotal($total);

        foreach($this->cartservice->getDetailedCartItems() as $cartitem){

            $OrderItem = new OrderItem();
            $OrderItem->setOrder($Order)
                        ->setProduct($cartitem['product'])
                        ->setproductName($cartitem['product']->getTitle())
                        ->setQuantity($cartitem['qty'])
                        ->setProductprice($cartitem['product']->getPrice());

                        $this->em->persist($OrderItem);
        }

        $this->em->flush();

        return $this->redirectToRoute('order_payment_form',[
            'id' => $Order->getId()
        ]);
    }

}