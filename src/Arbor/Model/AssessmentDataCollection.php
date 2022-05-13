<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollection extends ModelBase
{
    const ASSESSMENT_DATA_COLLECTION_POLICY = 'assessmentDataCollectionPolicy';

    const DEADLINE_DATE = 'deadlineDate';

    const COLLECTION_RANGE_START_DATE = 'collectionRangeStartDate';

    const COLLECTION_RANGE_END_DATE = 'collectionRangeEndDate';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION;

    /**
     * @param Query $query
     * @return AssessmentDataCollection[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollection
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION, $id);
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
     * @return \DateTime
     */
    public function getCollectionRangeStartDate()
    {
        return $this->getProperty('collectionRangeStartDate');
    }

    /**
     * @param \DateTime $collectionRangeStartDate
     */
    public function setCollectionRangeStartDate(\DateTime $collectionRangeStartDate = null)
    {
        $this->setProperty('collectionRangeStartDate', $collectionRangeStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getCollectionRangeEndDate()
    {
        return $this->getProperty('collectionRangeEndDate');
    }

    /**
     * @param \DateTime $collectionRangeEndDate
     */
    public function setCollectionRangeEndDate(\DateTime $collectionRangeEndDate = null)
    {
        $this->setProperty('collectionRangeEndDate', $collectionRangeEndDate);
    }

}
