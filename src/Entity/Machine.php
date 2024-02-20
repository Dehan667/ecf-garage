<?php

namespace App\Entity;

use App\Repository\MachineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MachineRepository::class)]
class Machine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $label;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $serial;
    
    #[ORM\Column(type: 'json', length: 255, nullable: true)]
    private $type;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $kilometrage;

    #[ORM\Column(type: 'integer')]
    private $prix;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateattribution;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(string $serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    public function getType(): ?array
    {
        return $this->type;
    }

    public function setType(array $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateAttribution(): ?\DateTimeInterface
    {
        return $this->dateattribution;
    }

    public function setDateAttribution(?\DateTimeInterface $dateattribution): self
    {
        $this->dateattribution = $dateattribution;

        return $this;
    }
}