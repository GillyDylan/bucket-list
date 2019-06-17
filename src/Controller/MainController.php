<?php


namespace App\Controller;


use App\Entity\Idea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request){
        $idea = new Idea();
        $ideaForm = $this->createForm(Idea::class, $idea);
        $ideaForm->handleRequest($request);
        if($ideaForm->isSubmitted() && $ideaForm->isValid()){
            $this->addFlash("succes", "Idea successfully added !");
            $this->$this->redirectToRoute("test");
        }
        return $this->render("add.html.twig");
    }
}