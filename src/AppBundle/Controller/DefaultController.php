<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        if ($this->getUser()) {
            return $this->render('default/index.html.twig', array(
                'name' => $this->getUser()->getUserName()
            ));
        } else {
            return $this->render('default/login.html.twig');
        }
    }
}
