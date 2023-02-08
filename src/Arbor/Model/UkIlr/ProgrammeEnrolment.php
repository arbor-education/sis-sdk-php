<?php
namespace Arbor\Model\UkIlr;

use Arbor\Resource\UkIlr\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\Collection;
use Arbor\Model\Exception;
use Arbor\Model\ModelBase;

class ProgrammeEnrolment extends ModelBase
{

    const PROGRAMME_TYPE = 'programmeType';

    const FUNDING_MODEL = 'fundingModel';

    const PRIOR_LEARNING_FUNDING_ADJUSTMENT = 'priorLearningFundingAdjustment';

    const OTHER_FUNDING_ADJUSTMENT = 'otherFundingAdjustment';

    const OUTCOME = 'outcome';

    const EMPLOYMENT_OUTCOME = 'employmentOutcome';

    const SOURCE_OF_FUNDING = 'sourceOfFunding';

    const FULL_FUNDING_INDICATOR = 'fullFundingIndicator';

    const WORKPLACE_LEARNING = 'workplaceLearning';

    const EEF_ELIGIBILITY = 'eefEligibility';

    const LDM_CODE1 = 'ldmCode1';

    const LDM_CODE2 = 'ldmCode2';

    const LDM_CODE3 = 'ldmCode3';

    const LDM_CODE4 = 'ldmCode4';

    const SPECIAL_PROJECT_CODE = 'specialProjectCode';

    const WORK_PROGRAMME_PARTICIPATION = 'workProgrammeParticipation';

    const PERCENTAGE_ONLINE_DELIVERY = 'percentageOnlineDelivery';

    const COMMUNITY_LEARNING_PROVISION_TYPE = 'communityLearningProvisionType';

    const SW_SUP_AIM_ID = 'swSupAimId';

    const OUTCOME_GRADE = 'outcomeGrade';

    const DELIVERY_ORGANISATION = 'deliveryOrganisation';

    protected $_resourceType = ResourceType::UK_ILR_PROGRAMME_ENROLMENT;

    /**
     * @param Query $query
     * @return ProgrammeEnrolment[] | Collection
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

        $query->setResourceType(ResourceType::UK_ILR_PROGRAMME_ENROLMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgrammeEnrolment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::UK_ILR_PROGRAMME_ENROLMENT, $id);
    }

    /**
     * @return string
     */
    public function getProgrammeType()
    {
        return $this->getProperty('programmeType');
    }

    /**
     * @param string $programmeType
     */
    public function setProgrammeType($programmeType = null)
    {
        $this->setProperty('programmeType', $programmeType);
    }

    /**
     * @return string
     */
    public function getFundingModel()
    {
        return $this->getProperty('fundingModel');
    }

    /**
     * @param string $fundingModel
     */
    public function setFundingModel($fundingModel = null)
    {
        $this->setProperty('fundingModel', $fundingModel);
    }

    /**
     * @return int
     */
    public function getPriorLearningFundingAdjustment()
    {
        return $this->getProperty('priorLearningFundingAdjustment');
    }

    /**
     * @param int $priorLearningFundingAdjustment
     */
    public function setPriorLearningFundingAdjustment($priorLearningFundingAdjustment = null)
    {
        $this->setProperty('priorLearningFundingAdjustment', $priorLearningFundingAdjustment);
    }

    /**
     * @return int
     */
    public function getOtherFundingAdjustment()
    {
        return $this->getProperty('otherFundingAdjustment');
    }

    /**
     * @param int $otherFundingAdjustment
     */
    public function setOtherFundingAdjustment($otherFundingAdjustment = null)
    {
        $this->setProperty('otherFundingAdjustment', $otherFundingAdjustment);
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->getProperty('outcome');
    }

    /**
     * @param string $outcome
     */
    public function setOutcome($outcome = null)
    {
        $this->setProperty('outcome', $outcome);
    }

    /**
     * @return string
     */
    public function getEmploymentOutcome()
    {
        return $this->getProperty('employmentOutcome');
    }

    /**
     * @param string $employmentOutcome
     */
    public function setEmploymentOutcome($employmentOutcome = null)
    {
        $this->setProperty('employmentOutcome', $employmentOutcome);
    }

    /**
     * @return string
     */
    public function getSourceOfFunding()
    {
        return $this->getProperty('sourceOfFunding');
    }

    /**
     * @param string $sourceOfFunding
     */
    public function setSourceOfFunding($sourceOfFunding = null)
    {
        $this->setProperty('sourceOfFunding', $sourceOfFunding);
    }

    /**
     * @return string
     */
    public function getFullFundingIndicator()
    {
        return $this->getProperty('fullFundingIndicator');
    }

