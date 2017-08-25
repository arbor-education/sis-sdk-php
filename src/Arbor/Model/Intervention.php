<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Intervention extends ModelBase
{
    const INTERVENTION_DEFINITION = 'interventionDefinition';

    const NAME = 'name';

    const ACADEMIC_YEAR = 'academicYear';

    const TERM = 'term';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const MONITORING = 'monitoring';

    const AIMS_OF_INTERVENTION = 'aimsOfIntervention';

    const STRATEGIES = 'strategies';

    const SUCCESS_CRITERIA = 'successCriteria';

    const NEXT_REVIEW_DATE = 'nextReviewDate';

    const ESTIMATED_DURATION = 'estimatedDuration';

    const SUBJECT = 'subject';

    const CATEGORY = 'category';

    const IS_COMPLETED = 'isCompleted';

    protected $_resourceType = ResourceType::INTERVENTION;

    /**
     * @param Query $query
     * @return Intervention[] | Collection
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

        $query->setResourceType(ResourceType::INTERVENTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Intervention
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::INTERVENTION, $id);
    }

    /**
     * @return InterventionDefinition
     */
    public function getInterventionDefinition()
    {
        return $this->getProperty('interventionDefinition');
    }

    /**
     * @param InterventionDefinition $interventionDefinition
     */
    public function setInterventionDefinition(InterventionDefinition $interventionDefinition = null)
    {
        $this->setProperty('interventionDefinition', $interventionDefinition);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return Term
     */
    public function getTerm()
    {
        return $this->getProperty('term');
    }

    /**
     * @param Term $term
     */
    public function setTerm(Term $term = null)
    {
        $this->setProperty('term', $term);
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
    public function getAimsOfIntervention()
    {
        return $this->getProperty('aimsOfIntervention');
    }

    /**
     * @param string $aimsOfIntervention
     */
    public function setAimsOfIntervention($aimsOfIntervention = null)
    {
        $this->setProperty('aimsOfIntervention', $aimsOfIntervention);
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
     * @return \DateTime
     */
    public function getNextReviewDate()
    {
        return $this->getProperty('nextReviewDate');
    }

    /**
     * @param \DateTime $nextReviewDate
     */
    public function setNextReviewDate(\DateTime $nextReviewDate = null)
    {
        $this->setProperty('nextReviewDate', $nextReviewDate);
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

    /**
     * @return Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param Subject $subject
     */
    public function setSubject(Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return InterventionCategory
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param InterventionCategory $category
     */
    public function setCategory(InterventionCategory $category = null)
    {
        $this->setProperty('category', $category);
    }

    /**
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->getProperty('isCompleted');
    }

    /**
     * @param bool $isCompleted
     */
    public function setIsCompleted($isCompleted = null)
    {
        $this->setProperty('isCompleted', $isCompleted);
    }
}
