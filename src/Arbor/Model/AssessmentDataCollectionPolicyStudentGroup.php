<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollectionPolicyStudentGroup extends ModelBase
{

    const ASSESSMENT_DATA_COLLECTION_POLICY = 'assessmentDataCollectionPolicy';

    const STUDENT_GROUP = 'studentGroup';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_STUDENT_GROUP;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionPolicyStudentGroup[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_STUDENT_GROUP);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollectionPolicyStudentGroup
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION_POLICY_STUDENT_GROUP, $id);
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
     * @return ModelBase
     */
    public function getStudentGroup()
    {
        return $this->getProperty('studentGroup');
    }

    /**
     * @param ModelBase $studentGroup
     */
    public function setStudentGroup(ModelBase $studentGroup = null)
    {
        $this->setProperty('studentGroup', $studentGroup);
    }


}
