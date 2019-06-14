<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/idea")
 */
class IdeaController extends Controller
{
    /**
     * @Route("/list", name="list")
     */
    public function list(){
        return $this->render("idea.html.twig");
    }

    /**
     * @Route("/{id}", name="detail", requirements={"id"="\d+"})
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detail($id){
        return $this->render("detail.html.twig",
                            ['$id' => $id]);
    }

}