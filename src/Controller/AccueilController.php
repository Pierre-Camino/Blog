<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ArticleRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findAll();

        return $this->render('accueil/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/", name="index")
     */
    public function home(): Response
    {
        return $this->render('accueil/home.html.twig', [
            
        ]);
    }

    /**
     * @Route("/article{id}", name="article")
    */
    public function article(Article $article, Request $request, EntityManagerInterface $manager): Response {

        $commentaire = new Commentaire();
        $user = $this->getUser();
        $form = $this->createForm(CommentaireType::class, $commentaire);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $commentaire = $form->getData();
            $commentaire->setDate(new \DateTime());
            $commentaire->setArticle($article);
            $commentaire->setUtilisateur($user);
            $manager->persist($commentaire);
            $manager->flush();

            return $this->redirectToRoute('article', ['id' => $article->getId()]);
        }

        return $this->render('accueil/article.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }
}
