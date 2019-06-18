<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName("Travel & Adventure");
        $manager->persist($category);

        $category = new Category();
        $category->setName("Sport");
        $manager->persist($category);

        $category = new Category();
        $category->setName("Entertainment");
        $manager->persist($category);

        $category = new Category();
        $category->setName("Human Relations");
        $manager->persist($category);

        $category = new Category();
        $category->setName("Others");
        $manager->persist($category);

        $manager->flush();
    }
}
