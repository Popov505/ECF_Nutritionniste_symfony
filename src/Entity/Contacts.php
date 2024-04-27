<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContactsRepository::class)]
#[UniqueEntity(fields: 'contact_email', message: "Vous avez déjà laissé un message. Merci d'attendre que votre demande soit traitée.")]
class Contacts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    #[Assert\Length(min: 2, max: 60)]
    #[Assert\Regex("/^[-'0-9a-zA-ZÀ-ÿ\s]+$/")]
    private ?string $contact_firstname = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max: 60)]
    #[Assert\Regex("/^[-'0-9a-zA-ZÀ-ÿ\s]+$/")]
    private ?string $contact_lastname = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max: 30)]
    #[Assert\Regex('/^[-+0-9\s]+$/')]
    private ?string $contact_phone = null;
    
    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max: 255)]
    #[Assert\Regex('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/')]
    private ?string $contact_email = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max: 60)]
    #[Assert\Regex("/^[-'0-9a-zA-ZÀ-ÿ\s]+$/")]
    private ?string $contact_title = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 2, max: 255)]
    #[Assert\Regex("/^[-',;:.?!-'0-9a-zA-ZÀ-ÿ\s]+$/")]
    private ?string $contact_message = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContactLastname(): ?string
    {
        return $this->contact_lastname;
    }

    public function setContactLastname(string $contact_lastname): static
    {
        $this->contact_lastname = $contact_lastname;

        return $this;
    }

    public function getContactFirstname(): ?string
    {
        return $this->contact_firstname;
    }

    public function setContactFirstname(string $contact_firstname): static
    {
        $this->contact_firstname = $contact_firstname;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contact_phone;
    }

    public function setContactPhone(string $contact_phone): static
    {
        $this->contact_phone = $contact_phone;

        return $this;
    }

    
    public function getContactEmail(): ?string
    {
        return $this->contact_email;
    }

    public function setContactEmail(string $contact_email): static
    {
        $this->contact_email = $contact_email;

        return $this;
    }

    public function getContactTitle(): ?string
    {
        return $this->contact_title;
    }

    public function setContactTitle(string $contact_title): static
    {
        $this->contact_title = $contact_title;

        return $this;
    }

    public function getContactMessage(): ?string
    {
        return $this->contact_message;
    }

    public function setContactMessage(string $contact_message): static
    {
        $this->contact_message = $contact_message;

        return $this;
    }
}
