<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StudentGuardianRelationship extends ModelBase
{
    const STUDENT = 'student';

    const GUARDIAN = 'guardian';

    const GUARDIAN_RELATIONSHIP_TYPE = 'guardianRelationshipType';

    const IS_LEGAL_GUARDIAN = 'isLegalGuardian';

    const IS_PRIMARY_GUARDIAN = 'isPrimaryGuardian';

    const IS_AUTHORIZED_TO_COLLECT = 'isAuthorizedToCollect';

    const EMERGENCY_CONTACT_PRIORITY = 'emergencyContactPriority';

    const UNSUBSCRIBED_FROM_COMMS = 'unsubscribedFromComms';

    const GUARDIAN_USER_AUTHORIZED = 'guardianUserAuthorized';

    const ACCESS_NOTES = 'accessNotes';

    protected $_resourceType = ResourceType::STUDENT_GUARDIAN_RELATIONSHIP;

    /**
     * @param Query $query
     * @return StudentGuardianRelationship[] | Collection
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
     * @return Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty('guardian');
    }

    /**
     * @param Guardian $guardian
     */
    public function setGuardian(Guardian $guardian = null)
    {
        $this->setProperty('guardian', $guardian);
    }

    /**
     * @return GuardianRelationshipType
     */
    public function getGuardianRelationshipType()
    {
        return $this->getProperty('guardianRelationshipType');
    }

    /**
     * @param GuardianRelationshipType $guardianRelationshipType
     */
    public function setGuardianRelationshipType(GuardianRelationshipType $guardianRelationshipType = null)
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
    public function setIsLegalGuardian($isLegalGuardian = null)
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
    public function setIsPrimaryGuardian($isPrimaryGuardian = null)
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
    public function setIsAuthorizedToCollect($isAuthorizedToCollect = null)
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
    public function setEmergencyContactPriority($emergencyContactPriority = null)
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
    public function setUnsubscribedFromComms($unsubscribedFromComms = null)
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
    public function setGuardianUserAuthorized($guardianUserAuthorized = null)
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
    public function setAccessNotes($accessNotes = null)
    {
        $this->setProperty('accessNotes', $accessNotes);
    }
}
