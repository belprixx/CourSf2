<?php

/**
* Dev\Theo\BlogBundle\Entity\Post
*
* @ORM\Table(name="post")
* @Orm\Entity( repositoryClass="Dev\Theo\BlogBundle\")
**/
	class PostRepository extends EntityRepository
{
	public function findAllOrderedByCreatedAt()
	{
		return $this->getEntityManager()->createQueryBuilder()
		->add('select', 'p')
		->add('from', 'Post p')
		->add('where', 'p.is_published = :published')
		->setParameter('published', true)
		->getResult();
	}
}




?>