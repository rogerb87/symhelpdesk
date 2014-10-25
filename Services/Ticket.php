<?php

namespace SymHelpDesk\Services;

class Ticket
{
    protected $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function createTicket(Ticket $ticket)
    {

    }

    public function isClosed(Ticket $ticket)
    {

    }
}