<?php

namespace App\Entity;

use App\Repository\DietsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DietsRepository::class)]
class Diets
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $diet_name = null;

    #[ORM\ManyToMany(targetEntity: Users::class, mappedBy: 'user_diet_ID')]
    private Collection $diet_users;

    #[ORM\ManyToMany(targetEntity: Recipes::class, mappedBy: 'recipe_diet_ID')]
    private Collection $diet_recipes;

    public function __construct()
    {
        $this->diet_users = new ArrayCollection();
        $this->diet_recipes = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getDietName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDietName(): ?string
    {
        return $this->diet_name;
    }

    public function setDietName(string $diet_name): static
    {
        $this->diet_name = $diet_name;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getDietUsers(): Collection
    {
        return $this->diet_users;
    }

    public function addDietUsers(Users $dietUsers): static
    {
        if (!$this->diet_users->contains($dietUsers)) {
            $this->diet_users->add($dietUsers);
            $dietUsers->addUserDiets($this);
        }

        return $this;
    }

    public function removeDietUsers(Users $dietUsers): static
    {
        if ($this->diet_users->removeElement($dietUsers)) {
            $dietUsers->removeUserDiets($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Recipes>
     */
    public function getDietRecipes(): Collection
    {
        return $this->diet_recipes;
    }

    public function addDietRecipe(Recipes $dietRecipe): static
    {
        if (!$this->diet_recipes->contains($dietRecipe)) {
            $this->diet_recipes->add($dietRecipe);
            $dietRecipe->addRecipeDietID($this);
        }

        return $this;
    }

    public function removeDietRecipe(Recipes $dietRecipe): static
    {
        if ($this->diet_recipes->removeElement($dietRecipe)) {
            $dietRecipe->removeRecipeDietID($this);
        }

        return $this;
    }
}
