<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\IllustrationsPapier;

class IllustrationsPapierFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=5; $i++){
            $IllustrationsPapier = new IllustrationsPapier();
            $IllustrationsPapier ->setTitle("Titre de l'illustration $i")->setContent("Descricption de l'article $i")->setImages("http://placehold.it/350x150")->setCreatedAt(new \DateTime());

            $manager->persist($IllustrationsPapier);
        }

        $manager->flush();
    }
}
