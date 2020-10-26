<?php


namespace App\Controller;


use App\Entity\Leiter;
use App\Form\LeiterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LeiterController
 * @Route("/leiter", name="leiters_")
 */
class LeiterController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('leiters_list');
    }

    /**
     * @Route("/list", name="list")
     */
    public function listLeiter()
    {
        $leiter = $this->getDoctrine()->getRepository(Leiter::class)->findAll();

        return $this->render('leiter/list.twig', [
            'leiters' => $leiter,
            'title' => 'Leiter',
        ]);
    }

    /**
     * @Route("/neu", name="add")
     */
    public function addLeiter(Request $request)
    {
        $leiter = new Leiter();
        $form = $this->createForm(LeiterType::class, $leiter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $leiter = $form->getData();
            $this->getDoctrine()->getManager()->persist($leiter);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('leiters_list');
        }

        return $this->render('add.twig', [
            'form' => $form->createView(),
            'title' => 'Neuer Leiter',
        ]);
    }
}