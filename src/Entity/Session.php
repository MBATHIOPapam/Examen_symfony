<?php
#[ORM\Entity(repositoryClass: SessionRepository::class)]
class Session
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'time')]
    private $heureDebut;

    #[ORM\Column(type: 'time')]
    private $heureFin;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $salle;

    #[ORM\ManyToOne(targetEntity: Cours::class, inversedBy: 'sessions')]
    private $cours;

    // Getters et Setters
}
