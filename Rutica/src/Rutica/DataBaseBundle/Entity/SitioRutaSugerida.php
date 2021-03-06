<?php

namespace Rutica\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SitioRutaSugerida
 *
 * @ORM\Table(name="sitio_ruta_sugerida", indexes={@ORM\Index(name="Sitio_SitioSugerido_idx", columns={"idSitio"}), @ORM\Index(name="Ruta_Sugerida_Sitio_Ruta_Sugerida_idx", columns={"idRutaSugerida"})})
 * @ORM\Entity
 */
class SitioRutaSugerida
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
     * @var \RutaSugerida
     *
     * @ORM\ManyToOne(targetEntity="RutaSugerida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRutaSugerida", referencedColumnName="id")
     * })
     */
    private $idrutasugerida;

    /**
     * @var \Sitio
     *
     * @ORM\ManyToOne(targetEntity="Sitio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSitio", referencedColumnName="id")
     * })
     */
    private $idsitio;



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
     * Set idrutasugerida
     *
     * @param \Rutica\DataBaseBundle\Entity\RutaSugerida $idrutasugerida
     * @return SitioRutaSugerida
     */
    public function setIdrutasugerida(\Rutica\DataBaseBundle\Entity\RutaSugerida $idrutasugerida = null)
    {
        $this->idrutasugerida = $idrutasugerida;
    
        return $this;
    }

    /**
     * Get idrutasugerida
     *
     * @return \Rutica\DataBaseBundle\Entity\RutaSugerida 
     */
    public function getIdrutasugerida()
    {
        return $this->idrutasugerida;
    }

    /**
     * Set idsitio
     *
     * @param \Rutica\DataBaseBundle\Entity\Sitio $idsitio
     * @return SitioRutaSugerida
     */
    public function setIdsitio(\Rutica\DataBaseBundle\Entity\Sitio $idsitio = null)
    {
        $this->idsitio = $idsitio;
    
        return $this;
    }

    /**
     * Get idsitio
     *
     * @return \Rutica\DataBaseBundle\Entity\Sitio 
     */
    public function getIdsitio()
    {
        return $this->idsitio;
    }
}
