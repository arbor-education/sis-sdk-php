<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class BehaviourDefaultWatcher extends ModelBase
{

    const BEHAVIOUR = 'behaviour';

    const RELATION_TO_STUDENT = 'relationToStudent';

    const STAFF = 'staff';

    protected $_resourceType = ResourceType::BEHAVIOUR_DEFAULT_WATCHER;

    /**
     * @param Query $query
     * @return BehaviourDefaultWatcher[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOUR_DEFAULT_WATCHER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return BehaviourDefaultWatcher
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOUR_DEFAULT_WATCHER, $id);
    }

    /**
     * @return Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty('behaviour');
    }

    /**
     * @param Behaviour $behaviour
     */
    public function setBehaviour(Behaviour $behaviour = null)
    {
        $this->setProperty('behaviour', $behaviour);
    }

    /**
     * @return string
     */
    public function getRelationToStudent()
    {
        return $this->getProperty('relationToStudent');
    }

    /**
     * @param string $relationToStudent
     */
    public function setRelationToStudent($relationToStudent = null)
    {
        $this->setProperty('relationToStudent', $relationToStudent);
    }

    /**
     * @return Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param Staff $staff
     */
    public function setStaff(Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }


}
