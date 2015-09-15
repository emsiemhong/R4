<?php

namespace R4\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use r4\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@admin.com');
        $userAdmin->setPlainPassword('test');
        $userAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
        $manager->persist($userAdmin);

        $testUser = new User();
        $testUser->setUsername('test');
        $testUser->setEmail('test@test.com');
        $testUser->setPlainPassword('test');
        $testUser->setRoles(array('ROLE_USER'));

        $manager->persist($testUser);
        $manager->flush();
    }
}