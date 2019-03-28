<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $tag1 = new Tag();
        $tag1->setContent('merci pour ajout');
        $manager->persist($tag1);
        $tag2 =new Tag();
        $tag2->setContent('iT WAS great');
        $manager->persist($tag2);
        $tag3 =new Tag();
        $tag3->setContent('Thanks');

        $manager->persist($tag3);
        $manager->flush();    }
}
