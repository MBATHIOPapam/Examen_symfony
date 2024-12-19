<?php

namespace App\Service;

use App\Repository\EtudiantRepository;

class EtudiantService
{
    private EtudiantRepository $etudiantRepository;

    public function __construct(EtudiantRepository $etudiantRepository)
    {
        $this->etudiantRepository = $etudiantRepository;
    }

    /**
     * Obtenir tous les étudiants.
     */
    public function getAllEtudiants(): array
    {
        return $this->etudiantRepository->findAll();
    }
}
