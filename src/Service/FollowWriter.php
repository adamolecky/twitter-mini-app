<?php

namespace App\Service;

use App\Collection\UsersCollection;
use App\Entity\Follow;
use App\Entity\User;
use App\Repository\UserRepository;
use App\UserDto;
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


final class FollowWriter extends UserRepository {

    public function __construct(
        ManagerRegistry $registry,
        private UserReader $userReader,
    )
    {
        parent::__construct($registry);
    }


    public function save(UuidInterface $uuidFrom, UuidInterface $uuidTo): void
    {
        $userFrom = $this->userReader->getUser($uuidFrom);
        $userTo = $this->userReader->getUser($uuidTo);

        $follow = new Follow();
        $follow->setUserFrom($userFrom);
        $follow->setUserTo($userTo);
        $follow->setCreatedAt(new \DateTimeImmutable());

        $this->_em->persist($follow);
        $this->_em->flush();
    }
}