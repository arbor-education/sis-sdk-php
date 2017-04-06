<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ImmunizationType;
use \Arbor\Model\MedicalInstitution;

class Immunization extends ModelBase
{

    const PERSON = 'person';

    const IMMUNIZATION_TYPE = 'immunizationType';

    const IMMUNIZATION_DATE = 'immunizationDate';

    const ADMINISTERED_BY_MEDICAL_INSTITUTION = 'administeredByMedicalInstitution';

    protected $_resourceType = ResourceType::IMMUNIZATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return Immunization[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Immunization");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Immunization
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::IMMUNIZATION, $id);
    }

    /**
     * @return ModelBase
     */
    public function getPerson()
    {
        return $this->getProperty("person");
    }

    /**
     * @param ModelBase $person
     */
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty("person", $person);
    }

    /**
     * @return ImmunizationType
     */
    public function getImmunizationType()
    {
        return $this->getProperty("immunizationType");
    }

    /**
     * @param ImmunizationType $immunizationType
     */
    public function setImmunizationType(ImmunizationType $immunizationType = null)
    {
        $this->setProperty("immunizationType", $immunizationType);
    }

    /**
     * @return \DateTime
     */
    public function getImmunizationDate()
    {
        return $this->getProperty("immunizationDate");
    }

    /**
     * @param \DateTime $immunizationDate
     */
    public function setImmunizationDate(\DateTime $immunizationDate = null)
    {
        $this->setProperty("immunizationDate", $immunizationDate);
    }

    /**
     * @return MedicalInstitution
     */
    public function getAdministeredByMedicalInstitution()
    {
        return $this->getProperty("administeredByMedicalInstitution");
    }

    /**
     * @param MedicalInstitution $administeredByMedicalInstitution
     */
    public function setAdministeredByMedicalInstitution(MedicalInstitution $administeredByMedicalInstitution = null)
    {
        $this->setProperty("administeredByMedicalInstitution", $administeredByMedicalInstitution);
    }


}
