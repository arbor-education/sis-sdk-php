<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class UniversityStaff extends ModelBase
{
    public const UNIVERSITY = 'university';

    public const PERSON = 'person';

    public const POSITION = 'position';

    protected $_resourceType = ResourceType::UNIVERSITY_STAFF;

    /**
     * @param Query $query
     * @return UniversityStaff[] | Collection
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

        $query->setResourceType(ResourceType::UNIVERSITY_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return UniversityStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UNIVERSITY_STAFF, $id);
    }

    /**
     * @return \Arbor\Model\University
     */
    public function getUniversity()
    {
        return $this->getProperty('university');
    }

    /**
     * @param \Arbor\Model\University $university
     */
    public function setUniversity(\Arbor\Model\University $university = null)
    {
        $this->setProperty('university', $university);
    }

    /**
     * @return \Arbor\Model\Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param \Arbor\Model\Person $person
     */
    public function setPerson(\Arbor\Model\Person $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->getProperty('position');
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position = null)
    {
        $this->setProperty('position', $position);
    }
}
