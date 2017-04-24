<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MedicalCondition;
use \Arbor\Model\Medication;

class MedicalConditionMedication extends ModelBase
{
    const MEDICAL_CONDITION = 'medicalCondition';

    const MEDICATION = 'medication';

    const DOSAGE = 'dosage';

    const FREQUENCY = 'frequency';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::MEDICAL_CONDITION_MEDICATION;

    /**
     * @param \Arbor\Query\Query $query
     * @return MedicalConditionMedication[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("MedicalConditionMedication");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MedicalConditionMedication
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::MEDICAL_CONDITION_MEDICATION, $id);
    }

    /**
     * @return MedicalCondition
     */
    public function getMedicalCondition()
    {
        return $this->getProperty("medicalCondition");
    }

    /**
     * @param MedicalCondition $medicalCondition
     */
    public function setMedicalCondition(MedicalCondition $medicalCondition = null)
    {
        $this->setProperty("medicalCondition", $medicalCondition);
    }

    /**
     * @return Medication
     */
    public function getMedication()
    {
        return $this->getProperty("medication");
    }

    /**
     * @param Medication $medication
     */
    public function setMedication(Medication $medication = null)
    {
        $this->setProperty("medication", $medication);
    }

    /**
     * @return string
     */
    public function getDosage()
    {
        return $this->getProperty("dosage");
    }

    /**
     * @param string $dosage
     */
    public function setDosage($dosage = null)
    {
        $this->setProperty("dosage", $dosage);
    }

    /**
     * @return string
     */
    public function getFrequency()
    {
        return $this->getProperty("frequency");
    }

    /**
     * @param string $frequency
     */
    public function setFrequency($frequency = null)
    {
        $this->setProperty("frequency", $frequency);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }
}
