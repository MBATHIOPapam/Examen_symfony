<?php

namespace App\Service;

use App\Repository\ClasseRepository;

class ClasseService
{
    private ClasseRepository $classeRepository;

    public function __construct(ClasseRepository $classeRepository)
    {
        $this->classeRepository = $classeRepository;
    }

    /**
     * Obtenir toutes les classes.
     */
    public function getAllClasses(): array
    {
        return $this->classeRepository->findAll();
    }
}
