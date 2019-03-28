<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 29/03/2019
 * Time: 00:05
 */

namespace App\Controller;


use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends AbstractController
{
    /**
     * @Route("/articles/{id}")
     */
    public function show(Tag $tag){
        $articles = $tag->getArticles();
        dump($articles);
        return $this->render('tag/show.html.twig',[
            'articles'=>$articles
        ]);
    }
}