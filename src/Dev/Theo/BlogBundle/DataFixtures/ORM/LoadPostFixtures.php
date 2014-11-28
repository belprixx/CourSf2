<?php

namespace Dev\Theo\BlogBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dev\Theo\BlogBundle\Entity\Post;


    class LoadPostFixture implements FixtureInterface
	{
		function load(ObjectManager $manager)
		{
			$i = 1;

			while ($i <= 100) {
			$post = new Post();
			$post->setTitle('Titre du post n°'.$i);
			$post->setBody('Corps du post');
			$post->setIsPublished($i%2);
			$manager->persist($post);

			$i++;
		}

			$manager->flush();
		}
	}


?>