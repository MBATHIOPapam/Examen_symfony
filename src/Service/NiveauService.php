<?php

namespace App\Service;

use App\Repository\NiveauRepository;

class NiveauService
{
    private NiveauRepository $niveauRepository;

    public function __construct(NiveauRepository $niveauRepository)
    {
        $this->niveauRepository = $niveauRepository;
    }

    /**
     * Obtenir tous les niveaux.
     */
    public function getAllNiveaux(): array
    {
        return $this->niveauRepository->findAll();
    }
}
