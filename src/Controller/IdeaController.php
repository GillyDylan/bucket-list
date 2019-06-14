<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends Controller
{
    /**
     * @Route("/idea/list", name="list")
     */
    public function list(){
        return $this->render("idea.html.twig");
    }

    /**
     * @Route("/idea/{id}", name="detail")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detail($id){
        return $this->render("detail.html.twig",
                            ['$id' => $id]);
    }

}