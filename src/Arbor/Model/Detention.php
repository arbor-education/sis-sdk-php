<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Detention extends \ModelBase
{
    public const STUDENT = 'student';

    public const ISSUED_BY_STAFF = 'issuedByStaff';

    public const DETENTION_SESSION = 'detentionSession';

    public const DETENTION_TYPE = 'detentionType';

    public const DECISION_DATETIME = 'decisionDatetime';

    public const NOTIFIED_STUDENT_DATETIME = 'notifiedStudentDatetime';

    public const NOTIFIED_GUARDIANS_DATETIME = 'notifiedGuardiansDatetime';

    public const NOTIFIED_TUTORS_DATETIME = 'notifiedTutorsDatetime';

    public const DETENTION_DURATION = 'detentionDuration';

    public const ATTENDANCE_MARK = 'attendanceMark';

    public const NOTES = 'notes';

    public const REASON_FOR_DETENTION = 'reasonForDetention';

    public const ABSENTEES_DETENTION_ACTION = 'absenteesDetentionAction';

    public const EVENT = 'event';

    protected $_resourceType = ResourceType::DETENTION;

    /**
     * @param Query $query
     * @return Detention[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::DETENTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Detention
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::DETENTION, $id);
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
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return Staff
     */
    public function getIssuedByStaff()
    {
        return $this->getProperty('issuedByStaff');
    }

    /**
     * @param Staff $issuedByStaff
     */
    public function setIssuedByStaff(\Staff $issuedByStaff = null)
    {
        $this->setProperty('issuedByStaff', $issuedByStaff);
    }

    /**
     * @return DetentionSession
     */
    public function getDetentionSession()
    {
        return $this->getProperty('detentionSession');
    }

    /**
     * @param DetentionSession $detentionSession
     */
    public function setDetentionSession(\DetentionSession $detentionSession = null)
    {
        $this->setProperty('detentionSession', $detentionSession);
    }

    /**
     * @return DetentionType
     */
    public function getDetentionType()
    {
        return $this->getProperty('detentionType');
    }

    /**
     * @param DetentionType $detentionType
     */
    public function setDetentionType(\DetentionType $detentionType = null)
    {
        $this->setProperty('detentionType', $detentionType);
    }

    /**
     * @return \DateTime
     */
    public function getDecisionDatetime()
    {
        return $this->getProperty('decisionDatetime');
    }

    /**
     * @param \DateTime $decisionDatetime
     */
    public function setDecisionDatetime(\DateTime $decisionDatetime = null)
    {
        $this->setProperty('decisionDatetime', $decisionDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedStudentDatetime()
    {
        return $this->getProperty('notifiedStudentDatetime');
    }

    /**
     * @param \DateTime $notifiedStudentDatetime
     */
    public function setNotifiedStudentDatetime(\DateTime $notifiedStudentDatetime = null)
    {
        $this->setProperty('notifiedStudentDatetime', $notifiedStudentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedGuardiansDatetime()
    {
        return $this->getProperty('notifiedGuardiansDatetime');
    }

    /**
     * @param \DateTime $notifiedGuardiansDatetime
     */
    public function setNotifiedGuardiansDatetime(\DateTime $notifiedGuardiansDatetime = null)
    {
        $this->setProperty('notifiedGuardiansDatetime', $notifiedGuardiansDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedTutorsDatetime()
    {
        return $this->getProperty('notifiedTutorsDatetime');
    }

    /**
     * @param \DateTime $notifiedTutorsDatetime
     */
    public function setNotifiedTutorsDatetime(\DateTime $notifiedTutorsDatetime = null)
    {
        $this->setProperty('notifiedTutorsDatetime', $notifiedTutorsDatetime);
    }

    /**
     * @return string
     */
    public function getDetentionDuration()
    {
        return $this->getProperty('detentionDuration');
    }

    /**
     * @param string $detentionDuration
     */
    public function setDetentionDuration(string $detentionDuration = null)
    {
        $this->setProperty('detentionDuration', $detentionDuration);
    }

    /**
     * @return string
     */
    public function getAttendanceMark()
    {
        return $this->getProperty('attendanceMark');
    }

    /**
     * @param string $attendanceMark
     */
    public function setAttendanceMark(string $attendanceMark = null)
    {
        $this->setProperty('attendanceMark', $attendanceMark);
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->getProperty('notes');
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes = null)
    {
        $this->setProperty('notes', $notes);
    }

    /**
     * @return Behaviour
     */
    public function getReasonForDetention()
    {
        return $this->getProperty('reasonForDetention');
    }

    /**
     * @param Behaviour $reasonForDetention
     */
    public function setReasonForDetention(\Behaviour $reasonForDetention = null)
    {
        $this->setProperty('reasonForDetention', $reasonForDetention);
    }

    /**
     * @return ModelBase
     */
    public function getAbsenteesDetentionAction()
    {
        return $this->getProperty('absenteesDetentionAction');
    }

    /**
     * @param ModelBase $absenteesDetentionAction
     */
    public function setAbsenteesDetentionAction(\ModelBase $absenteesDetentionAction = null)
    {
        $this->setProperty('absenteesDetentionAction', $absenteesDetentionAction);
    }

    /**
     * @return ModelBase
     */
    public function getEvent()
    {
        return $this->getProperty('event');
    }

    /**
     * @param ModelBase $event
     */
    public function setEvent(\ModelBase $event = null)
    {
        $this->setProperty('event', $event);
    }
}
