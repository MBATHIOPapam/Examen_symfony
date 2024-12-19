<?php

namespace App\Controller;

use App\Repository\ProfesseurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfesseurController extends AbstractController
{
    #[Route('/professeurs', name: 'professeur_list')]
    public function index(ProfesseurRepository $professeurRepository): Response
    {
        $professeurs = $professeurRepository->findAll();
        return $this->render('professeur/index.html.twig', [
            'professeurs' => $professeurs,
        ]);
    }
}
