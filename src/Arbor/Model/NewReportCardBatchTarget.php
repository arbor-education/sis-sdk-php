<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewReportCardBatch;

class NewReportCardBatchTarget extends ModelBase
{
    const REPORT_CARD_BATCH = 'reportCardBatch';

    const TARGET = 'target';

    const REPORTS_GENERATING = 'reportsGenerating';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_BATCH_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return NewReportCardBatchTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("NewReportCardBatchTarget");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return NewReportCardBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_BATCH_TARGET, $id);
    }

    /**
     * @return NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty("reportCardBatch");
    }

    /**
     * @param NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty("reportCardBatch", $reportCardBatch);
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

    /**
     * @return bool
     */
    public function getReportsGenerating()
    {
        return $this->getProperty("reportsGenerating");
    }

    /**
     * @param bool $reportsGenerating
     */
    public function setReportsGenerating($reportsGenerating = null)
    {
        $this->setProperty("reportsGenerating", $reportsGenerating);
    }
}
