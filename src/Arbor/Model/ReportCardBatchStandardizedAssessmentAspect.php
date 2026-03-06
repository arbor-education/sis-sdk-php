<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class ReportCardBatchStandardizedAssessmentAspect extends ModelBase
{
    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const STANDARDIZED_ASSESSMENT_ASPECT = 'standardizedAssessmentAspect';

    public const ORDER = 'order';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT_ASPECT;

    /**
     * @param Query $query
     * @return ReportCardBatchStandardizedAssessmentAspect[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT_ASPECT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportCardBatchStandardizedAssessmentAspect
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_STANDARDIZED_ASSESSMENT_ASPECT, $id);
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
     * @return \Arbor\Model\StandardizedAssessmentAspect
     */
    public function getStandardizedAssessmentAspect()
    {
        return $this->getProperty('standardizedAssessmentAspect');
    }

    /**
     * @param \Arbor\Model\StandardizedAssessmentAspect $standardizedAssessmentAspect
     */
    public function setStandardizedAssessmentAspect(\Arbor\Model\StandardizedAssessmentAspect $standardizedAssessmentAspect = null)
    {
        $this->setProperty('standardizedAssessmentAspect', $standardizedAssessmentAspect);
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
