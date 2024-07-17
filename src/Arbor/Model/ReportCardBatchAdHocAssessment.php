<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReportCardBatchAdHocAssessment extends ModelBase
{
    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const AD_HOC_ASSESSMENT = 'adHocAssessment';

    public const ORDER = 'order';

    public const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_AD_HOC_ASSESSMENT;

    /**
     * @param Query $query
     * @return ReportCardBatchAdHocAssessment[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_CARD_BATCH_AD_HOC_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportCardBatchAdHocAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_AD_HOC_ASSESSMENT, $id);
    }

    /**
     * @return \Arbor\Model\NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty('reportCardBatch');
    }

    /**
     * @param \Arbor\Model\NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(\Arbor\Model\NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty('reportCardBatch', $reportCardBatch);
    }

    /**
     * @return \Arbor\Model\AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty('adHocAssessment');
    }

    /**
     * @param \Arbor\Model\AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(\Arbor\Model\AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty('adHocAssessment', $adHocAssessment);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->getProperty('order');
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order = null)
    {
        $this->setProperty('order', $order);
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
