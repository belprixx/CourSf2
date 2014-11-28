<?php

namespace Dev\Theo\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	$allpost=$this->get('doctrine.orm.entity_manager')->getRepository('DevTheoBlogBundle:Post')->findall();



        return $this->render('DevTheoBlogBundle:Default:index.html.twig', array('name' => $name,
        																		'allpost' => $allpost));
    }
}
