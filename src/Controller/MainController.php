<?php


namespace App\Controller;


use App\Entity\Idea;
use App\Form\IdeaType;
use DateTime;
use Doctrine\Common\Persistence\ObjectManager;
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
    public function add(ObjectManager $manager, Request $request){
        $idea = new Idea();

        $ideaForm = $this->createForm(IdeaType::class, $idea);

        $ideaForm->handleRequest($request);
        if($ideaForm->isSubmitted() && $ideaForm->isValid()){
            $idea->setDateCreated(new DateTime());
            $idea->setIdPublished(true);
            $manager->persist($idea);
            $manager->flush();
            $this->addFlash("success","Idea successfully added!");
            return $this->redirectToRoute("detail", ["id" => $idea->getId() ]);
        }

        return $this->render("add.html.twig", [
            "ideaForm" => $ideaForm->createView()
            ]);
    }
}