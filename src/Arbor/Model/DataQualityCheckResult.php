<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class DataQualityCheckResult extends ModelBase
{

    const OBJECT = 'object';

    const CHECK_CLASS = 'checkClass';

    const RESULT_TYPE = 'resultType';

    const RESULT_CODE = 'resultCode';

    const MESSAGE = 'message';

    const LAST_CHECKED_DATETIME = 'lastCheckedDatetime';

    const RESOLVED_DATETIME = 'resolvedDatetime';

    const RESOLVED_USER = 'resolvedUser';

    const IGNORED_USER = 'ignoredUser';

    const IGNORED_DATETIME = 'ignoredDatetime';

    protected $_resourceType = ResourceType::DATA_QUALITY_CHECK_RESULT;

    /**
     * @param \Arbor\Query\Query $query
     * @return DataQualityCheckResult[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DataQualityCheckResult");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DataQualityCheckResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DATA_QUALITY_CHECK_RESULT, $id);
    }

    /**
     * @return ModelBase
     */
    public function getObject()
    {
        return $this->getProperty("object");
    }

    /**
     * @param ModelBase $object
     */
    public function setObject(ModelBase $object = null)
    {
        $this->setProperty("object", $object);
    }

    /**
     * @return string
     */
    public function getCheckClass()
    {
        return $this->getProperty("checkClass");
    }

    /**
     * @param string $checkClass
     */
    public function setCheckClass($checkClass = null)
    {
        $this->setProperty("checkClass", $checkClass);
    }

    /**
     * @return string
     */
    public function getResultType()
    {
        return $this->getProperty("resultType");
    }

    /**
     * @param string $resultType
     */
    public function setResultType($resultType = null)
    {
        $this->setProperty("resultType", $resultType);
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->getProperty("resultCode");
    }

    /**
     * @param string $resultCode
     */
    public function setResultCode($resultCode = null)
    {
        $this->setProperty("resultCode", $resultCode);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->getProperty("message");
    }

    /**
     * @param string $message
     */
    public function setMessage($message = null)
    {
        $this->setProperty("message", $message);
    }

    /**
     * @return \DateTime
     */
    public function getLastCheckedDatetime()
    {
        return $this->getProperty("lastCheckedDatetime");
    }

    /**
     * @param \DateTime $lastCheckedDatetime
     */
    public function setLastCheckedDatetime(\DateTime $lastCheckedDatetime = null)
    {
        $this->setProperty("lastCheckedDatetime", $lastCheckedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getResolvedDatetime()
    {
        return $this->getProperty("resolvedDatetime");
    }

    /**
     * @param \DateTime $resolvedDatetime
     */
    public function setResolvedDatetime(\DateTime $resolvedDatetime = null)
    {
        $this->setProperty("resolvedDatetime", $resolvedDatetime);
    }

    /**
     * @return User
     */
    public function getResolvedUser()
    {
        return $this->getProperty("resolvedUser");
    }

    /**
     * @param User $resolvedUser
     */
    public function setResolvedUser(User $resolvedUser = null)
    {
        $this->setProperty("resolvedUser", $resolvedUser);
    }

    /**
     * @return User
     */
    public function getIgnoredUser()
    {
        return $this->getProperty("ignoredUser");
    }

    /**
     * @param User $ignoredUser
     */
    public function setIgnoredUser(User $ignoredUser = null)
    {
        $this->setProperty("ignoredUser", $ignoredUser);
    }

    /**
     * @return \DateTime
     */
    public function getIgnoredDatetime()
    {
        return $this->getProperty("ignoredDatetime");
    }

    /**
     * @param \DateTime $ignoredDatetime
     */
    public function setIgnoredDatetime(\DateTime $ignoredDatetime = null)
    {
        $this->setProperty("ignoredDatetime", $ignoredDatetime);
    }


}
