<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentIntervention extends ModelBase
{
    public const STUDENT = 'student';

    public const INTERVENTION = 'intervention';

    public const INTERVENTION_GROUP = 'interventionGroup';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const PRIORITY = 'priority';

    public const STATUS = 'status';

    public const MONITORING = 'monitoring';

    public const AIMS = 'aims';

    public const STRATEGIES = 'strategies';

    public const SUCCESS_CRITERIA = 'successCriteria';

    public const REASON = 'reason';

    public const SEN_NEED = 'senNeed';

    public const LANGUAGE_ABILITY = 'languageAbility';

    public const MEDICAL_CONDITION = 'medicalCondition';

    public const SUCCESS = 'success';

    public const ESTIMATED_DURATION = 'estimatedDuration';

    protected $_resourceType = ResourceType::STUDENT_INTERVENTION;

    /**
     * @param Query $query
     * @return StudentIntervention[] | Collection
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
     * @return \Arbor\Model\Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param \Arbor\Model\Student $student
     */
    public function setStudent(\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getIntervention()
    {
        return $this->getProperty('intervention');
    }

    /**
     * @param \Arbor\Model\Intervention $intervention
     */
    public function setIntervention(\Arbor\Model\Intervention $intervention = null)
    {
        $this->setProperty('intervention', $intervention);
    }

    /**
     * @return \Arbor\Model\InterventionGroup
     */
    public function getInterventionGroup()
    {
        return $this->getProperty('interventionGroup');
    }

    /**
     * @param \Arbor\Model\InterventionGroup $interventionGroup
     */
    public function setInterventionGroup(\Arbor\Model\InterventionGroup $interventionGroup = null)
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
    public function setPriority(string $priority = null)
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
    public function setStatus(string $status = null)
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
    public function setMonitoring(string $monitoring = null)
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
    public function setAims(string $aims = null)
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
    public function setStrategies(string $strategies = null)
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
    public function setSuccessCriteria(string $successCriteria = null)
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
    public function setReason(string $reason = null)
    {
        $this->setProperty('reason', $reason);
    }

    /**
     * @return \Arbor\Model\SenNeed
     */
    public function getSenNeed()
    {
        return $this->getProperty('senNeed');
    }

    /**
     * @param \Arbor\Model\SenNeed $senNeed
     */
    public function setSenNeed(\Arbor\Model\SenNeed $senNeed = null)
    {
        $this->setProperty('senNeed', $senNeed);
    }

    /**
     * @return \Arbor\Model\LanguageAbility
     */
    public function getLanguageAbility()
    {
        return $this->getProperty('languageAbility');
    }

    /**
     * @param \Arbor\Model\LanguageAbility $languageAbility
     */
    public function setLanguageAbility(\Arbor\Model\LanguageAbility $languageAbility = null)
    {
        $this->setProperty('languageAbility', $languageAbility);
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
     * @return string
     */
    public function getSuccess()
    {
        return $this->getProperty('success');
    }

    /**
     * @param string $success
     */
    public function setSuccess(string $success = null)
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
    public function setEstimatedDuration(string $estimatedDuration = null)
    {
        $this->setProperty('estimatedDuration', $estimatedDuration);
    }
}
