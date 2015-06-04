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

}
