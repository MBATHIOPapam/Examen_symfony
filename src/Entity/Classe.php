<?php
#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\ManyToOne(targetEntity: Niveau::class, inversedBy: 'classes')]
    private $niveau;

    #[ORM\OneToMany(mappedBy: 'classe', targetEntity: Etudiant::class)]
    private $etudiants;

    #[ORM\ManyToMany(targetEntity: Cours::class, mappedBy: 'classes')]
    private $cours;

    // Getters et Setters
}
