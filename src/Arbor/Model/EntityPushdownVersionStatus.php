<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EntityPushdownVersionStatus extends ModelBase
{
    public const ENTITY_PUSHDOWN_VERSION = 'entityPushdownVersion';

    public const SUBSCRIBER_APPLICATION = 'subscriberApplication';

    public const STATUS = 'status';

    public const ERROR_MESSAGE = 'errorMessage';

    public const SUBSCRIBE_MODE = 'subscribeMode';

    public const ALLOW_EDIT = 'allowEdit';

    public const ALLOW_DELETE = 'allowDelete';

    public const RETRIES = 'retries';

    protected $_resourceType = ResourceType::ENTITY_PUSHDOWN_VERSION_STATUS;

    /**
     * @param Query $query
     * @return EntityPushdownVersionStatus[] | Collection
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

        $query->setResourceType(ResourceType::ENTITY_PUSHDOWN_VERSION_STATUS);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EntityPushdownVersionStatus
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ENTITY_PUSHDOWN_VERSION_STATUS, $id);
    }

    /**
     * @return \Arbor\Model\EntityPushdownVersion
     */
    public function getEntityPushdownVersion()
    {
        return $this->getProperty('entityPushdownVersion');
    }

    /**
     * @param \Arbor\Model\EntityPushdownVersion $entityPushdownVersion
     */
    public function setEntityPushdownVersion(\Arbor\Model\EntityPushdownVersion $entityPushdownVersion = null)
    {
        $this->setProperty('entityPushdownVersion', $entityPushdownVersion);
    }

    /**
     * @return string
     */
    public function getSubscriberApplication()
    {
        return $this->getProperty('subscriberApplication');
    }

    /**
     * @param string $subscriberApplication
     */
    public function setSubscriberApplication(string $subscriberApplication = null)
    {
        $this->setProperty('subscriberApplication', $subscriberApplication);
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
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->getProperty('errorMessage');
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage(string $errorMessage = null)
    {
        $this->setProperty('errorMessage', $errorMessage);
    }

    /**
     * @return string
     */
    public function getSubscribeMode()
    {
        return $this->getProperty('subscribeMode');
    }

    /**
     * @param string $subscribeMode
     */
    public function setSubscribeMode(string $subscribeMode = null)
    {
        $this->setProperty('subscribeMode', $subscribeMode);
    }

    /**
     * @return bool
     */
    public function getAllowEdit()
    {
        return $this->getProperty('allowEdit');
    }

    /**
     * @param bool $allowEdit
     */
    public function setAllowEdit(bool $allowEdit = null)
    {
        $this->setProperty('allowEdit', $allowEdit);
    }

    /**
     * @return bool
     */
    public function getAllowDelete()
    {
        return $this->getProperty('allowDelete');
    }

    /**
     * @param bool $allowDelete
     */
    public function setAllowDelete(bool $allowDelete = null)
    {
        $this->setProperty('allowDelete', $allowDelete);
    }

    /**
     * @return int
     */
    public function getRetries()
    {
        return $this->getProperty('retries');
    }

    /**
     * @param int $retries
     */
    public function setRetries(int $retries = null)
    {
        $this->setProperty('retries', $retries);
    }
}
