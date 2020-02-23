<?php

namespace AtelierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="AtelierBundle\Repository\InscriptionRepository")
 */
class Inscription
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
     * @var int
     *
     * @ORM\Column(name="atelier", type="integer")
     */
    private $atelier;

    /**
     * @return int
     */
    public function getEnfantid()
    {
        return $this->enfantid;
    }

    /**
     * @param int $enfantid
     */
    public function setEnfantid($enfantid)
    {
        $this->enfantid = $enfantid;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="enfant", type="integer")
     */
    private $enfantid;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set atelier
     *
     * @param integer $atelier
     *
     * @return Inscription
     */
    public function setAtelier($atelier)
    {
        $this->atelier = $atelier;
    
        return $this;
    }

    /**
     * Get atelier
     *
     * @return integer
     */
    public function getAtelier()
    {
        return $this->atelier;
    }

    /**
     * Set enfant
     *
     * @param integer $enfant
     *
     * @return Inscription
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;
    
        return $this;
    }

    /**
     * Get enfant
     *
     * @return integer
     */
    public function getEnfant()
    {
        return $this->enfant;
    }
}

