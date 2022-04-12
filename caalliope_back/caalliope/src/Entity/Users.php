<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[ApiResource]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', unique:true, nullable:true)]
    private $apiToken;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $avatar;

    #[ORM\Column(type: 'string', length: 30)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 30)]
    private $last_name;

    #[ORM\Column(type: 'string', length: 30)]
    private $pseudo;

    #[ORM\Column(type: 'string', length: 30)]
    private $password;

    #[ORM\Column(type: 'string', length: 30)]
    private $email;

    #[ORM\ManyToOne(targetEntity: Books::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $id_books;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
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

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
            'avatar' => $this->getAvatar(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'pseudo' => $this->getPseudo(),
            'password' => $this->getPassword(),
            'email' => $this->getEmail(),
            'id_books' => $this->getIdBooks(),
        ];
    }
}
