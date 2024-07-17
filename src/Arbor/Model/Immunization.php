<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Immunization extends ModelBase
{
    public const PERSON = 'person';

    public const IMMUNIZATION_TYPE = 'immunizationType';

    public const IMMUNIZATION_DATE = 'immunizationDate';

    public const ADMINISTERED_BY_MEDICAL_INSTITUTION = 'administeredByMedicalInstitution';

    protected $_resourceType = ResourceType::IMMUNIZATION;

    /**
     * @param Query $query
     * @return Immunization[] | Collection
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

        $query->setResourceType(ResourceType::IMMUNIZATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Immunization
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::IMMUNIZATION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty('person');
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(\ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \Arbor\Model\ImmunizationType
     */
    public function getImmunizationType()
    {
        return $this->getProperty('immunizationType');
    }

    /**
     * @param \Arbor\Model\ImmunizationType $immunizationType
     */
    public function setImmunizationType(\Arbor\Model\ImmunizationType $immunizationType = null)
    {
        $this->setProperty('immunizationType', $immunizationType);
    }

    /**
     * @return \DateTime
     */
    public function getImmunizationDate()
    {
        return $this->getProperty('immunizationDate');
    }

    /**
     * @param \DateTime $immunizationDate
     */
    public function setImmunizationDate(\DateTime $immunizationDate = null)
    {
        $this->setProperty('immunizationDate', $immunizationDate);
    }

    /**
     * @return \Arbor\Model\MedicalInstitution
     */
    public function getAdministeredByMedicalInstitution()
    {
        return $this->getProperty('administeredByMedicalInstitution');
    }

    /**
     * @param \Arbor\Model\MedicalInstitution $administeredByMedicalInstitution
     */
    public function setAdministeredByMedicalInstitution(\Arbor\Model\MedicalInstitution $administeredByMedicalInstitution = null)
    {
        $this->setProperty('administeredByMedicalInstitution', $administeredByMedicalInstitution);
    }
}
