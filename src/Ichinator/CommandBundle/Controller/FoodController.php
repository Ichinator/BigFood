<?php

namespace Ichinator\CommandBundle\Controller;

use Ichinator\CommandBundle\Entity\Burger;
use Ichinator\CommandBundle\Entity\Plat;
use Ichinator\CommandBundle\Entity\Dessert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class FoodController extends Controller
{
    public function burgerAction()
    {

        $burger = $this->getDoctrine()
            ->getRepository(Burger::class)
            ->findAll();
        return $this->render('IchinatorCommandBundle:Default:burger.html.twig',array(
            'burger' => $burger
        ));
    }

    public function platAction()
    {
        $plat = $this->getDoctrine()
            ->getRepository(Plat::class)
            ->findAll();
        return $this->render('IchinatorCommandBundle:Default:plat.html.twig',array(
            'plat' => $plat
        ));
    }

    public function dessertAction()
    {
        $dessert = $this->getDoctrine()
            ->getRepository(Dessert::class)
            ->findAll();
        return $this->render('IchinatorCommandBundle:Default:dessert.html.twig', array(
            'dessert' => $dessert
        ));
    }
}