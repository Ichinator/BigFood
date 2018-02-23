<?php

namespace Ichinator\NewsBundle\Controller;

use AppBundle\Entity\User;
use Ichinator\NewsBundle\Entity\News;
use Ichinator\NewsBundle\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ichinator\NewsBundle\Form\CommentsType;
use Ichinator\NewsBundle\Entity\Comments;

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

    public function oneNewsAction($id, Request $request){
        /*$comment = new Comments();
        $form = $this->createForm(CommentsType::class, $comment);
        $form->handleRequest($request);
        $formView = $form->createView();



        if($form->isSubmitted() && $form->isValid()){
            $content = $form["content"]->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            $this->addFlash('success', 'Votre commentaire a bien été enregistré !');
            return $this->redirect($this->generateUrl('oneNewsRoute', array('id' => $id)));
        }

        $oneNews = $this->getDoctrine()->getManager()->getRepository(News::class)->find($id);
        return $this->render('IchinatorNewsBundle:Default:oneNews.html.twig', array('oneNews'=>$oneNews, 'form' => $formView));*/

        $comments = new Comments();
        $form = $this->createForm(CommentsType::class, $comments);
        $form->handleRequest($request);
        $formView = $form->createView();

        $oneNews = $this->getDoctrine()->getManager()->getRepository(News::class)->find($id);

        if($form->isSubmitted() && $form->isValid()){
            $comments->setContent($form["content"]->getData());

            $news = new News();
            $news = $this->getDoctrine()->getRepository(News::class)->find($id);

            //$user = new User();
            $user = $this->getUser();
            //$user = $this->get('security.token_storage')->getToken()->getUser();
            // relates this product to the category
            $comments->setNews($news);
            $comments->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->persist($news);
            $em->persist($comments);
            $em->flush();
        }

        $comments = $this->getDoctrine()->getRepository(Comments::class)->findComments($id);
        return $this->render('IchinatorNewsBundle:Default:oneNews.html.twig', array('oneNews'=>$oneNews, 'form' => $formView, 'comments' => $comments));
    }
}
