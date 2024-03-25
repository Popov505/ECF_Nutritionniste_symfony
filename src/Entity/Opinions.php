<?php

namespace App\Entity;

use App\Repository\OpinionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpinionsRepository::class)]
class Opinions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $opinion_message = null;

    #[ORM\Column]
    private ?int $opinion_rate = null;

    #[ORM\Column(nullable: true)]
    private ?bool $opinion_is_validated = null;

    #[ORM\ManyToOne(inversedBy: 'user_opinions')]
    private ?Users $opinion_users = null;

    #[ORM\ManyToOne(inversedBy: 'recipe_opinions')]
    private ?Recipes $opinion_recipes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpinionMessage(): ?string
    {
        return $this->opinion_message;
    }

    public function setOpinionMessage(string $opinion_message): static
    {
        $this->opinion_message = $opinion_message;

        return $this;
    }

    public function getOpinionRate(): ?int
    {
        return $this->opinion_rate;
    }

    public function setOpinionRate(int $opinion_rate): static
    {
        $this->opinion_rate = $opinion_rate;

        return $this;
    }

    public function isOpinionIsValidated(): ?bool
    {
        return $this->opinion_is_validated;
    }

    public function setOpinionIsValidated(bool $opinion_is_validated): static
    {
        $this->opinion_is_validated = $opinion_is_validated;

        return $this;
    }

    public function getopinionUsers(): ?Users
    {
        return $this->opinion_users;
    }

    public function setopinionUsers(?Users $opinion_users): static
    {
        $this->opinion_users = $opinion_users;

        return $this;
    }

    public function getopinionRecipes(): ?Recipes
    {
        return $this->opinion_recipes;
    }

    public function setopinionRecipes(?Recipes $opinion_recipes): static
    {
        $this->opinion_recipes = $opinion_recipes;

        return $this;
    }
}
