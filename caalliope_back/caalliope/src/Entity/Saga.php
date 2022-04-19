<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\SagaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SagaRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'saga:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'saga:item']]],
    normalizationContext: ['groups' => ['saga:read']],
    denormalizationContext: ['groups' => ['saga:write']],
    paginationEnabled: false,
)]
class Saga
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['saga:list', 'saga:item', 'saga:read'])]
    private $id;

    #[ORM\Column(type: 'integer', length: 30)]
    #[Groups(['saga:list', 'saga:item', 'saga:read', 'saga:write'])]
    private $name;

    #[ORM\Column(type: 'integer')]
    #[Groups(['saga:list', 'saga:item', 'saga:read', 'saga:write'])]
    private $nb_tome;

    #[ORM\Column(type: 'integer')]
    #[Groups(['saga:list', 'saga:item', 'saga:read', 'saga:write'])]
    private $numero_tome;

    #[ORM\ManyToOne(targetEntity: Books::class, inversedBy: 'saga')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['saga:list', 'saga:item', 'saga:read', 'saga:write'])]
    private $id_books;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNbTome(): ?int
    {
        return $this->nb_tome;
    }

    public function setNbTome(int $nb_tome): self
    {
        $this->nb_tome = $nb_tome;

        return $this;
    }

    public function getNumeroTome(): ?int
    {
        return $this->numero_tome;
    }

    public function setNumeroTome(int $numero_tome): self
    {
        $this->numero_tome = $numero_tome;

        return $this;
    }

    public function getIdBooks(): ?Books
    {
        return $this->id_books;
    }

    public function setIdBooks(?Books $id_books): self
    {
        $this->id_books = $id_books;

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'nb_tome' => $this->getNbTome(),
            'numero_tome' => $this->getNumeroTome(),
            'id_books' => $this->getIdBooks(),
        ];
    }
}
