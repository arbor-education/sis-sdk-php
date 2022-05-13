<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StandardizedAssessmentBatchTarget extends ModelBase
{
    const STANDARDIZED_ASSESSMENT_BATCH = 'standardizedAssessmentBatch';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET;

    /**
     * @param Query $query
     * @return StandardizedAssessmentBatchTarget[] | Collection
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

        $query->setResourceType(ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StandardizedAssessmentBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET, $id);
    }

    /**
     * @return StandardizedAssessmentBatch
     */
    public function getStandardizedAssessmentBatch()
    {
        return $this->getProperty('standardizedAssessmentBatch');
    }

    /**
     * @param StandardizedAssessmentBatch $standardizedAssessmentBatch
     */
    public function setStandardizedAssessmentBatch(StandardizedAssessmentBatch $standardizedAssessmentBatch = null)
    {
        $this->setProperty('standardizedAssessmentBatch', $standardizedAssessmentBatch);
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
