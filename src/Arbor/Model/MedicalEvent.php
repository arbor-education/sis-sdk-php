<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class MedicalEvent extends ModelBase
{
    const PERSON = 'person';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const MEDICAL_EVENT_TYPE = 'medicalEventType';

    const MEDICAL_EVENT_DESCRIPTION = 'medicalEventDescription';

    const MEDICAL_CONDITION = 'medicalCondition';

    protected $_resourceType = ResourceType::MEDICAL_EVENT;

    /**
     * @param Query $query
     * @return MedicalEvent[] | Collection
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

        $query->setResourceType(ResourceType::MEDICAL_EVENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MedicalEvent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MEDICAL_EVENT, $id);
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
    public function setPerson(ModelBase $person = null)
    {
        $this->setProperty('person', $person);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty('startDatetime');
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty('startDatetime', $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty('endDatetime');
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty('endDatetime', $endDatetime);
    }

    /**
     * @return MedicalEventType
     */
    public function getMedicalEventType()
    {
        return $this->getProperty('medicalEventType');
    }

    /**
     * @param MedicalEventType $medicalEventType
     */
    public function setMedicalEventType(MedicalEventType $medicalEventType = null)
    {
        $this->setProperty('medicalEventType', $medicalEventType);
    }

    /**
     * @return string
     */
    public function getMedicalEventDescription()
    {
        return $this->getProperty('medicalEventDescription');
    }

    /**
     * @param string $medicalEventDescription
     */
    public function setMedicalEventDescription($medicalEventDescription = null)
    {
        $this->setProperty('medicalEventDescription', $medicalEventDescription);
    }

    /**
     * @return MedicalCondition
     */
    public function getMedicalCondition()
    {
        return $this->getProperty('medicalCondition');
    }

    /**
     * @param MedicalCondition $medicalCondition
     */
    public function setMedicalCondition(MedicalCondition $medicalCondition = null)
    {
        $this->setProperty('medicalCondition', $medicalCondition);
    }

}
