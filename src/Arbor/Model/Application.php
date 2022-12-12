<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class Application extends ModelBase
{
    const STUDENT = 'student';

    const APPLICATION_DATETIME = 'applicationDatetime';

    const APPLICATION_REFERENCE_NUMBER = 'applicationReferenceNumber';

    const INTAKE_SEASON = 'intakeSeason';

    const APPLICANT_BUCKET = 'applicantBucket';

    const BUCKET_SCORE = 'bucketScore';

    const WITHDRAWN_DATETIME = 'withdrawnDatetime';

    const WITHDRAWAL_REASON = 'withdrawalReason';

    const REJECTED_DATETIME = 'rejectedDatetime';

    const INTAKE_SEASON_GROUP = 'intakeSeasonGroup';

    const OFFERED_DATETIME = 'offeredDatetime';

    const ACCEPTED_DATETIME = 'acceptedDatetime';

    const EXPECTED_ADMISSION_DATE = 'expectedAdmissionDate';

    const EXPECTED_ACADEMIC_LEVEL = 'expectedAcademicLevel';

    const EXPECTED_REGISTRATION_FORM = 'expectedRegistrationForm';

    const EXPECTED_HOUSE = 'expectedHouse';

    const ENROLLED_DATETIME = 'enrolledDatetime';

    protected $_resourceType = ResourceType::APPLICATION;

    /**
     * @param Query $query
     * @return Application[] | Collection
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

        $query->setResourceType(ResourceType::APPLICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return Application
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPLICATION, $id);
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
     * @return \DateTime
     */
    public function getApplicationDatetime()
    {
        return $this->getProperty('applicationDatetime');
    }

    /**
     * @param \DateTime $applicationDatetime
     */
    public function setApplicationDatetime(\DateTime $applicationDatetime = null)
    {
        $this->setProperty('applicationDatetime', $applicationDatetime);
    }

    /**
     * @return string
     */
    public function getApplicationReferenceNumber()
    {
        return $this->getProperty('applicationReferenceNumber');
    }

    /**
     * @param string $applicationReferenceNumber
     */
    public function setApplicationReferenceNumber($applicationReferenceNumber = null)
    {
        $this->setProperty('applicationReferenceNumber', $applicationReferenceNumber);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty('intakeSeason');
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty('intakeSeason', $intakeSeason);
    }

    /**
     * @return IntakeSeasonApplicantBucket
     */
    public function getApplicantBucket()
    {
        return $this->getProperty('applicantBucket');
    }

    /**
     * @param IntakeSeasonApplicantBucket $applicantBucket
     */
    public function setApplicantBucket(IntakeSeasonApplicantBucket $applicantBucket = null)
    {
        $this->setProperty('applicantBucket', $applicantBucket);
    }

    /**
     * @return float
     */
    public function getBucketScore()
    {
        return $this->getProperty('bucketScore');
    }

    /**
     * @param float $bucketScore
     */
    public function setBucketScore($bucketScore = null)
    {
        $this->setProperty('bucketScore', $bucketScore);
    }

    /**
     * @return \DateTime
     */
    public function getWithdrawnDatetime()
    {
        return $this->getProperty('withdrawnDatetime');
    }

    /**
     * @param \DateTime $withdrawnDatetime
     */
    public function setWithdrawnDatetime(\DateTime $withdrawnDatetime = null)
    {
        $this->setProperty('withdrawnDatetime', $withdrawnDatetime);
    }

    /**
     * @return ApplicationWithdrawalReason
     */
    public function getWithdrawalReason()
    {
        return $this->getProperty('withdrawalReason');
    }

    /**
     * @param ApplicationWithdrawalReason $withdrawalReason
     */
    public function setWithdrawalReason(ApplicationWithdrawalReason $withdrawalReason = null)
    {
        $this->setProperty('withdrawalReason', $withdrawalReason);
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDatetime()
    {
        return $this->getProperty('rejectedDatetime');
    }

    /**
     * @param \DateTime $rejectedDatetime
     */
    public function setRejectedDatetime(\DateTime $rejectedDatetime = null)
    {
        $this->setProperty('rejectedDatetime', $rejectedDatetime);
    }

    /**
     * @return IntakeSeasonGroup
     */
    public function getIntakeSeasonGroup()
    {
        return $this->getProperty('intakeSeasonGroup');
    }

    /**
     * @param IntakeSeasonGroup $intakeSeasonGroup
     */
    public function setIntakeSeasonGroup(IntakeSeasonGroup $intakeSeasonGroup = null)
    {
        $this->setProperty('intakeSeasonGroup', $intakeSeasonGroup);
    }

    /**
     * @return \DateTime
     */
    public function getOfferedDatetime()
    {
        return $this->getProperty('offeredDatetime');
    }

    /**
     * @param \DateTime $offeredDatetime
     */
    public function setOfferedDatetime(\DateTime $offeredDatetime = null)
    {
        $this->setProperty('offeredDatetime', $offeredDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDatetime()
    {
        return $this->getProperty('acceptedDatetime');
    }

    /**
     * @param \DateTime $acceptedDatetime
     */
    public function setAcceptedDatetime(\DateTime $acceptedDatetime = null)
    {
        $this->setProperty('acceptedDatetime', $acceptedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedAdmissionDate()
    {
        return $this->getProperty('expectedAdmissionDate');
    }

    /**
     * @param \DateTime $expectedAdmissionDate
     */
    public function setExpectedAdmissionDate(\DateTime $expectedAdmissionDate = null)
    {
        $this->setProperty('expectedAdmissionDate', $expectedAdmissionDate);
    }

    /**
     * @return AcademicLevel
     */
    public function getExpectedAcademicLevel()
    {
        return $this->getProperty('expectedAcademicLevel');
    }

    /**
     * @param AcademicLevel $expectedAcademicLevel
     */
    public function setExpectedAcademicLevel(AcademicLevel $expectedAcademicLevel = null)
    {
        $this->setProperty('expectedAcademicLevel', $expectedAcademicLevel);
    }

    /**
     * @return RegistrationForm
     */
    public function getExpectedRegistrationForm()
    {
        return $this->getProperty('expectedRegistrationForm');
    }

    /**
     * @param RegistrationForm $expectedRegistrationForm
     */
    public function setExpectedRegistrationForm(RegistrationForm $expectedRegistrationForm = null)
    {
        $this->setProperty('expectedRegistrationForm', $expectedRegistrationForm);
    }

    /**
     * @return House
     */
    public function getExpectedHouse()
    {
        return $this->getProperty('expectedHouse');
    }

    /**
     * @param House $expectedHouse
     */
    public function setExpectedHouse(House $expectedHouse = null)
    {
        $this->setProperty('expectedHouse', $expectedHouse);
    }

    /**
     * @return \DateTime
     */
    public function getEnrolledDatetime()
    {
        return $this->getProperty('enrolledDatetime');
    }

    /**
     * @param \DateTime $enrolledDatetime
     */
    public function setEnrolledDatetime(\DateTime $enrolledDatetime = null)
    {
        $this->setProperty('enrolledDatetime', $enrolledDatetime);
    }
}
