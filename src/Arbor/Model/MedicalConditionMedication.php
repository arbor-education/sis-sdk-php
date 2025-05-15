<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MedicalConditionMedication extends ModelBase
{
    public const MEDICAL_CONDITION = 'medicalCondition';

    public const MEDICATION = 'medication';

    public const DOSAGE = 'dosage';

    public const FREQUENCY = 'frequency';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION_MEDICATION;

    /**
     * @param Query $query
     * @return MedicalConditionMedication[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_CONDITION_MEDICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalConditionMedication
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_CONDITION_MEDICATION, $id);
    }

    /**
     * @return \Arbor\Model\MedicalCondition
     */
    public function getMedicalCondition()
    {
        return $this->getProperty('medicalCondition');
    }

    /**
     * @param \Arbor\Model\MedicalCondition $medicalCondition
     */
    public function setMedicalCondition(\Arbor\Model\MedicalCondition $medicalCondition = null)
    {
        $this->setProperty('medicalCondition', $medicalCondition);
    }

    /**
     * @return \Arbor\Model\Medication
     */
    public function getMedication()
    {
        return $this->getProperty('medication');
    }

    /**
     * @param \Arbor\Model\Medication $medication
     */
    public function setMedication(\Arbor\Model\Medication $medication = null)
    {
        $this->setProperty('medication', $medication);
    }

    /**
     * @return string
     */
    public function getDosage()
    {
        return $this->getProperty('dosage');
    }

    /**
     * @param string $dosage
     */
    public function setDosage(string $dosage = null)
    {
        $this->setProperty('dosage', $dosage);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty('frequency');
    }

    /**
     * @param string $frequency
     */
    public function setFrequency(string $frequency = null)
    {
        $this->setProperty('frequency', $frequency);
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
}
