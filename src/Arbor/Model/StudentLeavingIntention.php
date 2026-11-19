<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentLeavingIntention extends ModelBase
{
    public const STUDENT = 'student';

    public const RECORDED_DATE = 'recordedDate';

    public const ANTICIPATED_LEAVING_DATE = 'anticipatedLeavingDate';

    public const STUDENT_LEAVING_INTENTION_TYPE = 'studentLeavingIntentionType';

    protected $_resourceType = ResourceType::STUDENT_LEAVING_INTENTION;

    /**
     * @param Query $query
     * @return StudentLeavingIntention[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_LEAVING_INTENTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentLeavingIntention
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_LEAVING_INTENTION, $id);
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
    public function getRecordedDate()
    {
        return $this->getProperty('recordedDate');
    }

    /**
     * @param \DateTime $recordedDate
     */
    public function setRecordedDate(\DateTime $recordedDate = null)
    {
        $this->setProperty('recordedDate', $recordedDate);
    }

    /**
     * @return \DateTime
     */
    public function getAnticipatedLeavingDate()
    {
        return $this->getProperty('anticipatedLeavingDate');
    }

    /**
     * @param \DateTime $anticipatedLeavingDate
     */
    public function setAnticipatedLeavingDate(\DateTime $anticipatedLeavingDate = null)
    {
        $this->setProperty('anticipatedLeavingDate', $anticipatedLeavingDate);
    }

    /**
     * @return \Arbor\Model\StudentLeavingIntentionType
     */
    public function getStudentLeavingIntentionType()
    {
        return $this->getProperty('studentLeavingIntentionType');
    }

    /**
     * @param \Arbor\Model\StudentLeavingIntentionType $studentLeavingIntentionType
     */
    public function setStudentLeavingIntentionType(\Arbor\Model\StudentLeavingIntentionType $studentLeavingIntentionType = null)
    {
        $this->setProperty('studentLeavingIntentionType', $studentLeavingIntentionType);
    }
}
