<?php

namespace App\Entity;

use App\Repository\RemboursementDetailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RemboursementDetailRepository::class)
 */
class RemboursementDetail
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
    private $beneficiaireSoin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complementCgam;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateActe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisReel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idRemboursement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $montantRemboursement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remboursementSecuriteSociale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resteCharge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tauxSecuriteSociale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeActe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refReglement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $autre_mutuelle;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $decompteDispo;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isBloque;

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

    public function getBeneficiaireSoin(): ?string
    {
        return $this->beneficiaireSoin;
    }

    public function setBeneficiaireSoin(?string $beneficiaireSoin): self
    {
        $this->beneficiaireSoin = $beneficiaireSoin;

        return $this;
    }

    public function getComplementCgam(): ?string
    {
        return $this->complementCgam;
    }

    public function setComplementCgam(?string $complementCgam): self
    {
        $this->complementCgam = $complementCgam;

        return $this;
    }

    public function getDateActe(): ?\DateTimeInterface
    {
        return $this->dateActe;
    }

    public function setDateActe(?\DateTimeInterface $dateActe): self
    {
        $this->dateActe = $dateActe;

        return $this;
    }

    public function getFraisReel(): ?string
    {
        return $this->fraisReel;
    }

    public function setFraisReel(?string $fraisReel): self
    {
        $this->fraisReel = $fraisReel;

        return $this;
    }

    public function getIdRemboursement(): ?string
    {
        return $this->idRemboursement;
    }

    public function setIdRemboursement(?string $idRemboursement): self
    {
        $this->idRemboursement = $idRemboursement;

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

    public function getRemboursementSecuriteSociale(): ?string
    {
        return $this->remboursementSecuriteSociale;
    }

    public function setRemboursementSecuriteSociale(?string $remboursementSecuriteSociale): self
    {
        $this->remboursementSecuriteSociale = $remboursementSecuriteSociale;

        return $this;
    }

    public function getResteCharge(): ?string
    {
        return $this->resteCharge;
    }

    public function setResteCharge(?string $resteCharge): self
    {
        $this->resteCharge = $resteCharge;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getTauxSecuriteSociale(): ?string
    {
        return $this->tauxSecuriteSociale;
    }

    public function setTauxSecuriteSociale(?string $tauxSecuriteSociale): self
    {
        $this->tauxSecuriteSociale = $tauxSecuriteSociale;

        return $this;
    }

    public function getTypeActe(): ?string
    {
        return $this->typeActe;
    }

    public function setTypeActe(?string $typeActe): self
    {
        $this->typeActe = $typeActe;

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

    public function getAutreMutuelle(): ?string
    {
        return $this->autre_mutuelle;
    }

    public function setAutreMutuelle(?string $autre_mutuelle): self
    {
        $this->autre_mutuelle = $autre_mutuelle;

        return $this;
    }

    public function getDecompteDispo(): ?bool
    {
        return $this->decompteDispo;
    }

    public function setDecompteDispo(?bool $decompteDispo): self
    {
        $this->decompteDispo = $decompteDispo;

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
}
