<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModuleRepository::class)]
class Module
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'datetime')]
    private $isPublished;

    #[ORM\Column(type: 'text', nullable: true)]
    private $lesson;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $movie;

    #[ORM\Column(type: 'integer')]
    private $idSection;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIsPublished(): ?\DateTimeInterface
    {
        return $this->isPublished;
    }

    public function setIsPublished(\DateTimeInterface $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getLesson(): ?string
    {
        return $this->lesson;
    }

    public function setLesson(?string $lesson): self
    {
        $this->lesson = $lesson;

        return $this;
    }

    public function getMovie(): ?string
    {
        return $this->movie;
    }

    public function setMovie(?string $movie): self
    {
        $this->movie = $movie;

        return $this;
    }

    public function getIdSection(): ?int
    {
        return $this->idSection;
    }

    public function setIdSection(int $idSection): self
    {
        $this->idSection = $idSection;

        return $this;
    }
}
