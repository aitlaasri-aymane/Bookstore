<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Genre;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $genres = [
            1 => [
                "nom" => "Action"
            ],
            2 => [
                "nom" => "Drama"
            ],
            3 => [
                "nom" => "Comedy"
            ],
            4 => [
                "nom" => "Horror"
            ],
            5 => [
                "nom" => "Science Fiction"
            ],
            6 => [
                "nom" => "Thriller"
            ],
            7 => [
                "nom" => "Adventure"
            ],
            8 => [
                "nom" => "Crime Film"
            ],
            9 => [
                "nom" => "Romance"
            ],
            10 => [
                "nom" => "Western"
            ]
        ];

        foreach ($genres as $key => $value) {
            $genre = new Genre();
            $genre->setNom($value['nom']);
            $manager->persist($genre);
            //Enregistrer les references de tel sorte qu'on peut les appeler plutard
            $this->addReference('genre_' . $key, $genre);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
