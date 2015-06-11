<?php

namespace Rutica\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitio
 *
 * @ORM\Table(name="sitio", indexes={@ORM\Index(name="Provincia_Sitio_idx", columns={"id_provincia"}), @ORM\Index(name="Actividad_Sitio_idx", columns={"id_actividad"})})
 * @ORM\Entity
 */
class Sitio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=150, nullable=false)
     */
    private $imagen;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud", type="float", precision=10, scale=6, nullable=false)
     */
    private $longitud;

    /**
     * @var float
     *
     * @ORM\Column(name="latitud", type="float", precision=10, scale=6, nullable=false)
     */
    private $latitud;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $precio;

    /**
     * @var \Actividad
     *
     * @ORM\ManyToOne(targetEntity="Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_actividad", referencedColumnName="id")
     * })
     */
    private $idActividad;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_provincia", referencedColumnName="id")
     * })
     */
    private $idProvincia;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Sitio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sitio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Sitio
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set longitud
     *
     * @param float $longitud
     * @return Sitio
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
    
        return $this;
    }

    /**
     * Get longitud
     *
     * @return float 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set latitud
     *
     * @param float $latitud
     * @return Sitio
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;
    
        return $this;
    }

    /**
     * Get latitud
     *
     * @return float 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set precio
     *
     * @param string $precio
     * @return Sitio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set idActividad
     *
     * @param \Rutica\DataBaseBundle\Entity\Actividad $idActividad
     * @return Sitio
     */
    public function setIdActividad(\Rutica\DataBaseBundle\Entity\Actividad $idActividad = null)
    {
        $this->idActividad = $idActividad;
    
        return $this;
    }

    /**
     * Get idActividad
     *
     * @return \Rutica\DataBaseBundle\Entity\Actividad 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set idProvincia
     *
     * @param \Rutica\DataBaseBundle\Entity\Provincia $idProvincia
     * @return Sitio
     */
    public function setIdProvincia(\Rutica\DataBaseBundle\Entity\Provincia $idProvincia = null)
    {
        $this->idProvincia = $idProvincia;
    
        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return \Rutica\DataBaseBundle\Entity\Provincia 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }
    
      public function __toString() {
        return $this->getNombre();
    }
    
}
