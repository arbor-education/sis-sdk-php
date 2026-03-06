<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentDataCollectionItem extends ModelBase
{
    public const ASSESSMENT_DATA_COLLECTION = 'assessmentDataCollection';

    public const ASSESSMENT_ENTITY = 'assessmentEntity';

    public const STUDENT_GROUP = 'studentGroup';

    public const COLLECTION_TYPE = 'collectionType';

    public const DEADLINE_DATE = 'deadlineDate';

    public const COMPLETION_NUMERATOR = 'completionNumerator';

    public const COMPLETION_DENOMINATOR = 'completionDenominator';

    public const DERIVE_ASSIGNED_STAFF = 'deriveAssignedStaff';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionItem[] | Collection
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
     * @return \Arbor\Model\AssessmentDataCollection
     */
    public function getAssessmentDataCollection()
    {
        return $this->getProperty('assessmentDataCollection');
    }

    /**
     * @param \Arbor\Model\AssessmentDataCollection $assessmentDataCollection
     */
    public function setAssessmentDataCollection(\Arbor\Model\AssessmentDataCollection $assessmentDataCollection = null)
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
    public function setAssessmentEntity(\ModelBase $assessmentEntity = null)
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
    public function setStudentGroup(\ModelBase $studentGroup = null)
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
    public function setCollectionType(string $collectionType = null)
    {
        $this->setProperty('collectionType', $collectionType);
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
    public function setCompletionNumerator(int $completionNumerator = null)
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
    public function setCompletionDenominator(int $completionDenominator = null)
    {
        $this->setProperty('completionDenominator', $completionDenominator);
    }

    /**
     * @return bool
     */
    public function getDeriveAssignedStaff()
    {
        return $this->getProperty('deriveAssignedStaff');
    }

    /**
     * @param bool $deriveAssignedStaff
     */
    public function setDeriveAssignedStaff(bool $deriveAssignedStaff = null)
    {
        $this->setProperty('deriveAssignedStaff', $deriveAssignedStaff);
    }
}
