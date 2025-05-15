<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\ModelBase;

class NewReportCardBatchTarget extends ModelBase
{
    public const REPORT_CARD_BATCH = 'reportCardBatch';

    public const TARGET = 'target';

    public const REPORTS_GENERATING = 'reportsGenerating';

    protected $_resourceType = ResourceType::NEW_REPORT_CARD_BATCH_TARGET;

    /**
     * @param Query $query
     * @return NewReportCardBatchTarget[] | Collection
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

        $query->setResourceType(ResourceType::NEW_REPORT_CARD_BATCH_TARGET);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return NewReportCardBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::NEW_REPORT_CARD_BATCH_TARGET, $id);
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

    /**
     * @return bool
     */
    public function getReportsGenerating()
    {
        return $this->getProperty('reportsGenerating');
    }

    /**
     * @param bool $reportsGenerating
     */
    public function setReportsGenerating(bool $reportsGenerating = null)
    {
        $this->setProperty('reportsGenerating', $reportsGenerating);
    }
}
