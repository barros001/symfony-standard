<?php

namespace Test\RoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return new Response(
            $this->get('router')->generate('testroute_1')."<br />".
            $this->get('router')->generate('testroute_2')."<br />".
            $this->get('router')->generate('testroute_3')."<br />".
            $this->get('router')->generate('testroute_4')."<br />"
        );
    }
}
