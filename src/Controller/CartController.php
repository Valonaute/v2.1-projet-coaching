<?php

namespace App\Controller;

use App\Cart\CartService;
use App\Form\CartConfirmationType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraints\Url;

class CartController extends AbstractController
{

    protected $cartservice;
    protected $productRepository;
    protected $session;

    // Création des services du panier et du repo 
    public function __construct(CartService $cartservice, ProductRepository $productRepository, RequestStack $session)
    {
        $this->cartservice = $cartservice;
        $this->productRepository = $productRepository;
        $this->session = $session; 
    }
  
    public function add($id) : RedirectResponse
    {
        // On vérifie que l'utilisateur est bien connecté 
        $user = $this->getUser();
        if(!$user){
            $this->addFlash('warning', "Vous devez être connectés pour ajouter au panier");
            return $this->redirectToRoute('app_login');
        }
        // Récupération de la fonction dans les services Cart 
        $this->cartservice->add($id);

        // redirection vers la fiche produit avec ajout message flash 
        $this->addFlash('success',"Le produit a bien été ajouté au panier");

        // Récupération de la page précédente 
        $request = $this->session->getCurrentRequest();
        $referer = $request->headers->get('referer');

        // Redirection vers la page précédente 
        return $this->redirect($referer);
    }

    public function cartshow()
    {
        // afficher le panier 

        // Créer un formulaire de confirmation d'ajout 
        $form = $this->createform(CartConfirmationType::class);

        // représente l'affichage visuel  du panier
        $detailedCart = $this->cartservice->getDetailedCartItems();
        $total = $this->cartservice->getTotal();

        // Affichage du template avec les parametres twig du panier
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

        // Confirmation par message flash
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

        // Confirmation par message flash
        $this->addFlash("success", "Le produit a bien été supprimé du panier");
        return $this->redirectToRoute("cart_show");
    }

    // Methode à supprimer si paiement par stripe suffisant 
    public function cartValidate(Request $request)
    {
        // Afficher la page de validation du panier

        // Récupération de l'utilisateur 
        $client_session = User::class;

        // Créer un formulaire de confirmation d'ajout d'éléments pour le compte et la facturation
        $form = $this->createform(CartConfirmationType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $client_submit = $form->getData()->getName();

            $this->$client_session->setName($client_submit);


            // Que fais cette ligne ? Est elle necessaire ? 
            // $this->clientRepository->save($client_session, $flush = true);

            
            $this->addFlash('success','Les informations ont bien été ajoutées !');

            return $this->redirectToRoute('payment_checkout');
        }
        // représente l'affichage visuel  du panier
        $detailedCart = $this->cartservice->getDetailedCartItems();
        $total = $this->cartservice->getTotal();

        // Affichage du template avec les élément du panier et le formulaire 
        return $this->render('cart/validateCart.html.twig', [
            'items' => $detailedCart,
            'total' => $total,
            'confirmationform' => $form->createView()
        ]);
    }

    public function cartRemove()
    {
        // Vider le panier :
        // Récupérer le panier existant dans la session 
        $cart = $this->session->getSession()->get('cart', []);
        
        // Supprimer le panier complètement 
        unset($cart);
        
        // Créer un nouveau panier vide 
        $this->session->getSession()->set('cart', []);

        return $this->redirectToRoute('cart_show');
    }
}
