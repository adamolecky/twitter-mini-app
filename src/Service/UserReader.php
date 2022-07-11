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
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;


final class UserReader extends UserRepository {

    const PAGE_SIZE = 100;

    public function getPagedUsersAsCollection(int $pageNumber = 0): UsersCollection
    {
        $users = $this->createQueryBuilder('q')
                ->select('u')
                ->from(User::class, 'u')
                ->orderBy('u.nick', 'ASC')
                ->setFirstResult((self::PAGE_SIZE * $pageNumber))
                ->setMaxResults(self::PAGE_SIZE)
                ->getQuery()
                ->getResult();

        return new UsersCollection(User::class, $users);
    }

    public function getUser(UuidInterface $uuid): ?User
    {
        return $this->createQueryBuilder('q')
            ->select('u')
            ->from(User::class, 'u')
            ->where('u.id = :uuid')
            ->setParameter('uuid', $uuid->toString())
            ->getQuery()
            ->getOneOrNullResult();
    }


    public function followersOfUser(UuidInterface $uuid): UsersCollection
    {
        $users = $this->createQueryBuilder('q')
            ->select('u')
            ->from(Follow::class, 'f')
            ->where('f.userTo = :followedUser')
            ->andWhere('u.id != :followedUser')
            ->innerJoin(User::class, 'u')
            ->setParameter(':followedUser', $uuid->toString())
            ->getQuery()
            ->getResult();

        return new UsersCollection(User::class, $users);
    }

}