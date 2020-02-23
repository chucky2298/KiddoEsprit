<?php

namespace AtelierBundle\EventListener;

use AtelierBundle\Entity\Atelier;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AtelierBundle\Repository\AtelierRepository;
use Toiba\FullCalendarBundle\Entity\Event;
use Toiba\FullCalendarBundle\Event\CalendarEvent;




class FullCalendarListenerr
{
    private $atelierRepository;
    private $router;

    public function __construct(
        AtelierRepository $atelierRepository,
        UrlGeneratorInterface $router
    ) {
        $this->atelierRepository = $atelierRepository;
        $this->router = $router;
    }
    public function loadEvents(CalendarEvent $calendar)
    {
        $startDate = $calendar->getStart();
        $endDate = $calendar->getEnd();
        $filters = $calendar->getFilters();

        // Modify the query to fit to your entity and needs
        // Change b.beginAt by your start date in your custom entity
        $ateliers = $this->atelierRepository
            ->createQueryBuilder('atelier')/*
            ->where('atelier.dateDebut BETWEEN :startDate and :endDate')
            ->setParameter('startDate', $startDate->format('Y-m-d H:i:s'))
            ->setParameter('endDate', $endDate->format('Y-m-d H:i:s'))*/
            ->getQuery()
            ->getResult()
        ;
//dump($ateliers);
        foreach ($ateliers as $atelier) {
            // this create the events with your own entity (here booking entity) to populate calendar
            $atelierEvent = new Event(
                $atelier->getNom(),
                $atelier->getDateDebut(),
                $atelier->getDateFin() // If the end date is null or not defined, a all day event is created.
            );

            /*
             * Optional calendar event settings
             *
             * For more information see : Toiba\FullCalendarBundle\Entity\Event
             * and : https://fullcalendar.io/docs/event-object
             */
            // $bookingEvent->setUrl('http://www.google.com');
            // $bookingEvent->setBackgroundColor($booking->getColor());
            // $bookingEvent->setCustomField('borderColor', $booking->getColor());

            /*$atelierEvent->setUrl(
                $this->router->generate('afficher_calendrier', [
                    'id' => $atelier->getId(),
                ])
            );*/

            // finally, add the booking to the CalendarEvent for displaying on the calendar
            $calendar->addEvent($atelierEvent);
          //  var_dump($atelierEvent);
        }
    }



}





