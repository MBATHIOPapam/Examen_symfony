<?php

namespace App\Service;

use App\Repository\ModuleRepository;

class ModuleService
{
    private ModuleRepository $moduleRepository;

    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->moduleRepository = $moduleRepository;
    }

    /**
     * Obtenir tous les modules.
     */
    public function getAllModules(): array
    {
        return $this->moduleRepository->findAll();
    }
}
