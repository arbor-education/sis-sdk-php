<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class EmailAccount extends ModelBase
{

    const SERVER_TYPE = 'serverType';

    const SERVER_HOST = 'serverHost';

    const SERVER_PORT = 'serverPort';

    const SERVER_ENCRYPTION = 'serverEncryption';

    const USERNAME = 'username';

    const PASSWORD = 'password';

    const OWNER = 'owner';

    protected $_resourceType = ResourceType::EMAIL_ACCOUNT;

    /**
     * @param \Arbor\Query\Query $query
     * @return EmailAccount[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("EmailAccount");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EmailAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::EMAIL_ACCOUNT, $id);
    }

    /**
     * @return string
     */
    public function getServerType()
    {
        return $this->getProperty("serverType");
    }

    /**
     * @param string $serverType
     */
    public function setServerType($serverType = null)
    {
        $this->setProperty("serverType", $serverType);
    }

    /**
     * @return string
     */
    public function getServerHost()
    {
        return $this->getProperty("serverHost");
    }

    /**
     * @param string $serverHost
     */
    public function setServerHost($serverHost = null)
    {
        $this->setProperty("serverHost", $serverHost);
    }

    /**
     * @return int
     */
    public function getServerPort()
    {
        return $this->getProperty("serverPort");
    }

    /**
     * @param int $serverPort
     */
    public function setServerPort($serverPort = null)
    {
        $this->setProperty("serverPort", $serverPort);
    }

    /**
     * @return string
     */
    public function getServerEncryption()
    {
        return $this->getProperty("serverEncryption");
    }

    /**
     * @param string $serverEncryption
     */
    public function setServerEncryption($serverEncryption = null)
    {
        $this->setProperty("serverEncryption", $serverEncryption);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getProperty("username");
    }

    /**
     * @param string $username
     */
    public function setUsername($username = null)
    {
        $this->setProperty("username", $username);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->getProperty("password");
    }

    /**
     * @param string $password
     */
    public function setPassword($password = null)
    {
        $this->setProperty("password", $password);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty("owner");
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(ModelBase $owner = null)
    {
        $this->setProperty("owner", $owner);
    }


}
