<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Intervention extends ModelBase
{
    public const NAME = 'name';

    public const ACADEMIC_YEAR = 'academicYear';

    public const TERM = 'term';

    public const START_DATETIME = 'startDatetime';

    public const END_DATETIME = 'endDatetime';

    public const MONITORING = 'monitoring';

    public const AIMS_OF_INTERVENTION = 'aimsOfIntervention';

    public const STRATEGIES = 'strategies';

    public const SUCCESS_CRITERIA = 'successCriteria';

    public const NEXT_REVIEW_DATE = 'nextReviewDate';

    public const ESTIMATED_DURATION = 'estimatedDuration';

    public const SUBJECT = 'subject';

    public const CATEGORY = 'category';

    public const IS_COMPLETED = 'isCompleted';

    public const LOCATION = 'location';

    public const COPIED_TO_INTERVENTION = 'copiedToIntervention';

    protected $_resourceType = ResourceType::INTERVENTION;

    /**
     * @param Query $query
     * @return Intervention[] | Collection
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
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name = null)
    {
        $this->setProperty('name', $name);
    }

    /**
     * @return \Arbor\Model\AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param \Arbor\Model\AcademicYear $academicYear
     */
    public function setAcademicYear(\Arbor\Model\AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return \Arbor\Model\Term
     */
    public function getTerm()
    {
        return $this->getProperty('term');
    }

    /**
     * @param \Arbor\Model\Term $term
     */
    public function setTerm(\Arbor\Model\Term $term = null)
    {
        $this->setProperty('term', $term);
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
    public function getAimsOfIntervention()
    {
        return $this->getProperty('aimsOfIntervention');
    }

    /**
     * @param string $aimsOfIntervention
     */
    public function setAimsOfIntervention(string $aimsOfIntervention = null)
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
    public function setEstimatedDuration(string $estimatedDuration = null)
    {
        $this->setProperty('estimatedDuration', $estimatedDuration);
    }

    /**
     * @return \Arbor\Model\Subject
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param \Arbor\Model\Subject $subject
     */
    public function setSubject(\Arbor\Model\Subject $subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return \Arbor\Model\InterventionCategory
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }

    /**
     * @param \Arbor\Model\InterventionCategory $category
     */
    public function setCategory(\Arbor\Model\InterventionCategory $category = null)
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
    public function setIsCompleted(bool $isCompleted = null)
    {
        $this->setProperty('isCompleted', $isCompleted);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty('location');
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(\ModelBase $location = null)
    {
        $this->setProperty('location', $location);
    }

    /**
     * @return \Arbor\Model\Intervention
     */
    public function getCopiedToIntervention()
    {
        return $this->getProperty('copiedToIntervention');
    }

    /**
     * @param \Arbor\Model\Intervention $copiedToIntervention
     */
    public function setCopiedToIntervention(\Arbor\Model\Intervention $copiedToIntervention = null)
    {
        $this->setProperty('copiedToIntervention', $copiedToIntervention);
    }
}
