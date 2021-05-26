<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;
use App\Form\FormulaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class FormulaireController extends AbstractController
{
    /**
     * @Route("/formulaire", name="formulaire")
     * @Route("/article{id}/modifier", name="modifier")
     */
    public function index(Article $article = null, Request $request, EntityManagerInterface $manager): Response
    {
        if (!$article) {
            $article = new Article();
        }

        $form = $this->createForm(FormulaireType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$article->getId()) {
                $article->setDate(new \DateTime());
            }
            $article->setStatut(true);
            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('article', ['id' => $article->getId()]);
        }

        return $this->render('formulaire/index.html.twig', [
            'form' => $form->createView(),
            'modif' => $article->getId() !== null
        ]);
    }
}
