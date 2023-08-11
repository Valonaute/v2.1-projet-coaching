<?php

namespace App\Controller;

use App\Cart\CartService;
use App\Form\CartConfirmationType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class CartController extends AbstractController
{

    protected $cartservice;
    protected $productRepository;

    public function __construct(CartService $cartservice, ProductRepository $productRepository)
    {
        $this->cartservice = $cartservice;
        $this->productRepository = $productRepository;
    }
  
    public function add($id)
    {
        // Récupération de la fonction dans les services Cart 
        $this->cartservice->add($id);

        // redirection vers la fiche produit avec ajout message flash 
        $this->addFlash('success',"Le produit a bien été ajouté au panier");
        return $this->redirectToRoute('cart_show');
    }

    public function cartshow()
    {
        // afficher le panier 

        // Créer un formulaire de confirmation d'ajout 
        $form = $this->createform(CartConfirmationType::class);

        // représente l'affichage visuel  du panier
        $detailedCart = $this->cartservice->getDetailedCartItems();
        $total = $this->cartservice->getTotal();

        return $this->render('cart/index.html.twig', [
            'items' => $detailedCart,
            'total' => $total,
            'confirmationform' => $form->createView()
        ]);
    }

    public function delete($id)
    {
        // Récupération du produit avec l'ID 
        $product = $this->productRepository->find($id);

        // Gestion erreur si le produit n'existe pas dans le panier
        if(!$product) {
            throw $this->createNotFoundException("Le produit $id n'est pas dans le panier et ne peut donc être supprimé");
        }

        // Suppression 
        $this->cartservice->remove($id);

        $this->addFlash("success", "Le produit a bien été supprimé du panier");
        return $this->redirectToRoute("cart_show");
    }

    public function deleteOne($id)
    {
        // Récupération du produit avec l'ID 
        $product = $this->productRepository->find($id);

        // Gestion erreur si le produit n'existe pas dans le panier
        if(!$product) {
            throw $this->createNotFoundException("Le produit $id n'est pas dans le panier et ne peut donc être supprimé");
        }

        // Suppression 
        $this->cartservice->removeOne($id);

        $this->addFlash("success", "Le produit a bien été supprimé du panier");
        return $this->redirectToRoute("cart_show");
    }

    public function cartValidate(Request $request)
    {
        // Afficher la page de validation du panier

        // Récupération de l'utilisateur 
        $client_session = User::class;

        // Créer un formulaire de confirmation d'ajout d'éléments pour le compte  
        $form = $this->createform(CartConfirmationType::class);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $client_submit = $form->getData()->getName();

            $this->$client_session->setName($client_submit);

            // Que fais cette ligne ? Est elle necessaire ? 
            //$this->clientRepository->save($client_session, $flush = true);

            $this->addFlash('success','Les informations ont bien été ajoutées !');

            return $this->redirectToRoute('payment_checkout');
        }
        // représente l'affichage visuel  du panier
        $detailedCart = $this->cartservice->getDetailedCartItems();
        $total = $this->cartservice->getTotal();

        return $this->render('cart/validateCart.html.twig', [
            'items' => $detailedCart,
            'total' => $total,
            'confirmationform' => $form->createView()
        ]);
    }
}
