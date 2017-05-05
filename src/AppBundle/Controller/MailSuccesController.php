<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailSuccesController extends Controller
{
    /**
     * @Route("/mail-succes", name="mail-succes")
     */
    public function homeAction(){
        
        
        return $this->render('Mailing/mail-succes.html.twig', array(
            
        ));
    }
}