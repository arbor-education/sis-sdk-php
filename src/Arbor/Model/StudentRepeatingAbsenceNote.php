<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentRepeatingAbsenceNote extends ModelBase
{
    public const STUDENT = 'student';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const START_TIME = 'startTime';

    public const END_TIME = 'endTime';

    public const REPEATING_TYPE = 'repeatingType';

    public const MAX_OCCURRENCE = 'maxOccurrence';

    protected $_resourceType = ResourceType::STUDENT_REPEATING_ABSENCE_NOTE;

    /**
     * @param Query $query
     * @return StudentRepeatingAbsenceNote[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_REPEATING_ABSENCE_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentRepeatingAbsenceNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_REPEATING_ABSENCE_NOTE, $id);
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
    public function getStartDate()
    {
        return $this->getProperty('startDate');
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty('startDate', $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }

    /**
     * @param string $startTime
     */
    public function setStartTime(string $startTime = null)
    {
        $this->setProperty('startTime', $startTime);
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }

    /**
     * @param string $endTime
     */
    public function setEndTime(string $endTime = null)
    {
        $this->setProperty('endTime', $endTime);
    }

    /**
     * @return string
     */
    public function getRepeatingType()
    {
        return $this->getProperty('repeatingType');
    }

    /**
     * @param string $repeatingType
     */
    public function setRepeatingType(string $repeatingType = null)
    {
        $this->setProperty('repeatingType', $repeatingType);
    }

    /**
     * @return int
     */
    public function getMaxOccurrence()
    {
        return $this->getProperty('maxOccurrence');
    }

    /**
     * @param int $maxOccurrence
     */
    public function setMaxOccurrence(int $maxOccurrence = null)
    {
        $this->setProperty('maxOccurrence', $maxOccurrence);
    }
}
