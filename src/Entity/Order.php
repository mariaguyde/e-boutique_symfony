<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderNumber;

    /**
     * @ORM\Column(type="boolean")
     */
    private $valid;

    /**
     * @ORM\Column(type="date")
     */
    private $dateTime;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orders")
     */
    //private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="orders")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=CommandLine::class, mappedBy="orders")
     */
    private $commandLine;

    /**
     * @ORM\OneToOne(targetEntity=Cart::class, mappedBy="order_num", cascade={"persist", "remove"})
     */
    private $cart;

    public function __construct()
    {
        $this->commandLine = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(int $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    public function getValid(): ?bool
    {
        return $this->valid;
    }

    public function setValid(bool $valid): self
    {
        $this->valid = $valid;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /*public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }*/

    public function getUsers(): ?Users
    {
        return $this->users;
    }

    public function setUsers(?Users $users): self
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return Collection|CommandLine[]
     */
    public function getCommandLine(): Collection
    {
        return $this->commandLine;
    }

    public function addCommandLine(CommandLine $commandLine): self
    {
        if (!$this->commandLine->contains($commandLine)) {
            $this->commandLine[] = $commandLine;
            $commandLine->setOrders($this);
        }

        return $this;
    }

    public function removeCommandLine(CommandLine $commandLine): self
    {
        if ($this->commandLine->removeElement($commandLine)) {
            // set the owning side to null (unless already changed)
            if ($commandLine->getOrders() === $this) {
                $commandLine->setOrders(null);
            }
        }

        return $this;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        // unset the owning side of the relation if necessary
        if ($cart === null && $this->cart !== null) {
            $this->cart->setOrderNum(null);
        }

        // set the owning side of the relation if necessary
        if ($cart !== null && $cart->getOrderNum() !== $this) {
            $cart->setOrderNum($this);
        }

        $this->cart = $cart;

        return $this;
    }
}
