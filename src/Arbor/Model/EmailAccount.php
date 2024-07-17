<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EmailAccount extends ModelBase
{
    public const SERVER_TYPE = 'serverType';

    public const SERVER_HOST = 'serverHost';

    public const SERVER_PORT = 'serverPort';

    public const SERVER_ENCRYPTION = 'serverEncryption';

    public const USERNAME = 'username';

    public const PASSWORD = 'password';

    public const OWNER = 'owner';

    protected $_resourceType = ResourceType::EMAIL_ACCOUNT;

    /**
     * @param Query $query
     * @return EmailAccount[] | Collection
     * @throws Exception
     */
    public static function query(\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::EMAIL_ACCOUNT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailAccount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_ACCOUNT, $id);
    }

    /**
     * @return string
     */
    public function getServerType()
    {
        return $this->getProperty('serverType');
    }

    /**
     * @param string $serverType
     */
    public function setServerType(string $serverType = null)
    {
        $this->setProperty('serverType', $serverType);
    }

    /**
     * @return string
     */
    public function getServerHost()
    {
        return $this->getProperty('serverHost');
    }

    /**
     * @param string $serverHost
     */
    public function setServerHost(string $serverHost = null)
    {
        $this->setProperty('serverHost', $serverHost);
    }

    /**
     * @return int
     */
    public function getServerPort()
    {
        return $this->getProperty('serverPort');
    }

    /**
     * @param int $serverPort
     */
    public function setServerPort(int $serverPort = null)
    {
        $this->setProperty('serverPort', $serverPort);
    }

    /**
     * @return string
     */
    public function getServerEncryption()
    {
        return $this->getProperty('serverEncryption');
    }

    /**
     * @param string $serverEncryption
     */
    public function setServerEncryption(string $serverEncryption = null)
    {
        $this->setProperty('serverEncryption', $serverEncryption);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getProperty('username');
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username = null)
    {
        $this->setProperty('username', $username);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->getProperty('password');
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password = null)
    {
        $this->setProperty('password', $password);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty('owner');
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(\ModelBase $owner = null)
    {
        $this->setProperty('owner', $owner);
    }
}
