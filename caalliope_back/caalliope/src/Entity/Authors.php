<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\AuthorsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorsRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'author:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'author:item']]],
    normalizationContext: ['groups' => ['author:read']],
    denormalizationContext: ['groups' => ['author:write']],
    paginationEnabled: false,
)]
class Authors
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['author:list', 'author:item', 'author:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 30)]
    #[Groups(['author:list', 'author:item', 'author:read', 'author:write'])]
    private $first_name;

    #[ORM\Column(type: 'string', length: 30)]
    #[Groups(['author:list', 'author:item', 'author:read', 'author:write'])]
    private $last_name;

    #[ORM\Column(type: 'string', length: 30, nullable: true)]
    #[Groups(['author:list', 'author:item', 'author:read', 'author:write'])]
    private $nationalite;

    #[ORM\ManyToMany(mappedBy: 'id_author', targetEntity: Books::class, orphanRemoval: true)]
    #[Groups(['author:list', 'author:item', 'author:read', 'author:write'])]
    private $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(?string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return Collection<int, Books>
     */
    public function getBooks(): Collection
    {
        return $this->books;
    }

    public function addBook(Books $book): self
    {
        if (!$this->books->contains($book)) {
            $this->books[] = $book;
            $book->addIdAuthor($this);
        }

        return $this;
    }

    public function removeBook(Books $book): self
    {
        if ($this->books->removeElement($book)) {
            $book->removeIdAuthor($this);
        }

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'nationalite' => $this->getNationalite(),
            'books' => $this->getBooks(),
        ];
    }
}
