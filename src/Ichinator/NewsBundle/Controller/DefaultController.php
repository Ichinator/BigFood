<?php

namespace Ichinator\NewsBundle\Controller;

use Ichinator\NewsBundle\Entity\News;
use Ichinator\NewsBundle\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $title = $form["title"]->getData();
            $content = $form["content"]->getData();

            $em = $this->getDoctrine()->getManager();
            $news->setTitle($title);
            $news->setContent($content);

            $em->persist($news);
            $em->flush();

            $this->addFlash('success', 'Votre article a bien été enregistré !');
            return $this->redirectToRoute('homepage');
        }
        $formView = $form->createView();

        return $this->render('IchinatorNewsBundle:Default:news.html.twig', array('form' => $formView));
    }

    public function oneNewsAction($id){
        $oneNews = $this->getDoctrine()->getManager()->getRepository(News::class)->find($id);
        return $this->render('IchinatorNewsBundle:Default:oneNews.html.twig', array('oneNews'=>$oneNews));
    }
}
