<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $article1 = new Article();
        $article1->setTitle('HP')
            ->setPrice(234);
        $manager->persist($article1);

        $tag1 = new Tag();
        $tag1->setContent('my relations')
        ->addArticle($article1);

        $article2 =new Article();
        $article2->setTitle('DELL')
            ->setPrice(3565);
        $manager->persist($article2);
        $tag1->addArticle($article2);

        $manager->persist($tag1);
        $manager->flush();
    }
}
