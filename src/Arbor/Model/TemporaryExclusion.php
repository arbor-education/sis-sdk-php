<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\ExclusionReason;

class TemporaryExclusion extends ModelBase
{
    const STUDENT = 'student';

    const EXCLUSION_REASON = 'exclusionReason';

    const FROM_DATETIME = 'fromDatetime';

    const UNTIL_DATETIME = 'untilDatetime';

    const DAILY_START_TIME = 'dailyStartTime';

    const DAILY_END_TIME = 'dailyEndTime';

    const DECISION_DATETIME = 'decisionDatetime';

    const NOTIFIED_STUDENT_DATETIME = 'notifiedStudentDatetime';

    const NOTIFIED_GUARDIANS_DATETIME = 'notifiedGuardiansDatetime';

    const STATISTICAL_DAYS_EXCLUDED = 'statisticalDaysExcluded';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::TEMPORARY_EXCLUSION;

    /**
     * @param \Arbor\Query\Query $query
     * @return TemporaryExclusion[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("TemporaryExclusion");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return TemporaryExclusion
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::TEMPORARY_EXCLUSION, $id);
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
     * @return ExclusionReason
     */
    public function getExclusionReason()
    {
        return $this->getProperty("exclusionReason");
    }

    /**
     * @param ExclusionReason $exclusionReason
     */
    public function setExclusionReason(ExclusionReason $exclusionReason = null)
    {
        $this->setProperty("exclusionReason", $exclusionReason);
    }

    /**
     * @return \DateTime
     */
    public function getFromDatetime()
    {
        return $this->getProperty("fromDatetime");
    }

    /**
     * @param \DateTime $fromDatetime
     */
    public function setFromDatetime(\DateTime $fromDatetime = null)
    {
        $this->setProperty("fromDatetime", $fromDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getUntilDatetime()
    {
        return $this->getProperty("untilDatetime");
    }

    /**
     * @param \DateTime $untilDatetime
     */
    public function setUntilDatetime(\DateTime $untilDatetime = null)
    {
        $this->setProperty("untilDatetime", $untilDatetime);
    }

    /**
     * @return string
     */
    public function getDailyStartTime()
    {
        return $this->getProperty("dailyStartTime");
    }

    /**
     * @param string $dailyStartTime
     */
    public function setDailyStartTime($dailyStartTime = null)
    {
        $this->setProperty("dailyStartTime", $dailyStartTime);
    }

    /**
     * @return string
     */
    public function getDailyEndTime()
    {
        return $this->getProperty("dailyEndTime");
    }

    /**
     * @param string $dailyEndTime
     */
    public function setDailyEndTime($dailyEndTime = null)
    {
        $this->setProperty("dailyEndTime", $dailyEndTime);
    }

    /**
     * @return \DateTime
     */
    public function getDecisionDatetime()
    {
        return $this->getProperty("decisionDatetime");
    }

    /**
     * @param \DateTime $decisionDatetime
     */
    public function setDecisionDatetime(\DateTime $decisionDatetime = null)
    {
        $this->setProperty("decisionDatetime", $decisionDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedStudentDatetime()
    {
        return $this->getProperty("notifiedStudentDatetime");
    }

    /**
     * @param \DateTime $notifiedStudentDatetime
     */
    public function setNotifiedStudentDatetime(\DateTime $notifiedStudentDatetime = null)
    {
        $this->setProperty("notifiedStudentDatetime", $notifiedStudentDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getNotifiedGuardiansDatetime()
    {
        return $this->getProperty("notifiedGuardiansDatetime");
    }

    /**
     * @param \DateTime $notifiedGuardiansDatetime
     */
    public function setNotifiedGuardiansDatetime(\DateTime $notifiedGuardiansDatetime = null)
    {
        $this->setProperty("notifiedGuardiansDatetime", $notifiedGuardiansDatetime);
    }

    /**
     * @return float
     */
    public function getStatisticalDaysExcluded()
    {
        return $this->getProperty("statisticalDaysExcluded");
    }

    /**
     * @param float $statisticalDaysExcluded
     */
    public function setStatisticalDaysExcluded($statisticalDaysExcluded = null)
    {
        $this->setProperty("statisticalDaysExcluded", $statisticalDaysExcluded);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }
}
