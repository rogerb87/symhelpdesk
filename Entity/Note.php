<?php

namespace SymHelpDesk\Entity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="symhelpdesk_notes")
 */
class Note
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket", inversedBy="notes", cascade={"persist"})
     * @ORM\JoinColumn(name="ticket", referencedColumnName="id")
     * @var Ticket
     */
    protected $ticket;

    /**
     * @ORM\ManyToOne(targetEntity="Supporter", cascade={"persist"})
     * @ORM\JoinColumn(name="supporter", referencedColumnName="id")
     * @var Supporter
     */
    protected $supporter;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $time;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $note;

    /**
     * @param int $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}