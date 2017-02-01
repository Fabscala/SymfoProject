<?php

namespace SymfoProjectGit\CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="SymfoProjectGit\CinemaBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=255)
     */
    private $synopsis;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Realisateur", inversedBy="sonnom")
     */
    private $realisateur;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="film")
     */
    private $genre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set dateDeSortiie
     *
     * @param string $dateDeSortiie
     *
     * @return Film
     */
    public function date($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set realisateur_id
     *
     * @param string $realisateur_id
     *
     * @return Film
     */
    public function setRealisateur_id($realisateur_id)
    {
        $this->realisateur_id = $realisateur_id;

        return $this;
    }

    /**
     * Get realisateur_id
     *
     * @return string
     */
    public function getRealisateur_id()
    {
        return $this->realisateur_id;
    }

    /**
     * Set idGenre
     *
     * @param string $idGenre
     *
     * @return Film
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return string
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }
}

