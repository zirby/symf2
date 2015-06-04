<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction()
    {
        return $this->render('index.html.twig');
    }
    /**
     * @Route("/pgi", name="pgi_homepage")
     */
    public function indexAction()
    {
        return $this->render('pgi/index.html.twig');
    }
    /**
     * @Route("/pgi/flot", name="pgi_flot")
     */
    public function flotAction()
    {
        return $this->render('pgi/flot.html.twig');
    }

    /**
     * @Route("/pgi/morris", name="pgi_morris")
     */
    public function morrisAction()
    {
        return $this->render('pgi/morris.html.twig');
    }

    /**
     * @Route("/pgi/tables", name="pgi_tables")
     */
    public function tablesAction()
    {
        return $this->render('pgi/tables.html.twig');
    }

    /**
     * @Route("/pgi/forms", name="pgi_forms")
     */
    public function formsAction()
    {
        return $this->render('pgi/forms.html.twig');
    }

    /**
     * @Route("/pgi/panelswells", name="pgi_panelswells")
     */
    public function panelswellsAction()
    {
        return $this->render('pgi/panelswells.html.twig');
    }

    
   /**
     * @Route("/pgi/buttons", name="pgi_buttons")
     */
    public function buttonsAction()
    {
        return $this->render('pgi/buttons.html.twig');
    }

    /**
     * @Route("/pgi/notifications", name="pgi_notifications")
     */
    public function notificationsAction()
    {
        return $this->render('pgi/notifications.html.twig');
    }

    /**
     * @Route("/pgi/typography", name="pgi_typography")
     */
    public function typographyAction()
    {
        return $this->render('pgi/typography.html.twig');
    }

    /**
     * @Route("/pgi/grid", name="pgi_grid")
     */
    public function gridAction()
    {
        return $this->render('pgi/grid.html.twig');
    }

    /**
     * @Route("/pgi/blanck", name="pgi_blanck")
     */
    public function blanckAction()
    {
        return $this->render('pgi/blanck.html.twig');
    }
    /**
     * @Route("/pgi/login", name="pgi_login")
     */
    public function loginAction()
    {
        return $this->render('pgi/login.html.twig');
    }
   
}
