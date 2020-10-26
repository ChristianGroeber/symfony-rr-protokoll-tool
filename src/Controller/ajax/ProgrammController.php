<?php


namespace App\Controller\ajax;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProgrammController
 * @Route("/ajax/programm", name="ajax_programm_")
 */
class ProgrammController extends AbstractController
{
    /**
     * @Route("load", name="load")
     * @param Request $request
     */
    public function loadProgramm(Request $request)
    {

    }
}