<?php

namespace BG\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BG\UserBundle\Entity\User;
use BG\PlateformBundle\entity\Client;
use BG\PlateformBundle\entity\Company;
use BG\PlateformBundle\entity\Oportunity;
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
                    ->getClientFromUser($id); 
            $companies = $this
                            ->getDoctrine()
                            ->getManager()
                            ->getRepository('BGPlateformBundle:Company')
                            ->getCompanyFromUser($id);
            $oportunities = array();
            foreach ($clients as $client) {
                if(!empty($client->getOportunity())) $oportunities[]=$client->getOportunity();
            }
            return $this->render('BGUserBundle:Default:user.html.twig',array("id"=>$id,"clients"=>$clients,"companies"=>$companies,"oportunities"=>$oportunities));    
        }
    	
        else return $this->render('BGPlateformBundle:Default:error.html.twig',array(
            'error' => "Vous n'êtes pas autorisé à acceder a cette page.",
            'type'  => "403"
             ));

    }

    public function deleteAction($id){
        if($id == $this->get('security.context')->getToken()->getUser()->getId() ||
         $this->get('security.context')->getToken()->getUser()->hasRole("ROLE_SUPER_ADMIN")){
             $em = $this->getDoctrine()->getManager();
            $clients = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('BGPlateformBundle:Client')
                    ->getClientFromUser($id); 
            $companies = $this
                            ->getDoctrine()
                            ->getManager()
                            ->getRepository('BGPlateformBundle:Company')
                            ->getCompanyFromUser($id);
            foreach ($clients as $client) {
                if(!empty($client->getOportunity())) $em->remove($client->getOportunity());
                $em->remove($client);
            }
            foreach ($companies as $company) {
                $em->remove($company);
            }

            $em->remove($em->getRepository("BGUserBundle:User")->find($id));
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_home'));
        }
        else return $this->render('BGPlateformBundle:Default:error.html.twig',array(
            'error' => "Vous n'êtes pas autorisé à acceder a cette page.",
            'type'  => "403"
             ));
    }
    
    public function listAction(){
        if($this->get('security.context')->getToken()->getUser()->hasRole("ROLE_SUPER_ADMIN")){
            $users = $this->getDoctrine()
                          ->getManager()
                          ->getRepository('BGUserBundle:User')
                          ->findAll();
            return $this->render('BGUserBundle:Default:admin_user.html.twig',array("users"=>$users));
        }
        else return $this->render('BGPlateformBundle:Default:error.html.twig',array(
            'error' => "Vous n'êtes pas autorisé à acceder a cette page.",
            'type'  => "403"
             ));
    }
}
