<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\CtfImportJob;
use \Arbor\Model\Gender;
use \Arbor\Model\Student;

class CtfImportJobStudent extends ModelBase
{

    const CTF_IMPORT_JOB = 'ctfImportJob';

    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const DATE_OF_BIRTH = 'dateOfBirth';

    const GENDER = 'gender';

    const UPN = 'upn';

    const UNIQUE_LEARNER_NUMBER = 'uniqueLearnerNumber';

    const UNIQUE_CANDIDATE_IDENTIFIER = 'uniqueCandidateIdentifier';

    const STUDENT = 'student';

    const IMPORT_DATETIME = 'importDatetime';

    const BASIC_DETAILS_PROCESSED = 'basicDetailsProcessed';

    const FSM_HISTORY_PROCESSED = 'fsmHistoryProcessed';

    const LOOKED_AFTER_PROCESSED = 'lookedAfterProcessed';

    const SEN_HISTORY_PROCESSED = 'senHistoryProcessed';

    const ADDRESS_PROCESSED = 'addressProcessed';

    const CONTACTS_PROCESSED = 'contactsProcessed';

    const ATTENDANCE_PROCESSED = 'attendanceProcessed';

    const STAGE_ASSESSMENTS_PROCESSED = 'stageAssessmentsProcessed';

    const SCHOOL_HISTORY_PROCESSED = 'schoolHistoryProcessed';

    const NAW_DETAILS_PROCESSED = 'nawDetailsProcessed';

    const IMPORT_NAME = 'importName';

    const IMPORT_DATE_OF_BIRTH = 'importDateOfBirth';

    const IMPORT_LANGUAGES = 'importLanguages';

    const IMPORT_DISABILITIES = 'importDisabilities';

    const IMPORT_ADDRESS = 'importAddress';

    const IMPORT_GUARDIANS = 'importGuardians';

    const IMPORT_SEN = 'importSen';

    const IMPORT_ATTENDANCE = 'importAttendance';

    const IMPORT_ASSESSMENTS = 'importAssessments';

    const IMPORT_SCHOOL_HISTORY = 'importSchoolHistory';

    const IMPORT_LOOKED_AFTER = 'importLookedAfter';

    const IMPORT_FSM = 'importFsm';

    const IS_CURRENTLY_BEING_PROCESSED = 'isCurrentlyBeingProcessed';

    const IMPORT_ERRORS = 'importErrors';

