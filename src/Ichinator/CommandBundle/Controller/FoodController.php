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
            $contenu = $form["content"]->getData();
            $contenuVerifie = strpos($contenu, "</");
            if($contenuVerifie !== false || empty($contenu)){
                $this->addFlash("notice", "Votre message n a pas été enregistré car il est vide ou contient des caractères interdits");
            }else{
                $comments->setContent($contenu);

                $burger = new Burger();
                $burger = $this->getDoctrine()->getRepository(burger::class)->find($id);
                $user = $this->getUser();
                $comments->setDessert($burger);
                $comments->setUser($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->persist($burger);
                $em->persist($comments);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Commentaire enregistré !'
                );
            }
        }

        $comments = $this->getDoctrine()->getRepository(Comments::class)->findBurgerComments($id);

        $oneBurger = $this->getDoctrine()->getManager()->getRepository(Burger::class)->find($id);
        return $this->render('IchinatorCommandBundle:Default:oneBurger.html.twig', array('oneBurger' => $oneBurger, 'form' => $formView, 'comments' => $comments));
    }


    public function onePlatAction($id, Request $request){

        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        $formView = $form->createView();

        if($form->isSubmitted() && $form->isValid()){
            $contenu = $form["content"]->getData();
            $contenuVerifie = strpos($contenu, "</");
            if($contenuVerifie !== false || empty($contenu)){
                $this->addFlash("notice", "Votre message n a pas été enregistré car il est vide ou contient des caractères interdits");
            }else{
                $comments->setContent($contenu);

                $plat = new Plat();
                $plat = $this->getDoctrine()->getRepository(plat::class)->find($id);
                $user = $this->getUser();
                $comments->setDessert($plat);
                $comments->setUser($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->persist($plat);
                $em->persist($comments);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Commentaire enregistré !'
                );
            }
        }

        $comments = $this->getDoctrine()->getRepository(Comments::class)->findPlatComments($id);

        $onePlat = $this->getDoctrine()->getManager()->getRepository(Plat::class)->find($id);
        return $this->render('IchinatorCommandBundle:Default:onePlat.html.twig', array('onePlat' => $onePlat, 'form' => $formView, 'comments' => $comments));
    }

    public function oneDessertAction($id, Request $request){

        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        $formView = $form->createView();

        if($form->isSubmitted() && $form->isValid()){
            $contenu = $form["content"]->getData();
            $contenuVerifie = strpos($contenu, "</");
            if($contenuVerifie !== false || empty($contenu)){
                $this->addFlash("notice", "Votre message n a pas été enregistré car il est vide ou contient des caractères interdits");
            }else{
                $comments->setContent($contenu);

                $dessert = new Dessert();
                $dessert = $this->getDoctrine()->getRepository(dessert::class)->find($id);
                $user = $this->getUser();
                $comments->setDessert($dessert);
                $comments->setUser($user);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->persist($dessert);
                $em->persist($comments);
                $em->flush();
                $this->addFlash(
                    'notice',
                    'Commentaire enregistré !'
                );
            }
        }

        $comments = $this->getDoctrine()->getRepository(Comments::class)->findDessertComments($id);

        $oneDessert = $this->getDoctrine()->getManager()->getRepository(Dessert::class)->find($id);
        return $this->render('IchinatorCommandBundle:Default:oneDessert.html.twig', array('oneDessert' => $oneDessert, 'form' => $formView, 'comments' => $comments));
    }
}