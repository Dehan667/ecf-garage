<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $numticket;

    #[ORM\Column(type: 'string', length: 255,)]
    private $description;

    #[ORM\Column(type: 'string', length: 10,)]
    private $status;

    #[ORM\Column(type: 'date')]
    private $datedemande;

    #[ORM\Column(type: 'date')]
    private $dateexpiration;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateattribution;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'tickets')]
    private $user;

    public function getId(): ?int
    {
        return $this->id; 
    }

    public function getNumTicket(): ?int
    {
        return $this->numticket;
    }

    public function setNumTicket(?int $numticket): self
    {
        $this->numticket = $numticket;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDateDemande(?\DateTimeInterface $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateexpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateexpiration): self
    {
        $this->dateexpiration = $dateexpiration;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
