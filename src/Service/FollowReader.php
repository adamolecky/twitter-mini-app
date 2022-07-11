<?php

namespace App\Service;

use App\Collection\UsersCollection;
use App\Entity\Follow;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\Persistence\ManagerRegistry;
use JetBrains\PhpStorm\Pure;
use Ramsey\Collection\Collection;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;


final class FollowReader extends UserRepository {

    /**
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function isFollowing(UuidInterface $uuidFrom, UuidInterface $uuidTo): bool
    {

        $countRecords = $this->createQueryBuilder('q')
            ->select('count(f)')
            ->from(Follow::class, 'f')
            ->where("f.userFrom = :userFromValue")
            ->andWhere("f.userTo = :userToValue")
            ->setParameter(":userFromValue", $uuidFrom->toString())
            ->setParameter(":userToValue", $uuidTo->toString())
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $countRecords > 0;
    }


    /**
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getCountRecords(UuidInterface $uuid): mixed
    {
        $resultArray = $this->createQueryBuilder('q')
            ->select('f.id')
            ->distinct(true)
            ->from(Follow::class, 'f')
            ->where("f.userTo = :userToValue")
            ->setParameter(":userToValue", $uuid->toString())
            ->getQuery()
            ->getResult();

        return count($resultArray);
    }

}