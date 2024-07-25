<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentEmploymentRecord extends ModelBase
{
    public const STUDENT = 'student';

    public const EMPLOYER = 'employer';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const HOURS_PER_WEEK = 'hoursPerWeek';

    public const INFORMATION_COLLECTED_DATE = 'informationCollectedDate';

    public const EMPLOYMENT_RECORD_TYPE = 'employmentRecordType';

    protected $_resourceType = ResourceType::STUDENT_EMPLOYMENT_RECORD;

    /**
     * @param Query $query
     * @return StudentEmploymentRecord[] | Collection
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
     * @return \Arbor\Model\Employer
     */
    public function getEmployer()
    {
        return $this->getProperty('employer');
    }

    /**
     * @param \Arbor\Model\Employer $employer
     */
    public function setEmployer(\Arbor\Model\Employer $employer = null)
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
    public function setHoursPerWeek(string $hoursPerWeek = null)
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
     * @return \Arbor\Model\EmploymentRecordType
     */
    public function getEmploymentRecordType()
    {
        return $this->getProperty('employmentRecordType');
    }

    /**
     * @param \Arbor\Model\EmploymentRecordType $employmentRecordType
     */
    public function setEmploymentRecordType(\Arbor\Model\EmploymentRecordType $employmentRecordType = null)
    {
        $this->setProperty('employmentRecordType', $employmentRecordType);
    }
}
