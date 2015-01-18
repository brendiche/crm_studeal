<?php

namespace BG\PlateformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BG\PlateformBundle\Entity\Client;
use BG\PlateformBundle\Entity\Company;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BGPlateformBundle:Default:index.html.twig');
    }

    public function addClientAction(Request $request){
    	$client = new Client();
        $client->setUser($this->get('security.context')->getToken()->getUser());
    	$form = $this->get('form.factory')->createBuilder('form',$client)
    					->add("Nom","text")
    					->add("Prenom","text")
    					->add("Email","email")
    					->add("Telephone","text")
                        ->add("Company","entity",array(
                                                    "class"=>"BGPlateformBundle:Company",
                                                    "property"=>"nom"))
    					->add('Enregistrer',"submit")
    					->getForm();

    	$form->handleRequest($request);
    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($client);
    		$em->flush();
    		return $this->redirect($this->generateUrl('bg_plateform_user',
    		 array('id' => $this->get('security.context')->getToken()->getUser()->getId())));
    	}

    	 return $this->render('BGPlateformBundle:Default:addClient.html.twig', array(
      		'form' => $form->createView(),
    		));
    }

    public function editClientAction($id){

    }

    public function deleteClientAction($id){

    }

    public function addCompanyAction(Request $request){
        $company = new Company();
        $form = $this->get('form.factory')->createBuilder('form',$company)
                        ->add("Nom","text")
                        ->add("adresse","text")
                        ->add("siret","text")
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

    public function editCompanyAction($id){
        
    }

    public function deleteCompanyAction($id){
        
    }
}