    /**
     * @param string $fullFundingIndicator
     */
    public function setFullFundingIndicator($fullFundingIndicator = null)
    {
        $this->setProperty('fullFundingIndicator', $fullFundingIndicator);
    }

    /**
     * @return bool
     */
    public function getWorkplaceLearning()
    {
        return $this->getProperty('workplaceLearning');
    }

    /**
     * @param bool $workplaceLearning
     */
    public function setWorkplaceLearning($workplaceLearning = null)
    {
        $this->setProperty('workplaceLearning', $workplaceLearning);
    }

    /**
     * @return string
     */
    public function getEefEligibility()
    {
        return $this->getProperty('eefEligibility');
    }

    /**
     * @param string $eefEligibility
     */
    public function setEefEligibility($eefEligibility = null)
    {
        $this->setProperty('eefEligibility', $eefEligibility);
    }

    /**
     * @return string
     */
    public function getLdmCode1()
    {
        return $this->getProperty('ldmCode1');
    }

    /**
     * @param string $ldmCode1
     */
    public function setLdmCode1($ldmCode1 = null)
    {
        $this->setProperty('ldmCode1', $ldmCode1);
    }

    /**
     * @return string
     */
    public function getLdmCode2()
    {
        return $this->getProperty('ldmCode2');
    }

    /**
     * @param string $ldmCode2
     */
    public function setLdmCode2($ldmCode2 = null)
    {
        $this->setProperty('ldmCode2', $ldmCode2);
    }

    /**
     * @return string
     */
    public function getLdmCode3()
    {
        return $this->getProperty('ldmCode3');
    }

    /**
     * @param string $ldmCode3
     */
    public function setLdmCode3($ldmCode3 = null)
    {
        $this->setProperty('ldmCode3', $ldmCode3);
    }

    /**
     * @return string
     */
    public function getLdmCode4()
    {
        return $this->getProperty('ldmCode4');
    }

    /**
     * @param string $ldmCode4
     */
    public function setLdmCode4($ldmCode4 = null)
    {
        $this->setProperty('ldmCode4', $ldmCode4);
    }

    /**
     * @return string
     */
    public function getSpecialProjectCode()
    {
        return $this->getProperty('specialProjectCode');
    }

    /**
     * @param string $specialProjectCode
     */
    public function setSpecialProjectCode($specialProjectCode = null)
    {
        $this->setProperty('specialProjectCode', $specialProjectCode);
    }

    /**
     * @return bool
     */
    public function getWorkProgrammeParticipation()
    {
        return $this->getProperty('workProgrammeParticipation');
    }

    /**
     * @param bool $workProgrammeParticipation
     */
    public function setWorkProgrammeParticipation($workProgrammeParticipation = null)
    {
        $this->setProperty('workProgrammeParticipation', $workProgrammeParticipation);
    }

    /**
     * @return string
     */
    public function getPercentageOnlineDelivery()
    {
        return $this->getProperty('percentageOnlineDelivery');
    }

    /**
     * @param string $percentageOnlineDelivery
     */
    public function setPercentageOnlineDelivery($percentageOnlineDelivery = null)
    {
        $this->setProperty('percentageOnlineDelivery', $percentageOnlineDelivery);
    }

    /**
     * @return string
     */
    public function getCommunityLearningProvisionType()
    {
        return $this->getProperty('communityLearningProvisionType');
    }

    /**
     * @param string $communityLearningProvisionType
     */
    public function setCommunityLearningProvisionType($communityLearningProvisionType = null)
    {
        $this->setProperty('communityLearningProvisionType', $communityLearningProvisionType);
    }

    /**
     * @return string
     */
    public function getSwSupAimId()
    {
        return $this->getProperty('swSupAimId');
    }

    /**
     * @param string $swSupAimId
     */
    public function setSwSupAimId($swSupAimId = null)
    {
        $this->setProperty('swSupAimId', $swSupAimId);
    }

    /**
     * @return string
     */
    public function getOutcomeGrade()
    {
        return $this->getProperty('outcomeGrade');
    }

    /**
     * @param string $outcomeGrade
     */
    public function setOutcomeGrade($outcomeGrade = null)
    {
        $this->setProperty('outcomeGrade', $outcomeGrade);
    }

    /**
     * @return ModelBase
     */
    public function getDeliveryOrganisation()
    {
        return $this->getProperty('deliveryOrganisation');
    }

    /**
     * @param ModelBase $deliveryOrganisation
     */
    public function setDeliveryOrganisation(ModelBase $deliveryOrganisation = null)
    {
        $this->setProperty('deliveryOrganisation', $deliveryOrganisation);
    }


}
