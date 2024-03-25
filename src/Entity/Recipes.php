<?php

namespace App\Entity;

use App\Repository\RecipesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: RecipesRepository::class)]
#[Vich\Uploadable]
class Recipes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $recipe_title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $recipe_description = null;

    #[ORM\Column(nullable: true)]
    private ?int $recipe_prep_duration = null;

    #[ORM\Column(nullable: true)]
    private ?int $recipe_rest_duration = null;

    #[ORM\Column(nullable: true)]
    private ?int $recipe_cook_duration = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $recipe_ingredient = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $recipe_step = null;

    #[ORM\Column]
    private ?bool $recipe_is_public = null;

    #[ORM\OneToMany(targetEntity: Opinions::class, mappedBy: 'opinion_recipes')]
    private Collection $recipe_opinions;

    #[ORM\ManyToMany(targetEntity: Allergens::class, inversedBy: 'allergen_recipes')]
    private Collection $recipe_allergens;

    #[ORM\ManyToMany(targetEntity: Diets::class, inversedBy: 'diet_recipes')]
    private Collection $recipe_diets;

    /* VichUploader properties - START */
    #[Vich\UploadableField(mapping: 'recipes', fileNameProperty: 'recipeImageName', size: 'recipeImageSize')]
    private ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $recipeImageName = null;

    #[ORM\Column(nullable: true)]
    private ?int $recipeImageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $recipeImageUpdatedAt = null;

    #[ORM\Column(length: 255)]
    private ?string $recipe_source = null;

    #[ORM\Column(length: 255)]
    private ?string $recipe_image_source = null;

    /* VichUploader properties - END */

    public function __construct()
    {
        $this->recipe_opinions = new ArrayCollection();
        $this->recipe_allergens = new ArrayCollection();
        $this->recipe_diets = new ArrayCollection();
    }


    public function __toString()
    {
        return $this->getRecipeTitle();
    }
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipeTitle(): ?string
    {
        return $this->recipe_title;
    }

    public function setRecipeTitle(string $recipe_title): static
    {
        $this->recipe_title = $recipe_title;

        return $this;
    }

    public function getRecipeDescription(): ?string
    {
        return $this->recipe_description;
    }

    public function setRecipeDescription(string $recipe_description): static
    {
        $this->recipe_description = $recipe_description;

        return $this;
    }

    public function getRecipePrepDuration(): ?int
    {
        return $this->recipe_prep_duration;
    }

    public function setRecipePrepDuration(?int $recipe_prep_duration): static
    {
        $this->recipe_prep_duration = $recipe_prep_duration;

        return $this;
    }

    public function getRecipeRestDuration(): ?int
    {
        return $this->recipe_rest_duration;
    }

    public function setRecipeRestDuration(?int $recipe_rest_duration): static
    {
        $this->recipe_rest_duration = $recipe_rest_duration;

        return $this;
    }

    public function getRecipeCookDuration(): ?int
    {
        return $this->recipe_cook_duration;
    }

    public function setRecipeCookDuration(?int $recipe_cook_duration): static
    {
        $this->recipe_cook_duration = $recipe_cook_duration;

        return $this;
    }

    public function getRecipeIngredient(): ?string
    {
        return $this->recipe_ingredient;
    }

    public function setRecipeIngredient(string $recipe_ingredient): static
    {
        $this->recipe_ingredient = $recipe_ingredient;

        return $this;
    }

    public function getRecipeStep(): ?string
    {
        return $this->recipe_step;
    }

    public function setRecipeStep(string $recipe_step): static
    {
        $this->recipe_step = $recipe_step;

        return $this;
    }

    public function isRecipeIsPublic(): ?bool
    {
        return $this->recipe_is_public;
    }

    public function setRecipeIsPublic(bool $recipe_is_public): static
    {
        $this->recipe_is_public = $recipe_is_public;

        return $this;
    }

    /**
     * @return Collection<int, Opinions>
     */
    public function getRecipeOpinions(): Collection
    {
        return $this->recipe_opinions;
    }

    public function addRecipeOpinion(Opinions $recipeOpinion): static
    {
        if (!$this->recipe_opinions->contains($recipeOpinion)) {
            $this->recipe_opinions->add($recipeOpinion);
            $recipeOpinion->setopinionRecipes($this);
        }

        return $this;
    }

    public function removeRecipeOpinion(Opinions $recipeOpinion): static
    {
        if ($this->recipe_opinions->removeElement($recipeOpinion)) {
            // set the owning side to null (unless already changed)
            if ($recipeOpinion->getopinionRecipes() === $this) {
                $recipeOpinion->setopinionRecipes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Allergens>
     */
    public function getRecipeAllergens(): Collection
    {
        return $this->recipe_allergens;
    }

    public function addRecipeAllergens(Allergens $recipeAllergens): static
    {
        if (!$this->recipe_allergens->contains($recipeAllergens)) {
            $this->recipe_allergens->add($recipeAllergens);
        }

        return $this;
    }

    public function removeRecipeAllergens(Allergens $recipeAllergens): static
    {
        $this->recipe_allergens->removeElement($recipeAllergens);

        return $this;
    }

    /**
     * @return Collection<int, Diets>
     */
    public function getRecipeDiets(): Collection
    {
        return $this->recipe_diets;
    }

    public function addRecipeDiets(Diets $recipeDiets): static
    {
        if (!$this->recipe_diets->contains($recipeDiets)) {
            $this->recipe_diets->add($recipeDiets);
        }

        return $this;
    }

    public function removeRecipeDiets(Diets $recipeDiets): static
    {
        $this->recipe_diets->removeElement($recipeDiets);

        return $this;
    }

    
    /* VichUploader methods - START */

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->recipeImageUpdatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setRecipeImageName(?string $recipeImageName): void
    {
        $this->recipeImageName = $recipeImageName;
    }

    public function getRecipeImageName(): ?string
    {
        return $this->recipeImageName;
    }

    public function setRecipeImageSize(?int $recipeImageSize): void
    {
        $this->recipeImageSize = $recipeImageSize;
    }

    public function getRecipeImageSize(): ?int
    {
        return $this->recipeImageSize;
    }

    /* VichUploader methods - END */

    public function getRecipeSource(): ?string
    {
        return $this->recipe_source;
    }

    public function setRecipeSource(string $recipe_source): static
    {
        $this->recipe_source = $recipe_source;

        return $this;
    }

    public function getRecipeImageSource(): ?string
    {
        return $this->recipe_image_source;
    }

    public function setRecipeImageSource(string $recipe_image_source): static
    {
        $this->recipe_image_source = $recipe_image_source;

        return $this;
    }


}
