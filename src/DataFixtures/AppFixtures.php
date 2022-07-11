<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordEncoderInterface $passwordEncoder
    )
    {
    }

    public function load(ObjectManager $manager): void
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


        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixture::class
        ];
    }
}
