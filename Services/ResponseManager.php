<?php

namespace SymHelpDesk\Services;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ResponseManager
{
    /**
     * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @var ResponseRepository
     */
    protected $responseRepository;

    public function __construct(EventDispatcherInterface $eventDispatcher, ResponseRepository $responseRepository)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->responseRepository = $responseRepository;
    }

    public function addResponse(Ticket $ticket, Response $response)
    {

    }
}