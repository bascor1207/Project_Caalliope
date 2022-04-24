<?php

namespace App\Repository;

use App\Entity\Publier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Publier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publier[]    findAll()
 * @method Publier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublierRepository extends ServiceEntityRepository
{
    private $manager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Book::class);
        $this->manger = $manager;
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Publier $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Publier $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function updatePublier(Publier $publier): Publier {
        $this->manager->persist($publier);
        $this->manager->flush();

        return $publier;
    }

    public function removePublier(Publier $publier) {
        $this->manager->remove($publier);
        $this->manager->flush();
    }

    public function savePublier($prix, $id_books, $id_format) {
        $newPublier = new Publier();

        $newPublier
            ->setPrix($prix)
            ->addIdBook($id_books)
            ->addIdFormat($id_format);

        $this->manager->persist($newPublier);
        $this->manager->flush();
    }

    // /**
    //  * @return Publier[] Returns an array of Publier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Publier
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
