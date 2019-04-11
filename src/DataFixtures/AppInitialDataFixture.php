<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use FOS\UserBundle\Model\UserInterface;

class AppInitialDataFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->createGlobalAdmin($manager);
    }


    private function createGlobalAdmin(ObjectManager $manager) {
        $globalAdmin = new User();
        $globalAdmin->setEnabled(true);
        $globalAdmin->setPlainPassword('GlobalAdminPWD!');
        $globalAdmin->setUsername('Admin');
        $globalAdmin->setEmail('admin@localhost');
        $globalAdmin->setRoles(
            [
                UserInterface::ROLE_DEFAULT,
                UserInterface::ROLE_SUPER_ADMIN
            ]
        );
        $manager->persist($globalAdmin);
        $manager->flush();
    }
}
