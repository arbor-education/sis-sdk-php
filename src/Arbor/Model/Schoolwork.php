<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Schoolwork extends ModelBase
{

    const TITLE = 'title';

    const STUDENT_INSTRUCTIONS = 'studentInstructions';

    const TEACHER_NOTES = 'teacherNotes';

    const SET_DATETIME = 'setDatetime';

    const DUE_EVENT = 'dueEvent';

    const DUE_DATETIME = 'dueDatetime';

    const MARKING_STARTED_DATETIME = 'markingStartedDatetime';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    const SESSION = 'session';

    const ACADEMIC_UNIT = 'academicUnit';

    protected $_resourceType = ResourceType::SCHOOLWORK;

    /**
     * @param Query $query
     * @return Schoolwork[] | Collection
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

        $query->setResourceType(ResourceType::SCHOOLWORK);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Schoolwork
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SCHOOLWORK, $id);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }

    /**
     * @param string $title
     */
    public function setTitle($title = null)
    {
        $this->setProperty('title', $title);
    }

    /**
     * @return string
     */
    public function getStudentInstructions()
    {
        return $this->getProperty('studentInstructions');
    }

    /**
     * @param string $studentInstructions
     */
    public function setStudentInstructions($studentInstructions = null)
    {
        $this->setProperty('studentInstructions', $studentInstructions);
    }

    /**
     * @return string
     */
    public function getTeacherNotes()
    {
        return $this->getProperty('teacherNotes');
    }

    /**
     * @param string $teacherNotes
     */
    public function setTeacherNotes($teacherNotes = null)
    {
        $this->setProperty('teacherNotes', $teacherNotes);
    }

    /**
     * @return \DateTime
     */
    public function getSetDatetime()
    {
        return $this->getProperty('setDatetime');
    }

    /**
     * @param \DateTime $setDatetime
     */
    public function setSetDatetime(\DateTime $setDatetime = null)
    {
        $this->setProperty('setDatetime', $setDatetime);
    }

    /**
     * @return ModelBase
     */
    public function getDueEvent()
    {
        return $this->getProperty('dueEvent');
    }

    /**
     * @param ModelBase $dueEvent
     */
    public function setDueEvent(ModelBase $dueEvent = null)
    {
        $this->setProperty('dueEvent', $dueEvent);
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
    public function getMarkingStartedDatetime()
    {
        return $this->getProperty('markingStartedDatetime');
    }

    /**
     * @param \DateTime $markingStartedDatetime
     */
    public function setMarkingStartedDatetime(\DateTime $markingStartedDatetime = null)
    {
        $this->setProperty('markingStartedDatetime', $markingStartedDatetime);
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
     * @return Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param AcademicUnit $academicUnit
     */
    public function setAcademicUnit(AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }


}
