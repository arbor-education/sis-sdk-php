<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentUniversityRecord extends ModelBase
{
    public const STUDENT = 'student';

    public const UNIVERSITY = 'university';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STUDENT_UNIVERSITY_RECORD;

    /**
     * @param Query $query
     * @return StudentUniversityRecord[] | Collection
     * @throws Exception
     */
    public static function query(?\Arbor\Query\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::STUDENT_UNIVERSITY_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentUniversityRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_UNIVERSITY_RECORD, $id);
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
    public function setStudent(?\Arbor\Model\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return \Arbor\Model\University
     */
    public function getUniversity()
    {
        return $this->getProperty('university');
    }

    /**
     * @param \Arbor\Model\University $university
     */
    public function setUniversity(?\Arbor\Model\University $university = null)
    {
        $this->setProperty('university', $university);
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
    public function setStartDate(?\DateTime $startDate = null)
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
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }
}
