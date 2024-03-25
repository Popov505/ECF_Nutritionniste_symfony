<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 60)]
    private ?string $user_lastname = null;

    #[ORM\Column(length: 60)]
    private ?string $user_firstname = null;

    #[ORM\Column(length: 20)]
    private ?string $user_phone = null;

    #[ORM\ManyToMany(targetEntity: Allergens::class, inversedBy: 'allergen_user_FK')]
    private Collection $user_allergens;

    #[ORM\ManyToMany(targetEntity: Diets::class, inversedBy: 'diet_user_ID')]
    private Collection $user_diets;

    #[ORM\OneToMany(targetEntity: Opinions::class, mappedBy: 'opinion_users')]
    private Collection $user_opinions;

    public function __construct()
    {
        $this->user_allergens = new ArrayCollection();
        $this->user_diets = new ArrayCollection();
        $this->user_opinions = new ArrayCollection();
    }

    
    public function __toString()
    {
        return $this->getUserFirstname().' '.$this->getUserLastname();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUserLastname(): ?string
    {
        return $this->user_lastname;
    }

    public function setUserLastname(string $user_lastname): static
    {
        $this->user_lastname = $user_lastname;

        return $this;
    }

    public function getUserFirstname(): ?string
    {
        return $this->user_firstname;
    }

    public function setUserFirstname(string $user_firstname): static
    {
        $this->user_firstname = $user_firstname;

        return $this;
    }

    public function getUserPhone(): ?string
    {
        return $this->user_phone;
    }

    public function setUserPhone(string $user_phone): static
    {
        $this->user_phone = $user_phone;

        return $this;
    }

    /**
     * @return Collection<int, Allergens>
     */
    public function getUserAllergens(): Collection
    {
        return $this->user_allergens;
    }

    public function addUserAllergens(Allergens $userAllergens): static
    {
        if (!$this->user_allergens->contains($userAllergens)) {
            $this->user_allergens->add($userAllergens);
        }

        return $this;
    }

    public function removeUserAllergens(Allergens $userAllergens): static
    {
        $this->user_allergens->removeElement($userAllergens);

        return $this;
    }

    /**
     * @return Collection<int, Diets>
     */
    public function getUserDiets(): Collection
    {
        return $this->user_diets;
    }

    public function addUserDiets(Diets $userDiets): static
    {
        if (!$this->user_diets->contains($userDiets)) {
            $this->user_diets->add($userDiets);
        }

        return $this;
    }

    public function removeUserDiets(Diets $userDiets): static
    {
        $this->user_diets->removeElement($userDiets);

        return $this;
    }

    /**
     * @return Collection<int, Opinions>
     */
    public function getUserOpinions(): Collection
    {
        return $this->user_opinions;
    }

    public function addUserOpinion(Opinions $userOpinion): static
    {
        if (!$this->user_opinions->contains($userOpinion)) {
            $this->user_opinions->add($userOpinion);
            $userOpinion->setOpinionUsers($this);
        }

        return $this;
    }

    public function removeUserOpinion(Opinions $userOpinion): static
    {
        if ($this->user_opinions->removeElement($userOpinion)) {
            // set the owning side to null (unless already changed)
            if ($userOpinion->getOpinionUsers() === $this) {
                $userOpinion->setOpinionUsers(null);
            }
        }

        return $this;
    }
}
