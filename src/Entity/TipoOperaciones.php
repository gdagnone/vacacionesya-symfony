<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoOperacionesRepository")
 */
class TipoOperaciones
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
    private $oper_detalle;

    /**
     * @ORM\Column(type="boolean")
     */
    private $oper_activo;

    /**
     * @ORM\Column(type="integer")
     */
    private $oper_orden;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperDetalle(): ?string
    {
        return $this->oper_detalle;
    }

    public function setOperDetalle(string $oper_detalle): self
    {
        $this->oper_detalle = $oper_detalle;

        return $this;
    }

    public function getOperActivo(): ?bool
    {
        return $this->oper_activo;
    }

    public function setOperActivo(bool $oper_activo): self
    {
        $this->oper_activo = $oper_activo;

        return $this;
    }

    public function getOperOrden(): ?int
    {
        return $this->oper_orden;
    }

    public function setOperOrden(int $oper_orden): self
    {
        $this->oper_orden = $oper_orden;

        return $this;
    }
}
