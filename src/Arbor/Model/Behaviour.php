<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Behaviour extends ModelBase
{
    const BEHAVIOUR_NAME = 'behaviourName';

    const DESCRIPTION = 'description';

    const SEVERITY = 'severity';

    const ACTIVE = 'active';

    const IS_MY_CLASSROOM_DEFAULT = 'isMyClassroomDefault';

    protected $_resourceType = ResourceType::BEHAVIOUR;

    /**
     * @param Query $query
     * @return Behaviour[] | Collection
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

        $query->setResourceType(ResourceType::BEHAVIOUR);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Behaviour
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::BEHAVIOUR, $id);
    }

    /**
     * @return string
     */
    public function getBehaviourName()
    {
        return $this->getProperty('behaviourName');
    }

    /**
     * @param string $behaviourName
     */
    public function setBehaviourName($behaviourName = null)
    {
        $this->setProperty('behaviourName', $behaviourName);
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
    public function getSeverity()
    {
        return $this->getProperty('severity');
    }

    /**
     * @param string $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty('active');
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty('active', $active);
    }

    /**
     * @return bool
     */
    public function getIsMyClassroomDefault()
    {
        return $this->getProperty('isMyClassroomDefault');
    }

    /**
     * @param bool $isMyClassroomDefault
     */
    public function setIsMyClassroomDefault($isMyClassroomDefault = null)
    {
        $this->setProperty('isMyClassroomDefault', $isMyClassroomDefault);
    }

}
