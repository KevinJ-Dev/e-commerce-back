<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;
    private ?int $id_clients = null;
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $currentDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCurrentDate(): \DateTimeInterface
    {
        return $this->currentDate;
    }

    /**
     * @param int|null $currentDate
     */
    public function setCurrentDate(?int $currentDate): void
    {
        $this->currentDate = $currentDate;
    }

    /**
     * @return int|null
     */
    public function getIdClients(): ?int
    {
        return $this->id_clients;
    }

    /**
     * @param int|null $id_clients
     */
    public function setIdClients(?int $id_clients): void
    {
        $this->id_clients = $id_clients;
    }
}
