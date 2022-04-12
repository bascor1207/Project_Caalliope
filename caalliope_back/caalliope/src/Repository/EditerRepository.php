<?php

namespace App\Repository;

use App\Entity\Editer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Editer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Editer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Editer[]    findAll()
 * @method Editer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditerRepository extends ServiceEntityRepository
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
    public function add(Editer $entity, bool $flush = true): void
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
    public function remove(Editer $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function updateEditer(Editer $editer): Editer {
        $this->manager->persist($editer);
        $this->manager->flush();

        return $editer;
    }

    public function removeEditer(Editer $editer) {
        $this->manager->remove($editer);
        $this->manager->flush();
    }

    public function saveEditer($ME, $id_books) {
        $newEditer = new Editer();

        $newEditer
            ->setME($ME)
            ->addIdBook($id_books);

        $this->manager->persist($newEditer);
        $this->manager->flush();
    }

    // /**
    //  * @return Editer[] Returns an array of Editer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Editer
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
