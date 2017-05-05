<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CookiesController extends Controller
{
    /**
     * @Route("/cookies", name="cookies")
     */
    public function homeAction(){
        
        
        return $this->render('Regelgeving/cookies.html.twig', array(
            
        ));
    }
}