<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionApplicantGuardian extends ModelBase
{
    public const ADMISSION_APPLICANT = 'admissionApplicant';

    public const ADMISSION_GUARDIAN = 'admissionGuardian';

    public const GUARDIAN_RELATIONSHIP_TYPE = 'guardianRelationshipType';

    public const IS_PRIMARY_GUARDIAN = 'isPrimaryGuardian';

    protected $_resourceType = ResourceType::ADMISSION_APPLICANT_GUARDIAN;

    /**
     * @param Query $query
     * @return AdmissionApplicantGuardian[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_APPLICANT_GUARDIAN);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionApplicantGuardian
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_APPLICANT_GUARDIAN, $id);
    }

    /**
     * @return \Arbor\Model\AdmissionApplicant
     */
    public function getAdmissionApplicant()
    {
        return $this->getProperty('admissionApplicant');
    }

    /**
     * @param \Arbor\Model\AdmissionApplicant $admissionApplicant
     */
    public function setAdmissionApplicant(\Arbor\Model\AdmissionApplicant $admissionApplicant = null)
    {
        $this->setProperty('admissionApplicant', $admissionApplicant);
    }

    /**
     * @return \Arbor\Model\AdmissionGuardian
     */
    public function getAdmissionGuardian()
    {
        return $this->getProperty('admissionGuardian');
    }

    /**
     * @param \Arbor\Model\AdmissionGuardian $admissionGuardian
     */
    public function setAdmissionGuardian(\Arbor\Model\AdmissionGuardian $admissionGuardian = null)
    {
        $this->setProperty('admissionGuardian', $admissionGuardian);
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
}
