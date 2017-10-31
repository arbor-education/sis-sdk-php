<?php

namespace Arbor\Model\UkDfe;

use Arbor\Resource\UkDfe\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;
use Arbor\Model\Gender;
use Arbor\Model\Student;

class AtfImportJobStudent extends ModelBase
{

    const ATF_IMPORT_JOB = 'atfImportJob';

    const FIRST_NAME = 'firstName';

    const LAST_NAME = 'lastName';

    const DATE_OF_BIRTH = 'dateOfBirth';

    const GENDER = 'gender';

    const APPLICATION_REFERENCE = 'applicationReference';

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

    const SCHOOL_HISTORY_PROCESSED = 'schoolHistoryProcessed';

    const IMPORT_ERRORS = 'importErrors';

    protected $_resourceType = ResourceType::UK_DFE_ATF_IMPORT_JOB_STUDENT;

    /**
     * @param Query $query
     * @return AtfImportJobStudent[] | Collection
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

        $query->setResourceType(ResourceType::UK_DFE_ATF_IMPORT_JOB_STUDENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AtfImportJobStudent
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_DFE_ATF_IMPORT_JOB_STUDENT, $id);
    }

    /**
     * @return AftImportJob
     */
    public function getAtfImportJob()
    {
        return $this->getProperty('atfImportJob');
    }

    /**
     * @param AftImportJob $atfImportJob
     */
    public function setAtfImportJob(AftImportJob $atfImportJob = null)
    {
        $this->setProperty('atfImportJob', $atfImportJob);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getProperty('firstName');
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName = null)
    {
        $this->setProperty('firstName', $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getProperty('lastName');
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName = null)
    {
        $this->setProperty('lastName', $lastName);
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->getProperty('dateOfBirth');
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(\DateTime $dateOfBirth = null)
    {
        $this->setProperty('dateOfBirth', $dateOfBirth);
    }

    /**
     * @return Gender
     */
    public function getGender()
    {
        return $this->getProperty('gender');
    }

    /**
     * @param Gender $gender
     */
    public function setGender(Gender $gender = null)
    {
        $this->setProperty('gender', $gender);
    }

    /**
     * @return string
     */
    public function getApplicationReference()
    {
        return $this->getProperty('applicationReference');
    }

    /**
     * @param string $applicationReference
     */
    public function setApplicationReference($applicationReference = null)
    {
        $this->setProperty('applicationReference', $applicationReference);
    }

    /**
     * @return string
     */
    public function getUpn()
    {
        return $this->getProperty('upn');
    }

    /**
     * @param string $upn
     */
    public function setUpn($upn = null)
    {
        $this->setProperty('upn', $upn);
    }

    /**
     * @return string
     */
    public function getUniqueLearnerNumber()
    {
        return $this->getProperty('uniqueLearnerNumber');
    }

    /**
     * @param string $uniqueLearnerNumber
     */
    public function setUniqueLearnerNumber($uniqueLearnerNumber = null)
    {
        $this->setProperty('uniqueLearnerNumber', $uniqueLearnerNumber);
    }

    /**
     * @return string
     */
    public function getUniqueCandidateIdentifier()
    {
        return $this->getProperty('uniqueCandidateIdentifier');
    }

    /**
     * @param string $uniqueCandidateIdentifier
     */
    public function setUniqueCandidateIdentifier($uniqueCandidateIdentifier = null)
    {
        $this->setProperty('uniqueCandidateIdentifier', $uniqueCandidateIdentifier);
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
    public function getImportDatetime()
    {
        return $this->getProperty('importDatetime');
    }

    /**
     * @param \DateTime $importDatetime
     */
    public function setImportDatetime(\DateTime $importDatetime = null)
    {
        $this->setProperty('importDatetime', $importDatetime);
    }

    /**
     * @return bool
     */
    public function getBasicDetailsProcessed()
    {
        return $this->getProperty('basicDetailsProcessed');
    }

    /**
     * @param bool $basicDetailsProcessed
     */
    public function setBasicDetailsProcessed($basicDetailsProcessed = null)
    {
        $this->setProperty('basicDetailsProcessed', $basicDetailsProcessed);
    }

    /**
     * @return bool
     */
    public function getFsmHistoryProcessed()
    {
        return $this->getProperty('fsmHistoryProcessed');
    }

    /**
     * @param bool $fsmHistoryProcessed
     */
    public function setFsmHistoryProcessed($fsmHistoryProcessed = null)
    {
        $this->setProperty('fsmHistoryProcessed', $fsmHistoryProcessed);
    }

    /**
     * @return bool
     */
    public function getLookedAfterProcessed()
    {
        return $this->getProperty('lookedAfterProcessed');
    }

    /**
     * @param bool $lookedAfterProcessed
     */
    public function setLookedAfterProcessed($lookedAfterProcessed = null)
    {
        $this->setProperty('lookedAfterProcessed', $lookedAfterProcessed);
    }

    /**
     * @return bool
     */
    public function getSenHistoryProcessed()
    {
        return $this->getProperty('senHistoryProcessed');
    }

    /**
     * @param bool $senHistoryProcessed
     */
    public function setSenHistoryProcessed($senHistoryProcessed = null)
    {
        $this->setProperty('senHistoryProcessed', $senHistoryProcessed);
    }

    /**
     * @return bool
     */
    public function getAddressProcessed()
    {
        return $this->getProperty('addressProcessed');
    }

    /**
     * @param bool $addressProcessed
     */
    public function setAddressProcessed($addressProcessed = null)
    {
        $this->setProperty('addressProcessed', $addressProcessed);
    }

    /**
     * @return bool
     */
    public function getContactsProcessed()
    {
        return $this->getProperty('contactsProcessed');
    }

    /**
     * @param bool $contactsProcessed
     */
    public function setContactsProcessed($contactsProcessed = null)
    {
        $this->setProperty('contactsProcessed', $contactsProcessed);
    }

    /**
     * @return bool
     */
    public function getSchoolHistoryProcessed()
    {
        return $this->getProperty('schoolHistoryProcessed');
    }

    /**
     * @param bool $schoolHistoryProcessed
     */
    public function setSchoolHistoryProcessed($schoolHistoryProcessed = null)
    {
        $this->setProperty('schoolHistoryProcessed', $schoolHistoryProcessed);
    }

    /**
     * @return string
     */
    public function getImportErrors()
    {
        return $this->getProperty('importErrors');
    }

    /**
     * @param string $importErrors
     */
    public function setImportErrors($importErrors = null)
    {
        $this->setProperty('importErrors', $importErrors);
    }


}
