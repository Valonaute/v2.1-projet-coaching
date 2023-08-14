<?php

namespace App\Controller\Order;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class OrderPaymentSuccessController extends AbstractController {

    public function success(OrderRepository $OrderRepository, EntityManagerInterface $entityManager, Request $request,$id) {

        $Order = $OrderRepository->find($request->attributes->get('id'));

        if(!$Order ||
          ($Order->getUser() != $this->getUser() 
          || $Order->getStatus() == Order::STATUS_PAID)) {
            $this->addFlash("warning", "la commande n'existe pas");
            return $this->redirectToRoute("order_customer");
        }

        
        $Order->setStatus(Order::STATUS_PAID);
        $entityManager->flush();

        $request->getSession()->remove('cart');

        $this->addFlash('success', 'La commande a été payée et confirmée !');
        return  $this->redirectToRoute('order_customer');

    }

}