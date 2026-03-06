<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class BehaviourDefaultWatcher extends ModelBase
{
    public const BEHAVIOUR = 'behaviour';

    public const RELATION_TO_STUDENT = 'relationToStudent';

    public const STAFF = 'staff';

    protected $_resourceType = ResourceType::BEHAVIOUR_DEFAULT_WATCHER;

    /**
     * @param Query $query
     * @return BehaviourDefaultWatcher[] | Collection
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
     * @return \Arbor\Model\Behaviour
     */
    public function getBehaviour()
    {
        return $this->getProperty('behaviour');
    }

    /**
     * @param \Arbor\Model\Behaviour $behaviour
     */
    public function setBehaviour(\Arbor\Model\Behaviour $behaviour = null)
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
    public function setRelationToStudent(string $relationToStudent = null)
    {
        $this->setProperty('relationToStudent', $relationToStudent);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getStaff()
    {
        return $this->getProperty('staff');
    }

    /**
     * @param \Arbor\Model\Staff $staff
     */
    public function setStaff(\Arbor\Model\Staff $staff = null)
    {
        $this->setProperty('staff', $staff);
    }
}
