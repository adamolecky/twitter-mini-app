<?php

namespace App\Service;

use App\Collection\UsersCollection;
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


final class UserWriter extends UserRepository {

    const PAGE_SIZE = 100;

    public function saveFromDto(UserDto $userDto): void
    {
        $user = new User();
        $user->setRoles($userDto->roles);
        $user->setPassword($userDto->password);
        $user->setFirstName($userDto->firstName);
        $user->setLastName($userDto->lastName);
        $user->setNick($userDto->nick);
        $user->setCountFollowers($userDto->countFollowers);
        $user->setCreatedAt(new \DateTimeImmutable());

        $this->save($user);
    }

    public function save(User $user)
    {
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\TransactionRequiredException
     * @throws \Doctrine\ORM\ORMException
     */
    public function delete(UuidInterface $uuid)
    {
        $user = $this->_em->find(User::class, $uuid->toString());
        $user->setDeletedAt(new \DateTimeImmutable());
        $this->_em->persist($user);
        $this->_em->flush();
    }
}