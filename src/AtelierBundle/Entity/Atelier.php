<?php

namespace AtelierBundle\Entity;



use Doctrine\ORM\Mapping as ORM;
use GererEnfantBundle\Entity\Enfant;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Atelier
 *
 * @ORM\Table(name="atelier")
 * @ORM\Entity(repositoryClass="AtelierBundle\Repository\AtelierRepository")
 */
class Atelier
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *@Assert\GreaterThan(propertyPath="dateDebut")
     * @ORM\Column(name="date_fin", type="datetime",nullable=true)
     */
    private $dateFin=null;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Atelier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Atelier
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Atelier
     */
    public function setDateDebut(\DateTimeInterface $dateDebut) : self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Atelier
     */
    public function setDateFin(?\DateTimeInterface $dateFin = null):self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    /**
     * Set idEnfant
     *
     * @param integer $idEnfant
     *
     * @return Atelier
     */
    public function setIdEnfant($idEnfant)
    {
        $this->idEnfant = $idEnfant;

        return $this;
    }

    /**
     * Get idEnfant
     *
     * @return integer
     */
    public function getIdEnfant()
    {
        return $this->idEnfant;
    }
}

