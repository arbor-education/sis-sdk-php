<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\University;
use \Arbor\Model\Person;

class UniversityStaff extends ModelBase
{
    const UNIVERSITY = 'university';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::UNIVERSITY_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return UniversityStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UniversityStaff");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return UniversityStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UNIVERSITY_STAFF, $id);
    }

    /**
     * @return University
     */
    public function getUniversity()
    {
        return $this->getProperty("university");
    }

    /**
     * @param University $university
     */
    public function setUniversity(University $university = null)
    {
        $this->setProperty("university", $university);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->getProperty("position");
    }

    /**
     * @param string $position
     */
    public function setPosition($position = null)
    {
        $this->setProperty("position", $position);
    }
}
