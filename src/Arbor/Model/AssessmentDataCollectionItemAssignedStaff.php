<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AssessmentDataCollectionItemAssignedStaff extends ModelBase
{
    const ASSESSMENT_DATA_COLLECTION_ITEM = 'assessmentDataCollectionItem';

    const ASSIGNED_STAFF = 'assignedStaff';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM_ASSIGNED_STAFF;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionItemAssignedStaff[] | Collection
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

        $query->setResourceType(ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM_ASSIGNED_STAFF);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AssessmentDataCollectionItemAssignedStaff
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM_ASSIGNED_STAFF, $id);
    }

    /**
     * @return AssessmentDataCollectionItem
     */
    public function getAssessmentDataCollectionItem()
    {
        return $this->getProperty('assessmentDataCollectionItem');
    }

    /**
     * @param AssessmentDataCollectionItem $assessmentDataCollectionItem
     */
    public function setAssessmentDataCollectionItem(AssessmentDataCollectionItem $assessmentDataCollectionItem = null)
    {
        $this->setProperty('assessmentDataCollectionItem', $assessmentDataCollectionItem);
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
}
