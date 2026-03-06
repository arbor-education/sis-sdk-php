<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class FixedPeriodExclusion extends ModelBase
{
    public const STUDENT = 'student';

    public const EXCLUSION_REASON = 'exclusionReason';

    public const FROM_DATETIME = 'fromDatetime';

    public const UNTIL_DATETIME = 'untilDatetime';

    public const DAILY_START_TIME = 'dailyStartTime';

    public const DAILY_END_TIME = 'dailyEndTime';

    public const DECISION_DATETIME = 'decisionDatetime';

    public const NOTIFIED_STUDENT_DATETIME = 'notifiedStudentDatetime';

    public const NOTIFIED_GUARDIANS_DATETIME = 'notifiedGuardiansDatetime';

    public const STATISTICAL_DAYS_EXCLUDED = 'statisticalDaysExcluded';

    public const SCHOOL_DEFINED_SESSIONS_EXCLUDED = 'schoolDefinedSessionsExcluded';

    public const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::FIXED_PERIOD_EXCLUSION;

    /**
     * @param Query $query
     * @return FixedPeriodExclusion[] | Collection
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

        $query->setResourceType(ResourceType::FIXED_PERIOD_EXCLUSION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return FixedPeriodExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::FIXED_PERIOD_EXCLUSION, $id);
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
     * @return \Arbor\Model\ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty('exclusionReason');
    }

    /**
     * @param \Arbor\Model\ExclusionReason $exclusionReason
     */
    public function setExclusionReason(\Arbor\Model\ExclusionReason $exclusionReason = null)
    {
        $this->setProperty('exclusionReason', $exclusionReason);
    }

    /**
     * @return \DateTime
     */
    public function getFromDatetime()
    {
        return $this->getProperty('fromDatetime');
    }

    /**
     * @param \DateTime $fromDatetime
     */
    public function setFromDatetime(\DateTime $fromDatetime = null)
    {
        $this->setProperty('fromDatetime', $fromDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getUntilDatetime()
    {
        return $this->getProperty('untilDatetime');
    }

    /**
     * @param \DateTime $untilDatetime
     */
    public function setUntilDatetime(\DateTime $untilDatetime = null)
    {
        $this->setProperty('untilDatetime', $untilDatetime);
    }

    /**
     * @return string
     */
    public function getDailyStartTime()
    {
        return $this->getProperty('dailyStartTime');
    }

    /**
     * @param string $dailyStartTime
     */
    public function setDailyStartTime(string $dailyStartTime = null)
    {
        $this->setProperty('dailyStartTime', $dailyStartTime);
    }

    /**
     * @return string
     */
    public function getDailyEndTime()
    {
        return $this->getProperty('dailyEndTime');
    }

    /**
     * @param string $dailyEndTime
     */
    public function setDailyEndTime(string $dailyEndTime = null)
    {
        $this->setProperty('dailyEndTime', $dailyEndTime);
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
     * @return float
     */
    public function getStatisticalDaysExcluded()
    {
        return $this->getProperty('statisticalDaysExcluded');
    }

    /**
     * @param float $statisticalDaysExcluded
     */
    public function setStatisticalDaysExcluded(float $statisticalDaysExcluded = null)
    {
        $this->setProperty('statisticalDaysExcluded', $statisticalDaysExcluded);
    }

    /**
     * @return int
     */
    public function getSchoolDefinedSessionsExcluded()
    {
        return $this->getProperty('schoolDefinedSessionsExcluded');
    }

    /**
     * @param int $schoolDefinedSessionsExcluded
     */
    public function setSchoolDefinedSessionsExcluded(int $schoolDefinedSessionsExcluded = null)
    {
        $this->setProperty('schoolDefinedSessionsExcluded', $schoolDefinedSessionsExcluded);
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
    public function setNarrative(string $narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }
}
