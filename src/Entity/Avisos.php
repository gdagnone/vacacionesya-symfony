<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AvisosRepository")
 */
class Avisos
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
    //private $aviso_id_user;

    /**
     * @ORM\Column(type="datetime")
     */
    private $aviso_fecha;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aviso_activo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $aviso_pausado;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $aviso_vigencia_hasta;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_likes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_cant_visitas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_idioma;

    /**
     * @ORM\Column(type="integer")
     */
    private $aviso_id_operacion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_titulo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $aviso_descripcion;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $aviso_monto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_moneda;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_periodo_monto;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_periodo_alquiler;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_tipo_inmueble;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_location;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_pais;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_codpostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_localidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_calle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_altura;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_piso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_depto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto_principal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_foto7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aviso_urlvideo;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $aviso_checkin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $aviso_ckeckout;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $aviso_m2;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $aviso_m2_cub;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_ambientes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_dormitorios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_plazas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_camas;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_banios;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_cocina;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_cochera;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aviso_id_ubicacion;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aviso_parrilla;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aviso_cable;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aviso_wifi;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aviso_tv;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comentarios", mappedBy="coment_aviso")
     */
    private $comentarios;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="avisos")
     */
    private $aviso_user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Consultas", mappedBy="cons_aviso")
     */
    private $consultas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Favoritos", mappedBy="fav_aviso")
     */
    private $favoritos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Disponibilidad", mappedBy="disp_aviso")
     */
    private $disponibilidads;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservas", mappedBy="reserv_aviso")
     */
    private $reservas;

    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        $this->consultas = new ArrayCollection();
        $this->favoritos = new ArrayCollection();
        $this->disponibilidads = new ArrayCollection();
        $this->reservas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
