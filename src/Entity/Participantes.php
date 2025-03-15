<?php

namespace App\Entity;

use App\Repository\ParticipantesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

#[ORM\Entity(repositoryClass: ParticipantesRepository::class)]
class Participantes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombreParticipante = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidosParticipante = null;

    #[ORM\Column]
    private ?int $edad = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $talla = null;

    #[ORM\Column(length: 255)]
    private ?string $categoria = null;

    #[ORM\Column(length: 255)]
    private ?string $general = null;

    #[ORM\Column(length: 255)]
    private ?string $local = null;

    #[ORM\Column(length: 255)]
    private ?string $tiempo = null;

    #[ORM\Column(length: 255)]
    private ?string $velocidad = null;

    #[ORM\Column(length: 255)]
    private ?string $paymentid = null;

    #[ORM\Column(length: 255)]
    private ?string $preferenceid = null;

    #[ORM\Column(length: 255)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaCreacion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $nacimiento = null;

    #[ORM\Column(length: 255)]
    private ?string $sexo = null;

    #[ORM\Column]
    private ?bool $pagado = null;

    #[ORM\Column]
    private ?bool $enviado = null;
    
    #[ORM\Column]
    private ?int $carrera = null;
    
    #[ORM\Column]
    private ?int $inscribio = null;
    
    #[ORM\Column(length: 255)]
    private ?string $tipopago = null;
    
    #[ORM\Column(length: 255)]
    private ?string $folio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreParticipante(): ?string
    {
        return $this->nombreParticipante;
    }

    public function setNombreParticipante(string $nombreParticipante): static
    {
        $this->nombreParticipante = $nombreParticipante;

        return $this;
    }

    public function getApellidosParticipante(): ?string
    {
        return $this->apellidosParticipante;
    }

    public function setApellidosParticipante(string $apellidosParticipante): static
    {
        $this->apellidosParticipante = $apellidosParticipante;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): static
    {
        $this->edad = $edad;

        return $this;
    }
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTalla(): ?string
    {
        return $this->talla;
    }

    public function setTalla(string $talla): static
    {
        $this->talla = $talla;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getVelocidad(): ?string
    {
        return $this->velocidad;
    }

    public function setVelocidad(string $velocidad): static
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    public function getTiempo(): ?string
    {
        return $this->tiempo;
    }

    public function setTiempo(string $tiempo): static
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    public function getGeneral(): ?string
    {
        return $this->general;
    }

    public function setGeneral(string $general): static
    {
        $this->general = $general;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(string $local): static
    {
        $this->local = $local;

        return $this;
    }

    public function getPaymentid(): ?string
    {
        return $this->paymentid;
    }

    public function setPaymentid(string $paymentid): static
    {
        $this->paymentid = $paymentid;

        return $this;
    }

    public function getPreferenceid(): ?string
    {
        return $this->preferenceid;
    }

    public function setPreferenceid(string $preferenceid): static
    {
        $this->preferenceid = $preferenceid;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(\DateTimeInterface $fechaCreacion): static
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): static
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getPagado(): ?bool
    {
        return $this->pagado;
    }

    public function setPagado(bool $pagado): static
    {
        $this->pagado = $pagado;

        return $this;
    }

    public function getEnviado(): ?bool
    {
        return $this->enviado;
    }

    public function setEnviado(bool $enviado): static
    {
        $this->enviado = $enviado;

        return $this;
    }
    
    public function getCarrera(): ?int
    {
        return $this->carrera;
    }
    
    public function setCarrera(int $carrera): static
    {
        $this->carrera = $carrera;
        
        return $this;
    }
    
    public function getInscribio(): ?int
    {
        return $this->inscribio;
    }
    
    public function setInscribio(int $inscribio): static
    {
        $this->inscribio = $inscribio;
        
        return $this;
    }
    
    public function getTipopago(): ?string
    {
        return $this->tipopago;
    }
    
    public function setTipopago(string $tipopago): static
    {
        $this->tipopago = $tipopago;
        
        return $this;
    }
    
    public function getFolio(): ?string
    {
        return $this->folio;
    }
    
    public function setFolio(string $folio): static
    {
        $this->folio = $folio;
        
        return $this;
    }
    
    public function getNacimiento(): ?\DateTimeInterface
    {
        return $this->nacimiento;
    }
    
    public function setNacimiento(\DateTimeInterface $nacimiento): static
    {
        $this->nacimiento = $nacimiento;
        
        return $this;
    }
}
