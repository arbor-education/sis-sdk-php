<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\IntakeSeason;
use \Arbor\Model\IntakeSeasonApplicantBucket;
use \Arbor\Model\IntakeSeasonGroup;
use \Arbor\Model\Gender;
use \Arbor\Model\AcademicLevel;
use \Arbor\Model\RegistrationForm;
use \Arbor\Model\House;

class ApplicationApplicantImportJob extends ModelBase
{

    protected $_resourceType = ResourceType::APPLICATION_APPLICANT_IMPORT_JOB;

    /**
     * @param \Arbor\Query\Query $query
     * @return \Arbor\Model\ApplicationApplicantImportJob[]|\Arbor\Model\Collection
     * @throws Exception
     */
    public static function query($query)
    {
        $query->setResourceType("ApplicationApplicantImportJob");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return \Arbor\Model\ApplicationApplicantImportJob
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve("ApplicationApplicantImportJob", $id);
    }

    /**
     * @return IntakeSeason
     */
    public function getIntakeSeason()
    {
        return $this->getProperty("intakeSeason");
    }

    /**
     * @param IntakeSeason $intakeSeason
     */
    public function setIntakeSeason(IntakeSeason $intakeSeason = null)
    {
        $this->setProperty("intakeSeason", $intakeSeason);
    }

    /**
     * @return IntakeSeasonApplicantBucket
     */
    public function getIntakeSeasonApplicantBucket()
    {
        return $this->getProperty("intakeSeasonApplicantBucket");
    }

    /**
     * @param IntakeSeasonApplicantBucket $intakeSeasonApplicantBucket
     */
    public function setIntakeSeasonApplicantBucket(IntakeSeasonApplicantBucket $intakeSeasonApplicantBucket = null)
    {
        $this->setProperty("intakeSeasonApplicantBucket", $intakeSeasonApplicantBucket);
    }

    /**
     * @return IntakeSeasonGroup
     */
    public function getIntakeSeasonGroup()
    {
        return $this->getProperty("intakeSeasonGroup");
    }

    /**
     * @param IntakeSeasonGroup $intakeSeasonGroup
     */
    public function setIntakeSeasonGroup(IntakeSeasonGroup $intakeSeasonGroup = null)
    {
        $this->setProperty("intakeSeasonGroup", $intakeSeasonGroup);
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
        return $this->getProperty("gender");
    }

    /**
     * @param Gender $gender
     */
    public function setGender(Gender $gender = null)
    {
        $this->setProperty("gender", $gender);
    }

    /**
     * @return AcademicLevel
     */
    public function getAcademicLevel()
    {
        return $this->getProperty("academicLevel");
    }

    /**
     * @param AcademicLevel $academicLevel
     */
    public function setAcademicLevel(AcademicLevel $academicLevel = null)
    {
        $this->setProperty("academicLevel", $academicLevel);
    }

    /**
     * @return RegistrationForm
     */
    public function getRegistrationForm()
    {
        return $this->getProperty("registrationForm");
    }

    /**
     * @param RegistrationForm $registrationForm
     */
    public function setRegistrationForm(RegistrationForm $registrationForm = null)
    {
        $this->setProperty("registrationForm", $registrationForm);
    }

    /**
     * @return House
     */
    public function getHouse()
    {
        return $this->getProperty("house");
    }

    /**
     * @param House $house
     */
    public function setHouse(House $house = null)
    {
        $this->setProperty("house", $house);
    }

    /**
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->getProperty("applicationDate");
    }

    /**
     * @param \DateTime $applicationDate
     */
    public function setApplicationDate(\DateTime $applicationDate = null)
    {
        $this->setProperty("applicationDate", $applicationDate);
    }

    /**
     * @return \DateTime
     */
    public function getExpectedAdmissionDate()
    {
        return $this->getProperty("expectedAdmissionDate");
    }

    /**
     * @param \DateTime $expectedAdmissionDate
     */
    public function setExpectedAdmissionDate(\DateTime $expectedAdmissionDate = null)
    {
        $this->setProperty("expectedAdmissionDate", $expectedAdmissionDate);
    }

    /**
     * @return int
     */
    public function getBucketScore()
    {
        return $this->getProperty("bucketScore");
    }

    /**
     * @param int $bucketScore
     */
    public function setBucketScore($bucketScore = null)
    {
        $this->setProperty("bucketScore", $bucketScore);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty("completedDatetime");
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty("completedDatetime", $completedDatetime);
    }


}
