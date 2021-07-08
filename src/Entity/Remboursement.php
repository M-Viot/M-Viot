<?php

namespace App\Entity;

use App\Repository\RemboursementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RemboursementRepository::class)
 */
class Remboursement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $beneficiaireReglement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $montantRemboursement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refReglement;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isBloque;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateReglement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeneficiaireReglement(): ?string
    {
        return $this->beneficiaireReglement;
    }

    public function setBeneficiaireReglement(?string $beneficiaireReglement): self
    {
        $this->beneficiaireReglement = $beneficiaireReglement;

        return $this;
    }

    public function getMontantRemboursement(): ?string
    {
        return $this->montantRemboursement;
    }

    public function setMontantRemboursement(?string $montantRemboursement): self
    {
        $this->montantRemboursement = $montantRemboursement;

        return $this;
    }

    public function getRefReglement(): ?string
    {
        return $this->refReglement;
    }

    public function setRefReglement(?string $refReglement): self
    {
        $this->refReglement = $refReglement;

        return $this;
    }

    public function getIsBloque(): ?bool
    {
        return $this->isBloque;
    }

    public function setIsBloque(?bool $isBloque): self
    {
        $this->isBloque = $isBloque;

        return $this;
    }

    public function getDateReglement(): ?\DateTimeInterface
    {
        return $this->dateReglement;
    }

    public function setDateReglement(?\DateTimeInterface $dateReglement): self
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }
}
