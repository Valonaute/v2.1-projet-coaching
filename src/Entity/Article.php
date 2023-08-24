<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shortdescription = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datearticle = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?User $id_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subject = null;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'articles')]
    private Collection $categoryArticle;

    #[ORM\ManyToOne(inversedBy: 'article')]
    private ?category $category = null;

    public function __construct()
    {
        $this->categoryArticle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getShortdescription(): ?string
    {
        return $this->shortdescription;
    }

    public function setShortdescription(?string $shortdescription): static
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDatearticle(): ?\DateTimeInterface
    {
        return $this->datearticle;
    }

    public function setDatearticle(?\DateTimeInterface $datearticle): static
    {
        $this->datearticle = $datearticle;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategoryArticle(): Collection
    {
        return $this->categoryArticle;
    }

    public function addCategoryArticle(Category $categoryArticle): static
    {
        if (!$this->categoryArticle->contains($categoryArticle)) {
            $this->categoryArticle->add($categoryArticle);
        }

        return $this;
    }

    public function removeCategoryArticle(Category $categoryArticle): static
    {
        $this->categoryArticle->removeElement($categoryArticle);

        return $this;
    }

    public function getCategory(): ?category
    {
        return $this->category;
    }

    public function setCategory(?category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
