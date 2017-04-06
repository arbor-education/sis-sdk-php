<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomReport;

class CustomReportScope extends ModelBase
{

    const CUSTOM_REPORT = 'customReport';

    const BASE_ENTITY_TYPE = 'baseEntityType';

    const REFERENCE_DATE_RANGE_START_DATE = 'referenceDateRangeStartDate';

    const REFERENCE_DATE_RANGE_END_DATE = 'referenceDateRangeEndDate';

    const REFERENCE_DATE_RANGE_PERIOD_TYPE = 'referenceDateRangePeriodType';

    const REFERENCE_DATE_RANGE_PERIOD_COUNT = 'referenceDateRangePeriodCount';

    const REFERENCE_DATE_RANGE_PERIOD_OFFSET = 'referenceDateRangePeriodOffset';

    protected $_resourceType = ResourceType::CUSTOM_REPORT_SCOPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomReportScope[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CustomReportScope");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomReportScope
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CUSTOM_REPORT_SCOPE, $id);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty("customReport");
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty("customReport", $customReport);
    }

    /**
     * @return int
     */
    public function getBaseEntityType()
    {
        return $this->getProperty("baseEntityType");
    }

    /**
     * @param int $baseEntityType
     */
    public function setBaseEntityType($baseEntityType = null)
    {
        $this->setProperty("baseEntityType", $baseEntityType);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDateRangeStartDate()
    {
        return $this->getProperty("referenceDateRangeStartDate");
    }

    /**
     * @param \DateTime $referenceDateRangeStartDate
     */
    public function setReferenceDateRangeStartDate(\DateTime $referenceDateRangeStartDate = null)
    {
        $this->setProperty("referenceDateRangeStartDate", $referenceDateRangeStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDateRangeEndDate()
    {
        return $this->getProperty("referenceDateRangeEndDate");
    }

    /**
     * @param \DateTime $referenceDateRangeEndDate
     */
    public function setReferenceDateRangeEndDate(\DateTime $referenceDateRangeEndDate = null)
    {
        $this->setProperty("referenceDateRangeEndDate", $referenceDateRangeEndDate);
    }

    /**
     * @return string
     */
    public function getReferenceDateRangePeriodType()
    {
        return $this->getProperty("referenceDateRangePeriodType");
    }

    /**
     * @param string $referenceDateRangePeriodType
     */
    public function setReferenceDateRangePeriodType($referenceDateRangePeriodType = null)
    {
        $this->setProperty("referenceDateRangePeriodType", $referenceDateRangePeriodType);
    }

    /**
     * @return int
     */
    public function getReferenceDateRangePeriodCount()
    {
        return $this->getProperty("referenceDateRangePeriodCount");
    }

    /**
     * @param int $referenceDateRangePeriodCount
     */
    public function setReferenceDateRangePeriodCount($referenceDateRangePeriodCount = null)
    {
        $this->setProperty("referenceDateRangePeriodCount", $referenceDateRangePeriodCount);
    }

    /**
     * @return int
     */
    public function getReferenceDateRangePeriodOffset()
    {
        return $this->getProperty("referenceDateRangePeriodOffset");
    }

    /**
     * @param int $referenceDateRangePeriodOffset
     */
    public function setReferenceDateRangePeriodOffset($referenceDateRangePeriodOffset = null)
    {
        $this->setProperty("referenceDateRangePeriodOffset", $referenceDateRangePeriodOffset);
    }


}
