<?php

namespace App\Entity;
use DateTime;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"}, message="Ya existe una cuenta con ese email")
 */
class User implements UserInterface
{
    const REGISTRO_EXITOSO = 'Se ha registrado exitosamente';
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $user_activo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user_avatar;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_fecha_alta;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $user_fecha_login;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $user_logueado;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comentarios", mappedBy="coment_user")
     */
    private $comentarios;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Avisos", mappedBy="aviso_user")
     */
    private $avisos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Consultas", mappedBy="cons_user")
     */
    private $consultas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Favoritos", mappedBy="fav_user")
     */
    private $favoritos;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservas", mappedBy="reserv_user_origen")
     */
    private $reservas;

    public function __construct()
    {
        $this->comentarios = new ArrayCollection();
        $this->avisos = new ArrayCollection();
        $this->consultas = new ArrayCollection();
        $this->favoritos = new ArrayCollection();
        $this->reservas = new ArrayCollection();

        
        $this->roles = ['ROLE_USER'];
        $this->user_fecha_alta = new DateTime();
        $this->user_fecha_login = new DateTime();
        $this->user_activo = true;
        $this->user_logueado = false;

        
    
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUserActivo(): ?bool
    {
        return $this->user_activo;
    }

    public function setUserActivo(bool $user_activo): self
    {
        $this->user_activo = $user_activo;

        return $this;
    }

    public function getUserNombre(): ?string
    {
        return $this->user_nombre;
    }

    public function setUserNombre(?string $user_nombre): self
    {
        $this->user_nombre = $user_nombre;

        return $this;
    }

    public function getUserAvatar(): ?string
    {
        return $this->user_avatar;
    }

    public function setUserAvatar(?string $user_avatar): self
    {
        $this->user_avatar = $user_avatar;

        return $this;
    }

    public function getUserFechaAlta(): ?\DateTimeInterface
    {
        return $this->user_fecha_alta;
    }

    public function setUserFechaAlta(\DateTimeInterface $user_fecha_alta): self
    {
        $this->user_fecha_alta = $user_fecha_alta;

        return $this;
    }

    public function getUserFechaLogin(): ?\DateTimeInterface
    {
        return $this->user_fecha_login;
    }

    public function setUserFechaLogin(?\DateTimeInterface $user_fecha_login): self
    {
        $this->user_fecha_login = $user_fecha_login;

        return $this;
    }

    public function getUserLogueado(): ?bool
    {
        return $this->user_logueado;
    }

    public function setUserLogueado(?bool $user_logueado): self
    {
        $this->user_logueado = $user_logueado;

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
            $comentario->setComentUser($this);
        }

        return $this;
    }

    public function removeComentario(Comentarios $comentario): self
    {
        if ($this->comentarios->contains($comentario)) {
            $this->comentarios->removeElement($comentario);
            // set the owning side to null (unless already changed)
            if ($comentario->getComentUser() === $this) {
                $comentario->setComentUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Avisos[]
     */
    public function getAvisos(): Collection
    {
        return $this->avisos;
    }

    public function addAviso(Avisos $aviso): self
    {
        if (!$this->avisos->contains($aviso)) {
            $this->avisos[] = $aviso;
            $aviso->setAvisoUser($this);
        }

        return $this;
    }

    public function removeAviso(Avisos $aviso): self
    {
        if ($this->avisos->contains($aviso)) {
            $this->avisos->removeElement($aviso);
            // set the owning side to null (unless already changed)
            if ($aviso->getAvisoUser() === $this) {
                $aviso->setAvisoUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Consultas[]
     */
    public function getConsultas(): Collection
    {
        return $this->consultas;
    }

    public function addConsulta(Consultas $consulta): self
    {
        if (!$this->consultas->contains($consulta)) {
            $this->consultas[] = $consulta;
            $consulta->setConsUser($this);
        }

        return $this;
    }

    public function removeConsulta(Consultas $consulta): self
    {
        if ($this->consultas->contains($consulta)) {
            $this->consultas->removeElement($consulta);
            // set the owning side to null (unless already changed)
            if ($consulta->getConsUser() === $this) {
                $consulta->setConsUser(null);
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
            $favorito->setFavUser($this);
        }

        return $this;
    }

    public function removeFavorito(Favoritos $favorito): self
    {
        if ($this->favoritos->contains($favorito)) {
            $this->favoritos->removeElement($favorito);
            // set the owning side to null (unless already changed)
            if ($favorito->getFavUser() === $this) {
                $favorito->setFavUser(null);
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
            $reserva->setReservUserOrigen($this);
        }

        return $this;
    }

    public function removeReserva(Reservas $reserva): self
    {
        if ($this->reservas->contains($reserva)) {
            $this->reservas->removeElement($reserva);
            // set the owning side to null (unless already changed)
            if ($reserva->getReservUserOrigen() === $this) {
                $reserva->setReservUserOrigen(null);
            }
        }

        return $this;
    }

    

}
