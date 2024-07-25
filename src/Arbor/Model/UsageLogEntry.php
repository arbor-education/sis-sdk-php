<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UsageLogEntry extends ModelBase
{
    public const TIMESTAMP = 'timestamp';

    public const USER = 'user';

    public const SEVERITY = 'severity';

    public const MESSAGE = 'message';

    public const EVENT_TYPE = 'event_type';

    public const EVENT_NAME = 'event_name';

    public const EVENT_DATA = 'event_data';

    public const MODULE = 'module';

    public const CONTROLLER = 'controller';

    public const ACTION = 'action';

    public const CLIENT_IP = 'clientIp';

    public const USER_AGENT = 'userAgent';

    protected $_resourceType = ResourceType::USAGE_LOG_ENTRY;

    /**
     * @param Query $query
     * @return UsageLogEntry[] | Collection
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

        $query->setResourceType(ResourceType::USAGE_LOG_ENTRY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UsageLogEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::USAGE_LOG_ENTRY, $id);
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->getProperty('timestamp');
    }

    /**
     * @param \DateTime $timestamp
     */
    public function setTimestamp(\DateTime $timestamp = null)
    {
        $this->setProperty('timestamp', $timestamp);
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
     * @return int
     */
    public function getSeverity()
    {
        return $this->getProperty('severity');
    }

    /**
     * @param int $severity
     */
    public function setSeverity(int $severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->getProperty('message');
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message = null)
    {
        $this->setProperty('message', $message);
    }

    /**
     * @return string
     */
    public function getEvent_type()
    {
        return $this->getProperty('event_type');
    }

    /**
     * @param string $event_type
     */
    public function setEvent_type(string $event_type = null)
    {
        $this->setProperty('event_type', $event_type);
    }

    /**
     * @return string
     */
    public function getEvent_name()
    {
        return $this->getProperty('event_name');
    }

    /**
     * @param string $event_name
     */
    public function setEvent_name(string $event_name = null)
    {
        $this->setProperty('event_name', $event_name);
    }

    /**
     * @return string
     */
    public function getEvent_data()
    {
        return $this->getProperty('event_data');
    }

    /**
     * @param string $event_data
     */
    public function setEvent_data(string $event_data = null)
    {
        $this->setProperty('event_data', $event_data);
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->getProperty('module');
    }

    /**
     * @param string $module
     */
    public function setModule(string $module = null)
    {
        $this->setProperty('module', $module);
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->getProperty('controller');
    }

    /**
     * @param string $controller
     */
    public function setController(string $controller = null)
    {
        $this->setProperty('controller', $controller);
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
    public function getClientIp()
    {
        return $this->getProperty('clientIp');
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(string $clientIp = null)
    {
        $this->setProperty('clientIp', $clientIp);
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->getProperty('userAgent');
    }

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent = null)
    {
        $this->setProperty('userAgent', $userAgent);
    }
}
