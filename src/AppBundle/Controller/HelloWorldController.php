<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HelloWorldController extends Controller
{
    /**
     * @Route("/helloworld/{firstName}/{lastName}",name="hello")
     */
    public function indexAction($firstName,$lastName, Request $request,$foo="bar")
    {
         $page = $request->query->get('page', 1);
        return new Response("Hello ".$firstName." ".$lastName.$page);
    }
}
