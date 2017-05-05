<?php 
namespace AppBundle\Controller;
use AppBundle\Entity\Enquiry;
use AppBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class ContactController extends Controller{
	/**
	* @Route("/contact", name="contact")
	*/

    public function contactAction(Request $request)
    {
        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form = $this->createForm('AppBundle\Form\ContactType',null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :
                    
                    return $this->redirectToRoute('mail-succes');
                }else{
                    // An error ocurred, handle
                    var_dump("Errooooor :(");
                }
            }
        }

        return $this->render('Mailing/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
	
    private function sendEmail($data){
        $myappContactMail = 'info@variashopping.com';
        $myappContactPassword = 'Alsoma04365';
        
        $transport = \Swift_SmtpTransport::newInstance('gator4030.hostgator.com', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);
        
        $message = \Swift_Message::newInstance("Varisho contact". $data["onderwerp"])
        ->setFrom(array($myappContactMail => "Email van ".$data["naam"]))
        ->setTo(array(
            $myappContactMail => $myappContactMail
        ))
        ->setBody($data["bericht"]."Afzender :".$data["email"]);
        return $mailer->send($message);
    }
    
}