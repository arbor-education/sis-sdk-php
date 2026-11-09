<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AdmissionApplication extends ModelBase
{
    public const ADMISSION_APPLICANT = 'admissionApplicant';

    public const PREVIOUS_EDUCATIONAL_INSTITUTION = 'previousEducationalInstitution';

    public const EXPECTED_ACADEMIC_LEVEL = 'expectedAcademicLevel';

    public const APPLICATION_DATE = 'applicationDate';

    public const APPLICATION_REFERENCE_NUMBER = 'applicationReferenceNumber';

    public const CURRENT_ADMISSION_CYCLE = 'currentAdmissionCycle';

    public const CURRENT_APPLICATION_STAGE = 'currentApplicationStage';

    public const ADMISSION_CYCLE_GROUP = 'admissionCycleGroup';

    public const ADMISSION_CYCLE_CATEGORY = 'admissionCycleCategory';

    public const DISPLAY_ORDER = 'displayOrder';

    protected $_resourceType = ResourceType::ADMISSION_APPLICATION;

    /**
     * @param Query $query
     * @return AdmissionApplication[] | Collection
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

        $query->setResourceType(ResourceType::ADMISSION_APPLICATION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdmissionApplication
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ADMISSION_APPLICATION, $id);
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
     * @return \Arbor\Model\EducationalInstitution
     */
    public function getPreviousEducationalInstitution()
    {
        return $this->getProperty('previousEducationalInstitution');
    }

    /**
     * @param \Arbor\Model\EducationalInstitution $previousEducationalInstitution
     */
    public function setPreviousEducationalInstitution(\Arbor\Model\EducationalInstitution $previousEducationalInstitution = null)
    {
        $this->setProperty('previousEducationalInstitution', $previousEducationalInstitution);
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
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->getProperty('applicationDate');
    }

    /**
     * @param \DateTime $applicationDate
     */
    public function setApplicationDate(\DateTime $applicationDate = null)
    {
        $this->setProperty('applicationDate', $applicationDate);
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
     * @return \Arbor\Model\AdmissionCycle
     */
    public function getCurrentAdmissionCycle()
    {
        return $this->getProperty('currentAdmissionCycle');
    }

    /**
     * @param \Arbor\Model\AdmissionCycle $currentAdmissionCycle
     */
    public function setCurrentAdmissionCycle(\Arbor\Model\AdmissionCycle $currentAdmissionCycle = null)
    {
        $this->setProperty('currentAdmissionCycle', $currentAdmissionCycle);
    }

    /**
     * @return string
     */
    public function getCurrentApplicationStage()
    {
        return $this->getProperty('currentApplicationStage');
    }

    /**
     * @param string $currentApplicationStage
     */
    public function setCurrentApplicationStage(string $currentApplicationStage = null)
    {
        $this->setProperty('currentApplicationStage', $currentApplicationStage);
    }

    /**
     * @return \Arbor\Model\AdmissionCycleGroup
     */
    public function getAdmissionCycleGroup()
    {
        return $this->getProperty('admissionCycleGroup');
    }

    /**
     * @param \Arbor\Model\AdmissionCycleGroup $admissionCycleGroup
     */
    public function setAdmissionCycleGroup(\Arbor\Model\AdmissionCycleGroup $admissionCycleGroup = null)
    {
        $this->setProperty('admissionCycleGroup', $admissionCycleGroup);
    }

    /**
     * @return \Arbor\Model\AdmissionCycleCategory
     */
    public function getAdmissionCycleCategory()
    {
        return $this->getProperty('admissionCycleCategory');
    }

    /**
     * @param \Arbor\Model\AdmissionCycleCategory $admissionCycleCategory
     */
    public function setAdmissionCycleCategory(\Arbor\Model\AdmissionCycleCategory $admissionCycleCategory = null)
    {
        $this->setProperty('admissionCycleCategory', $admissionCycleCategory);
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->getProperty('displayOrder');
    }

    /**
     * @param int $displayOrder
     */
    public function setDisplayOrder(int $displayOrder = null)
    {
        $this->setProperty('displayOrder', $displayOrder);
    }
}
