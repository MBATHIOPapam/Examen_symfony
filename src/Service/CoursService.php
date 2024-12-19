<?php

namespace App\Service;

use App\Repository\CoursRepository;

class CoursService
{
    private CoursRepository $coursRepository;

    public function __construct(CoursRepository $coursRepository)
    {
        $this->coursRepository = $coursRepository;
    }

    /**
     * Obtenir tous les cours.
     */
    public function getAllCours(): array
    {
        return $this->coursRepository->findAll();
    }
}
