<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class MarkApproval extends ModelBase
{
    public const MARK = 'mark';

    public const APPROVAL_LEVEL = 'approvalLevel';

    public const ASSESSMENT_DATA_COLLECTION_ITEM = 'assessmentDataCollectionItem';

    protected $_resourceType = ResourceType::MARK_APPROVAL;

    /**
     * @param Query $query
     * @return MarkApproval[] | Collection
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

        $query->setResourceType(ResourceType::MARK_APPROVAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return MarkApproval
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::MARK_APPROVAL, $id);
    }

    /**
     * @return ModelBase
     */
    public function getMark()
    {
        return $this->getProperty('mark');
    }

    /**
     * @param ModelBase $mark
     */
    public function setMark(\ModelBase $mark = null)
    {
        $this->setProperty('mark', $mark);
    }

    /**
     * @return string
     */
    public function getApprovalLevel()
    {
        return $this->getProperty('approvalLevel');
    }

    /**
     * @param string $approvalLevel
     */
    public function setApprovalLevel(string $approvalLevel = null)
    {
        $this->setProperty('approvalLevel', $approvalLevel);
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
}
