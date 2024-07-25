<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class StandardizedAssessmentBatchTarget extends ModelBase
{
    public const STANDARDIZED_ASSESSMENT_BATCH = 'standardizedAssessmentBatch';

    public const TARGET = 'target';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET;

    /**
     * @param Query $query
     * @return StandardizedAssessmentBatchTarget[] | Collection
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
     * @return \Arbor\Model\StandardizedAssessmentBatch
     */
    public function getStandardizedAssessmentBatch()
    {
        return $this->getProperty('standardizedAssessmentBatch');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentBatch $standardizedAssessmentBatch
     */
    public function setStandardizedAssessmentBatch(\Arbor\Model\StandardizedAssessmentBatch $standardizedAssessmentBatch = null)
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
    public function setTarget(\ModelBase $target = null)
    {
        $this->setProperty('target', $target);
    }
}
