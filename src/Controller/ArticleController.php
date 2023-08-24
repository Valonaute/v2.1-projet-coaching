<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use ErrorException;
use Symfony\Component\Filesystem\Filesystem;

class ArticleController extends AbstractController
{
    public $entityManager;
    public $ArticleRepository;

    // Récupération des services EM et Repo pour usage dans le controller
    public function __construct(EntityManagerInterface $entityManager, ArticleRepository $ArticleRepository)
    {
        $this->entityManager = $entityManager;
        $this->ArticleRepository = $ArticleRepository;
    }

    public function createArticle(Request $request)
    {
        // Instanciation nouvel article 
        $Article = new Article();

        // Création nouveau formulaire 
        $form = $this->createForm(ArticleType::class, $Article);
        $form->handleRequest($request);

        // Si le formulaire est remplit : 
        if($form->isSubmitted() && $form->isValid())
        {
            // Récupération de l'image 
            $image = $form->get('image')->getData();

            // Si il y a eu une image d'envoyé : 
           if($image) {
            // nom final de l'image = heure unix . ext 
            $finalImage = time() . '.' . $image->guessExtension();

            // Sauvegarde de l'image 
            try {
                // Déplacement de l'image dans le dossier attribué
                $image->move(
                    $this->getParameter('image_directory')
                    , $finalImage
                );
                
                // Si erreur lors de l'envoi 
                } catch (FileException $e) {
                    throw new ErrorException("un problème est survenue lors de l'envoi de l'image");
                }

                // Modification de l'image dans l'article '
                $Article->setImage($finalImage);

                // Enregistrement de l'article dans la BDD 
                $this->ArticleRepository->save($Article, $flush =  true);

                // Confirmation par message flash
                $this->addflash('success', 'Cet article a bien été mis en ligne !');
                return $this->redirectToRoute('show_article');

            }
           
        }

        // Afficher la page avec le formulaire de création de l'article 
        return $this->render('article/create.html.twig', [
        'form' => $form->createView()
        ]);
    }

    public function updateArticle(Request $request, $id)
    {
        // Récupération de l'article déja présent avec la méthode find($id)
        $Article = $this->ArticleRepository->find($id);
        // S'il n'y a pas d'articles : redirection 
        if(!$Article)
        {
            return $this->redirectToRoute('show_article');
        }
        // Création nouveau formulaire en se basant sur l'article présent 
        $form = $this->createForm(ArticleType::class, $Article);
        $form->handleRequest($request);
        // Si le formulaire est remplit : 
        if($form->isSubmitted() && $form->isValid())
        {
            // Gestion de l'image 
            $image = $form->get('image')->getData();
            if($image) {
                $finalImage = time() . '.' .$image->guessExtension();
                 try {
                    $image->move(
                        $this->getparameter('image_directory')
                        , $finalImage
                    );
                    // si l'image est différente, suppression de l'ancienne 
                    if($Article->getImage() != $finalImage)
                    {
                        $projectDir = $this->getParameter('kernel.project_dir');
                        $filesystem = new Filesystem();
                        $filesystem->remove($projectDir.'/public/uploads/'.$Article->getImage());
                        $Article->setImage($finalImage);
                    }
                    
                    } catch (FileException $e) {
                        throw new ErrorException("un problème est survenue lors de l'upload de l'image");
                    }
                    $Article->setImage($finalImage);
                    $this->ArticleRepository->save($Article, $flush =  true);
                    $this->addflash('success', 'Le produit a bien été uploadé');
                    return $this->redirectToRoute('show_article');
                 }
                    $this->ArticleRepository->save($Article, $flush = true);
                    $this->addFlash('success', 'Le produit a bien été modifié');
                    return $this->redirectToRoute('show_article');
        }
        return $this->render('article/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteArticle($id)
    {
        // Récupération de l'article 
        $Article = $this->ArticleRepository->find($id);

        // Si un article est bien présent
        if($Article)
        {
            // Suppression via la methode remove du repo 
            $this->ArticleRepository->remove($Article, $flush = true);

            // Suppression du fichier 
            $projetDir = $this->getParameter('kernel.project_dir');

            $filesystem = new Filesystem();

            // Suppression en récupérant le chemin du fichier image 
            $filesystem->remove($projetDir.'/public/uploads/'.$Article->getImage());

            $this->addFlash('success','Le produit a bien été supprimé');

            return $this->redirectToRoute('show_article');
        }
    }

    public function showArticles(ArticleRepository $ArticleRepository)
    {
        // Retourner les articles dans un template via la methode findall du repo 
        return $this->render('article/show.html.twig', [
            'articles' => $ArticleRepository->findAll()
        ]);
    }

    public function showArticlesFront(ArticleRepository $articleRepository)
    {
        // Affichage du template article pour le public avec récupération de tous les articles via findAll()
        return $this->render('article/showfront.html.twig', [
            'articles' => $articleRepository->findAll()
        ]);
    }

    public function showArticlesCategory(ArticleRepository $articleRepository, CategoryRepository $categoryRepository, $id)
    {
        // Affichage du template article pour le public avec récupération des articles par catégorie 
        return $this->render('article/showfront.html.twig', [
            'articles' => $articleRepository->findby(['category' => $id])
        ]);
    }

    public function showOneArticleFront($id, ArticleRepository $articleRepository)
    {
        // Récupération d'un seul article avec son ID via la methode findBy du repo 
        $article = $articleRepository->findBy(['id' => $id]);

        // Affichage du template pour un article au public avec article en parametre twig 
        return  $this->render('article/showOneFront.html.twig', [
            'article' => $article
        ]);
    }
}

