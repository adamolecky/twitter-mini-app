<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends AbstractFixture
{
    private UserPasswordEncoderInterface $passwordEncoder;

    public function setContainer(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $adminUser = new User();
        $adminUser->setFirstName('Admin');
        $adminUser->setLastName('Admin');
        $adminUser->setNick('Admin');
        $adminUser->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        $hash = $this->passwordEncoder->encodePassword($adminUser, '1234');
        $adminUser->setPassword($hash);
        $adminUser->setCreatedAt(new \DateTimeImmutable());
        $adminUser->setCountFollowers(0);

        $manager->persist($adminUser);

        $regularUser = new User();
        $regularUser->setFirstName('User');
        $regularUser->setLastName('User');
        $regularUser->setNick('User');
        $regularUser->setRoles(['ROLE_USER']);
        $hash = $this->passwordEncoder->encodePassword($adminUser, '1234');
        $regularUser->setPassword($hash);
        $regularUser->setCreatedAt(new \DateTimeImmutable());
        $regularUser->setCountFollowers(0);

        $manager->persist($regularUser);
        $manager->flush();

    }
}