<?php

namespace BG\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\UserBundle\Entity\User;
use BG\PlateformBundle\entity\Client;
use Doctrine\ORM\EntityRepository;

class UserController extends Controller
{
    
    public function indexAction($id){
    	 
        if($id == $this->get('security.context')->getToken()->getUser()->getId() ||
         $this->get('security.context')->getToken()->getUser()->hasRole("ROLE_SUPER_ADMIN")){
            $clients = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('BGPlateformBundle:Client')
                    ->getClientWithUser($id);   
        
            return $this->render('BGUserBundle:Default:user.html.twig',array("id"=>$id,"clients"=>$clients));    
        }
    	
        else return $this->render('BGPlateformBundle:Default:error.html.twig',array(
            'error' => "Vous n'êtes pas autorisé à acceder a cette page.",
            'type'  => "403"
             ));

    }
}
