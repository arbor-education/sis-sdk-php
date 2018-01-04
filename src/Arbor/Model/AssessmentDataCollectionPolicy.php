<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollectionPolicy extends ModelBase
{
    const POLICY_NAME = 'policyName';

    const ACADEMIC_YEAR = 'academicYear';

    const INPUT_DEADLINE_OFFSET_DAYS = 'inputDeadlineOffsetDays';

    const LEVEL_ONE_APPROVAL_DEADLINE_OFFSET_DAYS = 'levelOneApprovalDeadlineOffsetDays';

    const LEVEL_TWO_APPROVAL_DEADLINE_OFFSET_DAYS = 'levelTwoApprovalDeadlineOffsetDays';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionPolicy[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollectionPolicy
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY, $id);
    }

    /**
     * @return string
     */
    public function getPolicyName()
    {
        return $this->getProperty('policyName');
    }

    /**
     * @param string $policyName
     */
    public function setPolicyName($policyName = null)
    {
        $this->setProperty('policyName', $policyName);
    }

    /**
     * @return AcademicYear
     */
    public function getAcademicYear()
    {
        return $this->getProperty('academicYear');
    }

    /**
     * @param AcademicYear $academicYear
     */
    public function setAcademicYear(AcademicYear $academicYear = null)
    {
        $this->setProperty('academicYear', $academicYear);
    }

    /**
     * @return int
     */
    public function getInputDeadlineOffsetDays()
    {
        return $this->getProperty('inputDeadlineOffsetDays');
    }

    /**
     * @param int $inputDeadlineOffsetDays
     */
    public function setInputDeadlineOffsetDays($inputDeadlineOffsetDays = null)
    {
        $this->setProperty('inputDeadlineOffsetDays', $inputDeadlineOffsetDays);
    }

    /**
     * @return int
     */
    public function getLevelOneApprovalDeadlineOffsetDays()
    {
        return $this->getProperty('levelOneApprovalDeadlineOffsetDays');
    }

    /**
     * @param int $levelOneApprovalDeadlineOffsetDays
     */
    public function setLevelOneApprovalDeadlineOffsetDays($levelOneApprovalDeadlineOffsetDays = null)
    {
        $this->setProperty('levelOneApprovalDeadlineOffsetDays', $levelOneApprovalDeadlineOffsetDays);
    }

    /**
     * @return int
     */
    public function getLevelTwoApprovalDeadlineOffsetDays()
    {
        return $this->getProperty('levelTwoApprovalDeadlineOffsetDays');
    }

    /**
     * @param int $levelTwoApprovalDeadlineOffsetDays
     */
    public function setLevelTwoApprovalDeadlineOffsetDays($levelTwoApprovalDeadlineOffsetDays = null)
    {
        $this->setProperty('levelTwoApprovalDeadlineOffsetDays', $levelTwoApprovalDeadlineOffsetDays);
    }
}
