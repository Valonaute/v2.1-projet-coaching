<?php

namespace  App\Controller\Order;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderPaymentController extends AbstractController {


    public function showCard($id, OrderRepository $OrderRepository)
    {

        $Order = $OrderRepository->find($id);

        if(!$Order) {
            return $this->redirectToRoute('cart_show');
        }

        
    
        // ajouter sa clé api
        \Stripe\Stripe::setApiKey("sk_test_51NH4qlD4SBY6CQPmkFs1U92WEs58aBYSyu27iioVFAwMrvt6zPYp5PlPzVLSWqbIYHPXnvvQ6x6RI8aE81ElLS6A005YoVFgs2");
        $amount = $Order->getTotal() * 100;
        $intent = \Stripe\PaymentIntent::create([
            "amount" =>  $amount,
            "currency" => "eur",
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);

    

        return $this->render('Order/payment.html.twig', [
            'stripe_key' => "pk_test_51NH4qlD4SBY6CQPm5XLtEzt71TP0iinjjhM1lxU93KyV8i2qKa0fuD8AGuI0Jp622IEW5wkkl1smeABfLpNzWJmw00VMpIHSGV",
            'amount' => $amount / 100
        ]);
    }


}