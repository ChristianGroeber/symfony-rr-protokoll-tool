<?php


namespace App\Controller;


use App\Entity\Team;
use App\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TeamController
 * @Route("/teams", name="teams_")
 */
class TeamController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return RedirectResponse
     */
    public function index()
    {
        return $this->redirectToRoute('teams_list');
    }

    /**
     * @Route("/list", name="list")
     */
    public function listTeams()
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();

        return $this->render('teams/list.twig', [
            'teams' => $teams,
            'title' => 'Teams',
        ]);
    }

    /**
     * @Route("/neu", name="add")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addTeam(Request $request)
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $team = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('teams_list');
        }

        return $this->render('add.twig', [
            'form' => $form->createView(),
            'title' => 'Neues Team',
        ]);
    }
}