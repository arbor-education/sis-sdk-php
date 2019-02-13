<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentProgressAssessment extends ModelBase
{

    const STUDENT = 'student';

    const ASSESSMENT = 'assessment';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    const ASSESSMENT_DATE = 'assessmentDate';

    const COMPLETED_DATE = 'completedDate';

    protected $_resourceType = ResourceType::STUDENT_PROGRESS_ASSESSMENT;

    /**
     * @param Query $query
     * @return StudentProgressAssessment[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_PROGRESS_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentProgressAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_PROGRESS_ASSESSMENT, $id);
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
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty('progressMeasurementPeriod');
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty('progressMeasurementPeriod', $progressMeasurementPeriod);
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
