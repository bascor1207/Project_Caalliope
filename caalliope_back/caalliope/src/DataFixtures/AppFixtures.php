<?php

namespace App\DataFixtures;

use App\Entity\Authors;
use App\Entity\Books;
use App\Entity\Editer;
use App\Entity\Format;
use App\Entity\Genre;
use App\Entity\Publier;
use App\Entity\Saga;
use App\Entity\Status;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {

            $authors = new Authors();
            $authors->setFirstName($faker->first_name);
            $authors->setLastName($faker->last_name);
            $authors->setNationalite($faker->nationalite);

            $book = new Books();
            $book->setIbsn($faker->ibsn);
            $book->setCover($faker->cover);
            $book->setTitle($faker->title);
            $book->setParutionDate($faker->parution_date);
            $book->setNbPages($faker->nb_pages);
            $book->addIdAuthor($faker->id_author);
            $book->setIdGenre($faker->id_genre);
            $book->addEditer($faker->editers);
            $book->addPublier($faker->publiers);
            
            $editer = new Editer();
            $editer->setME($faker->ME);
            $editer->addIdBook($faker->id_books);

            $publier = new Publier();
            $publier->setPrix($faker->prix);
            $publier->addIdBook($faker->id_books);
            $publier->addIdFormat($faker->id_format);

            $format = new Format();
            $format->setFormat($faker->format);
            $format->setLanguage($faker->language);

            $genre = new Genre();
            $genre->setGenre($faker->genre);
            $genre->addIdBook($faker->id_books);

            $saga = new Saga();
            $saga->setName($faker->name);
            $saga->setNbTome($faker->nb_tome);
            $saga->setNumeroTome($faker->numero_tome);
            $saga->setIdBooks($faker->id_books);

            $status = new Status();
            $status->setBookStatus($faker->book_status);
            $status->addBook($faker->books);

            $user = new Users();
            $user->setAvatar($faker->avatar);
            $user->setFirstName($faker->first_name);
            $user->setLastName($faker->last_name);
            $user->setPseudo($faker->pseudo);
            $user->setEmail($faker->email);
            $user->setIdBooks($faker->id_books);
        }

        $manager->flush();
    }
}
