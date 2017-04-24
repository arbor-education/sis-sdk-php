<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\EducationalInstitution;
use \Arbor\Model\Person;

class EducationalInstitutionStaff extends ModelBase
{
    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::EDUCATIONAL_INSTITUTION_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return EducationalInstitutionStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("EducationalInstitutionStaff");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return EducationalInstitutionStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::EDUCATIONAL_INSTITUTION_STAFF, $id);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty("educationalInstitution");
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty("educationalInstitution", $educationalInstitution);
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
