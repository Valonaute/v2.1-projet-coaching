<?php
namespace App\Cart;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService {

protected $session;

protected $productrepository;

public function __construct(RequestStack $session, ProductRepository $productRepository)
{
    $this->session = $session;
    $this->productrepository = $productRepository;
}

    public function add($id)
    {   
        // je récupère le panier dans la session
       $cart =  $this->session->getSession()->get('cart', []);

        // on verifie les clés du tableau pour incrémenter 
        if(array_key_exists($id, $cart)) {
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }
        // on enregistre la session
        $this->session->getSession()->set('cart', $cart);
    }

    public function getTotal()
    {
        // retourner le total du panier
        $total = 0;

        // Boucle sur les produits 
        foreach($this->session->getSession()->get('cart',[]) as $id => $qty) {
            $product = $this->productrepository->find($id);

        // Récupération du prix et ajout au total 
            $total += $product->getPrice() * $qty;
        }
        // On renvoi la valeur du total 
        return $total;
    }

    public function getDetailedCartItems()
    {
        // Je créé le tableau de produits détaillé 
        $detailedCart = [];

        foreach($this->session->getSession()->get('cart',[]) as $id => $qty)
        {
            // Je passe dans product la fonction find de product repository
            $product = $this->productrepository->find($id);

            // Je créé un tableau detailedCart avec les produits et leurs quantité 
            $detailedCart[] = [
                'product' => $product,
                'qty' => $qty
            ];
        }
        // Je retourne detailedCart = les produits ajoutés au panier 
        return $detailedCart;
    }

    public function remove($id)
    {
        // Récupération du panier 
        $cart = $this->session->getSession()->get('cart',[]);
        
        // Suppression via unset du produit ayant un ID 
        unset($cart[$id]);

        // Mise à jour du panier 
        $this->session->getSession()->set('cart', $cart);

    }

    public function removeOne($id)
    {
        // Récupération du panier 
        $cart = $this->session->getSession()->get('cart',[]);
        
        // Diminution de la quantité jusqu'à 0 
        if($cart[$id] >0) {
            $cart[$id]--;
        }else{
            $cart[$id] = 0;
        }

        // Mise à jour du panier 
        $this->session->getSession()->set('cart', $cart);

    }

    
}