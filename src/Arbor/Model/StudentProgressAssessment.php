<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Assessment;
use \Arbor\Model\ProgressAssessmentBatchTarget;
use \Arbor\Model\ProgressMeasurementPeriod;

class StudentProgressAssessment extends ModelBase
{
    const STUDENT = 'student';

    const ASSESSMENT = 'assessment';

    const PROGRESS_ASSESSMENT_BATCH_TARGET = 'progressAssessmentBatchTarget';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    const ASSESSMENT_DATE = 'assessmentDate';

    const COMPLETED_DATE = 'completedDate';

    protected $_resourceType = ResourceType::STUDENT_PROGRESS_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentProgressAssessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StudentProgressAssessment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentProgressAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STUDENT_PROGRESS_ASSESSMENT, $id);
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
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
    }

    /**
     * @return ProgressAssessmentBatchTarget
     */
    public function getProgressAssessmentBatchTarget()
    {
        return $this->getProperty("progressAssessmentBatchTarget");
    }

    /**
     * @param ProgressAssessmentBatchTarget $progressAssessmentBatchTarget
     */
    public function setProgressAssessmentBatchTarget(ProgressAssessmentBatchTarget $progressAssessmentBatchTarget = null)
    {
        $this->setProperty("progressAssessmentBatchTarget", $progressAssessmentBatchTarget);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty("progressMeasurementPeriod");
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty("progressMeasurementPeriod", $progressMeasurementPeriod);
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
