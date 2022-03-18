<?php

namespace App\DataFixtures;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;

class PostFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

    }
}
