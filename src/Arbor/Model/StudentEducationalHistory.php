<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentEducationalHistory extends ModelBase
{
    const STUDENT = 'student';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const EDUCATION_RECORD_TYPE = 'educationRecordType';

    const ARRIVAL_DATE = 'arrivalDate';

    const LEAVING_DATE = 'leavingDate';

    const UNENROLMENT_REASON = 'unenrolmentReason';

    const ENROLMENT_MODE = 'enrolmentMode';

    const ATTENDANCE_MODE = 'attendanceMode';

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
     * @return EducationRecordType
     */
    public function getEducationRecordType()
    {
        return $this->getProperty('educationRecordType');
    }

    /**
     * @param EducationRecordType $educationRecordType
     */
    public function setEducationRecordType(EducationRecordType $educationRecordType = null)
    {
        $this->setProperty('educationRecordType', $educationRecordType);
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->getProperty('arrivalDate');
    }

    /**
     * @param \DateTime $arrivalDate
     */
    public function setArrivalDate(\DateTime $arrivalDate = null)
    {
        $this->setProperty('arrivalDate', $arrivalDate);
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

    /**
     * @return EnrolmentMode
     */
    public function getEnrolmentMode()
    {
        return $this->getProperty('enrolmentMode');
    }

    /**
     * @param EnrolmentMode $enrolmentMode
     */
    public function setEnrolmentMode(EnrolmentMode $enrolmentMode = null)
    {
        $this->setProperty('enrolmentMode', $enrolmentMode);
    }

    /**
     * @return string
     */
    public function getAttendanceMode()
    {
        return $this->getProperty('attendanceMode');
    }

    /**
     * @param string $attendanceMode
     */
    public function setAttendanceMode($attendanceMode = null)
    {
        $this->setProperty('attendanceMode', $attendanceMode);
    }
}
