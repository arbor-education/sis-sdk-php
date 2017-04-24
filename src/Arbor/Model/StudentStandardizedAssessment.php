<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\StandardizedAssessmentTemplate;

class StudentStandardizedAssessment extends ModelBase
{
    const STUDENT = 'student';

    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'standardizedAssessmentTemplate';

    const ASSESSMENT_DATE = 'assessmentDate';

    const COMPLETED_DATE = 'completedDate';

    protected $_resourceType = ResourceType::STUDENT_STANDARDIZED_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentStandardizedAssessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentStandardizedAssessment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentStandardizedAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_STANDARDIZED_ASSESSMENT, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return StandardizedAssessmentTemplate
     */
    public function getStandardizedAssessmentTemplate()
    {
        return $this->getProperty("standardizedAssessmentTemplate");
    }

    /**
     * @param StandardizedAssessmentTemplate $standardizedAssessmentTemplate
     */
    public function setStandardizedAssessmentTemplate(StandardizedAssessmentTemplate $standardizedAssessmentTemplate = null)
    {
        $this->setProperty("standardizedAssessmentTemplate", $standardizedAssessmentTemplate);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->getProperty("assessmentDate");
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate(\DateTime $assessmentDate = null)
    {
        $this->setProperty("assessmentDate", $assessmentDate);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->getProperty("completedDate");
    }

    /**
     * @param \DateTime $completedDate
     */
    public function setCompletedDate(\DateTime $completedDate = null)
    {
        $this->setProperty("completedDate", $completedDate);
    }
}
