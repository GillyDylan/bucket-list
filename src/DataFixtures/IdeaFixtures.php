<?php


namespace App\DataFixtures;


use App\Entity\Idea;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class IdeaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('en_US');

        for ($i =1; $i<=100; $i++) {
            $idea = new Idea();
            $idea->setTitle($faker->sentence(5));
            $description = '<p>'.join($faker->paragraphs(3), '</p><p>').'</p>';
            $idea->setDescription($description);
            $idea->setAuthor($faker->name);
            $idea->setIdPublished($faker->boolean);
            $idea->setDateCreated($faker->dateTimeBetween('-6 months'));

            $manager->persist($idea);
        }
        $manager->flush();
    }
}