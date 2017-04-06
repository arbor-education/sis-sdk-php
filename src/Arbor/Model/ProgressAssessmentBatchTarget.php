<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProgressAssessmentBatch;

class ProgressAssessmentBatchTarget extends ModelBase
{

    const PROGRESS_ASSESSMENT_BATCH = 'progressAssessmentBatch';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressAssessmentBatchTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("ProgressAssessmentBatchTarget");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressAssessmentBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET, $id);
    }

    /**
     * @return ProgressAssessmentBatch
     */
    public function getProgressAssessmentBatch()
    {
        return $this->getProperty("progressAssessmentBatch");
    }

    /**
     * @param ProgressAssessmentBatch $progressAssessmentBatch
     */
    public function setProgressAssessmentBatch(ProgressAssessmentBatch $progressAssessmentBatch = null)
    {
        $this->setProperty("progressAssessmentBatch", $progressAssessmentBatch);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty("target");
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(ModelBase $target = null)
    {
        $this->setProperty("target", $target);
    }


}
