<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PermanentExclusion extends ModelBase
{
    const STUDENT = 'student';

    const EXCLUSION_REASON = 'exclusionReason';

    const FROM_DATE = 'fromDate';

    const DECISION_DATETIME = 'decisionDatetime';

    const NOTIFIED_STUDENT_DATETIME = 'notifiedStudentDatetime';

    const NOTIFIED_GUARDIANS_DATETIME = 'notifiedGuardiansDatetime';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::PERMANENT_EXCLUSION;

    /**
     * @param Query $query
     * @return PermanentExclusion[] | Collection
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

        $query->setResourceType(ResourceType::PERMANENT_EXCLUSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PermanentExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PERMANENT_EXCLUSION, $id);
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
     * @return ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty('exclusionReason');
    }

    /**
     * @param ExclusionReason $exclusionReason
     */
    public function setExclusionReason(ExclusionReason $exclusionReason = null)
    {
        $this->setProperty('exclusionReason', $exclusionReason);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->getProperty('fromDate');
    }

    /**
     * @param \DateTime $fromDate
     */
    public function setFromDate(\DateTime $fromDate = null)
    {
        $this->setProperty('fromDate', $fromDate);
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
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

}
