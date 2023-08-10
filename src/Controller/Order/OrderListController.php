<?php
namespace App\Controller\Order;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class OrderListController extends AbstractController {

    public function index() {

        $user = $this->getUser();

        if(!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour accéder a cette page');
        }

        return $this->render('order/index.html.twig', [
            'orders' => $user->getOrders()
        ]);
    }

}