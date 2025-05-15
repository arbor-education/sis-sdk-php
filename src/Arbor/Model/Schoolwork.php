<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Schoolwork extends ModelBase
{
    public const TITLE = 'title';

    public const STUDENT_INSTRUCTIONS = 'studentInstructions';

    public const TEACHER_NOTES = 'teacherNotes';

    public const SET_DATETIME = 'setDatetime';

    public const DUE_EVENT = 'dueEvent';

    public const DUE_DATETIME = 'dueDatetime';

    public const MARKING_STARTED_DATETIME = 'markingStartedDatetime';

    public const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    public const SESSION = 'session';

    public const ACADEMIC_UNIT = 'academicUnit';

    public const SUBMIT_VIA_ARBOR = 'submitViaArbor';

    protected $_resourceType = ResourceType::SCHOOLWORK;

    /**
     * @param Query $query
     * @return Schoolwork[] | Collection
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
    public function setTitle(string $title = null)
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
    public function setStudentInstructions(string $studentInstructions = null)
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
    public function setTeacherNotes(string $teacherNotes = null)
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
     * @return \Arbor\Model\Session
     */
    public function getDueEvent()
    {
        return $this->getProperty('dueEvent');
    }

    /**
     * @param \Arbor\Model\Session $dueEvent
     */
    public function setDueEvent(\Arbor\Model\Session $dueEvent = null)
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
     * @return \Arbor\Model\Session
     */
    public function getSession()
    {
        return $this->getProperty('session');
    }

    /**
     * @param \Arbor\Model\Session $session
     */
    public function setSession(\Arbor\Model\Session $session = null)
    {
        $this->setProperty('session', $session);
    }

    /**
     * @return \Arbor\Model\AcademicUnit
     */
    public function getAcademicUnit()
    {
        return $this->getProperty('academicUnit');
    }

    /**
     * @param \Arbor\Model\AcademicUnit $academicUnit
     */
    public function setAcademicUnit(\Arbor\Model\AcademicUnit $academicUnit = null)
    {
        $this->setProperty('academicUnit', $academicUnit);
    }

    /**
     * @return bool
     */
    public function getSubmitViaArbor()
    {
        return $this->getProperty('submitViaArbor');
    }

    /**
     * @param bool $submitViaArbor
     */
    public function setSubmitViaArbor(bool $submitViaArbor = null)
    {
        $this->setProperty('submitViaArbor', $submitViaArbor);
    }
}
