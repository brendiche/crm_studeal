<?php

namespace BG\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\UserBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class UserController extends Controller
{
    
    public function indexAction($id){
    	$client = $this
    				->getDoctrine()
    				->getManager()
    				->getRepository('BGUserBundle:User')
    				->myGetClient();    
        if($id == $this->get('security.context')->getToken()->getUser()->getId())
    	return $this->render('BGUserBundle:Default:user.html.twig',array("id"=>$id));
        else return $this->render('BGPlateformBundle:Default:error.html.twig',array(
            'error' => "Vous n'êtes pas autorisé à acceder a cette page.",
            'type'  => "403"
             ));

    }
}
