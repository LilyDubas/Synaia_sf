<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\IllustrationsDigitales;

class IllustrationsDigitalesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 5; $i++){
            $illustrations_digitales = new IllustrationsDigitales();
            $illustrations_digitales->setTitle("Illustration n°$i")
                            ->setContent("<p>Description de l'illustration n°$i</p>")
                            ->setImage("http://placehold.it/350x150")
                            ->setCreatedAt(new \DateTime());
        $manager->persist($illustrations_digitales);
        }
        $manager->flush();
    }
}
