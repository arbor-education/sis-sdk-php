<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\User;

class DataSharingRequest extends ModelBase
{

    protected $_resourceType = ResourceType::DATA_SHARING_REQUEST;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\DataSharingRequest[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("DataSharingRequest");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\DataSharingRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("DataSharingRequest", $id);
    }

    /**
     * @return string
     */
    public function getGroupApplicationId()
    {
        return $this->getProperty("groupApplicationId");
    }

    /**
     * @param string $groupApplicationId
     */
    public function setGroupApplicationId($groupApplicationId = null)
    {
        $this->setProperty("groupApplicationId", $groupApplicationId);
    }

    /**
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->getProperty("permissionLevel");
    }

    /**
     * @param string $permissionLevel
     */
    public function setPermissionLevel($permissionLevel = null)
    {
        $this->setProperty("permissionLevel", $permissionLevel);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty("status");
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty("status", $status);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty("requestedDatetime");
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty("requestedDatetime", $requestedDatetime);
    }

    /**
     * @return User
     */
    public function getStatusUpdatedByUser()
    {
        return $this->getProperty("statusUpdatedByUser");
    }

    /**
     * @param User $statusUpdatedByUser
     */
    public function setStatusUpdatedByUser(User $statusUpdatedByUser = null)
    {
        $this->setProperty("statusUpdatedByUser", $statusUpdatedByUser);
    }

    /**
     * @return \DateTime
     */
    public function getStatusUpdatedDatetime()
    {
        return $this->getProperty("statusUpdatedDatetime");
    }

    /**
     * @param \DateTime $statusUpdatedDatetime
     */
    public function setStatusUpdatedDatetime(\DateTime $statusUpdatedDatetime = null)
    {
        $this->setProperty("statusUpdatedDatetime", $statusUpdatedDatetime);
    }


}
