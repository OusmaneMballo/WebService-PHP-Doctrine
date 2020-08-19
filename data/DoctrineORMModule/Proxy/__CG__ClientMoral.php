<?php

namespace DoctrineProxies\__CG__;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClientMoral extends \ClientMoral implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'ClientMoral' . "\0" . 'id', '' . "\0" . 'ClientMoral' . "\0" . 'nom', '' . "\0" . 'ClientMoral' . "\0" . 'raisonsocial', '' . "\0" . 'ClientMoral' . "\0" . 'adresse', '' . "\0" . 'ClientMoral' . "\0" . 'numIdentifiant', '' . "\0" . 'ClientMoral' . "\0" . 'telephone', '' . "\0" . 'ClientMoral' . "\0" . 'email', '' . "\0" . 'ClientMoral' . "\0" . 'login', '' . "\0" . 'ClientMoral' . "\0" . 'passwd', '' . "\0" . 'ClientMoral' . "\0" . 'client_physique', '' . "\0" . 'ClientMoral' . "\0" . 'compte'];
        }

        return ['__isInitialized__', '' . "\0" . 'ClientMoral' . "\0" . 'id', '' . "\0" . 'ClientMoral' . "\0" . 'nom', '' . "\0" . 'ClientMoral' . "\0" . 'raisonsocial', '' . "\0" . 'ClientMoral' . "\0" . 'adresse', '' . "\0" . 'ClientMoral' . "\0" . 'numIdentifiant', '' . "\0" . 'ClientMoral' . "\0" . 'telephone', '' . "\0" . 'ClientMoral' . "\0" . 'email', '' . "\0" . 'ClientMoral' . "\0" . 'login', '' . "\0" . 'ClientMoral' . "\0" . 'passwd', '' . "\0" . 'ClientMoral' . "\0" . 'client_physique', '' . "\0" . 'ClientMoral' . "\0" . 'compte'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClientMoral $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
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
    public function getClientPhysique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientPhysique', []);

        return parent::getClientPhysique();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientPhysique($client_physique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientPhysique', [$client_physique]);

        return parent::setClientPhysique($client_physique);
    }

    /**
     * {@inheritDoc}
     */
    public function getRaisonsocial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRaisonsocial', []);

        return parent::getRaisonsocial();
    }

    /**
     * {@inheritDoc}
     */
    public function setRaisonsocial($raisonsocial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRaisonsocial', [$raisonsocial]);

        return parent::setRaisonsocial($raisonsocial);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumIdentifiant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumIdentifiant', []);

        return parent::getNumIdentifiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumIdentifiant($numIdentifiant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumIdentifiant', [$numIdentifiant]);

        return parent::setNumIdentifiant($numIdentifiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswd', []);

        return parent::getPasswd();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswd($passwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswd', [$passwd]);

        return parent::setPasswd($passwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompte', []);

        return parent::getCompte();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompte($compte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompte', [$compte]);

        return parent::setCompte($compte);
    }

}
