<?php

namespace App\Entity;

use App\Repository\AssocieteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssocieteRepository::class)]
class Associete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ManyToMany = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManyToMany(): ?string
    {
        return $this->ManyToMany;
    }

    public function setManyToMany(string $ManyToMany): static
    {
        $this->ManyToMany = $ManyToMany;

        return $this;
    }
}
