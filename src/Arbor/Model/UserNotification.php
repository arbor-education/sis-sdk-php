<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UserNotification extends ModelBase
{
    public const USER = 'user';

    public const IS_READ = 'isRead';

    public const STATUS = 'status';

    public const MODIFIED_GLOBAL_COUNTER = 'modifiedGlobalCounter';

    public const CREATED_DATETIME = 'createdDatetime';

    public const ACTION = 'action';

    public const ICON = 'icon';

    public const ORIGIN = 'origin';

    public const PARAMETERS = 'parameters';

    public const TYPE = 'type';

    public const DESCRIPTION = 'description';

    public const SUBJECT = 'subject';

    protected $_resourceType = ResourceType::USER_NOTIFICATION;

    /**
     * @param Query $query
     * @return UserNotification[] | Collection
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

        $query->setResourceType(ResourceType::USER_NOTIFICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UserNotification
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USER_NOTIFICATION, $id);
    }

    /**
     * @return \Arbor\Model\User
     */
    public function getUser()
    {
        return $this->getProperty('user');
    }

    /**
     * @param \Arbor\Model\User $user
     */
    public function setUser(\Arbor\Model\User $user = null)
    {
        $this->setProperty('user', $user);
    }

    /**
     * @return bool
     */
    public function getIsRead()
    {
        return $this->getProperty('isRead');
    }

    /**
     * @param bool $isRead
     */
    public function setIsRead(bool $isRead = null)
    {
        $this->setProperty('isRead', $isRead);
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
     * @return int
     */
    public function getModifiedGlobalCounter()
    {
        return $this->getProperty('modifiedGlobalCounter');
    }

    /**
     * @param int $modifiedGlobalCounter
     */
    public function setModifiedGlobalCounter(int $modifiedGlobalCounter = null)
    {
        $this->setProperty('modifiedGlobalCounter', $modifiedGlobalCounter);
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
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty('action');
    }

    /**
     * @param string $action
     */
    public function setAction(string $action = null)
    {
        $this->setProperty('action', $action);
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->getProperty('icon');
    }

    /**
     * @param string $icon
     */
    public function setIcon(string $icon = null)
    {
        $this->setProperty('icon', $icon);
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->getProperty('origin');
    }

    /**
     * @param string $origin
     */
    public function setOrigin(string $origin = null)
    {
        $this->setProperty('origin', $origin);
    }

    /**
     * @return string
     */
    public function getParameters()
    {
        return $this->getProperty('parameters');
    }

    /**
     * @param string $parameters
     */
    public function setParameters(string $parameters = null)
    {
        $this->setProperty('parameters', $parameters);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * @param string $type
     */
    public function setType(string $type = null)
    {
        $this->setProperty('type', $type);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description = null)
    {
        $this->setProperty('description', $description);
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject = null)
    {
        $this->setProperty('subject', $subject);
    }
}
