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
     * @ORM\Column(name="date_de_sortiie", type="string", length=255)
     */
    private $date_de_sortiie;

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
    public function setDateDeSortiie($dateDeSortiie)
    {
        $this->dateDeSortiie = $dateDeSortiie;

        return $this;
    }

    /**
     * Get dateDeSortiie
     *
     * @return string
     */
    public function getDateDeSortiie()
    {
        return $this->dateDeSortiie;
    }

    /**
     * Set idReal
     *
     * @param string $idReal
     *
     * @return Film
     */
    public function setIdReal($idReal)
    {
        $this->idReal = $idReal;

        return $this;
    }

    /**
     * Get idReal
     *
     * @return string
     */
    public function getIdReal()
    {
        return $this->idReal;
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

