<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UiParams extends ModelBase
{

    const IDENTIFIER = 'identifier';

    const PARAMS = 'params';

    const HASH = 'hash';

    const USER = 'user';

    const SESSION_ID = 'sessionId';

    const CREATED_DATETIME = 'createdDatetime';

    const LAST_ACCESS_DATETIME = 'lastAccessDatetime';

    protected $_resourceType = ResourceType::UI_PARAMS;

    /**
     * @param Query $query
     * @return UiParams[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::UI_PARAMS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UiParams
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UI_PARAMS, $id);
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->getProperty('identifier');
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier($identifier = null)
    {
        $this->setProperty('identifier', $identifier);
    }

    /**
     * @return string
     */
    public function getParams()
    {
        return $this->getProperty('params');
    }

    /**
     * @param string $params
     */
    public function setParams($params = null)
    {
        $this->setProperty('params', $params);
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->getProperty('hash');
    }

    /**
     * @param string $hash
     */
    public function setHash($hash = null)
    {
        $this->setProperty('hash', $hash);
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param User $user
     */
    public function setUser(User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->getProperty('sessionId');
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId = null)
    {
        $this->setProperty('sessionId', $sessionId);
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDatetime()
    {
        return $this->getProperty('createdDatetime');
    }

    /**
     * @param \DateTime $createdDatetime
     */
    public function setCreatedDatetime(\DateTime $createdDatetime = null)
    {
        $this->setProperty('createdDatetime', $createdDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getLastAccessDatetime()
    {
        return $this->getProperty('lastAccessDatetime');
    }

    /**
     * @param \DateTime $lastAccessDatetime
     */
    public function setLastAccessDatetime(\DateTime $lastAccessDatetime = null)
    {
        $this->setProperty('lastAccessDatetime', $lastAccessDatetime);
    }


}
