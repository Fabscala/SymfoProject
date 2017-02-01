<?php

namespace SymfoProjectGit\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CinemaBundleController extends Controller
{

    /**
     * @Route("/", name="page_accueil")
     */
    public function indexAction()
    {
        return $this->render('SymfoProjectGitCinemaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/films", name="page_films")
     */
    public function listAction()
    {
        $films = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Film')->findAll();
        $realisateur = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->findAll();
        $titre_de_la_page = 'Films de la bibliothèques';

        return $this->render(
            'SymfoProjectGitCinemaBundle:Film:list.html.twig',
            ['films' => $films, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/film/{id}", requirements={"id": "\d+"}, name="page_film")
     */
    public function showAction($id)
    {
        $livre = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Film')->find($id);

        return $this->render(
            'SymfoProjectGitCinemaBundle:Film:show.html.twig',
            ['film' => $film ]
        );
    }
}
