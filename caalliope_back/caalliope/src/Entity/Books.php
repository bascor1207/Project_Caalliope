<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BooksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BooksRepository::class)]
#[ApiResource]
class Books
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 13)]
    private $ibsn;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $cover;

    #[ORM\Column(type: 'string', length: 60)]
    private $title;

    #[ORM\Column(type: 'date')]
    private $parution_date;

    #[ORM\Column(type: 'integer')]
    private $nb_pages;

    #[ORM\ManyToOne(targetEntity: Genre::class, inversedBy: 'id_books')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_genre;

    #[ORM\OneToMany(mappedBy: 'id_books', targetEntity: Saga::class)]
    private $saga;

    #[ORM\ManyToMany(targetEntity: Authors::class, inversedBy: 'books')]
    private $id_author;

    #[ORM\ManyToOne(targetEntity: Status::class, inversedBy: 'books')]
    #[ORM\JoinColumn(nullable: false)]
    private $id_status;

    #[ORM\ManyToMany(targetEntity: Editer::class, mappedBy: 'id_books')]
    private $editers;

    #[ORM\ManyToMany(targetEntity: Publier::class, mappedBy: 'id_books')]
    private $publiers;

    public function __construct()
    {
        $this->saga = new ArrayCollection();
        $this->id_author = new ArrayCollection();
        $this->editers = new ArrayCollection();
        $this->publiers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIbsn(): ?string
    {
        return $this->ibsn;
    }

    public function setIbsn(string $ibsn): self
    {
        $this->ibsn = $ibsn;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getParutionDate(): ?\DateTimeInterface
    {
        return $this->parution_date;
    }

    public function setParutionDate(\DateTimeInterface $parution_date): self
    {
        $this->parution_date = $parution_date;

        return $this;
    }

    public function getNbPages(): ?int
    {
        return $this->nb_pages;
    }

    public function setNbPages(int $nb_pages): self
    {
        $this->nb_pages = $nb_pages;

        return $this;
    }

    public function getIdGenre(): ?Genre
    {
        return $this->id_genre;
    }

    public function setIdGenre(?Genre $id_genre): self
    {
        $this->id_genre = $id_genre;

        return $this;
    }

    /**
     * @return Collection<int, Saga>
     */
    public function getSaga(): Collection
    {
        return $this->saga;
    }

    public function addSaga(Saga $saga): self
    {
        if (!$this->saga->contains($saga)) {
            $this->saga[] = $saga;
            $saga->setIdBooks($this);
        }

        return $this;
    }

    public function removeSaga(Saga $saga): self
    {
        if ($this->saga->removeElement($saga)) {
            // set the owning side to null (unless already changed)
            if ($saga->getIdBooks() === $this) {
                $saga->setIdBooks(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Authors>
     */
    public function getIdAuthor(): Collection
    {
        return $this->id_author;
    }

    public function addIdAuthor(Authors $idAuthor): self
    {
        if (!$this->id_author->contains($idAuthor)) {
            $this->id_author[] = $idAuthor;
        }

        return $this;
    }

    public function removeIdAuthor(Authors $idAuthor): self
    {
        $this->id_author->removeElement($idAuthor);

        return $this;
    }

    public function getIdStatus(): ?Status
    {
        return $this->id_status;
    }

    public function setIdStatus(?Status $id_status): self
    {
        $this->id_status = $id_status;

        return $this;
    }

    /**
     * @return Collection<int, Editer>
     */
    public function getEditers(): Collection
    {
        return $this->editers;
    }

    public function addEditer(Editer $editer): self
    {
        if (!$this->editers->contains($editer)) {
            $this->editers[] = $editer;
            $editer->addIdBook($this);
        }

        return $this;
    }

    public function removeEditer(Editer $editer): self
    {
        if ($this->editers->removeElement($editer)) {
            $editer->removeIdBook($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Publier>
     */
    public function getPubliers(): Collection
    {
        return $this->publiers;
    }

    public function addPublier(Publier $publier): self
    {
        if (!$this->publiers->contains($publier)) {
            $this->publiers[] = $publier;
            $publier->addIdBook($this);
        }

        return $this;
    }

    public function removePublier(Publier $publier): self
    {
        if ($this->publiers->removeElement($publier)) {
            $publier->removeIdBook($this);
        }

        return $this;
    }
}
