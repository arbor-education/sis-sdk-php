<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollectionItem extends ModelBase
{
    const ASSESSMENT_DATA_COLLECTION = 'assessmentDataCollection';

    const ASSESSMENT_ENTITY = 'assessmentEntity';

    const STUDENT_GROUP = 'studentGroup';

    const COLLECTION_TYPE = 'collectionType';

    const ASSIGNED_STAFF = 'assignedStaff';

    const DEADLINE_DATE = 'deadlineDate';

    const COMPLETION_NUMERATOR = 'completionNumerator';

    const COMPLETION_DENOMINATOR = 'completionDenominator';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionItem[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollectionItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM, $id);
    }

    /**
     * @return AssessmentDataCollection
     */
    public function getAssessmentDataCollection()
    {
        return $this->getProperty('assessmentDataCollection');
    }

    /**
     * @param AssessmentDataCollection $assessmentDataCollection
     */
    public function setAssessmentDataCollection(AssessmentDataCollection $assessmentDataCollection = null)
    {
        $this->setProperty('assessmentDataCollection', $assessmentDataCollection);
    }

    /**
     * @return ModelBase
     */
    public function getAssessmentEntity()
    {
        return $this->getProperty('assessmentEntity');
    }

    /**
     * @param ModelBase $assessmentEntity
     */
    public function setAssessmentEntity(ModelBase $assessmentEntity = null)
    {
        $this->setProperty('assessmentEntity', $assessmentEntity);
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

    /**
     * @return string
     */
    public function getCollectionType()
    {
        return $this->getProperty('collectionType');
    }

    /**
     * @param string $collectionType
     */
    public function setCollectionType($collectionType = null)
    {
        $this->setProperty('collectionType', $collectionType);
    }

    /**
     * @return Staff
     */
    public function getAssignedStaff()
    {
        return $this->getProperty('assignedStaff');
    }

    /**
     * @param Staff $assignedStaff
     */
    public function setAssignedStaff(Staff $assignedStaff = null)
    {
        $this->setProperty('assignedStaff', $assignedStaff);
    }

    /**
     * @return \DateTime
     */
    public function getDeadlineDate()
    {
        return $this->getProperty('deadlineDate');
    }

    /**
     * @param \DateTime $deadlineDate
     */
    public function setDeadlineDate(\DateTime $deadlineDate = null)
    {
        $this->setProperty('deadlineDate', $deadlineDate);
    }

    /**
     * @return int
     */
    public function getCompletionNumerator()
    {
        return $this->getProperty('completionNumerator');
    }

    /**
     * @param int $completionNumerator
     */
    public function setCompletionNumerator($completionNumerator = null)
    {
        $this->setProperty('completionNumerator', $completionNumerator);
    }

    /**
     * @return int
     */
    public function getCompletionDenominator()
    {
        return $this->getProperty('completionDenominator');
    }

    /**
     * @param int $completionDenominator
     */
    public function setCompletionDenominator($completionDenominator = null)
    {
        $this->setProperty('completionDenominator', $completionDenominator);
    }

}
