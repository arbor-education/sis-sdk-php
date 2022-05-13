<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentEmploymentRecord extends ModelBase
{
    const STUDENT = 'student';

    const EMPLOYER = 'employer';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const HOURS_PER_WEEK = 'hoursPerWeek';

    const INFORMATION_COLLECTED_DATE = 'informationCollectedDate';

    const EMPLOYMENT_RECORD_TYPE = 'employmentRecordType';

    protected $_resourceType = ResourceType::STUDENT_EMPLOYMENT_RECORD;

    /**
     * @param Query $query
     * @return StudentEmploymentRecord[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_EMPLOYMENT_RECORD);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentEmploymentRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_EMPLOYMENT_RECORD, $id);
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
     * @return Employer
     */
    public function getEmployer()
    {
        return $this->getProperty('employer');
    }

    /**
     * @param Employer $employer
     */
    public function setEmployer(Employer $employer = null)
    {
        $this->setProperty('employer', $employer);
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
    public function getHoursPerWeek()
    {
        return $this->getProperty('hoursPerWeek');
    }

    /**
     * @param string $hoursPerWeek
     */
    public function setHoursPerWeek($hoursPerWeek = null)
    {
        $this->setProperty('hoursPerWeek', $hoursPerWeek);
    }

    /**
     * @return \DateTime
     */
    public function getInformationCollectedDate()
    {
        return $this->getProperty('informationCollectedDate');
    }

    /**
     * @param \DateTime $informationCollectedDate
     */
    public function setInformationCollectedDate(\DateTime $informationCollectedDate = null)
    {
        $this->setProperty('informationCollectedDate', $informationCollectedDate);
    }

    /**
     * @return EmploymentRecordType
     */
    public function getEmploymentRecordType()
    {
        return $this->getProperty('employmentRecordType');
    }

    /**
     * @param EmploymentRecordType $employmentRecordType
     */
    public function setEmploymentRecordType(EmploymentRecordType $employmentRecordType = null)
    {
        $this->setProperty('employmentRecordType', $employmentRecordType);
    }

}
