<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DisponibilidadRepository")
 */
class Disponibilidad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="date")
     */
    private $disp_fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Avisos", inversedBy="disponibilidads")
     */
    private $disp_aviso;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    

    public function getDispFecha(): ?\DateTimeInterface
    {
        return $this->disp_fecha;
    }

    public function setDispFecha(\DateTimeInterface $disp_fecha): self
    {
        $this->disp_fecha = $disp_fecha;

        return $this;
    }

    public function getDispAviso(): ?Avisos
    {
        return $this->disp_aviso;
    }

    public function setDispAviso(?Avisos $disp_aviso): self
    {
        $this->disp_aviso = $disp_aviso;

        return $this;
    }
}
