<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController extends AbstractController
{

    #[Route("/")]
    public function home(): Response
    {

        $this->render('/cinema/home.html.twig',[
            'title'=> "This is my home"
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

}
