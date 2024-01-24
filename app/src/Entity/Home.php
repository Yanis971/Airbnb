<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HomeRepository::class)]
class Home
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $Titre = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 180)]
    private ?string $TypeLogement = null;

    #[ORM\Column(length: 255)]
    private ?string $Chambre = null;

    #[ORM\Column(length: 255)]
    private ?string $PricebyNight = null;

    #[ORM\Column(length: 255)]
    private ?string $PriceToto = null;

    #[ORM\Column(length: 255)]
    private ?string $IdUser = null;

    #[ORM\Column(length: 255)]
    private ?string $OthersCaracteristics = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTypeLogement(): ?string
    {
        return $this->TypeLogement;
    }

    public function setTypeLogement(string $TypeLogement): static
    {
        $this->TypeLogement = $TypeLogement;

        return $this;
    }

    public function getChambre(): ?string
    {
        return $this->Chambre;
    }

    public function setChambre(string $Chambre): static
    {
        $this->Chambre = $Chambre;

        return $this;
    }

    public function getPricebyNight(): ?string
    {
        return $this->PricebyNight;
    }

    public function setPricebyNight(string $PricebyNight): static
    {
        $this->PricebyNight = $PricebyNight;

        return $this;
    }

    public function getPriceToto(): ?string
    {
        return $this->PriceToto;
    }

    public function setPriceToto(string $PriceToto): static
    {
        $this->PriceToto = $PriceToto;

        return $this;
    }

    public function getIdUser(): ?string
    {
        return $this->IdUser;
    }

    public function setIdUser(string $IdUser): static
    {
        $this->IdUser = $IdUser;

        return $this;
    }

    public function getOthersCaracteristics(): ?string
    {
        return $this->OthersCaracteristics;
    }

    public function setOthersCaracteristics(string $OthersCaracteristics): static
    {
        $this->OthersCaracteristics = $OthersCaracteristics;

        return $this;
    }
}
