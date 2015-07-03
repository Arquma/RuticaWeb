<?php

namespace Proxies\__CG__\Rutica\DataBaseBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sitio extends \Rutica\DataBaseBundle\Entity\Sitio implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'id', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'nombre', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'descripcion', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'imagen', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'longitud', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'latitud', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'precio', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'idActividad', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'idProvincia');
        }

        return array('__isInitialized__', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'id', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'nombre', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'descripcion', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'imagen', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'longitud', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'latitud', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'precio', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'idActividad', '' . "\0" . 'Rutica\\DataBaseBundle\\Entity\\Sitio' . "\0" . 'idProvincia');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sitio $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', array($imagen));

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', array());

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitud($longitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitud', array($longitud));

        return parent::setLongitud($longitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitud', array());

        return parent::getLongitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitud($latitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitud', array($latitud));

        return parent::setLatitud($latitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitud', array());

        return parent::getLatitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrecio($precio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrecio', array($precio));

        return parent::setPrecio($precio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrecio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrecio', array());

        return parent::getPrecio();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdActividad(\Rutica\DataBaseBundle\Entity\Actividad $idActividad = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdActividad', array($idActividad));

        return parent::setIdActividad($idActividad);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdActividad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdActividad', array());

        return parent::getIdActividad();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProvincia(\Rutica\DataBaseBundle\Entity\Provincia $idProvincia = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProvincia', array($idProvincia));

        return parent::setIdProvincia($idProvincia);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProvincia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProvincia', array());

        return parent::getIdProvincia();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}