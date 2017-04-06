<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class ApiKey extends ModelBase
{

    const USER = 'user';

    const API_KEY = 'apiKey';

    const ISSUED_DATETIME = 'issuedDatetime';

    const REVOKED_DATETIME = 'revokedDatetime';

    protected $_resourceType = ResourceType::API_KEY;

    /**
     * @param \Arbor\Query\Query $query
     * @return ApiKey[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ApiKey");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ApiKey
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::API_KEY, $id);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty("user");
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty("user", $user);
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->getProperty("apiKey");
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey = null)
    {
        $this->setProperty("apiKey", $apiKey);
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDatetime()
    {
        return $this->getProperty("issuedDatetime");
    }

    /**
     * @param \DateTime $issuedDatetime
     */
    public function setIssuedDatetime(\DateTime $issuedDatetime = null)
    {
        $this->setProperty("issuedDatetime", $issuedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRevokedDatetime()
    {
        return $this->getProperty("revokedDatetime");
    }

    /**
     * @param \DateTime $revokedDatetime
     */
    public function setRevokedDatetime(\DateTime $revokedDatetime = null)
    {
        $this->setProperty("revokedDatetime", $revokedDatetime);
    }


}
