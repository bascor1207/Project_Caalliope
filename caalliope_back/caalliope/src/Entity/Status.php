<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\StatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatusRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'status:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'status:item']]],
    normalizationContext: ['groups' => ['status:read']],
    denormalizationContext: ['groups' => ['status:write']],
    paginationEnabled: false,
)]
class Status
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['status:list', 'status:item', 'status:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 20)]
    #[Groups(['status:list', 'status:item', 'status:read', 'status:write'])]
    private $book_status;

    #[ORM\OneToMany(mappedBy: 'id_status', targetEntity: Books::class)]
    #[Groups(['status:list', 'status:item', 'status:read', 'status:write'])]
    private $books;

    public function __construct()
    {
        $this->books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookStatus(): ?string
    {
        return $this->book_status;
    }

    public function setBookStatus(string $book_status): self
    {
        $this->book_status = $book_status;

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
            $book->setIdStatus($this);
        }

        return $this;
    }

    public function removeBook(Books $book): self
    {
        if ($this->books->removeElement($book)) {
            // set the owning side to null (unless already changed)
            if ($book->getIdStatus() === $this) {
                $book->setIdStatus(null);
            }
        }

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'book_status' => $this->getBookStatus(),
            'books' => $this->getBooks(),
        ];
    }
}
