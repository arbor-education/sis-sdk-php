<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MedicalInstitution;
use \Arbor\Model\Person;

class MedicalInstitutionStaff extends ModelBase
{
    const MEDICAL_INSTITUTION = 'medicalInstitution';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::MEDICAL_INSTITUTION_STAFF;

    /**
     * @param \Arbor\Query\Query $query
     * @return MedicalInstitutionStaff[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MedicalInstitutionStaff");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MedicalInstitutionStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEDICAL_INSTITUTION_STAFF, $id);
    }

    /**
     * @return MedicalInstitution
     */
    public function getMedicalInstitution()
    {
        return $this->getProperty("medicalInstitution");
    }

    /**
     * @param MedicalInstitution $medicalInstitution
     */
    public function setMedicalInstitution(MedicalInstitution $medicalInstitution = null)
    {
        $this->setProperty("medicalInstitution", $medicalInstitution);
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
