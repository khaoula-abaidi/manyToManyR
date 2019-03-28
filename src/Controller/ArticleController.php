<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 28/03/2019
 * Time: 21:10
 */

namespace App\Controller;


use App\Entity\Article;
use App\Repository\TagRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @\Symfony\Component\Routing\Annotation\Route("/", name = "home_page")
     * @return Response
     */
    public function homepage(){
        return new Response('hiiii');
    }
    /**
     * @\Symfony\Component\Routing\Annotation\Route("/news/{id}", name ="show_page")
     * @return Response
     */
    public function show(Article $article){
        $tags = $article->getTags();
        dump($tags);die;
        return $this->render('article/show.html.twig');
    }
    /**
     * @\Symfony\Component\Routing\Annotation\Route("/news/heart",name="news_hear")

    public function test(LoggerInterface $logger){
        $logger->info('article is being hearted');
        return new JsonResponse(['hearts'=>rand(5,100)]);
    }
*/

}