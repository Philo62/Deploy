<?php

namespace App\DataFixtures;
use App/Entity/Propert
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $prop = new property();
        $prop = 
        $manager->flush();
    }
}
