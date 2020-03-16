<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LimpiezasRepository")
 */
class Limpiezas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="datetime")
     */
    private $limp_fecha_solicitud;

    /**
     * @ORM\Column(type="datetime")
     */
    private $limp_fecha_realizar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $limp_fecha_realizada;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $limp_id_personal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $limp_comentarios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $limp_calificacion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $limp_user_calif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $limp_coment_calific;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $limp_costo;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reservas", inversedBy="limpiezas")
     */
    private $limp_reserva;

    public function getId(): ?int
    {
        return $this->id;
    }

    

    public function getLimpFechaSolicitud(): ?\DateTimeInterface
    {
        return $this->limp_fecha_solicitud;
    }

    public function setLimpFechaSolicitud(\DateTimeInterface $limp_fecha_solicitud): self
    {
        $this->limp_fecha_solicitud = $limp_fecha_solicitud;

        return $this;
    }

    public function getLimpFechaRealizar(): ?\DateTimeInterface
    {
        return $this->limp_fecha_realizar;
    }

    public function setLimpFechaRealizar(\DateTimeInterface $limp_fecha_realizar): self
    {
        $this->limp_fecha_realizar = $limp_fecha_realizar;

        return $this;
    }

    public function getLimpFechaRealizada(): ?\DateTimeInterface
    {
        return $this->limp_fecha_realizada;
    }

    public function setLimpFechaRealizada(?\DateTimeInterface $limp_fecha_realizada): self
    {
        $this->limp_fecha_realizada = $limp_fecha_realizada;

        return $this;
    }

    public function getLimpIdPersonal(): ?int
    {
        return $this->limp_id_personal;
    }

    public function setLimpIdPersonal(?int $limp_id_personal): self
    {
        $this->limp_id_personal = $limp_id_personal;

        return $this;
    }

    public function getLimpComentarios(): ?string
    {
        return $this->limp_comentarios;
    }

    public function setLimpComentarios(?string $limp_comentarios): self
    {
        $this->limp_comentarios = $limp_comentarios;

        return $this;
    }

    public function getLimpCalificacion(): ?int
    {
        return $this->limp_calificacion;
    }

    public function setLimpCalificacion(?int $limp_calificacion): self
    {
        $this->limp_calificacion = $limp_calificacion;

        return $this;
    }

    public function getLimpUserCalif(): ?int
    {
        return $this->limp_user_calif;
    }

    public function setLimpUserCalif(?int $limp_user_calif): self
    {
        $this->limp_user_calif = $limp_user_calif;

        return $this;
    }

    public function getLimpComentCalific(): ?string
    {
        return $this->limp_coment_calific;
    }

    public function setLimpComentCalific(?string $limp_coment_calific): self
    {
        $this->limp_coment_calific = $limp_coment_calific;

        return $this;
    }

    public function getLimpCosto(): ?float
    {
        return $this->limp_costo;
    }

    public function setLimpCosto(?float $limp_costo): self
    {
        $this->limp_costo = $limp_costo;

        return $this;
    }

    public function getLimpReserva(): ?Reservas
    {
        return $this->limp_reserva;
    }

    public function setLimpReserva(?Reservas $limp_reserva): self
    {
        $this->limp_reserva = $limp_reserva;

        return $this;
    }
}
