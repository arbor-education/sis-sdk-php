<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\NewReportCardBatch;
use \Arbor\Model\Assessment;

class ReportCardBatchProgressAssessment extends ModelBase
{
    const REPORT_CARD_BATCH = 'reportCardBatch';

    const ASSESSMENT = 'assessment';

    const ORDER = 'order';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_PROGRESS_ASSESSMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return ReportCardBatchProgressAssessment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ReportCardBatchProgressAssessment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ReportCardBatchProgressAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_PROGRESS_ASSESSMENT, $id);
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
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty("order");
    }

    /**
     * @param int $order
     */
    public function setOrder($order = null)
    {
        $this->setProperty("order", $order);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty("markingCompletedDatetime");
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty("markingCompletedDatetime", $markingCompletedDatetime);
    }
}
