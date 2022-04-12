<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PublierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublierRepository::class)]
#[ApiResource]
class Publier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $prix;

    #[ORM\ManyToMany(targetEntity: Books::class, inversedBy: 'publiers')]
    private $id_books;

    #[ORM\ManyToMany(targetEntity: Format::class)]
    private $id_format;

    public function __construct()
    {
        $this->id_books = new ArrayCollection();
        $this->id_format = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

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

    /**
     * @return Collection<int, Format>
     */
    public function getIdFormat(): Collection
    {
        return $this->id_format;
    }

    public function addIdFormat(Format $idFormat): self
    {
        if (!$this->id_format->contains($idFormat)) {
            $this->id_format[] = $idFormat;
        }

        return $this;
    }

    public function removeIdFormat(Format $idFormat): self
    {
        $this->id_format->removeElement($idFormat);

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'prix' => $this->getPrix(),
            'id_books' => $this->getIdBooks(),
            'id_format' => $this->getIdFormat(),
        ];
    }
}
