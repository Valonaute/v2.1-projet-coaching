<?php

namespace App\Controller;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\OrderRepository;
use App\Repository\ReviewRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ReviewController extends AbstractController
{
    public $reviewRepository;
    public $session; 
    public $orderRepository;

    public function __construct(ReviewRepository $reviewRepository, RequestStack $session, OrderRepository $orderRepository)
    {
        $this->reviewRepository = $reviewRepository;
        $this->session = $session; 
        $this->orderRepository = $orderRepository;
    }
    public function create(Request $request, $id)
    {
        // Instanciation d'un nouvel avis
        $review = new Review;

        // Récupération de la commande à laquelle on lie l'avis 
        $order = $this->orderRepository->find($id);
        $orderId = $order->getId();

        // Création formulaire 
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);
        
        // Si le formulaire est soumis 
        if($form->isSubmitted())
        {
            $user = $this->getUser();
            if ($user instanceof UserInterface) {
                $userId = $user->getId();
            }
            
            $review->setUser($userId);
            $review->setOrderreviewed($orderId);
            $review->setDate(new DateTime());
            // Sauvegarde dans la BDD 
            $this->reviewRepository->save($review, $flush = true);

            $this->addFlash('success', 'Votre avis a bien été posté. Merci pour votre soutien !');

            return $this->redirectToRoute('review_show');
        }

        return $this->render('review/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function show()
    {
        $reviews = $this->reviewRepository->findAll();

        return $this->render('review/showReviews.html.twig', [
            'reviews' => $reviews
        ]);
    }

    public function showOne($id, ReviewRepository $reviewRepository)
    {
        // On récupère l'avis grâce à l'ID de l'URL
        $review = $reviewRepository->findBy(['id' => $id]);
        
        // On envoi l'avis dans le template twig 
        return $this->render('review/showOne.html.twig', [
            'review' => $review
        ]);

    }
}
