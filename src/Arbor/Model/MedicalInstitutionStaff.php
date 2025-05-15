<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MedicalInstitutionStaff extends ModelBase
{
    public const MEDICAL_INSTITUTION = 'medicalInstitution';

    public const PERSON = 'person';

    public const POSITION = 'position';

    protected $_resourceType = ResourceType::MEDICAL_INSTITUTION_STAFF;

    /**
     * @param Query $query
     * @return MedicalInstitutionStaff[] | Collection
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
     * @return \Arbor\Model\MedicalInstitution
     */
    public function getMedicalInstitution()
    {
        return $this->getProperty('medicalInstitution');
    }

    /**
     * @param \Arbor\Model\MedicalInstitution $medicalInstitution
     */
    public function setMedicalInstitution(\Arbor\Model\MedicalInstitution $medicalInstitution = null)
    {
        $this->setProperty('medicalInstitution', $medicalInstitution);
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
