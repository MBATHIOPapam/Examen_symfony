<?php

namespace App\Service;

use App\Repository\ProfesseurRepository;

class ProfesseurService
{
    private ProfesseurRepository $professeurRepository;

    public function __construct(ProfesseurRepository $professeurRepository)
    {
        $this->professeurRepository = $professeurRepository;
    }

    /**
     * Obtenir tous les professeurs.
     */
    public function getAllProfesseurs(): array
    {
        return $this->professeurRepository->findAll();
    }
}

