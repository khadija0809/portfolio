<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $projet = new Projet();
        $projet->setnom('vente jeux enfants');
        $projet->setMethode('html, css, php , symfony');
        $projet->setDescription('C\'est de vente des jeux d\'enfants');
        $projet->setImg('enfants.png');
        $projet->setLien('https://super-carton.com/');
        


        $manager->persist($projet);

        $manager->flush();
    }
}
