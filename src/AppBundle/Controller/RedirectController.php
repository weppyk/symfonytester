<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectController extends Controller
{
    /**
     * @Route("/redirect")
     */
    public function indexAction()
    {
        return $this->redirect('http://hnbrno.cz');
    }
}

