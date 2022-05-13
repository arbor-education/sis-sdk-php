<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentEducationalHistory extends ModelBase
{
    const STUDENT = 'student';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const EXPECTED_ENTRY_DATE = 'expectedEntryDate';

    const ACTUAL_ENTRY_DATE = 'actualEntryDate';

    const LEAVING_DATE = 'leavingDate';

    const UNENROLMENT_REASON = 'unenrolmentReason';

    protected $_resourceType = ResourceType::STUDENT_EDUCATIONAL_HISTORY;

    /**
     * @param Query $query
     * @return StudentEducationalHistory[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_EDUCATIONAL_HISTORY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentEducationalHistory
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_EDUCATIONAL_HISTORY, $id);
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
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty('educationalInstitution', $educationalInstitution);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedEntryDate()
    {
        return $this->getProperty('expectedEntryDate');
    }

    /**
     * @param \DateTime $expectedEntryDate
     */
    public function setExpectedEntryDate(\DateTime $expectedEntryDate = null)
    {
        $this->setProperty('expectedEntryDate', $expectedEntryDate);
    }

    /**
     * @return \DateTime
     */
    public function getActualEntryDate()
    {
        return $this->getProperty('actualEntryDate');
    }

    /**
     * @param \DateTime $actualEntryDate
     */
    public function setActualEntryDate(\DateTime $actualEntryDate = null)
    {
        $this->setProperty('actualEntryDate', $actualEntryDate);
    }

    /**
     * @return \DateTime
     */
    public function getLeavingDate()
    {
        return $this->getProperty('leavingDate');
    }

    /**
     * @param \DateTime $leavingDate
     */
    public function setLeavingDate(\DateTime $leavingDate = null)
    {
        $this->setProperty('leavingDate', $leavingDate);
    }

    /**
     * @return UnenrolmentReason
     */
    public function getUnenrolmentReason()
    {
        return $this->getProperty('unenrolmentReason');
    }

    /**
     * @param UnenrolmentReason $unenrolmentReason
     */
    public function setUnenrolmentReason(UnenrolmentReason $unenrolmentReason = null)
    {
        $this->setProperty('unenrolmentReason', $unenrolmentReason);
    }
}
