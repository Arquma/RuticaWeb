<?php

namespace Rutica\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RutaSugerida
 *
 * @ORM\Table(name="ruta_sugerida", indexes={@ORM\Index(name="Ruta_Sugerida_Sitio_Ruta_Sugerida_idx", columns={"id_provincia"})})
 * @ORM\Entity
 */
class RutaSugerida
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
     * @ORM\Column(name="distancia", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $distancia;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_total", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $precioTotal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempo", type="time", nullable=true)
     */
    private $tiempo;

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
     * @return RutaSugerida
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
     * Set distancia
     *
     * @param string $distancia
     * @return RutaSugerida
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;
    
        return $this;
    }

    /**
     * Get distancia
     *
     * @return string 
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set precioTotal
     *
     * @param string $precioTotal
     * @return RutaSugerida
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;
    
        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return string 
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set tiempo
     *
     * @param \DateTime $tiempo
     * @return RutaSugerida
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    
        return $this;
    }

    /**
     * Get tiempo
     *
     * @return \DateTime 
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }

    /**
     * Set idProvincia
     *
     * @param \Rutica\DataBaseBundle\Entity\Provincia $idProvincia
     * @return RutaSugerida
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
        return $this->$this->getTiempo();
    }
    
}
