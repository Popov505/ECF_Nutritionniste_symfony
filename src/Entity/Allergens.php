<?php

namespace App\Entity;

use App\Repository\AllergensRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AllergensRepository::class)]
class Allergens
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $allergen_name = null;

    #[ORM\ManyToMany(targetEntity: Users::class, mappedBy: 'user_allergen_ID')]
    private Collection $allergen_users;

    #[ORM\ManyToMany(targetEntity: Recipes::class, mappedBy: 'recipe_allergen_ID')]
    private Collection $allergen_recipes;

    public function __construct()
    {
        $this->allergen_users = new ArrayCollection();
        $this->allergen_recipes = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getAllergenName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAllergenName(): ?string
    {
        return $this->allergen_name;
    }

    public function setAllergenName(string $allergen_name): static
    {
        $this->allergen_name = $allergen_name;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getAllergenUsers(): Collection
    {
        return $this->allergen_users;
    }

    public function addAllergenUsers(Users $allergenUsers): static
    {
        if (!$this->allergen_users->contains($allergenUsers)) {
            $this->allergen_users->add($allergenUsers);
            $allergenUsers->addUserAllergens($this);
        }

        return $this;
    }

    public function removeAllergenUsers(Users $allergenUsers): static
    {
        if ($this->allergen_users->removeElement($allergenUsers)) {
            $allergenUsers->removeUserAllergens($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Recipes>
     */
    public function getAllergenRecipes(): Collection
    {
        return $this->allergen_recipes;
    }

    public function addAllergenRecipe(Recipes $allergenRecipe): static
    {
        if (!$this->allergen_recipes->contains($allergenRecipe)) {
            $this->allergen_recipes->add($allergenRecipe);
            $allergenRecipe->addRecipeAllergens($this);
        }

        return $this;
    }

    public function removeAllergenRecipe(Recipes $allergenRecipe): static
    {
        if ($this->allergen_recipes->removeElement($allergenRecipe)) {
            $allergenRecipe->removeRecipeAllergens($this);
        }

        return $this;
    }
}
