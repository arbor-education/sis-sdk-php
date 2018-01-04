<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollectionPolicyAdHocAssessmentRule extends ModelBase
{
    const ASSESSMENT_DATA_COLLECTION_POLICY = 'assessmentDataCollectionPolicy';

    const INPUT_STAFF_TYPE = 'inputStaffType';

    const LEVEL_ONE_APPROVAL_STAFF_TYPE = 'levelOneApprovalStaffType';

    const LEVEL_TWO_APPROVAL_STAFF_TYPE = 'levelTwoApprovalStaffType';

    const COLLECT_CURRENT_MARK = 'collectCurrentMark';

    const COLLECT_COMMENT = 'collectComment';

    const AD_HOC_ASSESSMENT = 'adHocAssessment';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_AD_HOC_ASSESSMENT_RULE;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionPolicyAdHocAssessmentRule[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_AD_HOC_ASSESSMENT_RULE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollectionPolicyAdHocAssessmentRule
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_AD_HOC_ASSESSMENT_RULE, $id);
    }

    /**
     * @return AssessmentDataCollectionPolicy
     */
    public function getAssessmentDataCollectionPolicy()
    {
        return $this->getProperty('assessmentDataCollectionPolicy');
    }

    /**
     * @param AssessmentDataCollectionPolicy $assessmentDataCollectionPolicy
     */
    public function setAssessmentDataCollectionPolicy(AssessmentDataCollectionPolicy $assessmentDataCollectionPolicy = null)
    {
        $this->setProperty('assessmentDataCollectionPolicy', $assessmentDataCollectionPolicy);
    }

    /**
     * @return string
     */
    public function getInputStaffType()
    {
        return $this->getProperty('inputStaffType');
    }

    /**
     * @param string $inputStaffType
     */
    public function setInputStaffType($inputStaffType = null)
    {
        $this->setProperty('inputStaffType', $inputStaffType);
    }

    /**
     * @return string
     */
    public function getLevelOneApprovalStaffType()
    {
        return $this->getProperty('levelOneApprovalStaffType');
    }

    /**
     * @param string $levelOneApprovalStaffType
     */
    public function setLevelOneApprovalStaffType($levelOneApprovalStaffType = null)
    {
        $this->setProperty('levelOneApprovalStaffType', $levelOneApprovalStaffType);
    }

    /**
     * @return string
     */
    public function getLevelTwoApprovalStaffType()
    {
        return $this->getProperty('levelTwoApprovalStaffType');
    }

    /**
     * @param string $levelTwoApprovalStaffType
     */
    public function setLevelTwoApprovalStaffType($levelTwoApprovalStaffType = null)
    {
        $this->setProperty('levelTwoApprovalStaffType', $levelTwoApprovalStaffType);
    }

    /**
     * @return bool
     */
    public function getCollectCurrentMark()
    {
        return $this->getProperty('collectCurrentMark');
    }

    /**
     * @param bool $collectCurrentMark
     */
    public function setCollectCurrentMark($collectCurrentMark = null)
    {
        $this->setProperty('collectCurrentMark', $collectCurrentMark);
    }

    /**
     * @return bool
     */
    public function getCollectComment()
    {
        return $this->getProperty('collectComment');
    }

    /**
     * @param bool $collectComment
     */
    public function setCollectComment($collectComment = null)
    {
        $this->setProperty('collectComment', $collectComment);
    }

    /**
     * @return AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty('adHocAssessment');
    }

    /**
     * @param AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty('adHocAssessment', $adHocAssessment);
    }
}
