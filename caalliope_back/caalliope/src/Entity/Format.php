<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\FormatRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Length;

#[ORM\Entity(repositoryClass: FormatRepository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'format:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'format:item']]],
    normalizationContext: ['groups' => ['format:read']],
    denormalizationContext: ['groups' => ['format:write']],
    paginationEnabled: false,
)]
class Format
{
    #[ORM\Id]
    #[ORM\GeneratedValue()]
    #[ORM\Column(type: 'integer')]
    #[Groups(['format:list', 'format:item', 'format:read'])]
    private $id;

    #[ORM\Column(type: 'string', length: 25)]
    #[Groups(['format:list', 'format:item', 'format:read', 'format:write'])]
    private $format;

    #[ORM\Column(type: 'string', length: 25)]
    #[Groups(['format:list', 'format:item', 'format:read', 'format:write'])]
    private $language;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'format' => $this->getFormat(),
            'language' => $this->getLanguage(),
        ];
    }
}
