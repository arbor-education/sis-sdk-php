<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ReportCardBatchProgressAssessment extends ModelBase
{
    const REPORT_CARD_BATCH = 'reportCardBatch';

    const ORDER = 'order';

    const ASSESSMENT = 'assessment';

    const DISPLAY_GRADE_SET = 'displayGradeSet';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    protected $_resourceType = ResourceType::REPORT_CARD_BATCH_PROGRESS_ASSESSMENT;

    /**
     * @param Query $query
     * @return ReportCardBatchProgressAssessment[] | Collection
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

        $query->setResourceType(ResourceType::REPORT_CARD_BATCH_PROGRESS_ASSESSMENT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ReportCardBatchProgressAssessment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::REPORT_CARD_BATCH_PROGRESS_ASSESSMENT, $id);
    }

    /**
     * @return NewReportCardBatch
     */
    public function getReportCardBatch()
    {
        return $this->getProperty('reportCardBatch');
    }

    /**
     * @param NewReportCardBatch $reportCardBatch
     */
    public function setReportCardBatch(NewReportCardBatch $reportCardBatch = null)
    {
        $this->setProperty('reportCardBatch', $reportCardBatch);
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
    public function setOrder($order = null)
    {
        $this->setProperty('order', $order);
    }

    /**
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty('assessment');
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty('assessment', $assessment);
    }

    /**
     * @return GradeSet
     */
    public function getDisplayGradeSet()
    {
        return $this->getProperty('displayGradeSet');
    }

    /**
     * @param GradeSet $displayGradeSet
     */
    public function setDisplayGradeSet(GradeSet $displayGradeSet = null)
    {
        $this->setProperty('displayGradeSet', $displayGradeSet);
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
