<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrivacyController extends Controller
{
    /**
     * @Route("/privacy", name="privacy")
     */
    public function homeAction(){
        
        
        return $this->render('Regelgeving/privacy.html.twig', array(
            
        ));
    }
}