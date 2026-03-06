<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentEducationalHistory extends ModelBase
{
    public const STUDENT = 'student';

    public const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    public const EXPECTED_ENTRY_DATE = 'expectedEntryDate';

    public const ACTUAL_ENTRY_DATE = 'actualEntryDate';

    public const LEAVING_DATE = 'leavingDate';

    public const UNENROLMENT_REASON = 'unenrolmentReason';

    protected $_resourceType = ResourceType::STUDENT_EDUCATIONAL_HISTORY;

    /**
     * @param Query $query
     * @return StudentEducationalHistory[] | Collection
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
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty('educationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(\Arbor\Model\EducationalInstitution $educationalInstitution = null)
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
     * @return \Arbor\Model\UnenrolmentReason
     */
    public function getUnenrolmentReason()
    {
        return $this->getProperty('unenrolmentReason');
    }

    /**
     * @param \Arbor\Model\UnenrolmentReason $unenrolmentReason
     */
    public function setUnenrolmentReason(\Arbor\Model\UnenrolmentReason $unenrolmentReason = null)
    {
        $this->setProperty('unenrolmentReason', $unenrolmentReason);
    }
}
