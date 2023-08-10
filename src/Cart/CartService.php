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
    {   // [1 => 1] le premier 1 c'est l'id du produit
        // le second 1 est la quantité
        // 1) je récupère le panier dans la session
       $cart =  $this->session->getSession()->get('cart', []);

    

        //2) on verifie les clés du tableau
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

        foreach($this->session->getSession()->get('cart',[]) as $id => $qty) {
            $product = $this->productrepository->find($id);

            $total += $product->getPrice() * $qty;
        }

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
        $cart = $this->session->getSession()->get('cart',[]);
        unset($cart[$id]);

        $this->session->getSession()->set('cart', $cart);

    }

    
}