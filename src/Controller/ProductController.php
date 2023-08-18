<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use ErrorException;
use Symfony\Component\Filesystem\Filesystem;

class ProductController extends AbstractController
{
    public $entityManager;
    public $productRepository;

    public function __construct(EntityManagerInterface $entityManager, ProductRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }

    public function createProduct(Request $request)
    {
        // Création d'une nouvelle entité produit : 
        $product = new Product();
        // Création d'un formulaire : 
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide : 
        if($form->isSubmitted() && $form->isValid())
        {
            // Récupération de l'image 
            $image = $form->get('image')->getData();
            // S'il y a bien une image : 
           if($image) {
            // Nom de l'image = heure unix + extension 
            $finalImage = time() . '.' . $image->guessExtension();

            // On essaie d'uploader l'image 
             try {
                // Déplacement de l'image 
                $image->move(
                    $this->getParameter('image_directory')
                    , $finalImage
                );
                // Gestion des erreurs 
                } catch (FileException $e) {
                    throw new ErrorException("un problème est survenue lors de l'envoi de l'image");
                }

                // On sauvegarde l'image dans l'entité 
                $product->setImage($finalImage);
                // On sauvegarde dans la base de données 
                $this->productRepository->save($product, $flush =  true);

                // On confirme avec un message flash
                $this->addflash('success', 'Le produit a bien été mis en ligne !');
                // On redirige vers les produits 
                return $this->redirectToRoute('show_product');
             }
        }

        return $this->render('product/create.html.twig', [
        'form' => $form->createView()
        ]);
    }

    public function showProducts(ProductRepository $productRepository)
    {
        return $this->render('product/show.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = $this->productRepository->find($id);

        if(!$product)
        {
            return $this->redirectToRoute('show_product');
        }

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $image = $form->get('image')->getData();

            if($image) 
            {
                /* $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME); */
                $finalImage = time() . '.' .$image->guessExtension();
    
                try {
                    $image->move(
                        $this->getparameter('image_directory')
                        , $finalImage
                    );
    
                    if($product->getImage() != $finalImage)
                    {
                        $projectDir = $this->getParameter('kernel.project_dir');
                        $filesystem = new Filesystem();
                        $filesystem->remove($projectDir.'/public/uploads/'.$product->getImage());
                        $product->setImage($finalImage);
                    }
                    
                    } catch (FileException $e) {
                        throw new ErrorException("un problème est survenue lors de l'upload de l'image");
                    }
                $product->setImage($finalImage);
                $this->productRepository->save($product, $flush =  true);

                $this->addflash('success', 'Le produit a bien été uploadé');
                return $this->redirectToRoute('show_product');
            }
    
            $this->productRepository->save($product, $flush = true);
            $this->addFlash('success', 'Le produit a bien été modifié');
            return $this->redirectToRoute('show_product');
        }

        return $this->render('product/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteProduct($id)
    {
        $product = $this->productRepository->find($id);

        if($product)
        {
                $this->productRepository->remove($product, $flush = true);

                $projetDir = $this->getParameter('kernel.project_dir');

                $filesystem = new Filesystem();

                $filesystem->remove($projetDir.'/public/uploads/'.$product->getImage());

                $this->addFlash('success','Le produit a bien été supprimé');

                return $this->redirectToRoute('show_product');
        }
    }
    
    public function showOneProductFront($id, ProductRepository $productRepository)
    {
        $product = $productRepository->findBy(['id' => $id]);

        
       return  $this->render('product/showfront.html.twig', [
            'product' => $product
        ]);
    }

    public function showProductsFront(ProductRepository $productRepository)
    {
        return $this->render('product/showAllFront.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }


}
