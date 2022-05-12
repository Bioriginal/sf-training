<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class MainController
{

    #[Route("/")]
    public function home(): Response
    {

        return new Response("Bienvenue sur la home");

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
