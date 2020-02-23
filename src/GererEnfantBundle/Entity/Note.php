<?php

namespace GererEnfantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="GererEnfantBundle\Repository\NoteRepository")
 */
class Note
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
     * @ORM\Column(name="Matiere", type="string", length=255)
     */
    private $matiere;

    /**
     * @return mixed
     */
    public function getEnfant()
    {
        return $this->Enfant;
    }

    /**
     * @param mixed $Enfant
     */
    public function setEnfant($Enfant)
    {
        $this->Enfant = $Enfant;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Enfant")
     * @ORM\JoinColumn(name="Enfant_id",referencedColumnName="id")

     */
    private $Enfant;

    /**
     * @var int
     *
     * @ORM\Column(name="Valeur", type="integer")
     */
    private $valeur;

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
     * Set matiere
     *
     * @param string $matiere
     *
     * @return Note
     */

    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}