    protected $_resourceType = ResourceType::UK_DFE_CTF_IMPORT_JOB_STUDENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return CtfImportJobStudent[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("UkDfe_CtfImportJobStudent");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CtfImportJobStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::UK_DFE_CTF_IMPORT_JOB_STUDENT, $id);
    }

    /**
     * @return CtfImportJob
     */
    public function getCtfImportJob()
    {
        return $this->getProperty("ctfImportJob");
    }

    /**
     * @param CtfImportJob $ctfImportJob
     */
    public function setCtfImportJob(CtfImportJob $ctfImportJob = null)
    {
        $this->setProperty("ctfImportJob", $ctfImportJob);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty("firstName");
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName = null)
    {
        $this->setProperty("firstName", $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty("lastName");
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName = null)
    {
        $this->setProperty("lastName", $lastName);
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->getProperty("dateOfBirth");
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth = null)
    {
        $this->setProperty("dateOfBirth", $dateOfBirth);
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
     * @return string
     */
    public function getUpn()
    {
        return $this->getProperty("upn");
    }

    /**
     * @param string $upn
     */
    public function setUpn($upn = null)
    {
        $this->setProperty("upn", $upn);
    }

    /**
     * @return string
     */
    public function getUniqueLearnerNumber()
    {
        return $this->getProperty("uniqueLearnerNumber");
    }

    /**
     * @param string $uniqueLearnerNumber
     */
    public function setUniqueLearnerNumber($uniqueLearnerNumber = null)
    {
        $this->setProperty("uniqueLearnerNumber", $uniqueLearnerNumber);
    }

    /**
     * @return string
     */
    public function getUniqueCandidateIdentifier()
    {
        return $this->getProperty("uniqueCandidateIdentifier");
    }

    /**
     * @param string $uniqueCandidateIdentifier
     */
    public function setUniqueCandidateIdentifier($uniqueCandidateIdentifier = null)
    {
        $this->setProperty("uniqueCandidateIdentifier", $uniqueCandidateIdentifier);
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
     * @return \DateTime
     */
    public function getImportDatetime()
    {
        return $this->getProperty("importDatetime");
    }

    /**
     * @param \DateTime $importDatetime
     */
    public function setImportDatetime(\DateTime $importDatetime = null)
    {
        $this->setProperty("importDatetime", $importDatetime);
    }

    /**
     * @return bool
     */
    public function getBasicDetailsProcessed()
    {
        return $this->getProperty("basicDetailsProcessed");
    }

    /**
     * @param bool $basicDetailsProcessed
     */
    public function setBasicDetailsProcessed($basicDetailsProcessed = null)
    {
        $this->setProperty("basicDetailsProcessed", $basicDetailsProcessed);
    }

    /**
     * @return bool
     */
    public function getFsmHistoryProcessed()
    {
        return $this->getProperty("fsmHistoryProcessed");
    }

    /**
     * @param bool $fsmHistoryProcessed
     */
    public function setFsmHistoryProcessed($fsmHistoryProcessed = null)
    {
        $this->setProperty("fsmHistoryProcessed", $fsmHistoryProcessed);
    }

    /**
     * @return bool
     */
    public function getLookedAfterProcessed()
    {
        return $this->getProperty("lookedAfterProcessed");
    }

    /**
     * @param bool $lookedAfterProcessed
     */
    public function setLookedAfterProcessed($lookedAfterProcessed = null)
    {
        $this->setProperty("lookedAfterProcessed", $lookedAfterProcessed);
    }

    /**
     * @return bool
     */
    public function getSenHistoryProcessed()
    {
        return $this->getProperty("senHistoryProcessed");
    }

    /**
     * @param bool $senHistoryProcessed
     */
    public function setSenHistoryProcessed($senHistoryProcessed = null)
    {
        $this->setProperty("senHistoryProcessed", $senHistoryProcessed);
    }

    /**
     * @return bool
     */
    public function getAddressProcessed()
    {
        return $this->getProperty("addressProcessed");
    }

    /**
     * @param bool $addressProcessed
     */
    public function setAddressProcessed($addressProcessed = null)
    {
        $this->setProperty("addressProcessed", $addressProcessed);
    }

    /**
     * @return bool
     */
    public function getContactsProcessed()
    {
        return $this->getProperty("contactsProcessed");
    }

    /**
     * @param bool $contactsProcessed
     */
    public function setContactsProcessed($contactsProcessed = null)
    {
        $this->setProperty("contactsProcessed", $contactsProcessed);
    }

    /**
     * @return bool
     */
    public function getAttendanceProcessed()
    {
        return $this->getProperty("attendanceProcessed");
    }

    /**
     * @param bool $attendanceProcessed
     */
    public function setAttendanceProcessed($attendanceProcessed = null)
    {
        $this->setProperty("attendanceProcessed", $attendanceProcessed);
    }

    /**
     * @return bool
     */
    public function getStageAssessmentsProcessed()
    {
        return $this->getProperty("stageAssessmentsProcessed");
    }

    /**
     * @param bool $stageAssessmentsProcessed
     */
    public function setStageAssessmentsProcessed($stageAssessmentsProcessed = null)
    {
        $this->setProperty("stageAssessmentsProcessed", $stageAssessmentsProcessed);
    }

    /**
     * @return bool
     */
    public function getSchoolHistoryProcessed()
    {
        return $this->getProperty("schoolHistoryProcessed");
    }

    /**
     * @param bool $schoolHistoryProcessed
     */
    public function setSchoolHistoryProcessed($schoolHistoryProcessed = null)
    {
        $this->setProperty("schoolHistoryProcessed", $schoolHistoryProcessed);
    }

    /**
     * @return bool
     */
    public function getNawDetailsProcessed()
    {
        return $this->getProperty("nawDetailsProcessed");
    }

    /**
     * @param bool $nawDetailsProcessed
     */
    public function setNawDetailsProcessed($nawDetailsProcessed = null)
    {
        $this->setProperty("nawDetailsProcessed", $nawDetailsProcessed);
    }

    /**
     * @return string
     */
    public function getImportName()
    {
        return $this->getProperty("importName");
    }

    /**
     * @param string $importName
     */
    public function setImportName($importName = null)
    {
        $this->setProperty("importName", $importName);
    }

    /**
     * @return string
     */
    public function getImportDateOfBirth()
    {
        return $this->getProperty("importDateOfBirth");
    }

    /**
     * @param string $importDateOfBirth
     */
    public function setImportDateOfBirth($importDateOfBirth = null)
    {
        $this->setProperty("importDateOfBirth", $importDateOfBirth);
    }

    /**
     * @return string
     */
    public function getImportLanguages()
    {
        return $this->getProperty("importLanguages");
    }

    /**
     * @param string $importLanguages
     */
    public function setImportLanguages($importLanguages = null)
    {
        $this->setProperty("importLanguages", $importLanguages);
    }

    /**
     * @return string
     */
    public function getImportDisabilities()
    {
        return $this->getProperty("importDisabilities");
    }

    /**
     * @param string $importDisabilities
     */
    public function setImportDisabilities($importDisabilities = null)
    {
        $this->setProperty("importDisabilities", $importDisabilities);
    }

    /**
     * @return string
     */
    public function getImportAddress()
    {
        return $this->getProperty("importAddress");
    }

    /**
     * @param string $importAddress
     */
    public function setImportAddress($importAddress = null)
    {
        $this->setProperty("importAddress", $importAddress);
    }

    /**
     * @return string
     */
    public function getImportGuardians()
    {
        return $this->getProperty("importGuardians");
    }

    /**
     * @param string $importGuardians
     */
    public function setImportGuardians($importGuardians = null)
    {
        $this->setProperty("importGuardians", $importGuardians);
    }

    /**
     * @return string
     */
    public function getImportSen()
    {
        return $this->getProperty("importSen");
    }

    /**
     * @param string $importSen
     */
    public function setImportSen($importSen = null)
    {
        $this->setProperty("importSen", $importSen);
    }

    /**
     * @return string
     */
    public function getImportAttendance()
    {
        return $this->getProperty("importAttendance");
    }

    /**
     * @param string $importAttendance
     */
    public function setImportAttendance($importAttendance = null)
    {
        $this->setProperty("importAttendance", $importAttendance);
    }

    /**
     * @return string
     */
    public function getImportAssessments()
    {
        return $this->getProperty("importAssessments");
    }

    /**
     * @param string $importAssessments
     */
    public function setImportAssessments($importAssessments = null)
    {
        $this->setProperty("importAssessments", $importAssessments);
    }

    /**
     * @return string
     */
    public function getImportSchoolHistory()
    {
        return $this->getProperty("importSchoolHistory");
    }

    /**
     * @param string $importSchoolHistory
     */
    public function setImportSchoolHistory($importSchoolHistory = null)
    {
        $this->setProperty("importSchoolHistory", $importSchoolHistory);
    }

    /**
     * @return string
     */
    public function getImportLookedAfter()
    {
        return $this->getProperty("importLookedAfter");
    }

    /**
     * @param string $importLookedAfter
     */
    public function setImportLookedAfter($importLookedAfter = null)
    {
        $this->setProperty("importLookedAfter", $importLookedAfter);
    }

    /**
     * @return string
     */
    public function getImportFsm()
    {
        return $this->getProperty("importFsm");
    }

    /**
     * @param string $importFsm
     */
    public function setImportFsm($importFsm = null)
    {
        $this->setProperty("importFsm", $importFsm);
    }

    /**
     * @return bool
     */
    public function getIsCurrentlyBeingProcessed()
    {
        return $this->getProperty("isCurrentlyBeingProcessed");
    }

    /**
     * @param bool $isCurrentlyBeingProcessed
     */
    public function setIsCurrentlyBeingProcessed($isCurrentlyBeingProcessed = null)
    {
        $this->setProperty("isCurrentlyBeingProcessed", $isCurrentlyBeingProcessed);
    }

    /**
     * @return string
     */
    public function getImportErrors()
    {
        return $this->getProperty("importErrors");
    }

    /**
     * @param string $importErrors
     */
    public function setImportErrors($importErrors = null)
    {
        $this->setProperty("importErrors", $importErrors);
    }


}
