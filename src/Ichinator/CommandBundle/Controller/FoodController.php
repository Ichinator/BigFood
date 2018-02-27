<?php

namespace Ichinator\CommandBundle\Controller;

use Ichinator\CommandBundle\Entity\Burger;
use Ichinator\CommandBundle\Entity\Plat;
use Ichinator\CommandBundle\Entity\Dessert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ichinator\NewsBundle\Form\CommentsType;
use Ichinator\NewsBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;

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

    public function oneBurgerAction($id, Request $request){

        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        $formView = $form->createView();

        if($form->isSubmitted() && $form->isValid()){
            $comments->setContent($form["content"]->getData());

            $burger = new Burger();
            $burger = $this->getDoctrine()->getRepository(Burger::class)->find($id);
            $user = $this->getUser();
            $comments->setBurger($burger);
            $comments->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->persist($burger);
            $em->persist($comments);
            $em->flush();
        }

        $comments = $this->getDoctrine()->getRepository(Comments::class)->findBurgerComments($id);

        $oneBurger = $this->getDoctrine()->getManager()->getRepository(Burger::class)->find($id);
        return $this->render('IchinatorCommandBundle:Default:oneBurger.html.twig', array('oneBurger' => $oneBurger, 'form' => $formView, 'comments' => $comments));
    }
}