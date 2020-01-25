<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PedidoRepository")
 */
class Pedido
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="pedidos")
     */
    private $remitente;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Producto", mappedBy="pedido")
     */
    private $Producto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mensaje;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estado;

    public function __construct()
    {
        $this->Producto = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemitente(): ?User
    {
        return $this->remitente;
    }

    public function setRemitente(?User $remitente): self
    {
        $this->remitente = $remitente;

        return $this;
    }

    /**
     * @return Collection|Producto[]
     */
    public function getProducto(): Collection
    {
        return $this->Producto;
    }

    public function addProducto(Producto $producto): self
    {
        if (!$this->Producto->contains($producto)) {
            $this->Producto[] = $producto;
            $producto->setPedido($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self
    {
        if ($this->Producto->contains($producto)) {
            $this->Producto->removeElement($producto);
            // set the owning side to null (unless already changed)
            if ($producto->getPedido() === $this) {
                $producto->setPedido(null);
            }
        }

        return $this;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(string $mensaje): self
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}
