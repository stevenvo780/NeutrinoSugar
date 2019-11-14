<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $tamaño;

    /**
     * @ORM\Column(type="json")
     */
    private $ingredientes = [];

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $precio;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTamaño(): ?int
    {
        return $this->tamaño;
    }

    public function setTamaño(int $tamaño): self
    {
        $this->tamaño = $tamaño;

        return $this;
    }

    public function getIngredientes(): ?array
    {
        return $this->ingredientes;
    }

    public function setIngredientes(array $ingredientes): self
    {
        $this->ingredientes = $ingredientes;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(?int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
