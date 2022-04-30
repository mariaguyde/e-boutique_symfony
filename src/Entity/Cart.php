<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartRepository::class)
 */
class Cart
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="cart")
     */
    //private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="cart")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=CartLine::class, mappedBy="cart")
     */
    private $cartLine;

    /**
     * @ORM\OneToOne(targetEntity=Order::class, inversedBy="cart", cascade={"persist", "remove"})
     */
    private $order_num;

    public function __construct()
    {
        $this->cartLine = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|CartLine[]
     */
    public function getCartLine(): Collection
    {
        return $this->cartLine;
    }

    public function addCartLine(CartLine $cartLine): self
    {
        if (!$this->cartLine->contains($cartLine)) {
            $this->cartLine[] = $cartLine;
            $cartLine->setCart($this);
        }
        return $this;
    }

    public function removeCartLine(CartLine $cartLine): self
    {
        if ($this->cartLine->removeElement($cartLine)) {
            // set the owning side to null (unless already changed)
            if ($cartLine->getCart() === $this) {
                $cartLine->setCart(null);
            }
        }

        return $this;
    }

    public function getOrderNum(): ?Order
    {
        return $this->order_num;
    }

    public function setOrderNum(?Order $order_num): self
    {
        $this->order_num = $order_num;

        return $this;
    }
}
