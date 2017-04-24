<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Behaviour;
use \Arbor\Model\Staff;

class BehaviourDefaultWatcher extends ModelBase
{
    const BEHAVIOUR = 'behaviour';

    const RELATION_TO_STUDENT = 'relationToStudent';

    const STAFF = 'staff';

    protected $_resourceType = ResourceType::BEHAVIOUR_DEFAULT_WATCHER;

    /**
     * @param \Arbor\Query\Query $query
     * @return BehaviourDefaultWatcher[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("BehaviourDefaultWatcher");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BehaviourDefaultWatcher
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::BEHAVIOUR_DEFAULT_WATCHER, $id);
    }

    /**
     * @return Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty("behaviour");
    }

    /**
     * @param Behaviour $behaviour
     */
    public function setBehaviour(Behaviour $behaviour = null)
    {
        $this->setProperty("behaviour", $behaviour);
    }

    /**
     * @return string
     */
    public function getRelationToStudent()
    {
        return $this->getProperty("relationToStudent");
    }

    /**
     * @param string $relationToStudent
     */
    public function setRelationToStudent($relationToStudent = null)
    {
        $this->setProperty("relationToStudent", $relationToStudent);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty("staff");
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty("staff", $staff);
    }
}
