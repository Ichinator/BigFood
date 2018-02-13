<?php

namespace Ichinator\CommandBundle\Controller;

use Ichinator\CommandBundle\Entity\Command;
use Ichinator\CommandBundle\Form\CommandType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $command = new Command();
        $form = $this->createForm(CommandType::class, $command);
        $formView = $form->createView();
        
        return $this->render('IchinatorCommandBundle:Default:command.html.twig', array('form' => $formView));
    }
}
