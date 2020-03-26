<?php

namespace Mindbird\Contao\Appointment\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("tl_appointment_archive")
 */
class AppointmentArchive
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
     * @ORM\Column(type="string")
     * @var string
     */
    protected $title;

}
