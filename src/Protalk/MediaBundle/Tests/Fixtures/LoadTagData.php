<?php

/**
 * ProTalk
 *
 * Copyright (c) 2012-2013, ProTalk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Protalk\MediaBundle\Tests\Fixtures;

use Doctrine\ORM\EntityManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Protalk\MediaBundle\Entity\Tag;

class LoadTagData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $symfony = new Tag();
        $symfony->setName('symfony');
        $symfony->setSlug('symfony');

        $qualityAssurance = new Tag();
        $qualityAssurance->setName('Quality Assurance');
        $qualityAssurance->setSlug('quality-assurance');

        $manager->persist($symfony);
        $manager->persist($qualityAssurance);

        $manager->flush();

        $this->addReference('symfony', $symfony);
        $this->addReference('quality-assurance', $qualityAssurance);
    }
}
