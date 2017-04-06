<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\User;

class UsageLogEntry extends ModelBase
{

    const TIMESTAMP = 'timestamp';

    const USER = 'user';

    const SEVERITY = 'severity';

    const MESSAGE = 'message';

    const EVENT_TYPE = 'event_type';

    const EVENT_NAME = 'event_name';

    const EVENT_DATA = 'event_data';

    const MODULE = 'module';

    const CONTROLLER = 'controller';

    const ACTION = 'action';

    protected $_resourceType = ResourceType::USAGE_LOG_ENTRY;

    /**
     * @param \Arbor\Query\Query $query
     * @return UsageLogEntry[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UsageLogEntry");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UsageLogEntry
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::USAGE_LOG_ENTRY, $id);
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->getProperty("timestamp");
    }

    /**
     * @param \DateTime $timestamp
     */
    public function setTimestamp(\DateTime $timestamp = null)
    {
        $this->setProperty("timestamp", $timestamp);
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
     * @return int
     */
    public function getSeverity()
    {
        return $this->getProperty("severity");
    }

    /**
     * @param int $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty("severity", $severity);
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
     * @return string
     */
    public function getEvent_type()
    {
        return $this->getProperty("event_type");
    }

    /**
     * @param string $event_type
     */
    public function setEvent_type($event_type = null)
    {
        $this->setProperty("event_type", $event_type);
    }

    /**
     * @return string
     */
    public function getEvent_name()
    {
        return $this->getProperty("event_name");
    }

    /**
     * @param string $event_name
     */
    public function setEvent_name($event_name = null)
    {
        $this->setProperty("event_name", $event_name);
    }

    /**
     * @return string
     */
    public function getEvent_data()
    {
        return $this->getProperty("event_data");
    }

    /**
     * @param string $event_data
     */
    public function setEvent_data($event_data = null)
    {
        $this->setProperty("event_data", $event_data);
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->getProperty("module");
    }

    /**
     * @param string $module
     */
    public function setModule($module = null)
    {
        $this->setProperty("module", $module);
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->getProperty("controller");
    }

    /**
     * @param string $controller
     */
    public function setController($controller = null)
    {
        $this->setProperty("controller", $controller);
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->getProperty("action");
    }

    /**
     * @param string $action
     */
    public function setAction($action = null)
    {
        $this->setProperty("action", $action);
    }


}
