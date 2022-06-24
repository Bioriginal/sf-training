<?php
namespace App\Controller\Api;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController {

    #[Route('/api/show/{id<\d+>}', name:'get_json', methods: ['GET','POST'])]

    public function getJson(int $id, LoggerInterface $logger)
    {

        $data = ['id' => $id];
        $logger->info("Info log $id",$data);

        return $this->json($data);

    }

}
