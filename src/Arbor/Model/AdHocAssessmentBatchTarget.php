<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class AdHocAssessmentBatchTarget extends ModelBase
{
    const AD_HOC_ASSESSMENT_BATCH = 'adHocAssessmentBatch';

    const TARGET = 'target';

    const MARKING_STARTED_DATETIME = 'markingStartedDatetime';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    protected $_resourceType = ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET;

    /**
     * @param Query $query
     * @return AdHocAssessmentBatchTarget[] | Collection
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

        $query->setResourceType(ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return AdHocAssessmentBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::AD_HOC_ASSESSMENT_BATCH_TARGET, $id);
    }

    /**
     * @return AdHocAssessmentBatch
     */
    public function getAdHocAssessmentBatch()
    {
        return $this->getProperty('adHocAssessmentBatch');
    }

    /**
     * @param AdHocAssessmentBatch $adHocAssessmentBatch
     */
    public function setAdHocAssessmentBatch(AdHocAssessmentBatch $adHocAssessmentBatch = null)
    {
        $this->setProperty('adHocAssessmentBatch', $adHocAssessmentBatch);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty('target');
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(ModelBase $target = null)
    {
        $this->setProperty('target', $target);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingStartedDatetime()
    {
        return $this->getProperty('markingStartedDatetime');
    }

    /**
     * @param \DateTime $markingStartedDatetime
     */
    public function setMarkingStartedDatetime(\DateTime $markingStartedDatetime = null)
    {
        $this->setProperty('markingStartedDatetime', $markingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty('markingCompletedDatetime');
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty('markingCompletedDatetime', $markingCompletedDatetime);
    }

}
