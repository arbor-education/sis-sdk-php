<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MedicalInstitutionStaff extends ModelBase
{
    const MEDICAL_INSTITUTION = 'medicalInstitution';

    const PERSON = 'person';

    const POSITION = 'position';

    protected $_resourceType = ResourceType::MEDICAL_INSTITUTION_STAFF;

    /**
     * @param Query $query
     * @return MedicalInstitutionStaff[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_INSTITUTION_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalInstitutionStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_INSTITUTION_STAFF, $id);
    }

    /**
     * @return MedicalInstitution
     */
    public function getMedicalInstitution()
    {
        return $this->getProperty('medicalInstitution');
    }

    /**
     * @param MedicalInstitution $medicalInstitution
     */
    public function setMedicalInstitution(MedicalInstitution $medicalInstitution = null)
    {
        $this->setProperty('medicalInstitution', $medicalInstitution);
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person = null)
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
    public function setPosition($position = null)
    {
        $this->setProperty('position', $position);
    }
}
