<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Behaviour extends ModelBase
{

    const BEHAVIOUR_NAME = 'behaviourName';

    const DESCRIPTION = 'description';

    const SEVERITY = 'severity';

    const ACTIVE = 'active';

    protected $_resourceType = ResourceType::BEHAVIOUR;

    /**
     * @param \Arbor\Query\Query $query
     * @return Behaviour[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Behaviour");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Behaviour
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BEHAVIOUR, $id);
    }

    /**
     * @return string
     */
    public function getBehaviourName()
    {
        return $this->getProperty("behaviourName");
    }

    /**
     * @param string $behaviourName
     */
    public function setBehaviourName($behaviourName = null)
    {
        $this->setProperty("behaviourName", $behaviourName);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getProperty("description");
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->setProperty("description", $description);
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty("severity");
    }

    /**
     * @param string $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty("severity", $severity);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }


}
