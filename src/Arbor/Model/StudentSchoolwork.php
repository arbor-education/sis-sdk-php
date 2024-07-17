<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentSchoolwork extends ModelBase
{
    public const SCHOOLWORK = 'schoolwork';

    public const STUDENT = 'student';

    public const DUE_DATETIME = 'dueDatetime';

    public const SUBMITTED_DATETIME = 'submittedDatetime';

    public const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    public const NOT_SUBMITTED_DATETIME = 'notSubmittedDatetime';

    protected $_resourceType = ResourceType::STUDENT_SCHOOLWORK;

    /**
     * @param Query $query
     * @return StudentSchoolwork[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_SCHOOLWORK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentSchoolwork
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_SCHOOLWORK, $id);
    }

    /**
     * @return \Arbor\Model\Schoolwork
     */
    public function getSchoolwork()
    {
        return $this->getProperty('schoolwork');
    }

    /**
     * @param \Arbor\Model\Schoolwork $schoolwork
     */
    public function setSchoolwork(\Arbor\Model\Schoolwork $schoolwork = null)
    {
        $this->setProperty('schoolwork', $schoolwork);
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
     * @return \DateTime
     */
    public function getDueDatetime()
    {
        return $this->getProperty('dueDatetime');
    }

    /**
     * @param \DateTime $dueDatetime
     */
    public function setDueDatetime(\DateTime $dueDatetime = null)
    {
        $this->setProperty('dueDatetime', $dueDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSubmittedDatetime()
    {
        return $this->getProperty('submittedDatetime');
    }

    /**
     * @param \DateTime $submittedDatetime
     */
    public function setSubmittedDatetime(\DateTime $submittedDatetime = null)
    {
        $this->setProperty('submittedDatetime', $submittedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty('markingCompletedDatetime');
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty('markingCompletedDatetime', $markingCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotSubmittedDatetime()
    {
        return $this->getProperty('notSubmittedDatetime');
    }

    /**
     * @param \DateTime $notSubmittedDatetime
     */
    public function setNotSubmittedDatetime(\DateTime $notSubmittedDatetime = null)
    {
        $this->setProperty('notSubmittedDatetime', $notSubmittedDatetime);
    }
}
