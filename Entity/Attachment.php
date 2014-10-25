<?php

namespace SymHelpDesk\Entity;

/**
 * @ORM\Entity()
 * @ORM\Table(name="symhelpdesk_attachments")
 */
class Attachment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     * @var integer
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket", inversedBy="attachments", cascade={"persist"})
     * @ORM\JoinColumn(name="ticket", referencedColumnName="id")
     * @var Ticket
     */
    protected $ticket;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $time;

    /**
     * @ORM\ManyToOne(targetEntity="AttachmentType", cascade={"persist"})
     * @ORM\JoinColumn(name="type", referencedColumnName="id")
     * @var AttachmentType
     */
    protected $type;

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

    /**
     * @param \SymHelpDesk\Entity\Ticket $ticket
     */
    public function setTicket(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * @return \SymHelpDesk\Entity\Ticket
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \SymHelpDesk\Entity\AttachmentType $type
     */
    public function setType(AttachmentType$type)
    {
        $this->type = $type;
    }

    /**
     * @return \SymHelpDesk\Entity\AttachmentType
     */
    public function getType()
    {
        return $this->type;
    }
}