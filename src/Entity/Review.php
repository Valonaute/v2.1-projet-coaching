<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
class Review
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $iduser = null;

    #[ORM\OneToOne(inversedBy: 'review', cascade: ['persist', 'remove'])]
    private ?Order $idorder = null;

    #[ORM\Column(length: 200)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $rating = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(nullable: true)]
    private ?int $user = null;

    #[ORM\Column(nullable: true)]
    private ?int $orderreviewed = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pseudo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdorder(): ?Order
    {
        return $this->idorder;
    }

    public function setIdorder(?Order $idorder): static
    {
        $this->idorder = $idorder;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(?int $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getOrderreviewed(): ?int
    {
        return $this->orderreviewed;
    }

    public function setOrderreviewed(?int $orderreviewed): static
    {
        $this->orderreviewed = $orderreviewed;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
