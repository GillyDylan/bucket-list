<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LayoutController extends Controller
{
    /**
     * @Route("/", name="layout")
     */
    public function layout(){
        return $this->render("layout.html.twig");
    }
}