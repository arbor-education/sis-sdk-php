<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Guardian;
use \Arbor\Model\GuardianRelationshipType;

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
     * @param \Arbor\Query\Query $query
     * @return StudentGuardianRelationship[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentGuardianRelationship");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentGuardianRelationship
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_GUARDIAN_RELATIONSHIP, $id);
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
     * @return Guardian
     */
    public function getGuardian()
    {
        return $this->getProperty("guardian");
    }

    /**
     * @param Guardian $guardian
     */
    public function setGuardian(Guardian $guardian = null)
    {
        $this->setProperty("guardian", $guardian);
    }

    /**
     * @return GuardianRelationshipType
     */
    public function getGuardianRelationshipType()
    {
        return $this->getProperty("guardianRelationshipType");
    }

    /**
     * @param GuardianRelationshipType $guardianRelationshipType
     */
    public function setGuardianRelationshipType(GuardianRelationshipType $guardianRelationshipType = null)
    {
        $this->setProperty("guardianRelationshipType", $guardianRelationshipType);
    }

    /**
     * @return bool
     */
    public function getIsLegalGuardian()
    {
        return $this->getProperty("isLegalGuardian");
    }

    /**
     * @param bool $isLegalGuardian
     */
    public function setIsLegalGuardian($isLegalGuardian = null)
    {
        $this->setProperty("isLegalGuardian", $isLegalGuardian);
    }

    /**
     * @return bool
     */
    public function getIsPrimaryGuardian()
    {
        return $this->getProperty("isPrimaryGuardian");
    }

    /**
     * @param bool $isPrimaryGuardian
     */
    public function setIsPrimaryGuardian($isPrimaryGuardian = null)
    {
        $this->setProperty("isPrimaryGuardian", $isPrimaryGuardian);
    }

    /**
     * @return bool
     */
    public function getIsAuthorizedToCollect()
    {
        return $this->getProperty("isAuthorizedToCollect");
    }

    /**
     * @param bool $isAuthorizedToCollect
     */
    public function setIsAuthorizedToCollect($isAuthorizedToCollect = null)
    {
        $this->setProperty("isAuthorizedToCollect", $isAuthorizedToCollect);
    }

    /**
     * @return int
     */
    public function getEmergencyContactPriority()
    {
        return $this->getProperty("emergencyContactPriority");
    }

    /**
     * @param int $emergencyContactPriority
     */
    public function setEmergencyContactPriority($emergencyContactPriority = null)
    {
        $this->setProperty("emergencyContactPriority", $emergencyContactPriority);
    }

    /**
     * @return bool
     */
    public function getUnsubscribedFromComms()
    {
        return $this->getProperty("unsubscribedFromComms");
    }

    /**
     * @param bool $unsubscribedFromComms
     */
    public function setUnsubscribedFromComms($unsubscribedFromComms = null)
    {
        $this->setProperty("unsubscribedFromComms", $unsubscribedFromComms);
    }

    /**
     * @return bool
     */
    public function getGuardianUserAuthorized()
    {
        return $this->getProperty("guardianUserAuthorized");
    }

    /**
     * @param bool $guardianUserAuthorized
     */
    public function setGuardianUserAuthorized($guardianUserAuthorized = null)
    {
        $this->setProperty("guardianUserAuthorized", $guardianUserAuthorized);
    }

    /**
     * @return string
     */
    public function getAccessNotes()
    {
        return $this->getProperty("accessNotes");
    }

    /**
     * @param string $accessNotes
     */
    public function setAccessNotes($accessNotes = null)
    {
        $this->setProperty("accessNotes", $accessNotes);
    }


}
