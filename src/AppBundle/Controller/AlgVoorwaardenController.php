<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgVoorwaardenController extends Controller
{
    /**
     * @Route("/algemene-voorwaarden", name="algemene-voorwaarden")
     */
    public function homeAction(){
        
        
        return $this->render('Regelgeving/algvoorwaarden.html.twig', array(
            
        ));
    }
}
