<?php

namespace SymHelpDesk\Services;

class Log
{
	protected $logRepository;

	public function __construct(LogRepository $logRepository)
	{
        $this->logRepository = $logRepository;
	}

	public function add(Log $log)
	{
        $this->logRepository->save($log);
	}
}