<?php

namespace App\Tests\Service;

use App\Service\NiveauService;
use App\Repository\NiveauRepository;
use PHPUnit\Framework\TestCase;

class NiveauServiceTest extends TestCase
{
    private $niveauService;
    private $niveauRepository;

    public function setUp(): void
    {
        $this->niveauRepository = $this->createMock(NiveauRepository::class);
        $this->niveauService = new NiveauService($this->niveauRepository);
    }

    public function testGetAllNiveaux()
    {
        $this->niveauRepository->method('findAll')
            ->willReturn(['Niveau 1', 'Niveau 2']);

        $niveaux = $this->niveauService->getAllNiveaux();

        $this->assertCount(2, $niveaux);
    }
}
