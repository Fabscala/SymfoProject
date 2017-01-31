<?php

namespace SymfoProjectGit\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CinemaBundleController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SymfoProjectGitCinemaBundle:Default:index.html.twig');
    }

    /**
    * @Route("/film")
    */
    public function listAction()
    {
        return $this->render('SymfoProjectGitCinemaBundle:Film:list.html.twig');
    }

    /**
    * @Route("/film/{id}", requirements={"id": "\d+"})
    */
    public function showAction($id)
    {
        return $this->render('SymfoProjectGitCinemaBundle:Film:show.html.twig');
    }
}
