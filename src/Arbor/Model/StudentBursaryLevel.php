<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentBursaryLevel extends ModelBase
{
    public const STUDENT = 'student';

    public const BURSARY_LEVEL = 'bursaryLevel';

    public const STUDENT_FUNDING = 'studentFunding';

    public const EFFECTIVE_DATE = 'effectiveDate';

    public const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STUDENT_BURSARY_LEVEL;

    /**
     * @param Query $query
     * @return StudentBursaryLevel[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_BURSARY_LEVEL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentBursaryLevel
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_BURSARY_LEVEL, $id);
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
     * @return \Arbor\Model\BursaryLevel
     */
    public function getBursaryLevel()
    {
        return $this->getProperty('bursaryLevel');
    }

    /**
     * @param \Arbor\Model\BursaryLevel $bursaryLevel
     */
    public function setBursaryLevel(\Arbor\Model\BursaryLevel $bursaryLevel = null)
    {
        $this->setProperty('bursaryLevel', $bursaryLevel);
    }

    /**
     * @return \Arbor\Model\StudentFunding
     */
    public function getStudentFunding()
    {
        return $this->getProperty('studentFunding');
    }

    /**
     * @param \Arbor\Model\StudentFunding $studentFunding
     */
    public function setStudentFunding(\Arbor\Model\StudentFunding $studentFunding = null)
    {
        $this->setProperty('studentFunding', $studentFunding);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
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
}
