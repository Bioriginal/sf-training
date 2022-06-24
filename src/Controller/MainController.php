<?php

namespace App\Controller;

use App\Service\AutowireCow;
use App\Service\Cat;
use App\Service\Dog;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController extends AbstractController
{

    #[Route("/")]
    public function home(): Response
    {

        $movies = [
            ["title" => "Harry Potter", "genre" => "Fantastique"],
            ["title" => "Le seigneur des anneaux", "genre" => "Fantastique"]
        ];

        return $this->render('/cinema/home.html.twig', [
            'title' => "This is my home",
            'movies' => $movies
        ]);


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

        $cat = new Cat("chouchou", 15);
        $dog = new Dog("Dogy", 5);

        $cat->setName("Mew");

        $autowireCow->setName("Maddy");

        $logger->error($dog);
        return new Response($cat->speak() . " <br>" . $dog->speak() . "<br>" . $autowireCow->speak());

    }

}
