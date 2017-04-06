<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Employer;
use \Arbor\Model\EmploymentRecordType;

class StudentEmploymentRecord extends ModelBase
{

    const STUDENT = 'student';

    const EMPLOYER = 'employer';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    const MIN_HOURS_PER_WEEK = 'minHoursPerWeek';

    const MAX_HOURS_PER_WEEK = 'maxHoursPerWeek';

    const INFORMATION_COLLECTED_DATE = 'informationCollectedDate';

    const EMPLOYMENT_RECORD_TYPE = 'employmentRecordType';

    protected $_resourceType = ResourceType::STUDENT_EMPLOYMENT_RECORD;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentEmploymentRecord[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentEmploymentRecord");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentEmploymentRecord
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_EMPLOYMENT_RECORD, $id);
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
     * @return Employer
     */
    public function getEmployer()
    {
        return $this->getProperty("employer");
    }

    /**
     * @param Employer $employer
     */
    public function setEmployer(Employer $employer = null)
    {
        $this->setProperty("employer", $employer);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }

    /**
     * @return string
     */
    public function getMinHoursPerWeek()
    {
        return $this->getProperty("minHoursPerWeek");
    }

    /**
     * @param string $minHoursPerWeek
     */
    public function setMinHoursPerWeek($minHoursPerWeek = null)
    {
        $this->setProperty("minHoursPerWeek", $minHoursPerWeek);
    }

    /**
     * @return string
     */
    public function getMaxHoursPerWeek()
    {
        return $this->getProperty("maxHoursPerWeek");
    }

    /**
     * @param string $maxHoursPerWeek
     */
    public function setMaxHoursPerWeek($maxHoursPerWeek = null)
    {
        $this->setProperty("maxHoursPerWeek", $maxHoursPerWeek);
    }

    /**
     * @return \DateTime
     */
    public function getInformationCollectedDate()
    {
        return $this->getProperty("informationCollectedDate");
    }

    /**
     * @param \DateTime $informationCollectedDate
     */
    public function setInformationCollectedDate(\DateTime $informationCollectedDate = null)
    {
        $this->setProperty("informationCollectedDate", $informationCollectedDate);
    }

    /**
     * @return EmploymentRecordType
     */
    public function getEmploymentRecordType()
    {
        return $this->getProperty("employmentRecordType");
    }

    /**
     * @param EmploymentRecordType $employmentRecordType
     */
    public function setEmploymentRecordType(EmploymentRecordType $employmentRecordType = null)
    {
        $this->setProperty("employmentRecordType", $employmentRecordType);
    }


}
