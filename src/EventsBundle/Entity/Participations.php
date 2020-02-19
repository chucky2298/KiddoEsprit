<?php

namespace EventsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Participations
 *
 * @ORM\Table(name="participations")
 * @ORM\Entity(repositoryClass="EventsBundle\Repository\ParticipationsRepository")
 */
class Participations
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
     * @ORM\Column(name="nbPersonnes", type="integer")
     * @Assert\Range(max=5, maxMessage="Le nombre doit faire au plus 5")
     */
    private $nbPersonnes;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer")
     */
    private $userId;

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

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
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Participations
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return int
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * @var \Evenements
     *
     * @ORM\ManyToOne(targetEntity="Evenements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event", referencedColumnName="id")
     * })
     */
    private $event;

    /**
     * @return \Evenements
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param \Evenements $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }
}

