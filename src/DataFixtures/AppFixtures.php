<?php

namespace App\DataFixtures;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadPosts($manager);
    }
    public function loadPosts(ObjectManager $manager)
    {
        $slugify = new Slugify();
        for($i=0;$i<20;$i++)
        {
            $post = new Post();
            $post->setTitle('This is my title number '.rand(0,100));
            $post->setBody('This is my body number '.rand(0,100));
            $post->setTime(new \DateTime());
            $post->setUser($this->getReference('Hamza'));
            $post->setSlug($slugify->slugify($post->getTitle()));
            $manager->persist($post);
        }

        $manager->flush();
    }
    public function loadUsers(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Hamza123');
        $user->setFullname('Hamza Bounasseh');
        $user->setEmail('Hamza.Bounasseh@outlook.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user,'Hamza123'));
        $this->addReference('Hamza',$user);
        $manager->persist($user);
        $manager->flush();
    }
}