/*
    public function getAvisoIdUser(): ?int
    {
        return $this->aviso_id_user;
    }

    public function setAvisoIdUser(int $aviso_id_user): self
    {
        $this->aviso_id_user = $aviso_id_user;

        return $this;
    }
*/
    public function getAvisoFecha(): ?\DateTimeInterface
    {
        return $this->aviso_fecha;
    }

    public function setAvisoFecha(\DateTimeInterface $aviso_fecha): self
    {
        $this->aviso_fecha = $aviso_fecha;

        return $this;
    }

    public function getAvisoActivo(): ?bool
    {
        return $this->aviso_activo;
    }

    public function setAvisoActivo(bool $aviso_activo): self
    {
        $this->aviso_activo = $aviso_activo;

        return $this;
    }

    public function getAvisoPausado(): ?bool
    {
        return $this->aviso_pausado;
    }

    public function setAvisoPausado(bool $aviso_pausado): self
    {
        $this->aviso_pausado = $aviso_pausado;

        return $this;
    }

    public function getAvisoVigenciaHasta(): ?\DateTimeInterface
    {
        return $this->aviso_vigencia_hasta;
    }

    public function setAvisoVigenciaHasta(?\DateTimeInterface $aviso_vigencia_hasta): self
    {
        $this->aviso_vigencia_hasta = $aviso_vigencia_hasta;

        return $this;
    }

    public function getAvisoLikes(): ?int
    {
        return $this->aviso_likes;
    }

    public function setAvisoLikes(?int $aviso_likes): self
    {
        $this->aviso_likes = $aviso_likes;

        return $this;
    }

    public function getAvisoCantVisitas(): ?int
    {
        return $this->aviso_cant_visitas;
    }

    public function setAvisoCantVisitas(?int $aviso_cant_visitas): self
    {
        $this->aviso_cant_visitas = $aviso_cant_visitas;

        return $this;
    }

    public function getAvisoIdIdioma(): ?int
    {
        return $this->aviso_id_idioma;
    }

    public function setAvisoIdIdioma(?int $aviso_id_idioma): self
    {
        $this->aviso_id_idioma = $aviso_id_idioma;

        return $this;
    }

    public function getAvisoIdOperacion(): ?int
    {
        return $this->aviso_id_operacion;
    }

    public function setAvisoIdOperacion(int $aviso_id_operacion): self
    {
        $this->aviso_id_operacion = $aviso_id_operacion;

        return $this;
    }

    public function getAvisoTitulo(): ?string
    {
        return $this->aviso_titulo;
    }

    public function setAvisoTitulo(?string $aviso_titulo): self
    {
        $this->aviso_titulo = $aviso_titulo;

        return $this;
    }

    public function getAvisoDescripcion(): ?string
    {
        return $this->aviso_descripcion;
    }

    public function setAvisoDescripcion(?string $aviso_descripcion): self
    {
        $this->aviso_descripcion = $aviso_descripcion;

        return $this;
    }

    public function getAvisoMonto(): ?float
    {
        return $this->aviso_monto;
    }

    public function setAvisoMonto(?float $aviso_monto): self
    {
        $this->aviso_monto = $aviso_monto;

        return $this;
    }

    public function getAvisoIdMoneda(): ?int
    {
        return $this->aviso_id_moneda;
    }

    public function setAvisoIdMoneda(?int $aviso_id_moneda): self
    {
        $this->aviso_id_moneda = $aviso_id_moneda;

        return $this;
    }

    public function getAvisoIdPeriodoMonto(): ?int
    {
        return $this->aviso_id_periodo_monto;
    }

    public function setAvisoIdPeriodoMonto(?int $aviso_id_periodo_monto): self
    {
        $this->aviso_id_periodo_monto = $aviso_id_periodo_monto;

        return $this;
    }

    public function getAvisoIdPeriodoAlquiler(): ?int
    {
        return $this->aviso_id_periodo_alquiler;
    }

    public function setAvisoIdPeriodoAlquiler(?int $aviso_id_periodo_alquiler): self
    {
        $this->aviso_id_periodo_alquiler = $aviso_id_periodo_alquiler;

        return $this;
    }

    public function getAvisoIdTipoInmueble(): ?int
    {
        return $this->aviso_id_tipo_inmueble;
    }

    public function setAvisoIdTipoInmueble(?int $aviso_id_tipo_inmueble): self
    {
        $this->aviso_id_tipo_inmueble = $aviso_id_tipo_inmueble;

        return $this;
    }

    public function getAvisoLocation(): ?string
    {
        return $this->aviso_location;
    }

    public function setAvisoLocation(?string $aviso_location): self
    {
        $this->aviso_location = $aviso_location;

        return $this;
    }

    public function getAvisoIdPais(): ?int
    {
        return $this->aviso_id_pais;
    }

    public function setAvisoIdPais(?int $aviso_id_pais): self
    {
        $this->aviso_id_pais = $aviso_id_pais;

        return $this;
    }

    public function getAvisoCodpostal(): ?string
    {
        return $this->aviso_codpostal;
    }

    public function setAvisoCodpostal(?string $aviso_codpostal): self
    {
        $this->aviso_codpostal = $aviso_codpostal;

        return $this;
    }

    public function getAvisoLocalidad(): ?string
    {
        return $this->aviso_localidad;
    }

    public function setAvisoLocalidad(?string $aviso_localidad): self
    {
        $this->aviso_localidad = $aviso_localidad;

        return $this;
    }

    public function getAvisoCalle(): ?string
    {
        return $this->aviso_calle;
    }

    public function setAvisoCalle(?string $aviso_calle): self
    {
        $this->aviso_calle = $aviso_calle;

        return $this;
    }

    public function getAvisoAltura(): ?string
    {
        return $this->aviso_altura;
    }

    public function setAvisoAltura(?string $aviso_altura): self
    {
        $this->aviso_altura = $aviso_altura;

        return $this;
    }

    public function getAvisoPiso(): ?string
    {
        return $this->aviso_piso;
    }

    public function setAvisoPiso(?string $aviso_piso): self
    {
        $this->aviso_piso = $aviso_piso;

        return $this;
    }

    public function getAvisoDepto(): ?string
    {
        return $this->aviso_depto;
    }

    public function setAvisoDepto(?string $aviso_depto): self
    {
        $this->aviso_depto = $aviso_depto;

        return $this;
    }

    public function getAvisoFotoPrincipal(): ?string
    {
        return $this->aviso_foto_principal;
    }

    public function setAvisoFotoPrincipal(?string $aviso_foto_principal): self
    {
        $this->aviso_foto_principal = $aviso_foto_principal;

        return $this;
    }

    public function getAvisoFoto1(): ?string
    {
        return $this->aviso_foto1;
    }

    public function setAvisoFoto1(?string $aviso_foto1): self
    {
        $this->aviso_foto1 = $aviso_foto1;

        return $this;
    }

    public function getAvisoFoto2(): ?string
    {
        return $this->aviso_foto2;
    }

    public function setAvisoFoto2(?string $aviso_foto2): self
    {
        $this->aviso_foto2 = $aviso_foto2;

        return $this;
    }

    public function getAvisoFoto3(): ?string
    {
        return $this->aviso_foto3;
    }

    public function setAvisoFoto3(?string $aviso_foto3): self
    {
        $this->aviso_foto3 = $aviso_foto3;

        return $this;
    }

    public function getAvisoFoto4(): ?string
    {
        return $this->aviso_foto4;
    }

    public function setAvisoFoto4(?string $aviso_foto4): self
    {
        $this->aviso_foto4 = $aviso_foto4;

        return $this;
    }

    public function getAvisoFoto5(): ?string
    {
        return $this->aviso_foto5;
    }

    public function setAvisoFoto5(?string $aviso_foto5): self
    {
        $this->aviso_foto5 = $aviso_foto5;

        return $this;
    }

    public function getAvisoFoto6(): ?string
    {
        return $this->aviso_foto6;
    }

    public function setAvisoFoto6(?string $aviso_foto6): self
    {
        $this->aviso_foto6 = $aviso_foto6;

        return $this;
    }

    public function getAvisoFoto7(): ?string
    {
        return $this->aviso_foto7;
    }

    public function setAvisoFoto7(?string $aviso_foto7): self
    {
        $this->aviso_foto7 = $aviso_foto7;

        return $this;
    }

    public function getAvisoUrlvideo(): ?string
    {
        return $this->aviso_urlvideo;
    }

    public function setAvisoUrlvideo(?string $aviso_urlvideo): self
    {
        $this->aviso_urlvideo = $aviso_urlvideo;

        return $this;
    }

    public function getAvisoCheckin(): ?\DateTimeInterface
    {
        return $this->aviso_checkin;
    }

    public function setAvisoCheckin(?\DateTimeInterface $aviso_checkin): self
    {
        $this->aviso_checkin = $aviso_checkin;

        return $this;
    }

    public function getAvisoCkeckout(): ?\DateTimeInterface
    {
        return $this->aviso_ckeckout;
    }

    public function setAvisoCkeckout(?\DateTimeInterface $aviso_ckeckout): self
    {
        $this->aviso_ckeckout = $aviso_ckeckout;

        return $this;
    }

    public function getAvisoM2(): ?float
    {
        return $this->aviso_m2;
    }

    public function setAvisoM2(?float $aviso_m2): self
    {
        $this->aviso_m2 = $aviso_m2;

        return $this;
    }

    public function getAvisoM2Cub(): ?float
    {
        return $this->aviso_m2_cub;
    }

    public function setAvisoM2Cub(?float $aviso_m2_cub): self
    {
        $this->aviso_m2_cub = $aviso_m2_cub;

        return $this;
    }

    public function getAvisoAmbientes(): ?int
    {
        return $this->aviso_ambientes;
    }

    public function setAvisoAmbientes(?int $aviso_ambientes): self
    {
        $this->aviso_ambientes = $aviso_ambientes;

        return $this;
    }

    public function getAvisoDormitorios(): ?int
    {
        return $this->aviso_dormitorios;
    }

    public function setAvisoDormitorios(?int $aviso_dormitorios): self
    {
        $this->aviso_dormitorios = $aviso_dormitorios;

        return $this;
    }

    public function getAvisoPlazas(): ?int
    {
        return $this->aviso_plazas;
    }

    public function setAvisoPlazas(?int $aviso_plazas): self
    {
        $this->aviso_plazas = $aviso_plazas;

        return $this;
    }

    public function getAvisoCamas(): ?int
    {
        return $this->aviso_camas;
    }

    public function setAvisoCamas(?int $aviso_camas): self
    {
        $this->aviso_camas = $aviso_camas;

        return $this;
    }

    public function getAvisoBanios(): ?int
    {
        return $this->aviso_banios;
    }

    public function setAvisoBanios(?int $aviso_banios): self
    {
        $this->aviso_banios = $aviso_banios;

        return $this;
    }

    public function getAvisoCocina(): ?int
    {
        return $this->aviso_cocina;
    }

    public function setAvisoCocina(?int $aviso_cocina): self
    {
        $this->aviso_cocina = $aviso_cocina;

        return $this;
    }

    public function getAvisoCochera(): ?int
    {
        return $this->aviso_cochera;
    }

    public function setAvisoCochera(?int $aviso_cochera): self
    {
        $this->aviso_cochera = $aviso_cochera;

        return $this;
    }

    public function getAvisoIdUbicacion(): ?int
    {
        return $this->aviso_id_ubicacion;
    }

    public function setAvisoIdUbicacion(?int $aviso_id_ubicacion): self
    {
        $this->aviso_id_ubicacion = $aviso_id_ubicacion;

        return $this;
    }

    public function getAvisoParrilla(): ?bool
    {
        return $this->aviso_parrilla;
    }

    public function setAvisoParrilla(?bool $aviso_parrilla): self
    {
        $this->aviso_parrilla = $aviso_parrilla;

        return $this;
    }

    public function getAvisoCable(): ?bool
    {
        return $this->aviso_cable;
    }

    public function setAvisoCable(?bool $aviso_cable): self
    {
        $this->aviso_cable = $aviso_cable;

        return $this;
    }

    public function getAvisoWifi(): ?bool
    {
        return $this->aviso_wifi;
    }

    public function setAvisoWifi(?bool $aviso_wifi): self
    {
        $this->aviso_wifi = $aviso_wifi;

        return $this;
    }

    public function getAvisoTv(): ?bool
    {
        return $this->aviso_tv;
    }

    public function setAvisoTv(?bool $aviso_tv): self
    {
        $this->aviso_tv = $aviso_tv;

        return $this;
    }

    /**
     * @return Collection|Comentarios[]
     */
    public function getComentarios(): Collection
    {
        return $this->comentarios;
    }

    public function addComentario(Comentarios $comentario): self
    {
        if (!$this->comentarios->contains($comentario)) {
            $this->comentarios[] = $comentario;
            $comentario->setComentAviso($this);
        }

        return $this;
    }

    public function removeComentario(Comentarios $comentario): self
    {
        if ($this->comentarios->contains($comentario)) {
            $this->comentarios->removeElement($comentario);
            // set the owning side to null (unless already changed)
            if ($comentario->getComentAviso() === $this) {
                $comentario->setComentAviso(null);
            }
        }

        return $this;
    }

    public function getAvisoUser(): ?User
    {
        return $this->aviso_user;
    }

    public function setAvisoUser(?User $aviso_user): self
    {
        $this->aviso_user = $aviso_user;

        return $this;
    }

    /**
     * @return Collection|Consultas[]
     */
    public function getConsultas(): Collection
    {
        return $this->consultas;
    }

    public function addConsultas(Consultas $consultas): self
    {
        if (!$this->consultas->contains($consultas)) {
            $this->consultas[] = $consultas;
            $consultas->setConsAviso($this);
        }

        return $this;
    }

    public function removeConsultas(Consultas $consultas): self
    {
        if ($this->consultas->contains($consultas)) {
            $this->consultas->removeElement($consultas);
            // set the owning side to null (unless already changed)
            if ($consultas->getConsAviso() === $this) {
                $consultas->setConsAviso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favoritos[]
     */
    public function getFavoritos(): Collection
    {
        return $this->favoritos;
    }

    public function addFavorito(Favoritos $favorito): self
    {
        if (!$this->favoritos->contains($favorito)) {
            $this->favoritos[] = $favorito;
            $favorito->setFavAviso($this);
        }

        return $this;
    }

    public function removeFavorito(Favoritos $favorito): self
    {
        if ($this->favoritos->contains($favorito)) {
            $this->favoritos->removeElement($favorito);
            // set the owning side to null (unless already changed)
            if ($favorito->getFavAviso() === $this) {
                $favorito->setFavAviso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Disponibilidad[]
     */
    public function getDisponibilidads(): Collection
    {
        return $this->disponibilidads;
    }

    public function addDisponibilidad(Disponibilidad $disponibilidad): self
    {
        if (!$this->disponibilidads->contains($disponibilidad)) {
            $this->disponibilidads[] = $disponibilidad;
            $disponibilidad->setDispAviso($this);
        }

        return $this;
    }

    public function removeDisponibilidad(Disponibilidad $disponibilidad): self
    {
        if ($this->disponibilidads->contains($disponibilidad)) {
            $this->disponibilidads->removeElement($disponibilidad);
            // set the owning side to null (unless already changed)
            if ($disponibilidad->getDispAviso() === $this) {
                $disponibilidad->setDispAviso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reservas[]
     */
    public function getReservas(): Collection
    {
        return $this->reservas;
    }

    public function addReserva(Reservas $reserva): self
    {
        if (!$this->reservas->contains($reserva)) {
            $this->reservas[] = $reserva;
            $reserva->setReservAviso($this);
        }

        return $this;
    }

    public function removeReserva(Reservas $reserva): self
    {
        if ($this->reservas->contains($reserva)) {
            $this->reservas->removeElement($reserva);
            // set the owning side to null (unless already changed)
            if ($reserva->getReservAviso() === $this) {
                $reserva->setReservAviso(null);
            }
        }

        return $this;
    }
}
