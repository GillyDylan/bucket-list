<?php


namespace App\Controller;


use App\Entity\Idea;
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
        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $ideas=$ideaRepo->findAll();
        return $this->render("idea.html.twig", [
            'ideas' => $ideas
        ]);
    }

    /**
     * @Route("/{id}", name="detail", requirements={"id"="\d+"})
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detail($id){
        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $idea=$ideaRepo->findOneById($id);
        return $this->render("detail.html.twig",
                            ['idea' => $idea]);
    }

}