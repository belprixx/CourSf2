<?php

namespace Dev\Theo\BlogBundle\Entity;

/**
* Dev\Theo\BlogBundle\Entity\Post
*
* @ORM\Table(name="post")
* @Orm\Entity( repositoryClass="Dev\Theo\BlogBundle\Entity\PostRepository")
**/

use  Doctrine\ORM\EntityRepository;

	class PostRepository extends EntityRepository
{
	public function findAll()
	{
		return $this->getEntityManager()->createQueryBuilder()
		->add('select', 'p')
		->add('from', 'Post p')
		->add('where', 'p.is_published = :published')
		->setParameter('published', true);
		//->getResult();
	}
}




?>