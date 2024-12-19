<?php

namespace App\Service;

use App\Repository\SessionRepository;

class SessionService
{
    private SessionRepository $sessionRepository;

    public function __construct(SessionRepository $sessionRepository)
    {
        $this->sessionRepository = $sessionRepository;
    }

    /**
     * Obtenir toutes les sessions.
     */
    public function getAllSessions(): array
    {
        return $this->sessionRepository->findAll();
    }
}
