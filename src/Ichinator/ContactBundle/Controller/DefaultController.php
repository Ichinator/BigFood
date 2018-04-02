<?php

namespace Ichinator\ContactBundle\Controller;

use Ichinator\ContactBundle\Entity\contactMessage;
use Ichinator\ContactBundle\Form\contactMessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function contactAction(Request $request)
    {
        $contactMessage = new contactMessage();
        $form = $this->createForm(contactMessageType::class, $contactMessage);
        $form->handleRequest($request);
        $formView = $form->createView();
        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form["name"]->getData();
            $mailAdress = $form["mailAdress"]->getData();
            $telephoneNumber = $form["telephoneNumber"]->getData();
            $message = $form["message"]->getData();

            /*$chaineConcat = $name.$mailAdress.$message.$telephoneNumber;
            $chaineConcatVerifie = strpos($chaineConcat, "</");

            if ($chaineConcatVerifie !== false || empty($contenu)){
                $this->addFlash("notice", "Votre message contient des caractères inappropriés ou est vide !");
            }else {*/
            addslashes($name);
            addslashes($mailAdress);
            addslashes($telephoneNumber);
            addslashes($message);
            $em = $this->getDoctrine()->getManager();

            $contactMessage = new contactMessage();
            $contactMessage->setName($name);
            $contactMessage->setMailAdress($mailAdress);
            $contactMessage->setTelephoneNumber($telephoneNumber);
            $contactMessage->setMessage($message);

            $em->persist($contactMessage);
            $em->flush();

            $messageToUser = \Swift_Message::newInstance()
                ->setSubject("BigFood a reçu votre message")
                ->setFrom('lazonegeek1@gmail.com')
                ->setTo($mailAdress)
                ->setBody($this->renderView('default/messageToUser.html.twig', array('message' => $message, 'name' => $name)), 'text/html');
            $this->get('mailer')->send($messageToUser);


            $this->addFlash('success', 'Votre message a bien été enregistré, nous vous contacterons bientôt !');
            return $this->redirectToRoute('homepage');
        }
        //}
        return $this->render('IchinatorContactBundle:Default:index.html.twig', array('form' => $formView));

    }
}
