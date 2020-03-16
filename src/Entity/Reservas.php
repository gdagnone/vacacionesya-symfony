<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservasRepository")
 */
class Reservas
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
    private $reserv_id_aviso;

    
    /**
     * @ORM\Column(type="date")
     */
    private $reserv_fecha_desde;

    /**
     * @ORM\Column(type="date")
     */
    private $reserv_fecha_hasta;

    /**
     * @ORM\Column(type="float")
     */
    private $reserv_monto;

    /**
     * @ORM\Column(type="integer")
     */
    private $reserv_id_moneda;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reserv_fecha_reserva;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reserv_confirmada;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $reserv_fecha_confirma;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reserv_comentario;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reserv_anulada;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $reserv_fecha_anula;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reserv_motivo_anula;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reserv_user_anula;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $reserv_id_pago;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Avisos", inversedBy="reservas")
     */
    private $reserv_aviso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="reservas")
     */
    private $reserv_user_origen;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Limpiezas", mappedBy="limp_reserva")
     */
    private $limpiezas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Llaves", mappedBy="llaves_reserva")
     */
    private $llaves;

    public function __construct()
    {
        $this->limpiezas = new ArrayCollection();
        $this->llaves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReservIdAviso(): ?int
    {
        return $this->reserv_id_aviso;
    }

    public function setReservIdAviso(int $reserv_id_aviso): self
    {
        $this->reserv_id_aviso = $reserv_id_aviso;

        return $this;
    }

    public function getReservFechaDesde(): ?\DateTimeInterface
    {
        return $this->reserv_fecha_desde;
    }

    public function setReservFechaDesde(\DateTimeInterface $reserv_fecha_desde): self
    {
        $this->reserv_fecha_desde = $reserv_fecha_desde;

        return $this;
    }

    public function getReservFechaHasta(): ?\DateTimeInterface
    {
        return $this->reserv_fecha_hasta;
    }

    public function setReservFechaHasta(\DateTimeInterface $reserv_fecha_hasta): self
    {
        $this->reserv_fecha_hasta = $reserv_fecha_hasta;

        return $this;
    }

    public function getReservMonto(): ?float
    {
        return $this->reserv_monto;
    }

    public function setReservMonto(float $reserv_monto): self
    {
        $this->reserv_monto = $reserv_monto;

        return $this;
    }

    public function getReservIdMoneda(): ?int
    {
        return $this->reserv_id_moneda;
    }

    public function setReservIdMoneda(int $reserv_id_moneda): self
    {
        $this->reserv_id_moneda = $reserv_id_moneda;

        return $this;
    }

    public function getReservFechaReserva(): ?\DateTimeInterface
    {
        return $this->reserv_fecha_reserva;
    }

    public function setReservFechaReserva(\DateTimeInterface $reserv_fecha_reserva): self
    {
        $this->reserv_fecha_reserva = $reserv_fecha_reserva;

        return $this;
    }

    public function getReservConfirmada(): ?bool
    {
        return $this->reserv_confirmada;
    }

    public function setReservConfirmada(bool $reserv_confirmada): self
    {
        $this->reserv_confirmada = $reserv_confirmada;

        return $this;
    }

    public function getReservFechaConfirma(): ?\DateTimeInterface
    {
        return $this->reserv_fecha_confirma;
    }

    public function setReservFechaConfirma(?\DateTimeInterface $reserv_fecha_confirma): self
    {
        $this->reserv_fecha_confirma = $reserv_fecha_confirma;

        return $this;
    }

    public function getReservComentario(): ?string
    {
        return $this->reserv_comentario;
    }

    public function setReservComentario(?string $reserv_comentario): self
    {
        $this->reserv_comentario = $reserv_comentario;

        return $this;
    }

    public function getReservAnulada(): ?bool
    {
        return $this->reserv_anulada;
    }

    public function setReservAnulada(bool $reserv_anulada): self
    {
        $this->reserv_anulada = $reserv_anulada;

        return $this;
    }

    public function getReservFechaAnula(): ?\DateTimeInterface
    {
        return $this->reserv_fecha_anula;
    }

    public function setReservFechaAnula(?\DateTimeInterface $reserv_fecha_anula): self
    {
        $this->reserv_fecha_anula = $reserv_fecha_anula;

        return $this;
    }

    public function getReservMotivoAnula(): ?string
    {
        return $this->reserv_motivo_anula;
    }

    public function setReservMotivoAnula(?string $reserv_motivo_anula): self
    {
        $this->reserv_motivo_anula = $reserv_motivo_anula;

        return $this;
    }

    public function getReservUserAnula(): ?int
    {
        return $this->reserv_user_anula;
    }

    public function setReservUserAnula(?int $reserv_user_anula): self
    {
        $this->reserv_user_anula = $reserv_user_anula;

        return $this;
    }

    public function getReservIdPago(): ?int
    {
        return $this->reserv_id_pago;
    }

    public function setReservIdPago(?int $reserv_id_pago): self
    {
        $this->reserv_id_pago = $reserv_id_pago;

        return $this;
    }

    public function getReservAviso(): ?Avisos
    {
        return $this->reserv_aviso;
    }

    public function setReservAviso(?Avisos $reserv_aviso): self
    {
        $this->reserv_aviso = $reserv_aviso;

        return $this;
    }

    public function getReservUserOrigen(): ?User
    {
        return $this->reserv_user_origen;
    }

    public function setReservUserOrigen(?User $reserv_user_origen): self
    {
        $this->reserv_user_origen = $reserv_user_origen;

        return $this;
    }

    /**
     * @return Collection|Limpiezas[]
     */
    public function getLimpiezas(): Collection
    {
        return $this->limpiezas;
    }

    public function addLimpieza(Limpiezas $limpieza): self
    {
        if (!$this->limpiezas->contains($limpieza)) {
            $this->limpiezas[] = $limpieza;
            $limpieza->setLimpReserva($this);
        }

        return $this;
    }

    public function removeLimpieza(Limpiezas $limpieza): self
    {
        if ($this->limpiezas->contains($limpieza)) {
            $this->limpiezas->removeElement($limpieza);
            // set the owning side to null (unless already changed)
            if ($limpieza->getLimpReserva() === $this) {
                $limpieza->setLimpReserva(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Llaves[]
     */
    public function getLlaves(): Collection
    {
        return $this->llaves;
    }

    public function addLlafe(Llaves $llafe): self
    {
        if (!$this->llaves->contains($llafe)) {
            $this->llaves[] = $llafe;
            $llafe->setLlavesReserva($this);
        }

        return $this;
    }

    public function removeLlafe(Llaves $llafe): self
    {
        if ($this->llaves->contains($llafe)) {
            $this->llaves->removeElement($llafe);
            // set the owning side to null (unless already changed)
            if ($llafe->getLlavesReserva() === $this) {
                $llafe->setLlavesReserva(null);
            }
        }

        return $this;
    }
}
