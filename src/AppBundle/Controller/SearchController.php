<?php

namespace AppBundle\Controller;

//use AppBundle\Entity\Enquiry;
//use AppBundle\Form\EnquiryType;
use AppBundle\Entity\Shops;
use AppBundle\Entity\Promos;
use AppBundle\Form\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    /**
     * @Route("/search", name="search")
     */
    

    public function searchAction(Request $request)
    {

        $form = $this->createForm(SearchType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $results = $form->getData();

            return $this->redirectToRoute('Search/results.html.twig', array(
                'results' => $results
                ));
        }

        return $this->render('Search/index.html.twig', array(
            'form' => $form->createView()
            ));
    }

}