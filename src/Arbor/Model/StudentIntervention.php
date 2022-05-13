<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentIntervention extends ModelBase
{
    const STUDENT = 'student';

    const INTERVENTION = 'intervention';

    const INTERVENTION_GROUP = 'interventionGroup';

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const PRIORITY = 'priority';

    const STATUS = 'status';

    const MONITORING = 'monitoring';

    const AIMS = 'aims';

    const STRATEGIES = 'strategies';

    const SUCCESS_CRITERIA = 'successCriteria';

    const REASON = 'reason';

    const SEN_NEED = 'senNeed';

    const LANGUAGE_ABILITY = 'languageAbility';

    const MEDICAL_CONDITION = 'medicalCondition';

    const SUCCESS = 'success';

    const ESTIMATED_DURATION = 'estimatedDuration';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION;

    /**
     * @param Query $query
     * @return StudentIntervention[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_INTERVENTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentIntervention
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_INTERVENTION, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param Intervention $intervention
     */
    public function setIntervention(Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return InterventionGroup
     */
    public function getInterventionGroup()
    {
        return $this->getProperty('interventionGroup');
    }

    /**
     * @param InterventionGroup $interventionGroup
     */
    public function setInterventionGroup(InterventionGroup $interventionGroup = null)
    {
        $this->setProperty('interventionGroup', $interventionGroup);
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
     * @return string
     */
    public function getPriority()
    {
        return $this->getProperty('priority');
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority = null)
    {
        $this->setProperty('priority', $priority);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getProperty('status');
    }

    /**
     * @param string $status
     */
    public function setStatus($status = null)
    {
        $this->setProperty('status', $status);
    }

    /**
     * @return string
     */
    public function getMonitoring()
    {
        return $this->getProperty('monitoring');
    }

    /**
     * @param string $monitoring
     */
    public function setMonitoring($monitoring = null)
    {
        $this->setProperty('monitoring', $monitoring);
    }

    /**
     * @return string
     */
    public function getAims()
    {
        return $this->getProperty('aims');
    }

    /**
     * @param string $aims
     */
    public function setAims($aims = null)
    {
        $this->setProperty('aims', $aims);
    }

    /**
     * @return string
     */
    public function getStrategies()
    {
        return $this->getProperty('strategies');
    }

    /**
     * @param string $strategies
     */
    public function setStrategies($strategies = null)
    {
        $this->setProperty('strategies', $strategies);
    }

    /**
     * @return string
     */
    public function getSuccessCriteria()
    {
        return $this->getProperty('successCriteria');
    }

    /**
     * @param string $successCriteria
     */
    public function setSuccessCriteria($successCriteria = null)
    {
        $this->setProperty('successCriteria', $successCriteria);
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->getProperty('reason');
    }

    /**
     * @param string $reason
     */
    public function setReason($reason = null)
    {
        $this->setProperty('reason', $reason);
    }

    /**
     * @return SenNeed
     */
    public function getSenNeed()
    {
        return $this->getProperty('senNeed');
    }

    /**
     * @param SenNeed $senNeed
     */
    public function setSenNeed(SenNeed $senNeed = null)
    {
        $this->setProperty('senNeed', $senNeed);
    }

    /**
     * @return LanguageAbility
     */
    public function getLanguageAbility()
    {
        return $this->getProperty('languageAbility');
    }

    /**
     * @param LanguageAbility $languageAbility
     */
    public function setLanguageAbility(LanguageAbility $languageAbility = null)
    {
        $this->setProperty('languageAbility', $languageAbility);
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

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->getProperty('success');
    }

    /**
     * @param string $success
     */
    public function setSuccess($success = null)
    {
        $this->setProperty('success', $success);
    }

    /**
     * @return string
     */
    public function getEstimatedDuration()
    {
        return $this->getProperty('estimatedDuration');
    }

    /**
     * @param string $estimatedDuration
     */
    public function setEstimatedDuration($estimatedDuration = null)
    {
        $this->setProperty('estimatedDuration', $estimatedDuration);
    }

}
