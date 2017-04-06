<?php

namespace Arbor\Model;

use Arbor\Api\Gateway\GatewayInterface;
use Arbor\Api\Gateway\RestGateway;

class ModelBase implements \Serializable
{
    /**@var array $_properties*/
    protected $_properties = array();

    /**@var \Arbor\Api\Gateway\GatewayInterface $_apiGateway*/
    protected $_apiGateway;

    /**@var string $_resourceUrl */
    protected $_resourceUrl;

    /**@var string $_resourceType*/
    protected $_resourceType;

    /**@var string $_displayName*/
    protected $_displayName;

    protected static $_defaultGateway = null;
    /**
     * @param string $resourceType
     * @param array $properties
     * @param \Arbor\Api\Gateway\GatewayInterface $apiGateway
     */
    public function __construct($resourceType=null, $properties=array(), $apiGateway=null)
    {
        if(!is_null($resourceType)) $this->setResourceType($resourceType);
        $this->setProperties($properties);
        if(is_null($apiGateway)) $apiGateway = static::getDefaultGateway();
        $this->connect($apiGateway);
//        $this->setProperty("userTags", new \ArrayObject());
    }

    /**
     * @param GatewayInterface $defaultGateway
     */
    public static function setDefaultGateway($defaultGateway)
    {
        self::$_defaultGateway = $defaultGateway;
    }

    /**
     * @return GatewayInterface
     */
    public static function getDefaultGateway()
    {
        return self::$_defaultGateway;
    }



    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        if(substr($name, 0, 3) == "get")
        {
            $propertyName = lcfirst(substr($name, 3, strlen($name)-2));
            return $this->getProperty($propertyName);
        }
        elseif(substr($name, 0, 3) == "set")
        {
            $propertyName = lcfirst(substr($name, 3, strlen($name)-3));
            $this->_properties[$propertyName] = $arguments[0];
        }
        else throw new Exception("Invalid method: $name");
    }

    /**
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->_resourceUrl;
    }

    /**
     * @param string $resourceUrl
     */
    public function setResourceUrl($resourceUrl)
    {
        $this->_resourceUrl = $resourceUrl;
    }

    public function getResourceId()
    {
        if(!empty($this->_resourceUrl))
        {
            list($api, $resource, $id)=explode("/", trim($this->getResourceUrl(), "/"));
            return $id;
        }
        return null;
    }
    /**
     * @param \Arbor\Api\Gateway\GatewayInterface $apiGateway
     */
    public function connect($apiGateway)
    {
        $this->_apiGateway = $apiGateway;
    }

    /**
     * @return \Arbor\Api\Gateway\GatewayInterface
     */
    public function getApiGateway()
    {
        return $this->_apiGateway;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->_properties;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->_properties = $properties;
    }

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function getProperty($propertyName)
    {
        if(!array_key_exists($propertyName, $this->_properties))
        {
            if($this->getResourceUrl())
            {
                $this->refresh();
            }
            else return null;
        }
        return $this->_properties[$propertyName];
    }

    /**
     * @param $propertyName
     * @return Collection
     */
    public function getCollectionProperty($propertyName)
    {
        if(!array_key_exists($propertyName, $this->_properties))
        {
            $this->refresh();
        }

        if(is_null($this->_properties[$propertyName]))
            $this->_properties[$propertyName] = new Collection();
        return $this->_properties[$propertyName];
    }

    /**
     *
     */
    public function refresh()
    {
        if($this->getApiGateway())
        {
           return  $this->getApiGateway()->refresh($this);
        }
        else throw new Exception("Trying to refresh an unconnected model: ".$this->getResourceUrl());
    }
    /**
     * @param string $propertyName
     * @param mixed $propertyValue
     */
    public function setProperty($propertyName, $propertyValue)
    {
        $this->_properties[$propertyName] = $propertyValue;
    }

    public function save()
    {
        if(!is_null($this->getApiGateway()))
        {
            $identity = $this->getResourceUrl();
            if(!empty($identity))
            {
                $this->getApiGateway()->update($this);
            }
            else
            {
                $this->getApiGateway()->create($this);
            }
        }
        else
        {
            throw new Exception("Trying to save an unconnected model. Please call connect() first.");
        }
    }

    /**
     * @param string $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->_resourceType = $resourceType;
    }

    /**
     * @return string
     */
    public function getResourceType()
    {
        return $this->_resourceType;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->_displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->_displayName;
    }

    public function setUserTags($tags)
    {
        $this->setProperty("userTags", $tags);
    }

    /**
     * @return \ArrayObject
     */
    public function getUserTags()
    {
        if(is_null($this->getProperty("userTags")))
        {
            $this->setUserTags(new \ArrayObject());
        }
        return $this->getProperty("userTags");
    }

    public function tag($tagName, $value)
    {
        $this->getUserTags()->offsetSet($tagName, $value);
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {
        $hydrator = new Hydrator();
        return serialize($hydrator->extractArray($this));
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     */
    public function unserialize($serialized)
    {
        $this->connect(self::getDefaultGateway());
        $hydrator = new Hydrator();
        $hydrator->hydrateModel($this, unserialize($serialized));
    }
}