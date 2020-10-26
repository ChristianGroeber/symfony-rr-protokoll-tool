<?php


namespace App\Controller;


use App\Entity\Kind;
use App\Entity\Leiter;
use App\Form\KindType;
use App\Form\LeiterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LeiterController
 * @Route("/kinder", name="kinder_")
 */
class KinderController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('kinder_list');
    }

    /**
     * @Route("/list", name="list")
     */
    public function listLeiter()
    {
        $kinder = $this->getDoctrine()->getRepository(Kind::class)->findAll();

        return $this->render('kinder/list.twig', [
            'kinder' => $kinder,
            'title' => 'Kinder',
        ]);
    }

    /**
     * @Route("/neu", name="add")
     */
    public function addLeiter(Request $request)
    {
        $kind = new Kind();
        $form = $this->createForm(KindType::class, $kind);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $kind = $form->getData();
            $this->getDoctrine()->getManager()->persist($kind);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kinder_list');
        }

        return $this->render('add.twig', [
            'form' => $form->createView(),
            'title' => 'Neues Kind',
        ]);
    }
}