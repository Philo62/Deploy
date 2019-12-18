<?php

namespace App\DataFixtures;
use App/Entity/Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager, Property $prop)
    {
        // $product = new Product();
        // $manager->persist($product);

        $prop = new Property();
        $prop = 
        $manager->flush();
    }
}
