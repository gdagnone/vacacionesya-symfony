<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComentariosRepository")
 */
class Comentarios
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
    //private $coment_id_aviso;

    /*
     * ORM\Column(type="integer")
     */
    //private $coment_id_user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coment_titulo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $coment_texto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $coment_activo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $coment_fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Avisos", inversedBy="comentarios")
     */
    private $coment_aviso;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="comentarios")
     */
    private $coment_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    /*
    public function getComentIdAviso(): ?int
    {
        return $this->coment_id_aviso;
    }

    public function setComentIdAviso(int $coment_id_aviso): self
    {
        $this->coment_id_aviso = $coment_id_aviso;

        return $this;
    }

    public function getComentIdUser(): ?int
    {
        return $this->coment_id_user;
    }

    public function setComentIdUser(int $coment_id_user): self
    {
        $this->coment_id_user = $coment_id_user;

        return $this;
    }
    */
    public function getComentTitulo(): ?string
    {
        return $this->coment_titulo;
    }

    public function setComentTitulo(?string $coment_titulo): self
    {
        $this->coment_titulo = $coment_titulo;

        return $this;
    }

    public function getComentTexto(): ?string
    {
        return $this->coment_texto;
    }

    public function setComentTexto(?string $coment_texto): self
    {
        $this->coment_texto = $coment_texto;

        return $this;
    }

    public function getComentActivo(): ?bool
    {
        return $this->coment_activo;
    }

    public function setComentActivo(bool $coment_activo): self
    {
        $this->coment_activo = $coment_activo;

        return $this;
    }

    public function getComentFecha(): ?\DateTimeInterface
    {
        return $this->coment_fecha;
    }

    public function setComentFecha(\DateTimeInterface $coment_fecha): self
    {
        $this->coment_fecha = $coment_fecha;

        return $this;
    }

    public function getComentAviso(): ?Avisos
    {
        return $this->coment_aviso;
    }

    public function setComentAviso(?Avisos $coment_aviso): self
    {
        $this->coment_aviso = $coment_aviso;

        return $this;
    }

    public function getComentUser(): ?User
    {
        return $this->coment_user;
    }

    public function setComentUser(?User $coment_user): self
    {
        $this->coment_user = $coment_user;

        return $this;
    }
}
