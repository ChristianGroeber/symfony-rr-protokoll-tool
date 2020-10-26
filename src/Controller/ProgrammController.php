<?php


namespace App\Controller;


use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProgrammController
 * @Route("/programm", name="programme_")
 */
class ProgrammController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

    }

    /**
     * @Route("/list", name="list")
     */
    public function listProgramme()
    {
        $programme = $this->getDoctrine()->getRepository(Event::class)->findAll();


    }
}