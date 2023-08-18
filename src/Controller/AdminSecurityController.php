<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use App\Repository\ReviewRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminSecurityController extends AbstractController
{
    public $orderRepository; 
    public $userRepository; 
    public $reviewRepository;
    
    public function __construct(OrderRepository $orderRepository, UserRepository $userRepository, ReviewRepository $reviewRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
        $this->reviewRepository = $reviewRepository;
    }
    
    
    public function showDashboard()
    {
        return $this->render('admin/dashboard.html.twig', []);
    }

    public function showOrders()
    {
        // On récupère toutes les commandes 
        $orders = $this->orderRepository->findAll();

        // On affiche les commandes dans un tableaux via twig
        return $this->render('admin/orders.html.twig', [
            'orders' => $orders
        ]);
    }

    public function showUsers()
    {
        // On récupère tous les utilisateurs 
        $users = $this->userRepository->findAll();

        // On affiche les utilisateurs dans un tableau via twig 
        return $this->render('admin/users.html.twig', [
            'users' => $users
        ]);
    }

    public function showReviews()
    {
        // On récupère tous les avis clients 
        $reviews = $this->reviewRepository->findAll();

        // On affiche les avis clients dans un tableau via twig 
        return $this->render('admin/reviews.html.twig', [
            'reviews' => $reviews
        ]);
    }

    public function showStats()
    {
        return $this->render('admin/stats.html.twig');
    }


}
