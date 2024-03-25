<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactsRepository::class)]
class Contacts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    private ?string $contact_lastname = null;

    #[ORM\Column(length: 60)]
    private ?string $contact_firstname = null;

    #[ORM\Column(length: 20)]
    private ?string $contact_phone = null;
    
    #[ORM\Column(length: 255)]
    private ?string $contact_email = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_title = null;

    #[ORM\Column(type: Types::TEXT)]
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
