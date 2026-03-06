<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class AssessmentDataCollectionItemAssignedStaff extends ModelBase
{
    public const ASSESSMENT_DATA_COLLECTION_ITEM = 'assessmentDataCollectionItem';

    public const ASSIGNED_STAFF = 'assignedStaff';

    protected $_resourceType = ResourceType::ASSESSMENT_DATA_COLLECTION_ITEM_ASSIGNED_STAFF;

    /**
     * @param Query $query
     * @return AssessmentDataCollectionItemAssignedStaff[] | Collection
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
     * @return \Arbor\Model\AssessmentDataCollectionItem
     */
    public function getAssessmentDataCollectionItem()
    {
        return $this->getProperty('assessmentDataCollectionItem');
    }

    /**
     * @param \Arbor\Model\AssessmentDataCollectionItem $assessmentDataCollectionItem
     */
    public function setAssessmentDataCollectionItem(\Arbor\Model\AssessmentDataCollectionItem $assessmentDataCollectionItem = null)
    {
        $this->setProperty('assessmentDataCollectionItem', $assessmentDataCollectionItem);
    }

    /**
     * @return \Arbor\Model\Staff
     */
    public function getAssignedStaff()
    {
        return $this->getProperty('assignedStaff');
    }

    /**
     * @param \Arbor\Model\Staff $assignedStaff
     */
    public function setAssignedStaff(\Arbor\Model\Staff $assignedStaff = null)
    {
        $this->setProperty('assignedStaff', $assignedStaff);
    }
}
