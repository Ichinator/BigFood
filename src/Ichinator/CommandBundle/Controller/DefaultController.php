<?php

namespace Ichinator\CommandBundle\Controller;

use Ichinator\CommandBundle\Entity\Command;
use Ichinator\CommandBundle\Form\CommandType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $command = new Command();
        $form = $this->createForm(CommandType::class, $command);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $burger = $form["burger"]->getData();
            $plat = $form["plat"]->getData();
            $dessert = $form["dessert"]->getData();

            $this->addFlash('success', 'Votre commande a bien été enregistrée !');
            return $this->redirectToRoute('homepage');
        }
        $formView = $form->createView();

        return $this->render('IchinatorCommandBundle:Default:command.html.twig', array('form' => $formView));
    }
}
