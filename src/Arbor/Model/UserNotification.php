<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class UserNotification extends ModelBase
{
    const USER = 'user';

    const IS_READ = 'isRead';

    const STATUS = 'status';

    const MODIFIED_GLOBAL_COUNTER = 'modifiedGlobalCounter';

    const CREATED_DATETIME = 'createdDatetime';

    const ACTION = 'action';

    const ICON = 'icon';

    const ORIGIN = 'origin';

    const PARAMETERS = 'parameters';

    const TYPE = 'type';

    const DESCRIPTION = 'description';

    const SUBJECT = 'subject';

    protected $_resourceType = ResourceType::USER_NOTIFICATION;

    /**
     * @param Query $query
     * @return UserNotification[] | Collection
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
     * @return bool
     */
    public function getIsRead()
    {
        return $this->getProperty('isRead');
    }

    /**
     * @param bool $isRead
     */
    public function setIsRead($isRead = null)
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
    public function setStatus($status = null)
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
    public function setModifiedGlobalCounter($modifiedGlobalCounter = null)
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
    public function setAction($action = null)
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
    public function setIcon($icon = null)
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
    public function setOrigin($origin = null)
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
    public function setParameters($parameters = null)
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
    public function setType($type = null)
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
    public function setDescription($description = null)
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
    public function setSubject($subject = null)
    {
        $this->setProperty('subject', $subject);
    }

}
