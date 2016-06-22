<?php

namespace Proxies\__CG__\Ecommerce\EcommerceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produits extends \Ecommerce\EcommerceBundle\Entity\Produits implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'id', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'nom', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'description', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'prix', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'disponible', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'catagories', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'image', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'tva'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'id', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'nom', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'description', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'prix', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'disponible', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'catagories', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'image', '' . "\0" . 'Ecommerce\\EcommerceBundle\\Entity\\Produits' . "\0" . 'tva'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produits $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponible($disponible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponible', [$disponible]);

        return parent::setDisponible($disponible);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponible', []);

        return parent::getDisponible();
    }

    /**
     * {@inheritDoc}
     */
    public function setCatagories($catagories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCatagories', [$catagories]);

        return parent::setCatagories($catagories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCatagories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCatagories', []);

        return parent::getCatagories();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTva($tva)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTva', [$tva]);

        return parent::setTva($tva);
    }

    /**
     * {@inheritDoc}
     */
    public function getTva()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTva', []);

        return parent::getTva();
    }

}
