<?php
#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre;

    #[ORM\ManyToOne(targetEntity: Professeur::class, inversedBy: 'cours')]
    private $professeur;

    #[ORM\ManyToMany(targetEntity: Classe::class, inversedBy: 'cours')]
    private $classes;

    #[ORM\ManyToOne(targetEntity: Module::class, inversedBy: 'cours')]
    private $module;

    #[ORM\OneToMany(mappedBy: 'cours', targetEntity: Session::class)]
    private $sessions;

    // Getters et Setters
}
