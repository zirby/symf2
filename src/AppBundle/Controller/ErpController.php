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
    /**
     * @Route("/erp/company/add", name="erp_add_company")
     */
    public function AddAction()
    {
        
        return $this->render('erp/add_company.html.twig');
    }
    /**
     * @Route("/erp/login", name="erp_login")
     */
    public function LoginAction()
    {
        
        return $this->render('erp/login.html.twig');
    }

}
