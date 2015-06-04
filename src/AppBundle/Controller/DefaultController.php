<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
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

    
}
