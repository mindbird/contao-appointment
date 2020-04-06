<?php

namespace Mindbird\Contao\Appointment\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("tl_appointment_category")
 */
class AppointmentCategory
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $tstamp;

    /**
     * @ORM\Column(type="string", options={"default" : ""})
     * @var string
     */
    protected $title;

    /**
     * @ORM\Column(type="integer", options={"default" : 60})
     * @var int
     */
    protected $duration;
}
