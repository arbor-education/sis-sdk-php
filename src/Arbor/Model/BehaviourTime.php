<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class BehaviourTime extends ModelBase
{

    const START_TIME = 'startTime';

    const END_TIME = 'endTime';

    const NAME = 'name';

    protected $_resourceType = ResourceType::BEHAVIOUR_TIME;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviourTime[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BehaviourTime");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviourTime
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BEHAVIOUR_TIME, $id);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty("startTime");
    }

    /**
     * @param string $startTime
     */
    public function setStartTime($startTime = null)
    {
        $this->setProperty("startTime", $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty("endTime");
    }

    /**
     * @param string $endTime
     */
    public function setEndTime($endTime = null)
    {
        $this->setProperty("endTime", $endTime);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }


}
