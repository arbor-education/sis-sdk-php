<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class UserActivity extends ModelBase
{

    const USER = 'user';

    const PRODUCT_AREA = 'productArea';

    const DAY = 'day';

    const HOUR = 'hour';

    const REQUESTS = 'requests';

    protected $_resourceType = ResourceType::USER_ACTIVITY;

    /**
     * @param \Arbor\Query\Query $query
     * @return UserActivity[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UserActivity");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UserActivity
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::USER_ACTIVITY, $id);
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
    public function getProductArea()
    {
        return $this->getProperty("productArea");
    }

    /**
     * @param string $productArea
     */
    public function setProductArea($productArea = null)
    {
        $this->setProperty("productArea", $productArea);
    }

    /**
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->getProperty("day");
    }

    /**
     * @param \DateTime $day
     */
    public function setDay(\DateTime $day = null)
    {
        $this->setProperty("day", $day);
    }

    /**
     * @return \DateTime
     */
    public function getHour()
    {
        return $this->getProperty("hour");
    }

    /**
     * @param \DateTime $hour
     */
    public function setHour(\DateTime $hour = null)
    {
        $this->setProperty("hour", $hour);
    }

    /**
     * @return int
     */
    public function getRequests()
    {
        return $this->getProperty("requests");
    }

    /**
     * @param int $requests
     */
    public function setRequests($requests = null)
    {
        $this->setProperty("requests", $requests);
    }


}
