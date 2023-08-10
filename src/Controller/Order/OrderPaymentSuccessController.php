<?php

namespace App\Controller\Order;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Order;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class OrderPaymentSuccessController extends AbstractController {

    public function success(OrderRepository $OrderRepository, EntityManagerInterface $em, Request $request,$id) {

        die('test');
        $Order = $OrderRepository->find($request->attributes->get('id'));

        if(!$Order ||
          ($Order->getUser() != $this->getUser() 
          || $Order->getStatus() == Order::STATUS_PAID)) {
            $this->addFlash("warning", "la commande n'existe pas");
            return $this->redirectToRoute("order_customer");
        }

        
        $Order->setStatus(Order::STATUS_PAID);
        $em->flush();

        $request->getSession()->remove('cart');

        $this->addFlash('success', 'La commande a été payé et confirmée !');
        return  $this->redirectToRoute('order_customer');

    }

}