<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConsultasRepository")
 */
class Consultas
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /*
     * ORM\Column(type="integer")
     */
    //private $cons_id_aviso;

    /*
     * ORM\Column(type="integer")
     */
    //private $cons_id_user;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $cons_texto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cons_activo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cons_fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Avisos", inversedBy="consultas")
     */
    private $cons_aviso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="consultas")
     */
    private $cons_user;

    public function getId(): ?int
    {
        return $this->id;
    }
/*
    public function getConsIdAviso(): ?int
    {
        return $this->cons_id_aviso;
    }

    public function setConsIdAviso(int $cons_id_aviso): self
    {
        $this->cons_id_aviso = $cons_id_aviso;

        return $this;
    }

    public function getConsIdUser(): ?int
    {
        return $this->cons_id_user;
    }

    public function setConsIdUser(int $cons_id_user): self
    {
        $this->cons_id_user = $cons_id_user;

        return $this;
    }
*/
    public function getConsTexto(): ?string
    {
        return $this->cons_texto;
    }

    public function setConsTexto(?string $cons_texto): self
    {
        $this->cons_texto = $cons_texto;

        return $this;
    }

    public function getConsActivo(): ?bool
    {
        return $this->cons_activo;
    }

    public function setConsActivo(bool $cons_activo): self
    {
        $this->cons_activo = $cons_activo;

        return $this;
    }

    public function getConsFecha(): ?\DateTimeInterface
    {
        return $this->cons_fecha;
    }

    public function setConsFecha(\DateTimeInterface $cons_fecha): self
    {
        $this->cons_fecha = $cons_fecha;

        return $this;
    }

    public function getConsAviso(): ?Avisos
    {
        return $this->cons_aviso;
    }

    public function setConsAviso(?Avisos $cons_aviso): self
    {
        $this->cons_aviso = $cons_aviso;

        return $this;
    }

    public function getConsUser(): ?User
    {
        return $this->cons_user;
    }

    public function setConsUser(?User $cons_user): self
    {
        $this->cons_user = $cons_user;

        return $this;
    }
}
