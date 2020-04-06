<?php

namespace Mindbird\Contao\Appointment\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("tl_appointment")
 */
class Appointment
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
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    protected $startDateTime;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    protected $endDateTime;

    /**
     * @ORM\ManyToOne(targetEntity="AppointmentArchive")
     * @@ORM\JoinColumn(name="$appoitment_archive_id", referencedColumnName="id")
     */
    protected $appointmentArchive;

    /**
     * @ORM\ManyToOne(targetEntity="AppointmentCategory")
     * @@ORM\JoinColumn(name="$appoitment_category_id", referencedColumnName="id")
     */
    protected $appointmentCategory;

}
