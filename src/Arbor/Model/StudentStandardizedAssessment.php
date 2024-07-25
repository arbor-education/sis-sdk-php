<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentStandardizedAssessment extends ModelBase
{
    public const STUDENT = 'student';

    public const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    public const ASSESSMENT_DATE = 'assessmentDate';

    public const COMPLETED_DATE = 'completedDate';

    protected $_resourceType = ResourceType::STUDENT_STANDARDIZED_ASSESSMENT;

    /**
     * @param Query $query
     * @return StudentStandardizedAssessment[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_STANDARDIZED_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentStandardizedAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_STANDARDIZED_ASSESSMENT, $id);
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
     * @return \Arbor\Model\StandardizedAssessmentTemplate
     */
    public function getStandardizedAssessmentTemplate()
    {
        return $this->getProperty('standardizedAssessmentTemplate');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentTemplate
     * $standardizedAssessmentTemplate
     */
    public function setStandardizedAssessmentTemplate(\Arbor\Model\StandardizedAssessmentTemplate $standardizedAssessmentTemplate = null)
    {
        $this->setProperty('standardizedAssessmentTemplate', $standardizedAssessmentTemplate);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty('assessmentDate');
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty('assessmentDate', $assessmentDate);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->getProperty('completedDate');
    }

    /**
     * @param \DateTime $completedDate
     */
    public function setCompletedDate(\DateTime $completedDate = null)
    {
        $this->setProperty('completedDate', $completedDate);
    }
}
