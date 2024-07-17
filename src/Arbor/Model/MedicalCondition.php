<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MedicalCondition extends ModelBase
{
    public const PERSON = 'person';

    public const MEDICAL_CONDITION_TYPE = 'medicalConditionType';

    public const MEDICAL_CONDITION_NAME = 'medicalConditionName';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const SEVERITY = 'severity';

    public const SYMPTOMS = 'symptoms';

    public const TREATMENT = 'treatment';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION;

    /**
     * @param Query $query
     * @return MedicalCondition[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_CONDITION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalCondition
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_CONDITION, $id);
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
     * @return \Arbor\Model\MedicalConditionType
     */
    public function getMedicalConditionType()
    {
        return $this->getProperty('medicalConditionType');
    }

    /**
     * @param \Arbor\Model\MedicalConditionType $medicalConditionType
     */
    public function setMedicalConditionType(\Arbor\Model\MedicalConditionType $medicalConditionType = null)
    {
        $this->setProperty('medicalConditionType', $medicalConditionType);
    }

    /**
     * @return string
     */
    public function getMedicalConditionName()
    {
        return $this->getProperty('medicalConditionName');
    }

    /**
     * @param string $medicalConditionName
     */
    public function setMedicalConditionName(string $medicalConditionName = null)
    {
        $this->setProperty('medicalConditionName', $medicalConditionName);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
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
    public function setSeverity(string $severity = null)
    {
        $this->setProperty('severity', $severity);
    }

    /**
     * @return string
     */
    public function getSymptoms()
    {
        return $this->getProperty('symptoms');
    }

    /**
     * @param string $symptoms
     */
    public function setSymptoms(string $symptoms = null)
    {
        $this->setProperty('symptoms', $symptoms);
    }

    /**
     * @return string
     */
    public function getTreatment()
    {
        return $this->getProperty('treatment');
    }

    /**
     * @param string $treatment
     */
    public function setTreatment(string $treatment = null)
    {
        $this->setProperty('treatment', $treatment);
    }
}
