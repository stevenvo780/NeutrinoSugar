<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientesRepository")
 */
class Ingredientes
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
    private $ingrediente;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $gramaje;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIngrediente(): ?string
    {
        return $this->ingrediente;
    }

    public function setIngrediente(?string $ingrediente): self
    {
        $this->ingrediente = $ingrediente;

        return $this;
    }

    public function getGramaje(): ?int
    {
        return $this->gramaje;
    }

    public function setGramaje(?int $gramaje): self
    {
        $this->gramaje = $gramaje;

        return $this;
    }
}
