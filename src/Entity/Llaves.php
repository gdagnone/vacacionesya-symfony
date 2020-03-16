<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LlavesRepository")
 */
class Llaves
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="integer")
     */
    private $llave_fecha_solicitud;

    /**
     * @ORM\Column(type="datetime")
     */
    private $llave_fecha_entrega;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $llave_entregada;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $llave_fecha_entregada;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $llave_id_personal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $llaves_comentarios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $llave_calificacion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $llave_user_calif;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $llave_coment_calific;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $llave_costo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservas", inversedBy="llaves")
     */
    private $llaves_reserva;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getLlaveFechaSolicitud(): ?int
    {
        return $this->llave_fecha_solicitud;
    }

    public function setLlaveFechaSolicitud(int $llave_fecha_solicitud): self
    {
        $this->llave_fecha_solicitud = $llave_fecha_solicitud;

        return $this;
    }

    public function getLlaveFechaEntrega(): ?\DateTimeInterface
    {
        return $this->llave_fecha_entrega;
    }

    public function setLlaveFechaEntrega(\DateTimeInterface $llave_fecha_entrega): self
    {
        $this->llave_fecha_entrega = $llave_fecha_entrega;

        return $this;
    }

    public function getLlaveEntregada(): ?bool
    {
        return $this->llave_entregada;
    }

    public function setLlaveEntregada(?bool $llave_entregada): self
    {
        $this->llave_entregada = $llave_entregada;

        return $this;
    }

    public function getLlaveFechaEntregada(): ?\DateTimeInterface
    {
        return $this->llave_fecha_entregada;
    }

    public function setLlaveFechaEntregada(?\DateTimeInterface $llave_fecha_entregada): self
    {
        $this->llave_fecha_entregada = $llave_fecha_entregada;

        return $this;
    }

    public function getLlaveIdPersonal(): ?int
    {
        return $this->llave_id_personal;
    }

    public function setLlaveIdPersonal(?int $llave_id_personal): self
    {
        $this->llave_id_personal = $llave_id_personal;

        return $this;
    }

    public function getLlavesComentarios(): ?string
    {
        return $this->llaves_comentarios;
    }

    public function setLlavesComentarios(?string $llaves_comentarios): self
    {
        $this->llaves_comentarios = $llaves_comentarios;

        return $this;
    }

    public function getLlaveCalificacion(): ?int
    {
        return $this->llave_calificacion;
    }

    public function setLlaveCalificacion(?int $llave_calificacion): self
    {
        $this->llave_calificacion = $llave_calificacion;

        return $this;
    }

    public function getLlaveUserCalif(): ?int
    {
        return $this->llave_user_calif;
    }

    public function setLlaveUserCalif(?int $llave_user_calif): self
    {
        $this->llave_user_calif = $llave_user_calif;

        return $this;
    }

    public function getLlaveComentCalific(): ?string
    {
        return $this->llave_coment_calific;
    }

    public function setLlaveComentCalific(?string $llave_coment_calific): self
    {
        $this->llave_coment_calific = $llave_coment_calific;

        return $this;
    }

    public function getLlaveCosto(): ?float
    {
        return $this->llave_costo;
    }

    public function setLlaveCosto(?float $llave_costo): self
    {
        $this->llave_costo = $llave_costo;

        return $this;
    }

    public function getLlavesReserva(): ?Reservas
    {
        return $this->llaves_reserva;
    }

    public function setLlavesReserva(?Reservas $llaves_reserva): self
    {
        $this->llaves_reserva = $llaves_reserva;

        return $this;
    }
}
