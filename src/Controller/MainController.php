<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render("home.html.twig");
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(){
        return $this->render("about.html.twig");
    }
}