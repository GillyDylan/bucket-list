<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_home")
     */
    public function home(){
        return $this->render("default/home.html.twig");
    }

    /**
     * @Route("/test", name="default_test")
     */
    public function test(){
        return $this->render("default/test.html.twig");
    }

}