<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErpController extends Controller
{ 
    /**
     * @Route("/erp", name="erp_homepage")
     */
    public function IndexAction()
    {
        return $this->render('erp/index.html.twig');
    }
    /**
     * @Route("/erp/companies", name="erp_companies")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $companies = $em->getRepository("AppBundle:Company")->findAll();
        
        return $this->render('erp/list_company.html.twig', array(
            'companies' => $companies,
        ));
    }

}