<?php

namespace BG\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BG\PlateformBundle\Entity\Client;
use BG\PlateformBundle\Entity\Company;
use BG\PlateformBundle\Entity\Oportunity;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BGPlateformBundle:Default:index.html.twig');
    }

    public function addClientAction(Request $request){
    	$client = new Client();
        $company = new Company();
        $client->setUser($this->get('security.context')->getToken()->getUser());
    	$form = $this->get('form.factory')->createBuilder('form',$client)
    					->add("Nom","text")
    					->add("Prenom","text")
    					->add("Email","email")
    					->add("Telephone","text")
                        ->add("Coment","textarea")
                        ->add("addCompany","checkbox",array('required'  => false,))
                        ->add("Company","entity",array(
                                                    "class"=>"BGPlateformBundle:Company",
                                                    "query_builder"=>function(EntityRepository $er){
                                                        return $er->createQueryBuilder('c')
                                                                  ->join("c.User","u","WITH","u.id = :id")
                                                                  ->setParameter('id',$this->get('security.context')->getToken()->getUser()->getId())
                                                                  ;
                                                    },
                                                    "property"=>"nom",
                                                    ))
    					->add('Enregistrer',"submit")
    					->getForm();

    	$form->handleRequest($request);
    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
            if($client->getAddCompany()){
                 $company = $em->getRepository('BGPlateformBundle:Company')
                              ->findOneByNom($client->getCompany()->getNom());
                $client->setCompany($company);
            }else{
               $client->unsetCompany();
            }
            $em->persist($client);
    		$em->flush();
    		return $this->redirect($this->generateUrl('bg_plateform_user',
    		 array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
    	}

    	 return $this->render('BGPlateformBundle:Default:addClient.html.twig', array(
      		'form' => $form->createView(),
    		));
    }

    public function editClientAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository("BGPlateformBundle:Client")->find($id);
        $form = $this->get('form.factory')->createBuilder('form',$client)
                        ->add("Nom","text")
                        ->add("Prenom","text")
                        ->add("Email","email")
                        ->add("Telephone","text")
                        ->add("Coment","textarea",array('required'  => false))
                        ->add("addCompany","checkbox",array('required'  => false))
                        ->add("Company","entity",array(
                                                    "class"=>"BGPlateformBundle:Company",
                                                    "query_builder"=>function(EntityRepository $er){
                                                        return $er->createQueryBuilder('c')
                                                                  ->join("c.User","u","WITH","u.id = :id")
                                                                  ->setParameter('id',$this->get('security.context')->getToken()->getUser()->getId())
                                                                  ;
                                                    },
                                                    "property"=>"nom",
                                                    ))
                        ->add('Enregistrer',"submit")
                        ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            if($client->getAddCompany()){
                 $company = $em->getRepository('BGPlateformBundle:Company')
                              ->findOneByNom($client->getCompany()->getNom());
                $client->setCompany($company);
            }else{
               $client->unsetCompany();
            }
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_user',
             array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
        }

         return $this->render('BGPlateformBundle:Default:addClient.html.twig', array(
            'form' => $form->createView(),
            ));


    }

    public function deleteClientAction($id){
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('BGPlateformBundle:Client')->find($id);
        $em->remove($client);
        $em->flush();
        return $this->redirect($this->get('router')->generate('bg_plateform_user',array("id"=> $this->get('security.context')->getToken()->getUser()->getId())));
    }

    public function addCompanyAction(Request $request){
        $company = new Company();
        $company->setUser($this->get('security.context')->getToken()->getUser());
        $form = $this->get('form.factory')->createBuilder('form',$company)
                        ->add("Nom","text")
                        ->add("adresse","text")
                        ->add("siret","text")
                        ->add("Coment","textarea")
                        ->add('Enregistrer',"submit")
                        ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_user',
             array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
        }

         return $this->render('BGPlateformBundle:Default:addCompany.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function editCompanyAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository("BGPlateformBundle:Company")->find($id);
        $form = $this->get('form.factory')->createBuilder('form',$company)
                        ->add("Nom","text")
                        ->add("adresse","text")
                        ->add("siret","text")
                        ->add("Coment","textarea")
                        ->add('Enregistrer',"submit")
                        ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_user',
             array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
        }

         return $this->render('BGPlateformBundle:Default:addCompany.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function deleteCompanyAction($id){
         $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('BGPlateformBundle:Company')->find($id);
        $clients = $em->getRepository('BGPlateformBundle:Client')->getClientFromCompany($id);
        foreach ($clients as $client) {
            $client->unsetCompany();
        }
        $em->remove($company);
        $em->flush();
        return $this->redirect($this->get('router')->generate('bg_plateform_user',array("id"=> $this->get('security.context')->getToken()->getUser()->getId())));
        
    }

    public function addOportunityAction(Request $request,$id){
        $oportunity = new Oportunity();
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository("BGPlateformBundle:Client")->find($id);
        $form = $this->get('form.factory')->createBuilder('form',$oportunity)
                        ->add("content","textarea")
                        ->add("state","choice",array(
                                "multiple" => false,
                                "expanded" => true ,
                                "choices"=>array(
                                   "f"=>"Froid",
                                   "c"=>"Chaud",
                                   "cs"=>"Contrat Signé"
                                    )))
                        ->add('Enregistrer',"submit")
                        ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $client->setOportunity($oportunity);
            $em->persist($oportunity);
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_user',
             array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
        }

        return $this->render('BGPlateformBundle:Default:addOportunity.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function editOportunityAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $oportunity = $em->getRepository('BGPlateformBundle:Oportunity')->find($id);
        $form = $this->get('form.factory')->createBuilder('form',$oportunity)
                        ->add("content","textarea")
                        ->add("state","choice",array(
                                "multiple" => false,
                                "expanded" => true ,
                                "choices"=>array(
                                   "f"=>"Froid",
                                   "c"=>"Chaud",
                                   "cs"=>"Contrat Signé"
                                    )))
                        ->add('Enregistrer',"submit")
                        ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em->flush();
            return $this->redirect($this->generateUrl('bg_plateform_user',
             array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
        }

        return $this->render('BGPlateformBundle:Default:addOportunity.html.twig', array(
            'form' => $form->createView(),
            ));
    }

    public function deleteOportunityAction($id){
        $em = $this->getDoctrine()->getManager();
        $oportunity = $em->getRepository('BGPlateformBundle:Oportunity')->find($id);
        $clients = $em->getRepository('BGPlateformBundle:Client')->getClientFromOportunity($id);
            $clients->unsetOportunity();
        $em->remove($oportunity);
        $em->flush();
        return $this->redirect($this->get('router')->generate('bg_plateform_user',array("id"=> $this->get('security.context')->getToken()->getUser()->getId())));        
    }
}
