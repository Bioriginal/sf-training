<?php

namespace App\Controller;

use App\Entity\Article;
use App\Service\AutowireCow;
use App\Service\Cat;
use App\Service\Dog;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use App\Repository\ArticleRepository;

class MainController extends AbstractController
{

    #[Route("/", name:'home')]
    public function home(ArticleRepository  $articleRepo): Response
    {
        /**
         * Exemple du problème n+1 de doctrine:
         *  Dans le templates nous appellons getTags
         * Doctrine va dans ce cas effectuer une requête pour chaque article en +
         *  de la sélection des articles... omg
         * 
         * Pour solutionner, il faut spécifier la jointure vers tags dans la requête ainsi que
         * le addSelect ( exemple de findAllArticles)
         * 
         */
        // n+1 problem
        //$articles = $articleRepo->findAll();
        //Solution
        $articles = $articleRepo->findAllArticles();

        return $this->render('/articles/home.html.twig', [
            'title' => "This is my home",
            'articles' => $articles
        ]);


    }
    #[Route('/article/{uri}', name:'article.show', methods:['GET'])]
    /**
     * Exemple du param converter de sensio/framework-extra-bundle
     */
    public function articleShow(Article $article): Response 
    {

        return $this->render('/articles/show.html.twig',['article'=>$article]);

    }


    #[Route("/browse/{type}")]
    public function browse(
        string $type = null
    ): Response {
        if ($type) {
            $type = u(str_replace('-', '', $type))->title(true);

        } else {
            $type = "Tout les genres";
        }
        return new Response("Coucou Mon gars sur ! Bienvenue sur $type");

    }

    #[Route("/animal")]
    public function animal(LoggerInterface $logger, AutowireCow $autowireCow)
    {

        //Récupérer un parameter du parameter bag du container
        //$this->getParameter('horn');


        $cat = new Cat("chouchou", 15);
        $dog = new Dog("Dogy", 5);

        $cat->setName("Mew");

        $autowireCow->setName("Maddy");

        $logger->error($dog);
        return new Response($cat->speak() . " <br>" . $dog->speak() . "<br>" . $autowireCow->speak());

    }

}
