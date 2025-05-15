<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class DataSharingRequest extends ModelBase
{
    public const GROUP_APPLICATION_ID = 'groupApplicationId';

    public const PERMISSION_LEVEL = 'permissionLevel';

    public const STATUS = 'status';

    public const REQUESTED_DATETIME = 'requestedDatetime';

    public const STATUS_UPDATED_BY_USER = 'statusUpdatedByUser';

    public const STATUS_UPDATED_DATETIME = 'statusUpdatedDatetime';

    protected $_resourceType = ResourceType::DATA_SHARING_REQUEST;

    /**
     * @param Query $query
     * @return DataSharingRequest[] | Collection
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

        $query->setResourceType(ResourceType::DATA_SHARING_REQUEST);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return DataSharingRequest
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DATA_SHARING_REQUEST, $id);
    }

    /**
     * @return string
     */
    public function getGroupApplicationId()
    {
        return $this->getProperty('groupApplicationId');
    }

    /**
     * @param string $groupApplicationId
     */
    public function setGroupApplicationId(string $groupApplicationId = null)
    {
        $this->setProperty('groupApplicationId', $groupApplicationId);
    }

    /**
     * @return string
     */
    public function getPermissionLevel()
    {
        return $this->getProperty('permissionLevel');
    }

    /**
     * @param string $permissionLevel
     */
    public function setPermissionLevel(string $permissionLevel = null)
    {
        $this->setProperty('permissionLevel', $permissionLevel);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDatetime()
    {
        return $this->getProperty('requestedDatetime');
    }

    /**
     * @param \DateTime $requestedDatetime
     */
    public function setRequestedDatetime(\DateTime $requestedDatetime = null)
    {
        $this->setProperty('requestedDatetime', $requestedDatetime);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getStatusUpdatedByUser()
    {
        return $this->getProperty('statusUpdatedByUser');
    }

    /**
     * @param \Arbor\Model\User $statusUpdatedByUser
     */
    public function setStatusUpdatedByUser(\Arbor\Model\User $statusUpdatedByUser = null)
    {
        $this->setProperty('statusUpdatedByUser', $statusUpdatedByUser);
    }

    /**
     * @return \DateTime
     */
    public function getStatusUpdatedDatetime()
    {
        return $this->getProperty('statusUpdatedDatetime');
    }

    /**
     * @param \DateTime $statusUpdatedDatetime
     */
    public function setStatusUpdatedDatetime(\DateTime $statusUpdatedDatetime = null)
    {
        $this->setProperty('statusUpdatedDatetime', $statusUpdatedDatetime);
    }
}
