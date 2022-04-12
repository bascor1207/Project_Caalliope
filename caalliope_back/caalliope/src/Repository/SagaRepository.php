<?php

namespace App\Repository;

use App\Entity\Saga;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Saga|null find($id, $lockMode = null, $lockVersion = null)
 * @method Saga|null findOneBy(array $criteria, array $orderBy = null)
 * @method Saga[]    findAll()
 * @method Saga[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SagaRepository extends ServiceEntityRepository
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
    public function add(Saga $entity, bool $flush = true): void
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
    public function remove(Saga $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function updateSaga(Saga $saga): Saga {
        $this->manager->persist($saga);
        $this->manager->flush();

        return $saga;
    }

    public function removeSaga(Saga $saga) {
        $this->manager->remove($saga);
        $this->manager->flush();
    }

    public function saveSaga($name, $nb_tomes, $numero_tome, $id_books) {
        $newSaga = new Saga();

        $newSaga
            ->setName($name)
            ->setNbTome($nb_tomes)
            ->setNumeroTome($numero_tome)
            ->getIdBooks($id_books);

        $this->manager->persist($newSaga);
        $this->manager->flush();
    }

    // /**
    //  * @return Saga[] Returns an array of Saga objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Saga
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
