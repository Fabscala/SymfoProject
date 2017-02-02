<?php

namespace SymfoProjectGit\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CinemaRealisateurController extends Controller
{

    /**
     * @Route("/", name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('SymfoProjectGitCinemaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/realisateurs", name="page_realisateurs")
     */
    public function listAction()
    {
        $realisateurs = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->findAll();
        $titre_de_la_page = 'Realisateurs des Films';

        return $this->render(
            'SymfoProjectGitCinemaBundle:Realisateur:list.html.twig',
            ['realisateurs' => $realisateurs, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/realisateur/{id}", requirements={"id": "\d+"}, name="page_realisateur")
     */
    public function showAction($id)
    {
        $film = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->findAll();
        $realisateurs = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->find($id);      

        return $this->render(
            'SymfoProjectGitCinemaBundle:Realisateur:show.html.twig',
            ['realisateurs' => $realisateurs, 'film' => $film ]

        );
    }


}
