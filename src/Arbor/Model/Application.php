<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class Application extends ModelBase
{
    public const STUDENT = 'student';

    public const APPLICATION_DATETIME = 'applicationDatetime';

    public const APPLICATION_REFERENCE_NUMBER = 'applicationReferenceNumber';

    public const INTAKE_SEASON = 'intakeSeason';

    public const APPLICANT_BUCKET = 'applicantBucket';

    public const BUCKET_SCORE = 'bucketScore';

    public const WITHDRAWN_DATETIME = 'withdrawnDatetime';

    public const WITHDRAWAL_REASON = 'withdrawalReason';

    public const REJECTED_DATETIME = 'rejectedDatetime';

    public const INTAKE_SEASON_GROUP = 'intakeSeasonGroup';

    public const OFFERED_DATETIME = 'offeredDatetime';

    public const ACCEPTED_DATETIME = 'acceptedDatetime';

    public const EXPECTED_ADMISSION_DATE = 'expectedAdmissionDate';

    public const EXPECTED_ACADEMIC_LEVEL = 'expectedAcademicLevel';

    public const EXPECTED_REGISTRATION_FORM = 'expectedRegistrationForm';

    public const EXPECTED_HOUSE = 'expectedHouse';

    public const ENROLLED_DATETIME = 'enrolledDatetime';

    protected $_resourceType = ResourceType::APPLICATION;

    /**
     * @param Query $query
     * @return Application[] | Collection
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
    public function setApplicationReferenceNumber(string $applicationReferenceNumber = null)
    {
        $this->setProperty('applicationReferenceNumber', $applicationReferenceNumber);
    }

    /**
     * @return \Arbor\Model\IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty('intakeSeason');
    }

    /**
     * @param \Arbor\Model\IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(\Arbor\Model\IntakeSeason $intakeSeason = null)
    {
        $this->setProperty('intakeSeason', $intakeSeason);
    }

    /**
     * @return \Arbor\Model\IntakeSeasonApplicantBucket
     */
    public function getApplicantBucket()
    {
        return $this->getProperty('applicantBucket');
    }

    /**
     * @param \Arbor\Model\IntakeSeasonApplicantBucket $applicantBucket
     */
    public function setApplicantBucket(\Arbor\Model\IntakeSeasonApplicantBucket $applicantBucket = null)
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
    public function setBucketScore(float $bucketScore = null)
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
     * @return \Arbor\Model\ApplicationWithdrawalReason
     */
    public function getWithdrawalReason()
    {
        return $this->getProperty('withdrawalReason');
    }

    /**
     * @param \Arbor\Model\ApplicationWithdrawalReason $withdrawalReason
     */
    public function setWithdrawalReason(\Arbor\Model\ApplicationWithdrawalReason $withdrawalReason = null)
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
     * @return \Arbor\Model\IntakeSeasonGroup
     */
    public function getIntakeSeasonGroup()
    {
        return $this->getProperty('intakeSeasonGroup');
    }

    /**
     * @param \Arbor\Model\IntakeSeasonGroup $intakeSeasonGroup
     */
    public function setIntakeSeasonGroup(\Arbor\Model\IntakeSeasonGroup $intakeSeasonGroup = null)
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
     * @return \Arbor\Model\AcademicLevel
     */
    public function getExpectedAcademicLevel()
    {
        return $this->getProperty('expectedAcademicLevel');
    }

    /**
     * @param \Arbor\Model\AcademicLevel $expectedAcademicLevel
     */
    public function setExpectedAcademicLevel(\Arbor\Model\AcademicLevel $expectedAcademicLevel = null)
    {
        $this->setProperty('expectedAcademicLevel', $expectedAcademicLevel);
    }

    /**
     * @return \Arbor\Model\RegistrationForm
     */
    public function getExpectedRegistrationForm()
    {
        return $this->getProperty('expectedRegistrationForm');
    }

    /**
     * @param \Arbor\Model\RegistrationForm $expectedRegistrationForm
     */
    public function setExpectedRegistrationForm(\Arbor\Model\RegistrationForm $expectedRegistrationForm = null)
    {
        $this->setProperty('expectedRegistrationForm', $expectedRegistrationForm);
    }

    /**
     * @return \Arbor\Model\House
     */
    public function getExpectedHouse()
    {
        return $this->getProperty('expectedHouse');
    }

    /**
     * @param \Arbor\Model\House $expectedHouse
     */
    public function setExpectedHouse(\Arbor\Model\House $expectedHouse = null)
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
