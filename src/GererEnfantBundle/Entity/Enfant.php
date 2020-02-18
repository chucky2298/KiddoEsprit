<?php

namespace GererEnfantBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Enfant
 *
 * @ORM\Table(name="enfant")
 * @ORM\Entity(repositoryClass="GererEnfantBundle\Repository\EnfantRepository")
 */
class Enfant
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNoteId()
    {
        return $this->Note_id;
    }

    /**
     * @param mixed $Note_id
     */
    public function setNoteId($Note_id)
    {
        $this->Note_id = $Note_id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Note")
     * @ORM\JoinColumn(name="Note_id",referencedColumnName="id")
     * @ORM\JoinColumn(name="Parent_id",referencedColumnName="id")

     */
    private $Parent_id;

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->Parent_id;
    }

    /**
     * @param mixed $Parent_id
     */
    public function setParentId($Parent_id)
    {
        $this->Parent_id = $Parent_id;
    }

  private $Note_id;

    /**
     * @return mixed
     */


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Enfant
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enfant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param DateTime $dateNaissance
     *
     * @return Enfant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
}

