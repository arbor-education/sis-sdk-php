<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class EducationalInstitutionEnrolment extends ModelBase
{
    public const STUDENT = 'student';

    public const ENTRY_DATE = 'entryDate';

    public const LEAVING_DATE = 'leavingDate';

    public const UNENROLMENT_REASON = 'unenrolmentReason';

    protected $_resourceType = ResourceType::EDUCATIONAL_INSTITUTION_ENROLMENT;

    /**
     * @param Query $query
     * @return EducationalInstitutionEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::EDUCATIONAL_INSTITUTION_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EducationalInstitutionEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EDUCATIONAL_INSTITUTION_ENROLMENT, $id);
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
    public function getEntryDate()
    {
        return $this->getProperty('entryDate');
    }

    /**
     * @param \DateTime $entryDate
     */
    public function setEntryDate(\DateTime $entryDate = null)
    {
        $this->setProperty('entryDate', $entryDate);
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
