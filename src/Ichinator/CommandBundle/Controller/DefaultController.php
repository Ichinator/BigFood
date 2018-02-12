<?php

namespace Ichinator\CommandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IchinatorCommandBundle:Default:index.html.twig');
    }
}
