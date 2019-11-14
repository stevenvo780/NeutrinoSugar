<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductosRepository")
 */
class Productos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $Tamaño;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ingredientes;

    /**
     * @ORM\Column(type="integer")
     */
    private $Precio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getTamaño(): ?int
    {
        return $this->Tamaño;
    }

    public function setTamaño(int $Tamaño): self
    {
        $this->Tamaño = $Tamaño;

        return $this;
    }

    public function getIngredientes(): ?string
    {
        return $this->Ingredientes;
    }

    public function setIngredientes(string $Ingredientes): self
    {
        $this->Ingredientes = $Ingredientes;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->Precio;
    }

    public function setPrecio(int $Precio): self
    {
        $this->Precio = $Precio;

        return $this;
    }
}
