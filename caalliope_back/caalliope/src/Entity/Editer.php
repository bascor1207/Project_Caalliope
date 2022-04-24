<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\EditerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EditerRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'editer:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'editer:item']]],
    normalizationContext: ['groups' => ['editer:read']],
    denormalizationContext: ['groups' => ['editer:write']],
    paginationEnabled: false,
)]
class Editer
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['editer:list', 'editer:item', 'editer:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 30)]
    #[Groups(['editer:list', 'editer:item', 'editer:read', 'editer:write'])]
    private $ME;

    #[ORM\ManyToMany(targetEntity: Books::class, mappedBy: 'editers')]
    #[Groups(['editer:list', 'editer:item', 'editer:read', 'editer:write'])]
    private $id_books;

    public function __construct()
    {
        $this->id_books = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getME(): ?string
    {
        return $this->ME;
    }

    public function setME(string $ME): self
    {
        $this->ME = $ME;

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
        }

        return $this;
    }

    public function removeIdBook(Books $idBook): self
    {
        $this->id_books->removeElement($idBook);

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'ME' => $this->getME(),
            'id_books' => $this->getIdBooks(),
        ];
    }
}
