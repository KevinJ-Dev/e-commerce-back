<?php

namespace App\Entity;

use App\Repository\CustomersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomersRepository::class)]
class Customers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_cart = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $currentDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCart(): ?int
    {
        return $this->id_cart;
    }

    public function setIdCart(int $id__cart): self
    {
        $this->id_cart = $id__cart;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->currentDate;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->currentDate = $date;

        return $this;
    }
}
