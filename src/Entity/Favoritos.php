<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FavoritosRepository")
 */
class Favoritos
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
    private $fav_fecha;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="favoritos")
     */
    private $fav_user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Avisos", inversedBy="favoritos")
     */
    private $fav_aviso;

    public function getId(): ?int
    {
        return $this->id;
    }

    
   

    public function getFavFecha(): ?\DateTimeInterface
    {
        return $this->fav_fecha;
    }

    public function setFavFecha(\DateTimeInterface $fav_fecha): self
    {
        $this->fav_fecha = $fav_fecha;

        return $this;
    }

    public function getFavUser(): ?User
    {
        return $this->fav_user;
    }

    public function setFavUser(?User $fav_user): self
    {
        $this->fav_user = $fav_user;

        return $this;
    }

    public function getFavAviso(): ?Avisos
    {
        return $this->fav_aviso;
    }

    public function setFavAviso(?Avisos $fav_aviso): self
    {
        $this->fav_aviso = $fav_aviso;

        return $this;
    }
}
