<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ProgressAssessmentBatchTarget extends ModelBase
{
    const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET;

    /**
     * @param Query $query
     * @return ProgressAssessmentBatchTarget[] | Collection
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

        $query->setResourceType(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ProgressAssessmentBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET, $id);
    }

    /**
     * @return ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty('progressAssessmentBatch');
    }

    /**
     * @param ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty('progressAssessmentBatch', $progressAssessmentBatch);
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
}
