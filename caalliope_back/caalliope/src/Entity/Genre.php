<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'genre:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'genre:item']]],
    normalizationContext: ['groups' => ['genre:read']],
    denormalizationContext: ['groups' => ['genre:write']],
    paginationEnabled: false,
)]
class Genre
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['genre:list', 'genre:item', 'genre:read'])]
    private $id;

    #[ORM\Column(type: 'string')]
    #[Groups(['genre:list', 'genre:item', 'genre:read', 'genre:write'])]
    private $genre;

    #[ORM\OneToMany(mappedBy: 'id_genre', targetEntity: Books::class)]
    #[Groups(['genre:list', 'genre:item', 'genre:read', 'genre:write'])]
    private $id_books;

    public function __construct()
    {
        $this->id_books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return Collection<int, Books>
     */
    public function getIdBooks(): Collection
    {
        return $this->id_books;
    }

    public function addIdBook(Books $idBook): self
    {
        if (!$this->id_books->contains($idBook)) {
            $this->id_books[] = $idBook;
            $idBook->setIdGenre($this);
        }

        return $this;
    }

    public function removeIdBook(Books $idBook): self
    {
        if ($this->id_books->removeElement($idBook)) {
            // set the owning side to null (unless already changed)
            if ($idBook->getIdGenre() === $this) {
                $idBook->setIdGenre(null);
            }
        }

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'genre' => $this->getGenre(),
            'id_books' => $this->getIdBooks(),
        ];
    }
}
