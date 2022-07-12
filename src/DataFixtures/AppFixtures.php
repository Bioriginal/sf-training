<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $article = new Article();
        $article->setTitle("Mon premier article ! ");
        $article->setDescription("Ceci est ma première description :)");
        $manager->persist($article);
        $manager->flush();
    }
}
