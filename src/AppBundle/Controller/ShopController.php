<?php

namespace AppBundle\Controller;

//use AppBundle\Entity\Enquiry;
//use AppBundle\Form\EnquiryType;
use AppBundle\Entity\Shops;
//use AppBundle\Entity\Promos;
use AppBundle\Form\ShopType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends Controller
{
    /**
     * @Route("/task", name="task_list")
     */
    public function listAction()
    {   
        $shops = $this->getDoctrine()
        ->getRepository('AppBundle:Shops')
        ->findAll();

        
        return $this->render('Shop/index.html.twig', array('shops' => $shops
            ));
    }

    /**
     * @Route("/task/create", name="task_create")
     */
    public function createAction(Request $request)
    {
        $shop = new Shops();

        $form = $this->createForm(ShopType::class, $shop);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            die('submitted');


        }

        return $this->render('Shop/create.html.twig', array(
            'form' => $form->createView()
            ));
    }

    /**
     * @Route("/task/edit/{id}", name="task_edit")
     */
    public function editAction($id, Request $request)
    {
        return $this->render('Shop/edit.html.twig', [
        ]);
    }

    /**
     * @Route("/task/details/{id}", name="task_details")
     */
    public function detailsAction($id)
    {
        return $this->render('Shop/details.html.twig', [
        ]);
    }

}