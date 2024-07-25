<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StudentGuardianRelationship extends ModelBase
{
    public const STUDENT = 'student';

    public const GUARDIAN = 'guardian';

    public const GUARDIAN_RELATIONSHIP_TYPE = 'guardianRelationshipType';

    public const IS_LEGAL_GUARDIAN = 'isLegalGuardian';

    public const IS_PRIMARY_GUARDIAN = 'isPrimaryGuardian';

    public const IS_AUTHORIZED_TO_COLLECT = 'isAuthorizedToCollect';

    public const EMERGENCY_CONTACT_PRIORITY = 'emergencyContactPriority';

    public const UNSUBSCRIBED_FROM_COMMS = 'unsubscribedFromComms';

    public const GUARDIAN_USER_AUTHORIZED = 'guardianUserAuthorized';

    public const ACCESS_NOTES = 'accessNotes';

    protected $_resourceType = ResourceType::STUDENT_GUARDIAN_RELATIONSHIP;

    /**
     * @param Query $query
     * @return StudentGuardianRelationship[] | Collection
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

        $query->setResourceType(ResourceType::STUDENT_GUARDIAN_RELATIONSHIP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StudentGuardianRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STUDENT_GUARDIAN_RELATIONSHIP, $id);
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
     * @return \Arbor\Model\Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param \Arbor\Model\Guardian $guardian
     */
    public function setGuardian(\Arbor\Model\Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }

    /**
     * @return \Arbor\Model\GuardianRelationshipType
     */
    public function getGuardianRelationshipType()
    {
        return $this->getProperty('guardianRelationshipType');
    }

    /**
     * @param \Arbor\Model\GuardianRelationshipType $guardianRelationshipType
     */
    public function setGuardianRelationshipType(\Arbor\Model\GuardianRelationshipType $guardianRelationshipType = null)
    {
        $this->setProperty('guardianRelationshipType', $guardianRelationshipType);
    }

    /**
     * @return bool
     */
    public function getIsLegalGuardian()
    {
        return $this->getProperty('isLegalGuardian');
    }

    /**
     * @param bool $isLegalGuardian
     */
    public function setIsLegalGuardian(bool $isLegalGuardian = null)
    {
        $this->setProperty('isLegalGuardian', $isLegalGuardian);
    }

    /**
     * @return bool
     */
    public function getIsPrimaryGuardian()
    {
        return $this->getProperty('isPrimaryGuardian');
    }

    /**
     * @param bool $isPrimaryGuardian
     */
    public function setIsPrimaryGuardian(bool $isPrimaryGuardian = null)
    {
        $this->setProperty('isPrimaryGuardian', $isPrimaryGuardian);
    }

    /**
     * @return bool
     */
    public function getIsAuthorizedToCollect()
    {
        return $this->getProperty('isAuthorizedToCollect');
    }

    /**
     * @param bool $isAuthorizedToCollect
     */
    public function setIsAuthorizedToCollect(bool $isAuthorizedToCollect = null)
    {
        $this->setProperty('isAuthorizedToCollect', $isAuthorizedToCollect);
    }

    /**
     * @return string
     */
    public function getEmergencyContactPriority()
    {
        return $this->getProperty('emergencyContactPriority');
    }

    /**
     * @param string $emergencyContactPriority
     */
    public function setEmergencyContactPriority(string $emergencyContactPriority = null)
    {
        $this->setProperty('emergencyContactPriority', $emergencyContactPriority);
    }

    /**
     * @return bool
     */
    public function getUnsubscribedFromComms()
    {
        return $this->getProperty('unsubscribedFromComms');
    }

    /**
     * @param bool $unsubscribedFromComms
     */
    public function setUnsubscribedFromComms(bool $unsubscribedFromComms = null)
    {
        $this->setProperty('unsubscribedFromComms', $unsubscribedFromComms);
    }

    /**
     * @return bool
     */
    public function getGuardianUserAuthorized()
    {
        return $this->getProperty('guardianUserAuthorized');
    }

    /**
     * @param bool $guardianUserAuthorized
     */
    public function setGuardianUserAuthorized(bool $guardianUserAuthorized = null)
    {
        $this->setProperty('guardianUserAuthorized', $guardianUserAuthorized);
    }

    /**
     * @return string
     */
    public function getAccessNotes()
    {
        return $this->getProperty('accessNotes');
    }

    /**
     * @param string $accessNotes
     */
    public function setAccessNotes(string $accessNotes = null)
    {
        $this->setProperty('accessNotes', $accessNotes);
    }
}
