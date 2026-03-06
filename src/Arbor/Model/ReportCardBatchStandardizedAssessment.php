<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReportCardBatchStandardizedAssessment extends ModelBase
{
    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const STANDARDIZED_ASSESSMENT = 'standardizedAssessment';

    public const ORDER = 'order';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT;

    /**
     * @param Query $query
     * @return ReportCardBatchStandardizedAssessment[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportCardBatchStandardizedAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT, $id);
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
     * @return \Arbor\Model\StandardizedAssessment
     */
    public function getStandardizedAssessment()
    {
        return $this->getProperty('standardizedAssessment');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessment $standardizedAssessment
     */
    public function setStandardizedAssessment(\Arbor\Model\StandardizedAssessment $standardizedAssessment = null)
    {
        $this->setProperty('standardizedAssessment', $standardizedAssessment);
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
}
